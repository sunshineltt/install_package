<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


	<div class="wrapbox">
		<div class="wrap">
			<div class="shang">
				
			</div><!-- shang结束 -->
			<div class="con1 cccc">
				<a href="" name='con1-1' class="con1-1"></a>
			</div><!-- con1结束 -->
			<div class="con1">s
				<a href="" name="con1-2" class="con1-2"> </a>
			</div><!-- con1结束 -->
			<div class="con1">
				<a href="" name="con1-3" class="con1-3"> </a>
			</div><!-- con1结束 -->
			<div class="con1">
				<a href="" name="con1-4" class="con1-4"></a>
			</div><!-- con1结束 -->
			<div class="con1" >
				<a href="" name="con1-5" class="con1-5"></a>
			</div><!-- con1结束 -->
			<div class="con1">
				<a href="" name="con1-6" class="con1-6"></a>
			</div><!-- con1结束 -->
			<div class="con1">
				<a href="" name="con1-7" class="con1-7"></a>
			</div><!-- con1结束 -->
			<div class="con1">
				<a href="" name="con1-8" class="con1-8"></a>
			</div><!-- con1结束 -->
 		</div><!-- wrap结束 -->
 	</div><!-- wrapbox结束 -->
  
	<ul class="jump">
	    <li class="JUMP"><a href="#con1-1">1</a></li>
	    <li class="JUMP"><a href="#con1-2">2</a></li>
	    <li class="JUMP"><a href="#con1-3">3</a></li>
	    <li class="JUMP"><a href="#con1-4">4</a></li>
	    <li class="JUMP"><a href="#con1-5">5</a></li>
	    <li class="JUMP"><a href="#con1-6">6</a></li>
	    <li class="JUMP"><a href="#con1-7">7</a></li>
	    <li class="JUMP"><a href="#con1-8">8</a></li>
	</ul>
	

<script>
$(window).scroll(function(){
	var top=$(window).scrollTop();
	var height=$(".con1 a:eq(0)").height()
	for(var i=0;i<$(".JUMP").length;i++){
		if(top>height*i&&top<height*i+height){
			$(".JUMP:eq("+i+")").css({
				/*background:"url(<?php echo IMG_PATH;?>yisha/1index/12.png)",*/
				color:"#000",background:'url(<?php echo IMG_PATH;?>yisha/1index/12.png)'
 			})
		}else{
			$(".JUMP:eq("+i+")").css({"color":"rgba(255,255,255,0.6)","background":""})
		}
	}

})


</script>





<?php include template("content","footer"); ?>