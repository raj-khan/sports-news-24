<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;"> Update News</h2>
            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                  action="<?php echo base_url('user-admin/updated_news'); ?>">
                <div class="col-md-8 col-md-offset-2">

                    <div class="form-group">
                        <label>News Category : </label>
                        <select name="category" class="form-control select2" style="width: 100%;">
                            <?php $category_name = $this->News_model->selected_news_category(); ?>
                            <?php foreach ($category_name as $category): ?>
                                <option value="<?php echo $category->id; ?>" <?php if ($news_info->category_id == $category->id) {
                                    echo "Selected";
                                } ?> > <?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Title : </label>
                        <input type="hidden" name="id" value="<?php echo $news_info->id; ?>" class="form-control">
                        <input type="text" name="title" value="<?php echo $news_info->title; ?>" class="form-control">
                    </div>

                    <label> News : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="news" class="wysihtml5" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $news_info->news; ?></textarea>

                        </div>
                    </div>


                    <label> Meta Keywords : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="meta_keywords" class="" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $news_info->meta_keywords; ?></textarea>

                        </div>
                    </div>


                    <label> Meta Description : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="meta_description" class="" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $news_info->meta_description; ?></textarea>

                        </div>
                    </div>



                    <div class="col-md-6 form-group">

                        <input type="hidden"   name="old"  value="<?php echo $news_info->img  ?>">

                        <input id="file-4" type="file" name="file" class="file" data-upload-url="#">
                    </div>
                    <div class="col-md-6" style="padding-bottom: 10px;">
                        <img src="<?php echo base_url();?>upload/news/<?php echo $news_info->img ?>" style="height: 280px; width: 347px;">
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