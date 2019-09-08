<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">
        <div class="row">

            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;"> News View</h2>
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
                                <th>Sl</th>
                                <th>Cat</th>
                                <th>Title</th>
                                <th>News</th>
                                <th>Meta Keywords</th>
                                <th>Meta Description</th>
                                <th>Img</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>



                            <?php $allNews = $this->News_model->view_news_info(); ?>

                            <?php $i = 1;
                            foreach ($allNews as $news):
                                $mainCategories = $this->News_model->find_sub_category($news->category_id);
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $mainCategories->name; ?></td>
                                    <td><?php echo $news->title; ?></td>
                                    <td><?php
                                        $substr = $news->news;
                                        $length = strlen($substr);
                                        if ($length >40) {
                                            $substr = substr($substr, 0, 39);
                                            echo $substr . '&nbsp; <span class=text-danger>.....</span>';
                                        } else {
                                            echo $substr;
                                        }
                                        ?></td>
                                    <td><?php
                                        $substr = $news->meta_keywords;
                                        $length = strlen($substr);
                                        if ($length >40) {
                                            $substr = substr($substr, 0, 39);
                                            echo $substr . '&nbsp; <span class=text-danger>.....</span>';
                                        } else {
                                            echo $substr;
                                        }
                                        ?></td>
                                    <td><?php
                                        $substr = $news->meta_description;
                                        $length = strlen($substr);
                                        if ($length >40) {
                                            $substr = substr($substr, 0, 39);
                                            echo $substr . '&nbsp; <span class=text-danger>.....</span>';
                                        } else {
                                            echo $substr;
                                        }
                                        ?></td>

                                    <td>
                                        <img style="width:50px; height:auto;" src="<?php  echo base_url()?>upload/news/<?php echo $news->img; ?>">
                                    </td>
                                    <td>
                                        <?php if ($news->status == 1): ?>
                                            <a href="<?php echo base_url(); ?>user-admin/un-publish-news/<?php echo $news->id; ?>">
                                                <button type="button" class="btn btn-danger">Inactive</button>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>user-admin/publish-news/<?php echo $news->id; ?>">
                                                <button type="button" class="btn btn-success">Active</button>
                                            </a>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="<?php echo base_url(); ?>user-admin/update-news/<?php echo $news->id; ?>">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>user-admin/delete-news/<?php echo $news->id; ?>">
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