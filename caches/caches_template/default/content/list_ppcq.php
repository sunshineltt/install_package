<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

 <div class="bigbox">
        <div class="huazhuang" style="background:#000">
 
        <div class="photo1"><a href="">
        	<img src="<?php echo IMG_PATH;?>yisha/7chuanqi/20.jpg"></a>
        </div>
        <div id="daohang">

            <div class="zhong">
                <a href="#kangshuai">抗衰传承</a>
                <a href="#gongsi">公司简介</a> 
                <a href="#dashi">大事记</a> 
                <a href="#pinpai">品牌荣誉</a>
            </div>
            <!-- <img src="<?php echo IMG_PATH;?>yisha/7chuanqi/8.png" alt=""> -->
        </div>
        <div class="kang" id="kangshuai">
            <div class="biaoti">
                <span id="kang1">抗衰传承</span><span id="kang2">About Isamell</span>
            </div>
            <div class="center1">  
            <div id="beitu">
                <div class="img" style="display:block"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/21.jpg"></div>
                <div class="img"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/26.jpg"></div>
                <div class="img"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/27.jpg"></div>
                <div class="img"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/28.jpg"></div>
                <div class="img"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/29.jpg"></div>
                <div class="img"><img src="<?php echo IMG_PATH;?>yisha/7chuanqi/30.jpg"></div>
            </div>
            </div>
            <div id="bei">
                <div class="guang" id="guang"><span>由来</span></div>
                <div class="guang guang1"><span>诞生</span></div>
                <div class="guang guang1"><span>创业</span></div>
                <div class="guang guang1"><span>成长</span></div>
                <div class="guang guang1"><span>今天</span></div>
                <div class="guang guang1"><span>未来</span></div>
            </div>
        </div>

        <div class="kang" id="gongsi">
            <span id="kang1">公司简介</span>
            <span id="kang2">aboutus</span>
            <div class="clear"></div>
            <div class="jianjie">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=37997ca7d3bc7f7cb013e44b31179537&action=lists&catid=%24catid&num=2&siteid=%24siteid&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                <div class="hang">
                	<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                	<span>2013.11.28</span>
                </div>




            <?php $n++;}unset($n); ?>
 			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               <!--  <div class="hang">
               	<a href="">公司简介</a>
               	<span>2013.11.28</span>
               </div> -->
                <div class="jian">
                    <img src="<?php echo IMG_PATH;?>yisha/7chuanqi/1.gif">
                    <img src="<?php echo IMG_PATH;?>yisha/7chuanqi/2.gif">
                </div>
            </div>       
        </div>


        <div class="kang" id="dashi">
            <span id="kang1">大事记</span>
            <span id="kang2">Isamell</span><br>
        </div>
        <div class="kang" id="pinpai">
            <span id="kang1">品牌荣誉</span>
            <span id="kang2">Honor</span>
            <div class="clear"></div>
            <div class="jianjie">
                <div class="hang"><a href="">品牌荣誉</a><span>2013.12.06</span></div>
                <div class="hang"><a href="">2011年3.15放心品牌奖牌</a><span>2013.06.05</span></div>
                <div class="jian">
                    <img src="<?php echo IMG_PATH;?>yisha/7chuanqi/1.gif">
                    <img src="<?php echo IMG_PATH;?>yisha/7chuanqi/2.gif">
                </div>
            </div>         
        </div>
    </div>



</div>


<?php include template("content","footer"); ?>