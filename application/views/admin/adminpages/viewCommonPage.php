<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">
        <div class="row">

            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;"> Common Page  View</h2>
            </div>

            <!---=======================Data Table=====================------>

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Page Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $pageContents = $this->CommonPageModel->viewCommonPage();
                            $i = 1;
                            foreach ($pageContents as  $content ):
                                $mainCategories = $this->CommonPageModel->findCommonPageCategory($content->category_id);
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $mainCategories->name; ?></td>
                                    <td><?php echo $content->page_content; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>user-admin/update-common-page/<?php echo $content->id;?>"><button type="button" class="btn btn-success">Edit</button> </a>
                                        <a href="<?php echo base_url(); ?>user-admin/delete-common-page-content/<?php echo $content->id;?>"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" >Delete</button></a>
                                    </td>
                                </tr>
                            <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->


    </div>

</div>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>