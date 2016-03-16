/*7.30  18:00*/
/*getClass 通过类名获取对象
*    classname    要获取的类名
*    [context]    指定的区间
*/
function getClass(classname,context){
    var obj=context||document
    if(obj.getElementsByClassName){
      return  obj.getElementsByClassName(classname);
    }else{
        var arr=[];
        var all=obj.getElementsByTagName("*");
        for(var i=0;i<all.length;i++){
           // alert("one two"+"==="+"one")
            if(checkClass(all[i].className,classname)){

                arr.push(all[i]);
            }
        }
        return arr;
    }
}

/*监测类名的函数
* class1  当前的类名
* class2  要找的类名
* */
function checkClass(class1,class2){
    var arr=class1.split(" ");
    for(var i=0;i<arr.length;i++){
        if(arr[i]==class2){
            return true;
        }
    }
    return false;
}

/*getName  通过name名字获取对象
     name   要找的name
     [context]  要找的范围
*
* */

function getName(name,context){
    var obj=context||document;
    if(obj.getElementsByClassName){
        return obj.getElementsByName(name);
    }else{
        var arr=[];
        var all=obj.getElementsByTagName("*");
        for(var i=0;i<all.length;i++){
            if(all[i].getAttribute("name")==name){
                arr.push(all[i]);
            }
        }
        return arr;

    }
}
/*
* $()  通过css选择器的格式获取指定的元素
 * selector   选择器
 * [context]    查找的范围
* */
 function $(selector,context){
    if(!selector){
        return;
    }
    var obj=context||document;
    if(typeof  selector=="string"){
        var selector=trim(selector);
        if(selector.charAt(0)=="#"){
            return document.getElementById(selector.substr(1));
        }else if(selector.charAt(0)=="."){
          return   getClass(selector.substr(1),obj);
        }else if(/^[a-z][a-z1-6]{0,10}$/.test(selector)){

          return obj.getElementsByTagName(selector);
        }else if(/^<[a-z][a-z1-6]{0,10}>$/.test(selector)){
          return document.createElement(selector.slice(1,-1));
        }


    }else if(typeof selector=="function"){
        addEvent(window,"load",selector)
    }
}


/*获取或者是设置纯文本*/
function getText(obj,val){
    if(obj.innerText==undefined){
        if(val==undefined) {
            return obj.textContent;
        }else{
            obj.textContent=val;
        }
    }else{
        if(val==undefined) {
            return obj.innerText;
        }else{
            obj.innerText=val;
        }
    }
}

/*获取样式的属性值*/
function  getStyle(obj,attr){
    if(obj.currentStyle){
        return obj.currentStyle[attr];
    }else{
        return window.getComputedStyle(obj,null)[attr];
    }
}


/*
trim  去掉空白
     str    要处理的字符串
*
*   [type]   l  去除左边的空白
*            r  去除右边的空白
*            b  去除两边的空白  默认
*            a  去除所有的空白
* */
function trim(str,type){
    var type=type||"b";
    if(type=="b"){
        return str.replace(/^\s*|\s*$/g,"");
    }else if(type=="l"){
        return str.replace(/^\s*/g,"");
    }else if(type=="r"){
        return str.replace(/\s*$/g,"");
    }else if(type=="a"){
        return str.replace(/\s*/g,"");
    }
}

/*获取所有的子元素
*  obj  父元素
*  [type]   false  排除所有的文本
*           true   不排除带有内容的文本
* */


function getChilds(obj,type){
   var type=type==undefined?false:type;
   var childs=obj.childNodes;
   var arr=[];

   for(var i=0;i<childs.length;i++){
       if(type===false) {
           if (!(childs[i].nodeType == 3 || childs[i].nodeType == 8)) {
               arr.push(childs[i])
           }
       }else if(type===true){
           if (!((childs[i].nodeType == 3&&trim(childs[i].nodeValue)=="") || childs[i].nodeType == 8)){
               arr.push(childs[i])
           }
       }
   }
    return arr;
}

/*获取第一个的子元素
 *  obj  父元素
 *  [type]   false  排除所有的文本
 *           true   不排除带有内容的文本
 * */

function getFirst(obj,type){
   return getChilds(obj,type)[0];
}
/*获取最后一个的子元素
 *  obj  父元素
 *  [type]   false  排除所有的文本
 *           true   不排除带有内容的文本
 * */

function getLast(obj,type){
     var childs=getChilds(obj,type);
    return childs[childs.length-1];
}

/*获取第n个的子元素
 *  obj  父元素
 *  [type]   false  排除所有的文本
 *           true   不排除带有内容的文本
 * */

function getNum(obj,n,type){
    var childs=getChilds(obj,type);
    return childs[n];
}

/*获得下个兄弟元素
  obj   当前的对象
 [type]   false  排除所有的文本
 *        true   不排除带有内容的文本
* */

