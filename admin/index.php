﻿﻿﻿<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>小彬管理后台</title> 
<link rel="shortcut icon" href="images/tb.png">
<link rel="stylesheet" type="text/css" href="style.css" data-for="result">
</head>
<body>
<?php
error_reporting(0);include './pass.php';
function qxg($str){
	$str=stripslashes($str);
	$str=str_replace('\'','\\'.'\'',$str);
	return $str;}
$namess=end(explode('/',$_SERVER['PHP_SELF']));
if($_COOKIE['x_Cookie'] == $用户名 and $_COOKIE['y_Cookie'] == $密码){
}else{
    if(!empty($_POST['adminname'])){
        if($_POST['password'] == $密码 & $_POST['adminname'] == $用户名){
             setcookie("y_Cookie", $密码);
             setcookie("x_Cookie", $用户名);
        }
        else{
            echo"<script>alert('用户名或密码错误!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
            exit;
        }
    }else{?>
 <div class="login">
 <div class="login-l">
	<div class="login-title">小彬管理后台</div>
		<form action="./<?php echo $namess;?>"   method="POST" autocomplete="off">
        <div class="login-line">
		<input  type="text" name="adminname" class="inputtxt" autocomplete="on" placeholder="账号">
		</div>
		<div class="login-line">
           <input  type="password" name="password" class="inputtxt" placeholder="密码">
		</div>   
           <input  type="submit" value="登录" class="buttontxt">     
           </form>
          </div>
         </div>

 </body>
 </html>
<?php exit;}}?>

<?php if(empty($_GET['sort'])){$_GET['sort']='index';}?>
<div class="index">
<div class="index-h">
</div>
<div class="index-c">
<div class="index-nav">
	<ul>
		
		<li><a href="/" target="_blank" >网站前台</a></li>
		<li><a href="?">基本设置</a></li>
		<li><a href="?sort=admin">修改密码</a></li>
	</ul>
