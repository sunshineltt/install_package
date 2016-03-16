<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> 


	<div class="footbox">
		<div class="foot">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=637e353218f1931134d30bba8f0ca3b3&action=category&catid=53&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'53','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				 <a href=""><?php echo $r['catname'];?></a>
				<span class="shu">|</span>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 		 	<span class="banquan">版权所有：太原市晋康源生物工程有限公司   全国免费咨询电话：400-186-0777 400-187-0777</span> 
			 
 		</div><!-- foot结束 -->
	</div><!-- footbox结束 -->




</body>
</html>