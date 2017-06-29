<?php
/**
 * @Author: Marte
 * @Date:   2017-06-28 14:32:11
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-28 14:40:50
 */
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_GET['username'];
$age = $_GET['age'];

echo"你的名字:{$username}年龄:{$age}";