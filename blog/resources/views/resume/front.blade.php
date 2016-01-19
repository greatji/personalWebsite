<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://icybee.cn/blogadmin -->
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>sunji</title>

<link href="{{ URL::asset('icybee_files/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('icybee_files/bootstrap-modal.css') }}" rel="stylesheet">
<link href="{{ URL::asset('icybee_files/animate.css') }}" rel="stylesheet">
<link href="{{ URL::asset('icybee_files/bootstrap.css') }}" rel="stylesheet">
<!-- CuFon ends -->
<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
<body>
<div id="static" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    <p>Do you Really want to delete this article?</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
    <button type="button" data-dismiss="modal" class="btn btn-primary" onclick="ondelete()">Continue Task</button>
  </div>
</div>

<div id="deleteLabel" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    <p>Do you Really want to delete this label?</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
    <button type="button" data-dismiss="modal" class="btn btn-primary" onclick="ondeletelabel()">Continue Task</button>
  </div>
</div>

<div id="addLabel" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    <p>Input the label name:</p>
	<input type="text" id="label_name">
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
    <button type="button" data-dismiss="modal" class="btn btn-primary" onclick="addLabel()">Add</button>
  </div>
</div>

<div id="hits" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    <p>Operation successful!</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary">Ok</button>
  </div>
</div>

<div id="fail" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    <p>Operation Failed,please check the server log!</p>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Ok</button>
  </div>
</div>

<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo" style="display:flex">
        <h1><a href="/" target="_blank"><cufon class="cufon cufon-canvas" alt="Sunji" style="width: 110px; height: 38.5px;"><canvas width="181" height="54" style="width: 181px; height: 54px; top: -8px; left: -24px;"></canvas><cufontext>Sunji</cufontext></cufon><span><cufon class="cufon cufon-canvas" alt="BMS" style="width: 81px; height: 38.5px;"><canvas width="148" height="54" style="width: 148px; height: 54px; top: -8px; left: -24px;"></canvas><cufontext>BMS</cufontext></cufon></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <!--li><a href="support.html">Support</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="last"><a href="contact.html">Contact Us</a></li-->
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <?php foreach($blog as $point) {?>
        <div class="article" style="max-height=50px" id="48">
          <h2><span>{{$point->title}}</span></h2>
          <div class="clr"></div>
          <p>Posted on {{$point->date}}</p>
          <!--img src="images/img_1.jpg" width="613" height="193" alt="image" /-->
          <!--div class="clr"></div>
          <p>This is a free CSS website template by CoolWebTemplates. This 
work is distributed under the Creative Commons Attribution 3.0 License, 
which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to <a href="http://www.cssmoban.com/" title="ģ°å¼Ò>ģ°å¼Ò/a>.</p>
          <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit  nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p-->
          <p>
		<a href="/index.php/blog/visitShowAll/{{$point->title}}" target="_blank">Read more </a>
	</p>
        </div>
        <?php } ?>

      <div class="article" style=" background:none; border:0;">
          <p>Page {{$current}} of {{(int)($total/4+1)}} <span class="butons">
      <?php if($current > 1) echo '<a href="/index.php/blog/list/'.$type.'/'.($current-1).'">newer posts</a>'?>
			<?php if($current+1 <= (int)($total/4+1)) echo '<a href="/index.php/blog/list/'.$type.'/'.($current+1).'">older posts</a>'?>
	
	</span></p>
      </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2>Actions</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="/index.php/resume">Personal Webpage</a></li>
         </ul>
        </div>
        <div class="gadget">
          <h2><span>标签</span></h2>
          <div class="clr"></div>
          <li><a href="/index.php/blog/list">show all</a><br>
          <?php foreach ($label as $l) {?>
			   <li><a href="/index.php/blog/list/{{$l->label}}">{{$l->label}}</a><br>
          <?php } ?>
             
         <!--ul class="ex_menu">
            <li><a href="#" title="Website Templates">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="#" title="WordPress Themes">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="#" title="Affordable Hosting">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="#" title="Stock Icons">MyVectorStore</a><br />
              Royalty Free Stock Icons</li>
            <li><a href="#" title="Website Builder">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="#" title="CSS Templates">CSS Hub</a><br />
              Premium CSS Templates</li>
          </ul-->
        </li></div>
        <div class="gadget">
          <h2>visitor info</h2>
          <div class="clr"></div>
		 Total number : {{$visit->total}}<br>
          </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
    <div class="footer">
      <div class="clr"></div>
    </div>
  </div>
</div>
<div style="display:none"><script src="{{ URL::asset('icybee_files/stat.php') }}" language="JavaScript" charset="gb2312"></script><script src="{{ URL::asset('icybee_files/core.php') }}" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=155540" target="_blank" title="站长统计">站长统计</a></div>

<script src="{{ URL::asset('icybee_files/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('icybee_files/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('icybee_files/arial.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('icybee_files/cuf_run.js') }}"></script>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<script src="{{ URL::asset('icybee_files/bootstrap-modalmanager.js') }}"></script>
<script src="{{ URL::asset('icybee_files/bootstrap-modal.js') }}"></script>


<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script type="text/javascript">
var toDelete = 0;
var labelname = 'null'; 
function addLabel(){
	 $.ajax({
             type: "GET",
             url: "/blogadmin/addLabel/" + $('#label_name').val(),
             dataType: "json",
             success: function(data){
			$('#hits').modal('show');
                },
	     error: function(data){
		$('#fail').modal('show');
 		}
         });

}

function ondeletelabel(){
	 $.ajax({
             type: "GET",
             url: "/blogadmin/deleteLabel/" + labelname,
             dataType: "json",
             success: function(data){
			$('#hits').modal('show');
                },
	     error: function(data){
		$('#fail').modal('show');
 		}
         });

}

function ondelete(){
	 $.ajax({
             type: "GET",
             url: "/blogadmin/delete",
             data: {id:toDelete},
             dataType: "json",
             success: function(data){
			if(data == 1){
				$('#' + toDelete).remove();	
				$('#hits').modal('show');
			}else{
				$('#fail').modal('show');
			}
                },
	     error: function(data){
		$('#fail').modal('show');
 		}
         });
}
</script>



</div></body></html>