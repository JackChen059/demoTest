<?php
/**
 * @Author: Marte
 * @Date:   2017-06-28 15:32:31
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-28 15:32:49
 */
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_POST['username'];
$age = $_POST['age'];

echo"你的名字:{$username}年龄:{$age}";