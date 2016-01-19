<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://icybee.cn/blogadmin -->
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<center>
	<div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
	<img src="{{ URL::asset('binggui/123-01.jpg') }}" height="100%" width="100%"/>    
	</div> 
	<br/><br/>
	<head><p><h1><font color=#51c7f4>These Are Ice-creams You May Like!</font></h1></p></head>
	<br/>
	<ul>
	<p align="justify">
	<?php foreach($name as $a) { ?>
		<img src = "{{$a->pic_src}}" height = "100" width = "120">
		<font size = 8 color=#51c7f4>{{$a->name}}</font>
		<br />
	<?php } ?>
</p>
</ul>
	</body>
	</center>
	
</html>