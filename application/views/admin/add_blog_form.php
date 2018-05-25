
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Blog</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal"  enctype='multipart/form-data' action="<?php echo base_url();?>super_admin/save_blog" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" err="Enter valide category name...."  name="blog_title" required >
                            
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select Category-------</option>
                                    <?php
                                        foreach($all_published_category as $v_category)
                                        {
                                    
                                    ?>
                                    <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                                        <?php } ?>
                               </select>
                        </div>
                    </div>  
<!--                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea name="blog_short_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea name="blog_long_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>-->
                    
                    
                      <div class="control-group">
                        <label class="control-label" for="typeahead">Image </label>
                        <div class="controls">
                            <input type="file" class="span6" id="fileInput"  name="image">
                            
                        </div>
                    </div> 
					 <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea name="blog_short_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea name="blog_long_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Publication Status (<span style="color:red">*</span>)</label>
                        <div class="controls">
                            <select name="publication_status" err="Please Select Publication Status" required exclude=" ">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->