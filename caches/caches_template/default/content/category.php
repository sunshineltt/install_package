<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 <div class="dabox">
    

    <div class="box2">
        <ul class="left2">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d150e8a06751b9045c93581c28297328&action=category&num=3&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'limit'=>'3',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!-- 
        	<?php print_r($r)?> -->

            <li>
            	<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
        <div class="right2">
            <p><?php echo $r['catname'];?></p>
        </div><!-- right2结束 -->
        
    </div><!-- box结束 -->

</div><!-- dabox结束 -->
<?php include template("content","footer"); ?>