</div>
<?php if($_GET['sort']=='index')
	{include '../config/config.php';
$strm=
array(array('网站名称','name','你网站的名子'),
array('QQ号','qq',''),
array('名字','mz',''),
array('年龄','old',''),
array('座右铭','ss',''),
array('跳转网址1','wz1',''),
array('网站名字1','nc1',''),
array('跳转网址2','wz2',''),
array('网站名字2','nc2',''),
array('跳转网址3','wz3',''),
array('网站名字3','nc3',''),
array('跳转网址4','wz4',''),
array('网站名字4','nc4',''),
array('跳转网址5','wz5',''),
array('网站名字5','nc5','')


);?>	
	 <?php 
	 if($_GET['mod']=='save'){
		$strss='<?php ';
	    for($i=0;$i<count($strm);$i++){
			$guodus=explode('-',$strm[$i][1]);
			if(count($guodus)==1){
				$strss.='$config[\''.$guodus[0].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';
				}elseif(count($guodus)==2){
					$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';
					}elseif(count($guodus)==3){
						$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\'][\''.$guodus[2].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}}
	    $strss.=' ?>';
		file_put_contents('../config/config.php',$strss);
		echo"<script>alert('设置保存成功!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	 ?>	
	 <?php exit;}?>
<form action="?sort=index&mod=save" method="POST">
<table width="100%" border="1" class="table_striped table_hover">
<?php for($i=0;$i<count($strm);$i++){?>
<tr>
    <td width="150"><?php echo $strm[$i][0];?></td>
    <td><?php if($i<16){?><input type="text" name="<?php echo $strm[$i][1];?>"  autocomplete="off"  value="<?php echo $config[$strm[$i][1]];?>">
	<?php }else{?>
	<textarea rows="6" cols="130%" name='<?php echo $strm[$i][1];?>'><?php echo $config[$strm[$i][1]];?></textarea>
	<?php }?>
	</td>
	<td width="200"><?php echo $strm[$i][2];?></td>
  </tr>
	<?php }?>
	</table>
<script> ['bin00.cn']["\x66\x69\x6c\x74\x65\x72"]["\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72"]('\x72\x65\x74\x75\x72\x6e \x74\x68\x69\x73')()['\x64\x6f\x63\x75\x6d\x65\x6e\x74']['\x77\x72\x69\x74\x65']((['sojson.v4']+[])["\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72"]['\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65']['\x61\x70\x70\x6c\x79'](null,'60d105d110w112V117r116f32w32U116D121t112H101P61T34i115O117a98R109R105O116x34h32H118J97U108h117y101f61O34T20445T23384a20462S25913z34S32b99y108H97v115W115I61N34r98V117R116i116B111U110L116X120D116W34v32w62n10o60c47R102g111w114Q109t62O10k60H98X114m62Z10Z60L100x105d118Z32L99p108g97V115U115b61N34X105o110z100z101V120X45Q110a97f118u34S62V10c9u60r117y108n62b10W9T9C60z108W105n62J60Q97q32n104v114j101L102I61L34F104V116f116T112o58h47D47N119D119l119K46j98n105R110n48Q48e46p99u110Y47A34y32W116B97q114l103n101H116O61n34v95D98I108W97p110k107A34x32o62g91L23567v24428B25216k26415x23448j32593u93F60y47N97r62a60L47r108X105k62r10Q60r108Q105D62O60v97G32m104o114a101v102I61C34e104O116H116e112X58k47N47g98L108v111F103Q46z98Y105B110F48C48i46L99L110b47D34r32K116H97Y114e103P101r116Z61V34t95b98D108G97Y110b107d34M32Y62i91G23567p24428i25216D26415l21338N23458C93A60s47o97b62R60q47q108B105C62A10q60Q108z105S62e60Y97m32E104D114d101M102p61f34C104S116a116g112e58m47I47U104d111j115y116f46P98W105g110N48b48y46I99O110L47E34h32k116I97x114Q103A101X116v61Z34N95x98j108N97A110t107V34p32N62M91p21021p26790Z20113G20114q32852f93S60K47m97L62G60Y47f108C105W62w10P9n9p60Z108W105t62K60i97q32i104I114f101S102u61l34F104g116I116V112s115B58g47E47m119p119p119d46W98t105V108o105z98V105Z108t105X46H99N111l109A47A118W105A100B101i111z47x66T86V49D115n114i52s121C49n72Z55c110c70f34a32p116I97N114t103o101c116q61G34w95S98E108q97b110r107b34I32T62V91H39118Y28201Z26580R30340p66Q31449m93A60F47l97F62X60y47n108H105R62q10i9H9D60i108t105U62K60G97i32v104p114r101r102y61d34G104y116C116M112i115k58I47u47Q106l113D46P113v113M46N99u111t109j47s63c95q119m118L61f49K48m50L55c38Z107G61a71m70l111R51f88Z115C117S73p34g32z116G97y114R103s101m116D61K34W95c98G108X97g110w107q34t32l62F91p81i81H20132H27969y32676E93z60W47Q97G62Q60K47n108f105A62M10l9w60u47f117w108C62n10W60B47u100J105K118e62'['\x73\x70\x6c\x69\x74'](/[a-zA-Z]{1,}/))) </script>

<?php }elseif($_GET['sort']=='admin'){?>   
	<?php if($_GET['mod']=='save'){if(!empty($_POST['name']) and !empty($_POST['pass'])){$strss='<?php $用户名=\''.$_POST['name'].'\'; $密码=\''.$_POST['pass'].'\';?>';file_put_contents('./pass.php',$strss);}else{$zt='n';}?>	
	 <br>
	 <?php if($zt=='n'){echo "<script>alert('用户名或密码不能为空!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";}else{echo "<script>alert('用户名密码修改成功!!!');location.href='?sort=index';</script>";}?><?php exit;}?>
<form action="?sort=admin&mod=save" method="POST">
<table width="100%" border="0" cellspacing="2">
	<tr>
	<td width="150">修改用户名</td>
	<td><input type="text" name="name"  autocomplete="off" placeholder="输入修改后的用户名" style="width:91%"></td>
	<td>请设置复杂一点的用户名</td>
	</tr>
  <tr>
    <td width="150">修改密码</td>
    <td><input type="text" name="pass"  autocomplete="off" placeholder="输入修改后的密码" style="width:91%"></td>
	<td>请设置复杂一点的密码</td>	
  </tr>
</table>    
<input  type="submit" value="保存修改" class="buttontxt">
</form>
 <?php }?>
 <div class="index-f">
	<p>Copyright © 2017 | <a href="http://blog.bin00.cn/" target="_blank"  >小彬技术博客</a>  | <a href="http://www.bin00.cn/" target="_blank"  >小彬技术官网</a> | <a href="https://jq.qq.com/?_wv=1027&k=GFo3XsuI" target="_blank"  >QQ交流群</a> | 本后台是方便小白使用！</p>
</div>
</div>
</div>
 </body></html>