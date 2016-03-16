<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 <div class="swpzbox-chanpin">
        <div class="swpz-chanpin">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=171fffe5fb7d7c0f2484060a2f7a166f&action=lists&num=25&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <div class="swpz-top-chanpin">
                  <img  src="<?php echo $r['banner'];?>" alt="">
             </div><!-- swpz-top结束 -->
             <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="swpz-bottom-chanpin">
                <div class="swpz-bottom-left-chanpin">
                    <h2>经典护眼</h2>
                </div><!-- swpz-bottom-left结束 -->

                <div class="swpz-bottom-right-chanpin">
                    <a>位置</a>
                </div><!-- swpz-bottom-right结束 -->

            </div><!-- swpz-bottom结束 -->
        </div><!-- swpz结束 -->
    </div><!-- swpzbox结束 -->

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=171fffe5fb7d7c0f2484060a2f7a166f&action=lists&num=25&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $a) { ?>
        <?php if($a[catid]==86) { ?>
    <div class="chanpinboxda">
        <div class="chanpinda">
            <?php $arr=std_class_object_to_array(json_decode($a[chanpin]))?>
             <?php $n=1;if(is_array($arr)) foreach($arr AS $c) { ?>
             <div class="chanpin1">
                    <img src="<?php echo $c['url'];?>" alt="">
           </div> <!-- chanpin1结束 -->
           <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </div><!-- chanpin结束 -->
    </div><!-- chanpinboxda结束 -->
        <?php } else { ?>
        <div class="chanpinbox">
         <div class="chanpin">
            <?php $arr=std_class_object_to_array(json_decode($a[chanpin]))?>
             <?php $n=1;if(is_array($arr)) foreach($arr AS $c) { ?>
             <div class="chanpin1">
                    <img src="<?php echo $c['url'];?>" alt="">
           </div> <!-- chanpin1结束 -->
        <?php } ?>
        <?php if($a[catid]==92) { ?>
             

        <?php } ?>

        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </div><!-- chanpin结束 -->
     </div><!-- chanpinboxda结束 -->


    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div><!-- chanpinbox结束 -->

<?php include template("content","footer"); ?>