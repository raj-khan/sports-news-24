<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;">Insert Sub Category</h2>
                <?php if ($this->session->flashdata('msg')): ?>
                    <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;"><?php echo $this->session->flashdata('msg'); ?></h2>
                <?php endif; ?>

            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url('user-admin/save-sub-category'); ?>">
                <div class="col-md-8 col-md-offset-2">


                    <div class="form-group">
                        <label>  Select Main Category : </label>
                        <select name="main_category_id" class="form-control select2" style="width: 100%;">
                            <?php $category_info = $this->Category_model->show_publish_category(); ?>
                            <?php foreach ($category_info as  $category): ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach;  ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>  Name : </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter  Title.....">
                    </div>
                    <label> Description : </label>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea name="description" class="wysihtml5" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Publication Status : </label>
                        <select name="status" class="form-control select2" style="width: 100%;">
                            <option value="1">PUBLISH</option>
                            <option value="0">UN-PUBLISH</option>
                        </select>
                    </div>

                    <input class="btn btn-success" type="submit" name="submit" value="Submitt" style="float: right">
                </div>

            </form>

        </div>
        <!-- /.row -->


    </div>

</div>