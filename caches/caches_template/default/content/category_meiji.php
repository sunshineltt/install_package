<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>





<div class='boxbox'>	

 <div class="boxbox-2">
        <div class="meiji">
            <b>美肌专家</b>
            <b style="color:#603F1A">Experts & Videos</b>
            <div class="mei">
                <div class="ji"><span>岳霞(Daisy)</span>
                    <img src="<?php echo IMG_PATH;?>yisha/6list/54.jpg">
                    <p>英国reading大学进修美容技术专业 美国JAMES药物实验室生物美容专家 中国医疗美容促进会委员 中国美容领袖高峰论坛特邀嘉宾 《胶原蛋白与女人》作者</p>
                </div>
            </div>
            
            <div class="dajian">
                <img src="<?php echo IMG_PATH;?>yisha/6list/18.png">
                <img src="<?php echo IMG_PATH;?>yisha/6list/19.png" style="float:right">
            </div>
            <div class="meili">
                 <h1>魅力讲堂</h1>
               
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b85cabc7cd2b5d2c7b36270166fa9bd4&action=category&catid=%24catid&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dl>
                    <dt><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>">更多>></a></dt>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=89798af85756de549425656e32f77fae&action=lists&catid=%24r%5Bcatid%5D&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <dd><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></dd>
                    <!--<dd><a href="$v[url]}">夏日拯救晒伤肌肤的妙方</a></dd>-->
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

               



              <!--   <dl class="jin">
                  <dt>抗衰探秘<a href="">更多>></a></dt>
                  <dd>金木水火土五种体质，看透女人的…</dd>
                  <dd>对抗“往下”的岁月 紧致肌肤的1…</dd>
                  <dd>祛皱为什么一定要分龄？</dd>
              </dl> 
              <dl>
                  <dt>美容秘籍<a href="">更多>></a></dt>
                  <dd>为年轻加分</dd>
                  <dd>80后女孩正确的生活方式，可以让…</dd>
                  <dd>看韩国女明星怎么保养肌肤</dd>
                  <dd>变身白富美</dd>
                  <dd>正确护肤有妙法</dd>
                  <dd>暧昧女性一定要知道的按摩步骤</dd>
              </dl>
               -->



            </div>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>