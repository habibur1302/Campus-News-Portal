
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">edit blog</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Blog</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" name="edit_blog" action="<?php echo base_url(); ?>super_admin/update_blog" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" required >Blog Title  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="blog_title" value="<?php echo $select_blog->blog_title;?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="blog_id" value="<?php echo $select_blog->blog_id;?>">

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Blog Category</label>
                        <div class="controls">
                            <select id="category_id" name="category_id"  exclude=" ">
                                <option value=" ">Select Blog Category</option>
                                <?php
                                foreach ($all_published_category as $v_category) {
                                    ?>
                                    <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Short description</label>
                        <div class="controls">
                            <textarea name="blog_short_description" class="cleditor" id="textarea2" rows="2"><?php echo $select_blog->blog_short_description;?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Long description</label>
                        <div class="controls">
                            <textarea name="blog_long_description" class="cleditor" id="textarea2" rows="4"><?php echo $select_blog->blog_long_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Publication Status</label>
                        <div class="controls">
                            <select name="publication_status" id="publication_status">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Blog</button>

                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
    document.forms['edit_blog'].elements['category_id'].value='<?php echo $select_blog->category_id?>';
document.forms['edit_blog'].elements['publication_status'].value='<?php echo $select_blog->publication_status?>';

</script>