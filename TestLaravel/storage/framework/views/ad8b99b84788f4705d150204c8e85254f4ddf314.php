<?php
mb_internal_encoding('UTF-8');
$str = 'あいうえお';

// UTF-8からShift_JISに変換
$sjis =  mb_convert_encoding($str, 'SJIS', 'UTF-8');

// 内部エンコーディングからEUC-JPに変換
$euc = mb_convert_encoding($str, 'EUC-JP');
?>
<html>
<head>
 <title>Hello</title>
</head>
	<body>
		<h1><?php echo e($name); ?>さん、こんにちは！</h1>
	</body>
</html>