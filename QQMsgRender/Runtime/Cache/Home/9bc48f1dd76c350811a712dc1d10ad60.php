<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QQ群聊记录整理器-幸福进化兵工厂出品</title>
<link href="/Public/css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="getForm1">
<h1>QQ群聊记录整理器 V2.0 By 幸福进化兵工厂</h1>
<hr />
<form action="/index.php/home/index/render" method="post" enctype="multipart/form-data" id="msg_form">
请输入生成日期：<input type="text" name="date" class="date" /><span class="memo">(日期格式为：2014-05-20)</span>
<br />
请上传聊天记录：<input type="file" name="uploadfile" value="Upload File">
<input type="hidden" name="type" value="通用群" />
<input type="hidden" name="typedir" value="QQMsg" />
<br />
<button type="submit" title="获取聊天记录">生成聊天记录</button>
</form>

<hr />
<h2>更新日志</h2>
<ul>
<li>2014年8月27日，第二版上线</li>
<li>2014年5月26日，第一版上线</li>
</ul>

<h2>使用教程</h2>
<ul>
<li><a href="http://blog.xiaoyuchen.com/322.html" target="_blank">QQ群聊记录整理器使用视频教程</a></li>
</ul>


<h2>开发者列表</h2>
<ul class="dev">
<li>北风一叶</li>
<li><a href="http://www.xiaoyuchen.com" target="_blank">萧宇宸</a></li>
</ul>

<h2>关于我们</h2>
<p>
我们是快乐的程序员，为了方便小伙伴学习，开发了这个小工具，她可以帮助您快速的整理群聊天记录；如果你也是程序员或者美工，或者有一颗服务大家的热心，我们欢迎你加入我们，让我们一起让这个小程序更加的完善！
</p>
<p>志愿报名QQ：<b>1930971983</b></p>
</div>