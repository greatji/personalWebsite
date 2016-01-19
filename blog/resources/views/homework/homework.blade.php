<!DOCTYPE html>
<html lang="zh-CN">
	<head>
    		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset='UTF-8'>
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="//cdn.bootcss.com/jquery/2.2.0/jquery.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    		<title>Page title</title>
		<style>
			.col-center-block {
    				float: none;
    				display: block;
    				margin-left: auto;
    				margin-right: auto;
			}
</style>
  	</head>
  	<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-collapse collapse" role="navigation">
          <ul class="nav navbar-nav">
		<li role="presentation" ><a href="#1">Homework1</a></li>
                <li role="presentation" ><a href="#2">Homework2</a></li>
                <li role="presentation" ><a href="#3">Homework3</a></li>
                <li role="presentation" ><a href="#4">Homework4</a></li>
          </ul>
        </div>
      </div>
    </div>
	<div class="jumbotron masthead">
		<div class = "container">
			<h1 style="color:purple;"><center>多媒体实验作业</center></h1>
		</div>
	</div>
	<div class="bs-docs-featurette">
  		<div id=1 class="container">
    		<h2><center>实验1：音频采集与处理</center></h2>
    		<p><center class="lead">用Windows录音机录制一首自己唱的歌或朗诵，准备一段背景音乐，使用Cool Edit导入录制的声音文件和背景音乐，并进行合成。</center></p>

    		<hr class="half-rule">
		</div>
    <div class="row">
	<div class="col-sm-4"><center>
	<form action="/index.php/blog/addphoto/1" method="post" enctype="multipart/form-data">
        <label for="file">上传作品:</label>
        <input type="file" name="myfile" id="myfile" />
        <br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
	</center></div>
	<div class="col-sm-4">
	<p><center class="lead">点击下载我的作品（如果下面的按钮点击无响应，请右键点击链接另存为）</center></p>
    	<div class="col-center-block"><a href="/index.php/download/1" class="btn btn-primary">实验一</a></div>
    	</div>
	</div>
    <hr class="half-rule">
  </div>
      <div class="bs-docs-featurette">
  		<div id=2 class="container">
    		<h2><center>实验2：图像处理</center></h2>
    		<p><center class="lead"><ul><li>选取适当的图片素材和世界地图，运用各种选取方法制作一幅由世界名胜照片揉和在一起的背景。利用图层效果制作一幅有地形质感的世界地图。调整并合并所有层存储为各种图像文件格式并压缩。</li><li>显示一个bmp文件的C程序，并实现图像亮度、对比度调整、图像平移、放大、旋转和镜像。</li></ul></center></p>
    		<hr class="half-rule">
		</div>
    <div class="row">
	<div class="col-sm-4"><center>
	<form action="/index.php/blog/addphoto/2" method="post" enctype="multipart/form-data">
        <label for="file">上传作品:</label>
        <input type="file" name="myfile" id="myfile" />
        <br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
	</center></div>
	<div class="col-sm-4">
	 <p><center class="lead">点击下载我的作品（如果下面的按钮点击无响应，请右键点击链接另存为）</center></p>
    <div class="col-center-block"><a href="/index.php/download/2" class="btn btn-primary">实验二</a></div>
    </div>
</div>
    <hr class="half-rule">
  </div>
<div class="bs-docs-featurette">
  		<div id=3 class="container">
    		<h2><center>实验3:动画制作</center></h2>
    		<p><center class="lead">根据实验1中得到的歌曲或配乐朗诵，做一段Flash（不少于1分半钟），并合成为一段动画MV。</center></p>
    		<hr class="half-rule">
		</div>
    <div class="row">
	<div class="col-sm-4"><center>
	<form action="/index.php/blog/addphoto/3" method="post" enctype="multipart/form-data">
        <label for="file">上传作品:</label>
        <input type="file" name="myfile" id="myfile" />
        <br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
	</center></div>
	<div class="col-sm-4">
	<p><center class="lead">点击下载我的作品（如果下面的按钮点击无响应，请右键点击链接另存为）</center></p>
    	<div class="col-center-block"><a href="/index.php/download/3" class="btn btn-primary">实验三</a></div>
    	</div>
	</div>
    <hr class="half-rule">
  </div>
<div class="bs-docs-featurette">
  		<div id=4 ass="container">
    		<h2><center>实验4：网页开发</center></h2>
    		<p><center class="lead">开发个人页面开发，包含个人基本信息，整个课程的各次实验信息，并实现媒体文件上传、下载功能实现。</center></p>

    		<hr class="half-rule">
		</div>
    <div class="row">
	<div class="col-sm-4"><center>
	<form action="/index.php/blog/addphoto/4" method="post" enctype="multipart/form-data">
        <label for="file">上传作品:</label>
        <input type="file" name="myfile" id="myfile" />
        <br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
	</center></div>
	<div class="col-sm-4">
	<p><center class="lead">点击下载我的作品（如果下面的按钮点击无响应，请右键点击链接另存为）</center></p>
    	<div class="col-center-block"><a href="/index.php/download/4" class="btn btn-primary">实验四</a></div>
    	</div>
	</div>
    <hr class="half-rule">
  </div>

</div>
	<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">

    <p>Designed and built by <a href="https://twitter.com/mdo" target="_blank">孙佶(学号：2012211370)</a></p>
    <p>本项目源码受 <a rel="license" href="https://github.com/greatji/personalWebsite/blob/master/LICENSE" target="_blank">MIT</a>开源协议保护</p>
  </div>
</footer>
	</body>
</html>
