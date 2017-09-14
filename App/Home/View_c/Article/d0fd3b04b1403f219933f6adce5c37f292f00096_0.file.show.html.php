<?php
/* Smarty version 3.1.29, created on 2017-06-07 13:25:14
  from "D:\myweb\websites\Blog\App\Home\View\Article\show.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59378e3aec3001_10222598',
  'file_dependency' => 
  array (
    'd0fd3b04b1403f219933f6adce5c37f292f00096' => 
    array (
      0 => 'D:\\myweb\\websites\\Blog\\App\\Home\\View\\Article\\show.html',
      1 => 1496813101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/aside.html' => 1,
  ),
),false)) {
function content_59378e3aec3001_10222598 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:/myweb/websites/Blog/Vendor/Smarty/plugins\\modifier.date_format.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Sparrow's Space</title>
  <meta name="keywords" content="Sparrow's Space" />
  <meta name="description" content="Sparrow's Space" />
  <link href="<?php echo @constant('CSS_DIR');?>
base.css" rel="stylesheet">
  <link href="<?php echo @constant('CSS_DIR');?>
style.css" rel="stylesheet">
  <link href="<?php echo @constant('CSS_DIR');?>
media.css" rel="stylesheet">
<style type="text/css">
  .ds-replybox img {
    float:left;
    width:76px;
    height:76px;
  }
  textarea {
    box-shadow: none;
    color: #999;
    height: 54px;
    margin: 0;
    overflow: auto;
    padding: 10px;
    resize: none;
    width: 80%;
    margin-left:10px;
  }
  button {
    margin-top:10px;
    margin-left:85px;
    font-size: 14px;
    font-weight: bold;
    height: 32px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    transition: all 0.15s linear 0s;
    width: 100px;
  }
  .otherlink dl {
    display:block;
    width:100%;
    height:65px;
    padding:20px 0;
    border-bottom:1px #DEDEDE solid;
  }
  .otherlink dt {
    float:left;
  }
  .otherlink h3 {
    color:#D23;
  }
  .otherlink h3,.otherlink p {
    line-height:22px;
    text-indent:10px;
  }
  .otherlink .msg {
     color:#333;
  }
  .otherlink .addtime {
     color:#999;
  }
  .logform input {
    width:140px;
    height:30px;
  }
</style>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <article>
    <h2 class="about_h">You're now at：<a href="index.php?p=Home&c=Index&a=index">Home</a>>
      <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$__foreach_row_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
      ><a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
      <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
if ($__foreach_row_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_row_0_saved_key;
}
?>
    </h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h2>
      <p class="box_c"><span class="d_time">Post Time：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['addtime'],'%Y-%m-%d');?>
</span><span>Edit：<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
</span><span>Read<?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
</span><span>Comment:（<?php echo $_smarty_tpl->tpl_vars['rowCount']->value;?>
）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </ul>
      <div class="keybq">
        <p><span>Key words</span>：sparrow, blog</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['prev']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['prev']->value['title'])===null||$tmp==='' ? 'This is the first article' : $tmp);?>
</a></p>
        <p>下一篇：<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['next']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['next']->value['title'])===null||$tmp==='' ? 'This is the last article' : $tmp);?>
</a></p>
      </div>
      <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
        <h2>评论列表</h2>
        <?php
$_from = $_smarty_tpl->tpl_vars['cmtInfos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
        <dl>
          <dt>
            <img width='50' height='50' src='/Uploads/User/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_image'];?>
'>
          </dt>
          <dd>
            <h3>
              <?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_user'];?>

            </h3>
            <p class='msg'><?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_content'];?>
</p>
            <p class='addtime'>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['cmt_time'],'%Y-%m-%d %H:%M:%S');?>
</p>
          </dd>
        </dl>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
        No comments at this moment.
        <?php
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
      </div>
    </div>
    <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
        <h2>发布评论</h2>
      </div>
      <form action="index.php?p=Home&c=Article&a=comment" method="post">
      <textarea placeholder="Comment here" title="Ctrl+Enter for fast post" name="content"></textarea>
        <input type="hidden" name="art_id" value="<?php echo $_GET['art_id'];?>
">
    <button type="submit" class="ds-post-button">Send</button></form>
   <div class="page"><?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>
</div>
  </article>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/aside.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}
