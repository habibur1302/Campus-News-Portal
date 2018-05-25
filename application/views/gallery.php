<?php
    foreach($all_published_image as $v_blog)
    {
?>
<div class="article">
    <p>
    <span style="font-size: 18px;padding: 10px"><?php echo $v_blog->blog_title;?></span>
    </p>
    <p class="infopost">Posted on <span class="date"><?php echo $v_blog->created_date_time;?></span> by <a href="#"><?php echo $v_blog->author_name;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span></span></a></p>
    <div class="clr"></div>
    <div class="img">
     
        
    </div>
    <div class="post_content">
       <p><span><img src="<?= base_url($v_blog->image)?>"></span></p>
        <p class="spec"><a href="<?php echo base_url()?>welcome/blog_details/<?php echo $v_blog->blog_id?>" class="rm">Read more &raquo;</a></p>
    </div>
    <div class="clr"></div>
</div>
    <?php } ?>
