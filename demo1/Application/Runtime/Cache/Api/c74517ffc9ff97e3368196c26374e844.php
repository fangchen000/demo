<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="<?php echo U('Api/Yitiji/getLinkNews');?>" method="post">
    <input type="text" name="type" value="banka">
    <input type="submit" value="提交">
</form>
</body>