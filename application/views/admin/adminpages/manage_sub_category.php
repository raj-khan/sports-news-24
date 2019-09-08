<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">
        <div class="row">

            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;">
                    Sub Category View</h2>
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
                                <th>Main Categories</th>
                                <th>Name</th>
                                <th>Category Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>



                            <?php $categories = $this->Category_model->manage_sub_category_info(); ?>

                            <?php $i = 1;
                            foreach ($categories as $category):
                                $mainCategories = $this->Category_model->find_category($category->main_category_id);
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $mainCategories->name; ?></td>
                                    <td><?php echo $category->name; ?></td>
                                    <td><?php echo $category->description; ?></td>
                                    <td>
                                        <?php if ($category->status == 1): ?>
                                            <a href="<?php echo base_url(); ?>user-admin/un-publish-sub-category/<?php echo $category->id; ?>">
                                                <button type="button" class="btn btn-danger">Inactive</button>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>user-admin/publish-sub-category/<?php echo $category->id; ?>">
                                                <button type="button" class="btn btn-success">Active</button>
                                            </a>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="<?php echo base_url(); ?>user-admin/update-sub-category/<?php echo $category->id; ?>">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>user-admin/delete-sub-category/<?php echo $category->id; ?>">
                                            <button type="button" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete?')">Delete
                                            </button>
                                        </a>
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