<?php
/**
 * @Author: Administrator
 * @Date:   2017-07-05 15:28:10
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-07-05 15:31:13
 */
//初始化
$ch = curl_init();
//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, $_GET['url']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
//执行并获取HTML文档内容
$output = curl_exec($ch);
//释放curl句柄
curl_close($ch);
//打印获得的数据
exit($output);