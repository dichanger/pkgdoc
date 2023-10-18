<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?php
if($_GET['s']!=""){
	echo '<a href="main.html"><h2>返回首页</h2></a>';
	echo "搜索(",$_GET['s'],')结果如下:</br>';
	foreach (glob("pkg/*.htm") as $name){
		$s = file_get_contents($name);
		$pos = mb_strpos($s,$_GET['s']);
		if ($pos !== false){
			echo '<a href="',$name,'"><h2>',$name,'</h2></a> ...',mb_substr($s,$pos-60,90),"<strong>",$_GET['s'],"</strong>",mb_substr($s,$pos+mb_strlen($_GET['s']),90),'...</br>';
		}
	}
}
?>
