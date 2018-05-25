<?php
    foreach($blog_by_id as $v_blog)
    {
?>
<div class="article">
    <p>
    <span style="font-size: 18px;padding: 10px"><?php echo $v_blog->blog_title;?></span>
    </p>
    <p class="infopost">Posted on <span class="date"><?php echo $v_blog->created_date_time;?></span> by <a href="#"><?php echo $v_blog->author_name;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#"></a>, <a href="#"></a> <a href="#" class="com">Comments <span></span></a></p>
    <div class="clr"></div>
    <div class="img">
         <!--<img src="<?php echo $v_blog->image;?>">-->
    </div>
    <div class="post_content">
        
          <p><span><img src="<?= base_url($v_blog->image)?>"></span></p>
      <?php echo $v_blog->blog_short_description;?>
        <p class="spec"><a href="<?php echo base_url()?>welcome/blog_details/<?php echo $v_blog->blog_id?>" class="rm">Read more &raquo;</a></p>
    </div>
    <div class="clr"></div>
</div>
    <?php } ?>
<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>