function getNext(obj,type){
  var type=type==undefined?false:type;
  var next=obj.nextSibling;
  if(next==null){
      return false;
  }
    if(type===false) {
        while (next.nodeType == 3 || next.nodeType == 8) {
            next = next.nextSibling;
            if (next == null) {
                return false;
            }
        }
    }else if(type===true){
        while ((next.nodeType == 3&&trim(next.nodeValue)=="") || next.nodeType == 8) {
            next = next.nextSibling;
            if (next == null) {
                return false;
            }
        }
    }
    return next;

}

/*获得上一个兄弟元素
 obj   当前的对象
 [type]   false  排除所有的文本
 *        true   不排除带有内容的文本
 * */

function getUp(obj,type){
    var type=type==undefined?false:type;
    var up=obj.previousSibling;
    if(up==null){
        return false;
    }
    if(type===false) {
        while (up.nodeType == 3 || up.nodeType == 8) {
            up = up.previousSibling;
            if (up == null) {
                return false;
            }
        }
    }else if(type===true){
        while ((up.nodeType == 3&&trim(up.nodeValue)=="") || up.nodeType == 8) {
            up = up.previousSibling;
            if (up == null) {
                return false;
            }
        }
    }
    return up;

}

/*插入到某个元素的后面
* obj  要插入的元素
* obj1  某个元素
* */
function insertAfter(obj,obj1){
   var parent=obj1.parentNode;
   var next=getNext(obj1);
  if(!next){
    parent.appendChild(obj);
  }else{
      parent.insertBefore(obj,next);
  }
}
/*插入到某个元素的前面
 * obj  要插入的元素
 * obj1  某个元素
 * */

 function  insertBefore(obj,obj1){
    var parent=obj1.parentNode;
    parent.insertBefore(obj,obj1);
}

/*插入父元素的最后
  parent  父元素
 * obj  要插入的元素
 * */

function append(parent,obj){
   parent.appendChild(obj);
}

/*插入父元素的前面
   parent  父元素
 * obj  要插入的元素
 * */
function paddend(parent,obj){
   var first=getFirst(parent);
    if(!first){
       parent.appendChild(obj);
    }else{
       parent.insertBefore(obj,first);
    }
}

/*固定定位*/
function setFixed(obj,left,top){
    if(window.ActiveXObject&&!window.XMLHttpRequest){
       window.t=setInterval(function(){
           var scrollTop=document.documentElement.scrollTop;
           var scrollLeft=document.documentElement.scrollLeft;
           obj.style.position="absolute";
           obj.style.left=scrollLeft+left+"px";
           obj.style.top=scrollTop+top+"px";
       },50)
    }else{
        obj.style.position="fixed";
        obj.style.left=left+"px";
        obj.style.top=top+"px";
    }
}

/*绑定事件*/
function addEvent(obj,event,fn){
    if(obj.addEventListener){
        obj.addEventListener(event,fn,false)
    }else if(obj.attachEvent){
        obj.attachEvent("on"+event,fn)
    }
}

/*注销事件*/
function removeEvent(obj,event,fn){
    if(obj.addEventListener){
        obj.removeEventListener(event,fn,false)
    }else if(obj.attachEvent){
        obj.detachEvent("on"+event,fn)
    }
}

/*相对于body的实际距离*/
function offset(obj){
   var result={left:0,top:0};
   var arr=[];
   arr.push(obj);
   while(obj.nodeName!=="BODY"){
      var obj=obj.parentNode;
      if(getStyle(obj,"position")=="absolute"||getStyle(obj,"position")=="relative"){
          arr.push(obj);
      }
   }
    for(var i=0;i<arr.length;i++){
        var val=parseInt(getStyle(arr[i],"borderLeftWidth"));
        var val=val?val:0;
        var val1=parseInt(getStyle(arr[i],"borderTopWidth"));
        var val1=val1?val1:0;

        result.left+=arr[i].offsetLeft+val;
        result.top+=arr[i].offsetTop+val1;
    }

    return result;
}

