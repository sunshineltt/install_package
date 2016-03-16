<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>
    <?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?>
            <?php echo $SEO['title'];?>
    <?php } ?>
    <?php echo $SEO['site_title'];?>
</title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">

<link href="<?php echo CSS_PATH;?>my_header.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_category.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_index.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_swpz.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_cxph.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>my_list.css" rel="stylesheet" type="text/css" />


 <script src="<?php echo JS_PATH;?>functions.js"></script>
<script src="<?php echo JS_PATH;?>animate.js"></script>
 <script type="text/javascript" src="<?php echo JS_PATH;?>jquery2.2.0.js"></script>

 
  <script type="text/javascript" src="<?php echo JS_PATH;?>my_header.js"></script>
 </head>
<body>
   
 
    <div class="topbox">
       <div class="top">
           <div class="top-up">
               <div class="top-up-left">
                  <a href="<?php echo siteurl($siteid);?>"> 
                    <img src="<?php echo IMG_PATH;?>yisha/logo.jpg" alt="" style="width:192px;height:107px;" >
                </a>
               </div><!-- top-up-left结束 -->
               <div class="top-up-right">
                   <a href="">登录</a>
                   <span style="color:#999">/</span>
                   <a href="">注册</a>
               </div><!-- top-up-right结束 -->
           </div><!-- top-up结束 -->




           <div class="top-bottom">
              <div class="top-bottom-left">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2693892c35a89956d5574d578ef8350&action=category&catid=0&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                <?php $a=0?>
                
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php $a++; ?>
                <?php if($a==1) { ?>
                    <li class="top-yiji"><!-- 一级菜单的显示 -->
                          <a href=""><?php echo $v['catname'];?></a>
                          <div class="erjibox">
                            <div class="erji-topbox">
                              <div class="erji-top">
                                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6d8b92fd9e1b7fcfc7850a643326cb83&action=category&catid=%24v%5Bcatid%5D&siteid=%24siteid&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'siteid'=>$siteid,'limit'=>'25',));}?>
                                  <?php $p=0?>
                                  <?php $n=1;if(is_array($data)) foreach($data AS $i) { ?> 
                                  <?php $p++; ?>
                                  <?php if($p==2) { ?>
                                <dl class="erji-xiala1">
                                       <dt><!-- 二级菜单的显示 -->
                                         <?php echo $i['catname'];?>
                                       </dt>
                                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15a4ce24341af7ed433d4b3bcab3a7a8&action=category&catid=%24i%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$i[catid],'limit'=>'25',));}?>
                                      <?php $num=0?>
                                      <?php $n=1;if(is_array($data)) foreach($data AS $j) { ?> 
                                      <?php $num++; ?>
                                        <dd id="zuozuo">
                                             <a  href="<?php echo $j['url'];?>"><?php echo $j['catname'];?></a>
                                         </dd>  
                                      <?php $n++;}unset($n); ?>
                                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                     
                                  </dl><!-- erji-xiala1结束 -->
                                  <?php } else { ?>
                                  <dl class="erji-xiala1">
                                       <dt><!-- 二级菜单的显示 -->
                                         <?php echo $i['catname'];?>
                                       </dt>
                                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15a4ce24341af7ed433d4b3bcab3a7a8&action=category&catid=%24i%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$i[catid],'limit'=>'25',));}?>
                                      <?php $num=0?>
                                      <?php $n=1;if(is_array($data)) foreach($data AS $j) { ?> 
                                      <?php $num++; ?>
                                        <dd id="youyou">
                                             <a  href="<?php echo $j['url'];?>"><?php echo $j['catname'];?></a>
                                         </dd>  
                                      <?php $n++;}unset($n); ?>
                                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                   </dl><!-- erji-xiala1结束 -->
                                  <?php } ?>
                                 <?php $n++;}unset($n); ?>

                                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                               </div><!-- erji-top结束 -->
                            </div><!-- erji-topbox结束 -->
                            <ul class="erji-bottom">
                                <li>
                                <a href="$r[url]"><img src="<?php echo IMG_PATH;?>yisha/1index/sw1.jpg" alt=""></a>
                              </li>
                              <li>
                                <a href="$r[url]"><img src="<?php echo IMG_PATH;?>yisha/1index/sw2.jpg" alt=""></a>
                              </li>
                              <li>
                                <a href="$r[url]"><img src="<?php echo IMG_PATH;?>yisha/1index/sw3.jpg" alt=""></a>
                              </li> 
                                
                            </ul><!-- erji-bottom结束 -->
                          </div><!-- erjibox结束 -->
                    </li>
                <?php } ?>

                <?php if($a==2) { ?>
                    <li  class="top-yiji">
                      <a href=""><?php echo $v['catname'];?></a>
                       <div class="erji-topbox1"> 
                          <div class="erji-top1">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e6cbc5a7c672fbe16fae524fe1f0d05b&action=category&catid=%24v%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'limit'=>'25',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $i) { ?>
                            <dl class="changxiao1">
                               <dt class="title" style="margin-bottom:0px"><?php echo $i['catname'];?></dt>
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6f7a015da94ed6438a41888d9b391dd&action=category&catid=%24i%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$i[catid],'limit'=>'25',));}?>
                               <?php $n=1;if(is_array($data)) foreach($data AS $j) { ?>
                               <dd>
                                <a href="<?php echo $j['url'];?>">
                                <ul class="yige">
                                   <li class="img-xiao">
                                    <img src="<?php echo $j['image'];?>" alt="">
                                  </li>
                                  <li>
                                    <span class="up"><?php echo $j['catname'];?></span>
                                    <span class="bottom"><?php echo $j['description'];?></span>
                                  </li>
                                </ul>
                                </a>
                              </dd>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </dl><!-- changxiao1结束 -->
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                           </div><!-- erji-top1结束 -->
                        </div><!-- erji-topbox1结束 -->
                       
                     </li>
                 <?php } ?> 
                 <?php if($a==3) { ?>
                  <li  class="top-yiji">
                  <a href=""><?php echo $v['catname'];?></a>
                  <div class="erji-topbox1"  style="left:-375px;">
                    <div class="erji-mxzy">
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b9f9ec8e85b706bcdb8ec94de3d4c41e&action=category&catid=%24v%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'limit'=>'25',));}?>
                      <?php $b=0?>
                      <?php $n=1;if(is_array($data)) foreach($data AS $i) { ?>
                      <?php $b++; ?>
                      <?php if($b==1) { ?>
                      <dl class="mxzy">
                       
                        <dt><?php echo $i['catname'];?></dt>
                        <dd>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6f7a015da94ed6438a41888d9b391dd&action=category&catid=%24i%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$i[catid],'limit'=>'25',));}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $j) { ?>
                           <ul>
                              <li>
                                <a href="<?php echo $k['url'];?>"><?php echo $j['catname'];?></a>
                              </li>
                            </ul>
                           <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </dd>

                       </dl>
                      <?php } ?>

                      <?php if($b==2) { ?>
                      <dl class="mxzy">
                        <dt><?php echo $i['catname'];?></dt>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6f7a015da94ed6438a41888d9b391dd&action=category&catid=%24i%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$i[catid],'limit'=>'25',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $m) { ?>
                            <dd><a href="<?php echo $m['url'];?>"><?php echo $m['catname'];?></a></dd>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       </dl>
                       <?php } ?>  
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div><!-- erji-mxzy结束 -->
                  </div><!-- erji-topbox1结束 -->
                  </li>
                 <?php } ?>



