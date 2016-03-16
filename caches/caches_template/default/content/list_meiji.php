<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>



 <div class="boxbox" >
 <div class="boxbox-2">
         <div class="huli">
            <h1><?php echo $catname;?></h1>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9e1e0233290bce870354a1d92fa0940a&action=lists&catid=%24catid&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <ul>
                <li><img src="<?php echo $r['thumb'];?>"></li>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
            </ul>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         
            <div class="clear"></div>
             <div class="bufoot">
                <a href="">首页</a>
                 <a href="">上一页</a> 
                 <a href="">下一页</a>
                  <a href="">尾页</a>
                <span>页次：1/1页 8篇文章/页</span>
            </div> 
        </div>
    </div> 
 </div>






<?php include template("content","footer"); ?>