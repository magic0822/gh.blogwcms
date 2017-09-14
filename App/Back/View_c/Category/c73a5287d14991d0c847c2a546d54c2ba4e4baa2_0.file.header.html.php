<?php
/* Smarty version 3.1.29, created on 2017-06-06 20:13:39
  from "D:\myweb\websites\Blog\App\Back\View\Public\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59369c73b07642_41975073',
  'file_dependency' => 
  array (
    'c73a5287d14991d0c847c2a546d54c2ba4e4baa2' => 
    array (
      0 => 'D:\\myweb\\websites\\Blog\\App\\Back\\View\\Public\\header.html',
      1 => 1496393014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59369c73b07642_41975073 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>个人博客后台管理系统</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
/pintuer.css">
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/admin.js"><?php echo '</script'; ?>
>
    <link type="image/x-icon" href="<?php echo @constant('IMAGES_DIR');?>
/favicon2.ico" rel="shortcut icon" />
    <link rel="icon" href="<?php echo @constant('IMAGES_DIR');?>
/favicon2.ico" type="image/x-icon" />

</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="<?php echo @constant('IMAGES_DIR');?>
/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="http://www.blog.com/index.php?p=Home&c=Index&a=index" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="index.php?p=Back&c=Admin&a=logout">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="active"><a href="index.php?p=Back&c=Manage&a=index" class="icon-home"> 开始</a>
                    <ul><li><a href="index.php?p=Back&c=Category&a=index">分类管理</a></li><li><a href="index.php?p=Back&c=Article&a=index">文章管理</a></li><li><a href="#">评论管理</a></li><li class="active"><a href="index.php?p=Back&c=SinglePage&a=index">单页管理</a></li><li><a href="index.php?p=Back&c=Master&a=index">站长管理</a></li><li><a href="#">友情链接</a></li></ul>
                </li>
                <li><a href="index.php?p=Back&c=Category&a=index" class="icon-cog"> 分类</a>
                    <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul>
                </li>
                <li><a href="http://www.blog.com/index.php?p=Back&c=Article&a=index" class="icon-file-text">文章管理</a>
                    <ul><li><a href="#">添加内容</a></li><li class="active"><a href="#">内容管理</a></li><li><a href="#">分类设置</a></li><li><a href="#">链接管理</a></li></ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['adminInfo']['admin_name'];?>
，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div><?php }
}
