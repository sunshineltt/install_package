<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 

<div class="DoreDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=171fffe5fb7d7c0f2484060a2f7a166f&action=lists&num=25&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $a) { ?>
        <div class="box-tian">
            <p><a href="">本系列所有产品</a></p>
                  <img src="<?php echo $a['thumb'];?>"  alt="">
         </div> <!-- box-tian结束 -->
        <div class="box-tian2">
            <div class="box-tian2top">
                <div class="box-tian2-left">
                    <img src="<?php echo $a['cp'];?>" alt="">
                     <!-- <img src="<?php echo IMG_PATH;?>yisha/3cxph/22.png" alt=""> -->
                </div><!-- box-tian2-left结束 -->
                <div class="box-tian2-right">
                    <img src="<?php echo IMG_PATH;?>yisha/3cxph/font.jpg" alt="">
                    <div class="keybox">
                        <a href="">平皱</a>
                        <a href="">紧致</a>
                    </div>

                    <p><?php echo $a['content'];?></p>
                    <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/gm_pic.gif" alt=""></a>
                </div><!-- box-tian2-right结束 -->
            </div><!-- box-tian2-top结束 -->
            <div class="box-tian2-middle">
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/1申请试用.jpg" alt=""></a>
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/2产品介绍.jpg" alt=""></a>
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/3功效说明.jpg" alt=""></a>
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/4经典搭配.jpg" alt=""></a>
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/5明星搭配.jpg" alt=""></a>
                <a href=""><img src="<?php echo IMG_PATH;?>yisha/3cxph/6品质保障.jpg" alt=""></a>
            </div><!-- box-tian2-middle结束 -->
            <div class="infor">
                <div class="title one"></div><!-- title1结束 -->
                <p class="con">适用肤质：25岁以上任何肤质的成年女性，尤其对眼纹、眼袋、黑眼圈、眼角下垂者使用效果更佳</p>
                <div class="title two"></div><!-- title1结束 -->
                <p class="con" style="text-indent:2em;">肌致无痕眼部精华乳  15ml</p>
                <p style="text-indent:2em;">肌致眼部紧翘精华液   15ml</p>
                <p style="text-indent:2em;">肌致眼部紧翘修护精华霜   8g</p>
                <p style="text-indent:2em;">伊莎美尔紧翘抗皱养眼组的出现，让现代女性彻底摆脱了双眼衰老的禁锢，它集平皱、紧致、定型、新生功效于一体，同时提升眼周肌肤滑度、细度、紧度，抗衰精华0损失倾透，从根源处重塑细胞鲜活饱满，定型提拉松弛眼周，仿生分子钉牢牢塑紧肌肤不放松，持久对抗岁月侵袭。</p>
                <div class="title three"></div><!-- title1结束 -->
                <p class="con">这里加经典搭配</p>
                <div class="title four"></div><!-- title1结束 -->
                <p class="con">这里加明星推荐</p>
                <div class="title five"></div><!-- title1结束 -->
                <p class="con">这里加品质保障</p>
            </div><!-- infor结束 -->
        </div><!-- box-tian2结束 -->
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div><!-- DoreDiv结束 -->
    

<?php include template("content","footer"); ?>