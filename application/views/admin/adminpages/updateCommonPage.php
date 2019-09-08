<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;"> Update Common Page Content</h2>
            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                  action="<?php echo base_url('user-admin/update-common-page'); ?>">
                <input type="hidden" name="id" value="<?php echo $contentInfo->id; ?>" class="form-control">
                <div class="col-md-8 col-md-offset-2">

                    <div class="form-group">
                        <label>Category : </label>
                        <select name="category" class="form-control select2" style="width: 100%;">
                            <?php $category_name = $this->CommonPageModel->selectedCommonPageCategory(); ?>
                            <?php foreach ($category_name as $category): ?>
                                <option value="<?php echo $category->id; ?>"
                                    <?php if ($contentInfo->category_id == $category->id) {
                                    echo "Selected";
                                } ?> > <?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <label> Page Content : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="content" class="wysihtml5" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $contentInfo->page_content; ?></textarea>

                        </div>
                    </div>

                    <input class="btn btn-success" type="submit" name="submit" value="Update" style="float: right">
                </div>

            </form>

        </div>
        <!-- /.row -->


    </div>

</div>