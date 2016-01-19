<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://icybee.cn/blogadmin -->
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="/index.php/input" method="post">
  <p>Product Name: <input type="text" name="name" /></p>
  <p>Label: <input type="text" name="label" /></p>
  <input type="submit" value="Submit" />
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
</html>