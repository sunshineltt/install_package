<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 


<div class="swpzbox">
        <div class="swpz">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=171fffe5fb7d7c0f2484060a2f7a166f&action=lists&num=25&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <div class="swpz-top">
                <!-- <img src="<?php echo IMG_PATH;?>yisha/<?php echo $catid;?>.png}" />  -->
                  <img  src="<?php echo $r['thumb'];?>" alt="">
             </div><!-- swpz-top结束 -->
         <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="swpz-bottom">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=171fffe5fb7d7c0f2484060a2f7a166f&action=lists&num=25&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="swpz-bottom-left">
                    <h2><?php echo $r['title'];?></h2>
                </div><!-- swpz-bottom-left结束 -->
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="swpz-bottom-right">
                    首页 > <?php echo catpos($CATEGORYS[$catid][parentid]);?>
                </div><!-- swpz-bottom-right结束 -->
            
            </div><!-- swpz-bottom结束 -->
        </div><!-- swpz结束 -->
    </div><!-- swpzbox结束 -->
     



<?php include template("content","footer"); ?>