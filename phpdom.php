<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3
 * Time: 10:44
 */
include 'simple_html_dom.php';
$i = 0;
while(1){
$i++;
$html = file_get_html('https://www.dbmeinv.com/?pager_offset='.$i);
foreach ($html -> find('img' )as $element){
    $img = file_get_contents($element->src);
    file_put_contents('./photo/'.$i.'.jpg',$img);
}
if($i>1000){
    break;
}
}
echo "已结束,采集了{$i}张";
