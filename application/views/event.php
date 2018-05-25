<?php
    foreach($all_published_event as $v_blog)
    {
?>
<div class="article">
    <p>
    <span style="font-size: 18px;padding: 20px"><?php echo $v_blog->event_name;?></span>
    </p>

    <p class="infopost">Posted on <span class="date"><?php echo $v_blog->created_date_time;?></span> by <a href="#"><?php echo $v_blog->author_name;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#"></a>, <a href="#"></a> <a href="#" class="com">Comments <span></span></a></p>
    <div class="clr"></div>
    <div class="img">
     
        
    </div>
   <div class="post_content">
      <p><span><?php echo $v_blog->event_description;?></span></p>
      <p><span><?php echo $v_blog->ticket_price;?></span></p>
<!--        <p class="spec"><a href="<?php echo base_url()?>welcome/event_details/<?php echo $v_blog->event_id?>" class="rm">Read more &raquo;</a></p>-->
    </div>

    <div class="clr"></div>
</div>
    <?php } ?>
<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>