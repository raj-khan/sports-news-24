<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;">
                    Update Category</h2>
            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                  action="<?php echo base_url('user-admin/updated-sub-category'); ?>">
                <div class="col-md-8 col-md-offset-2">


                    <div class="form-group">
                        <label>Main Category : </label>
                        <select name="main_category_id" class="form-control select2" style="width: 100%;">
                            <?php $category_name = $this->Category_model->selected_publish_category();

                            ?>
                            <?php foreach ($category_name as $category):

                                ?>

                                <option value="<?php echo $category_info->main_category_id; ?>" <?php if ($category_info->main_category_id == $category->id) {
                                    echo "Selected";
                                } ?> > <?php echo $category->name; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label> Name : </label>
                        <input type="hidden" name="id" value="<?php echo $category_info->id; ?>" class="form-control">
                        <input type="text" name="name" value="<?php echo $category_info->name; ?>" class="form-control">
                    </div>
                    <label> Description : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="description" class="wysihtml5" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $category_info->description; ?></textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Publication Status : </label>
                        <select name="status" class="form-control select2" style="width: 100%;">
                            <option value="1">PUBLISH</option>
                            <option value="0">UN-PUBLISH</option>
                        </select>
                    </div>

                    <input class="btn btn-success" type="submit" name="submit" value="Update" style="float: right">
                </div>

            </form>

        </div>
        <!-- /.row -->


    </div>

</div>