/*拖拽*/
function drag(obj,options){
  new drags(obj,options);

}
function drags(obj,options){
   var options=options||{};
   this.obj=obj;
   this.obj.that=this;
   document.that=this;
   this.dragX=options.dragX==undefined?true:options.dragX;
   this.dragY=options.dragY==undefined?true:options.dragY;
   this.sideX=options.sideX==undefined?false:options.sideX;
   this.sideY=options.sideY==undefined?false:options.sideY;
   this.animate=options.animate==undefined?true:options.animate;
    this.speed=0.8;
   this.play();
}
drags.prototype={
    play:function(){
        addEvent(this.obj,"mousedown",this.downFun)
    },
    downFun:function(e){
      var that=this.that;
      var e=that.getEvent(e);
      that.ox=that.getOx(e);
      that.oy=that.getOy(e);
      that.startX=that.ox;
      that.startY=that.oy;
      addEvent(document,"mousemove",that.moveFun);
      addEvent(document,"mouseup",that.upFun);
      if(e.preventDefault){
        e.preventDefault();
      }else{
        e.returnValue=false;
      }

    },
    moveFun:function(e){
     var that=this.that;
     var e=that.getEvent(e);
     var cx= e.clientX;
     var cy= e.clientY;
     that.moveX=cx;
     that.moveY=cy;
     var lefts=cx-(offset(that.obj).left-that.obj.offsetLeft)-that.ox;
     var tops=cy-(offset(that.obj).top-that.obj.offsetTop)-that.oy;
     if(that.sideX){
         if(lefts<that.sideX[0]){
             lefts=that.sideX[0];
         }
         if(lefts>that.sideX[1]){
             lefts=that.sideX[1]
         }
     }

        if(that.sideY){
            if(tops<that.sideY[0]){
                tops=that.sideY[0];
            }
            if(tops>that.sideY[1]){
                tops=that.sideY[1]
            }
        }


     if(that.dragX==true) {
         that.obj.style.left = lefts + "px";
     }
     if(that.dragY==true) {
         that.obj.style.top = tops + "px";
     }

        that.endX=that.moveX-that.startX;
        that.endY=that.moveY-that.startY;
        that.startX=that.moveX;
        that.startY=that.moveY;
    },
    upFun:function(e){
     var that=this.that;
        if(that.animate) {
            that.move();
        }
        removeEvent(document,"mousemove",that.moveFun);
        removeEvent(document,"mouseup",that.upFun);
    },
    getEvent:function(e){
        return e||window.event;
    },
    getOx:function (e){
        return e.layerX|| e.offsetX||0
    },
    getOy:function (e){
        return e.layerY|| e.offsetY||0
    },
    move:function(){
       var that=this;
       var flag;
       if(Math.abs(this.endX)>Math.abs(this.endY)){
           flag=true;
       }else{
           flag=false;
       }
        var t=setInterval(function(){
            if(flag){
                if(Math.abs(that.endX)<1){
                    clearInterval(t)
                }
            }else{
                if(Math.abs(that.endY)<1){
                    clearInterval(t)
                }
            }
            that.endX*=that.speed;
            that.endY*=that.speed;
            var x=that.obj.offsetLeft+that.endX;
            var y=that.obj.offsetTop+that.endY;
            if(that.sideX){
                if(x<that.sideX[0]){
                    x=that.sideX[0];
                }
                if(x>that.sideX[1]){
                    x=that.sideX[1]
                }
            }

            if(that.sideY){
                if(y<that.sideY[0]){
                    y=that.sideY[0];
                }
                if(y>that.sideY[1]){
                    y=that.sideY[1]
                }
            }
            that.obj.style.left=x+"px";
            that.obj.style.top=y+"px";
        },50)
    }

}

/*鼠标滚轮事件*/
function mouseWheel(obj,upFun,downFun){
  if(obj.attachEvent){
    dobj.attachEvent("onmousewheel",scrollFn); //IE、 opera
  }else if(obj.addEventListener){
    obj.addEventListener("mousewheel",scrollFn,false);
  //chrome,safari -webkitdocument.
    obj.addEventListener("DOMMouseScroll",scrollFn,false);
  //firefox -moz-
  }
function scrollFn(e){
    var ev=e||window.event;
    var num=ev.wheelDelta||ev.detail;
    if(num==120||num==-3){
      if(upFun){
        upFun.call(obj);
      }
    }else if(num==-120||num==3){
      if(downFun){
        downFun.call(obj);
      }
    }
    if(ev.preventDefault){
      ev.preventDefault(); //阻止默认浏览器动作(W3C)
    }else{
      ev.returnValue=false;//
    }
  }
}


//判断某个元素是否包含有另外一个元素
 function contains (parent,child) {
  if(parent.contains){
     return parent.contains(child) && parent!=child;
  }else{
    return (parent.compareDocumentPosition(child)===20);
  }
 }

 //判断鼠标是否真正的从外部移入，或者是真正的移出到外部；

  function checkHover (e,target) {
   if(getEvent(e).type=="mouseover"){
      return !contains(target,getEvent(e).relatedTarget || getEvent(e).fromElement)&&
    !((getEvent(e).relatedTarget || getEvent(e).fromElement)===target)
   }else{
    return !contains(target,getEvent(e).relatedTarget || getEvent(e).toElement)&&
    !((getEvent(e).relatedTarget || getEvent(e).toElement)===target)
    }
  }


//鼠标移入移除事件
/*
  obj   要操作的对象
  overfun   鼠标移入需要处理的函数
  outfun     鼠标移除需要处理的函数
*/
function hover (obj,overfun,outfun) {
    if(overfun){
      obj.onmouseover=function  (e) {
        if(checkHover(e,obj)){
           overfun.call(obj,[e]);
        }
      }
    }
    if(outfun){
      obj.onmouseout=function  (e) {
        if(checkHover(e,obj)){
           outfun.call(obj,[e]);
        }
      }
    }
}






















