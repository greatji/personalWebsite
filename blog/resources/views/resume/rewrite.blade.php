<!doctype html>
<html>
<!-- <head> -->
<head>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
@include('editor::head')
</head>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<?php $type = ""; foreach ($label as $l) { $type = $type.','.$l->label; } ?>

<body>
  <article>
	<form action="http://42.96.210.116/index.php/blog/writeblog" method="post">
		<br><br><br><br>
  	title: <input type="text" name="title" value = "{{$blog->title}}"><br><br>
  	type:  <input type="text" name="type" value = "{{$type}}"><br><br>
  	<!-- <textarea rows="10" cols="30"></textarea> -->
  	<!-- content: <input type="text" name="content" /><br> -->
	<div class="editor">
    	<textarea name='content' id='myEditor'>{{$blog->content}}</textarea>
	</div>
  	<input type="submit" value="Submit" /><br>
    <input type="hidden" name="pretitle" value="{{$blog->title}}">
  	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  </form>
</article>
</body>
</html>
