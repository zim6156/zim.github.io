<?php
include "config/config.php";
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['name']?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.xfabe.com/favicon.ico" type="image/x-icon">
</head>

<body bgcolor="#fff" onload="newtext()">
    <strong>
        <marquee behavior="" direction=""><?php echo $config['name']?></marquee>
    </strong>
    <section>
        <div>
            <img src="https://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $config['qq']?>&amp;spec=100" alt="">
            <h1><?php echo $config['mz']?></h1>
            <h3><?php echo $config['old']?></h3>
            <p><?php echo $config['ss']?></p>
            <br>
            <a href="#!">点下康康</a>
        </div>
        <div>
            <h2>旗下站点</h2>
            <a href="<?php echo $config['wz1']?>" target="_blank" rel="noopener noreferrer"><?php echo $config['nc1']?></a>
            <a href="<?php echo $config['wz2']?>" target="_blank" rel="noopener noreferrer"><?php echo $config['nc2']?></a>
            <a href="<?php echo $config['wz3']?>" target="_blank" rel="noopener noreferrer"><?php echo $config['nc3']?></a>
            <a href="<?php echo $config['wz4']?>" target="_blank" rel="noopener noreferrer"><?php echo $config['nc4']?></a>
            <a href="<?php echo $config['wz5']?>" target="_blank" rel="noopener noreferrer"><?php echo $config['nc5']?></a>
        </div>
    </section>
    <footer>
        <p><a href="#!" target="_blank" rel="noopener noreferrer">Copyright ©2021-2022 <?php echo $config['mz']?> 版权所有</a></p>
    </footer>
    <script>
        var text = document.title
        var timerID
        function newtext() {
            clearTimeout(timerID)
            document.title = text.substring(1, text.length) + text.substring(0, 1)
            text = document.title.substring(0, text.length)
            timerID = setTimeout("newtext()", 300)
        };
    </script>
</body>

</html>