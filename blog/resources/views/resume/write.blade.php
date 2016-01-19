<!doctype html>
<html>
<!-- <head> -->
<head>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
@include('editor::head')
</head>

<meta charset="gb2312">
<title>孙佶的个人博客</title>
<meta name="keywords" content="孙佶的个人博客" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
  <article>
	<form action="/index.php/blog/writeblog" method="post">
		<br><br><br><br>
  	title: <input type="text" name="title" /><br><br>
  	type:  <input type="text" name="type"><br><br>
	privacy:<br /> 
	private: 
	<input type="radio" name="privacy" value=0 checked="checked">
	<br />
	public: 
	<input type="radio" name="privacy" value=1>
	<br />
  	<!-- <textarea rows="10" cols="30"></textarea> -->
  	<!-- content: <input type="text" name="content" /><br> -->
	<div class="editor">
    	<textarea name='content' id='myEditor'></textarea>
	</div>
  	<input type="submit" value="Submit" /><br>
  	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  </form>
  </article>

</body>
</html>