<!-- <?php echo $v['url'];?> -->
                 <?php if($a==4) { ?>
                 <li  class="top-yiji">
                  <a href=""><?php echo $v['catname'];?></a>
                  <div class="erji-topbox1"  style="left:-462px;">
                    <div class="erji-mxzy">
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b9f9ec8e85b706bcdb8ec94de3d4c41e&action=category&catid=%24v%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'limit'=>'25',));}?>
                       <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
                        <dl class="mxzy">
                         <dt><?php echo $c['catname'];?></dt>
                        <dd>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bebe0999998d0e01065a13fb3993ce8e&action=category&catid=%24c%5Bcatid%5D&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$c[catid],'limit'=>'25',));}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
                              <a href="<?php echo $d['url'];?>">
                               <img src="<?php echo $d['image'];?>" alt="" />
                             </a>
                            <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </dd>

                       </dl>
                      
                       
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div><!-- erji-mxzy结束 -->
                  </div><!-- erji-topbox1结束 -->
                  </li>
                 <?php } ?>
 
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             </div><!-- top-bottom-left结束 -->


              <div class="top-bottom-right">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($r[catid]>=48&&$r[catid]<=52) { ?>
                     <li>
                          <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                    </li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  
              </div><!-- top-bottom-right结束 -->
           </div><!-- top-bottom结束 -->
       </div><!-- top结束 -->
   </div><!-- topbox结束 -->


 

    
 