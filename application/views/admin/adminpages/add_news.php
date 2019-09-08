<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;">Insert News</h2>
                <?php if ($this->session->flashdata('msg')): ?>
                    <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;"><?php echo $this->session->flashdata('msg'); ?></h2>
                <?php endif; ?>


            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url('user-admin/save-news'); ?>">
                <div class="col-md-8 col-md-offset-2">


                    <div class="form-group">
                        <label>  Select singers</label>
                        <select name="category" class="form-control select2" style="width: 100%;">
                            <?php $singers_category_info = $this->News_model->show_publish_news_category(); ?>
                            <?php foreach ($singers_category_info as  $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach;  ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>News Title</label>
                        <input type="text" name="title" class="form-control" placeholder="News  Title.....">
                    </div>


                    <label>News Details</label>
                    <div class="box">
                        <div class="box-body pad">
                            <textarea name="news" class="wysihtml5" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>



                    <label>Meta Keywords</label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="meta_keywords" class="" placeholder="Place Meta Keywords here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                        </div>
                    </div>



                    <label>Meta Description </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="meta_description" class="" placeholder="Place Meta Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                        </div>
                    </div>



                    <label>Image</label>
                    <div class="form-group">
                        <input id="file-4" type="file" name="file" class="file" data-upload-url="#">
                    </div>


                    <div class="form-group">
                        <label>Publication Status  </label>
                        <select name="status" class="form-control select2" style="width: 100%;">
                            <option value="1">PUBLISH</option>
                            <option value="0">UN-PUBLISH</option>
                        </select>
                    </div>

                    <input class="btn btn-success" type="submit" name="submit" value="Submit" style="float: right">
                </div>

            </form>

        </div>
        <!-- /.row -->


    </div>

</div>