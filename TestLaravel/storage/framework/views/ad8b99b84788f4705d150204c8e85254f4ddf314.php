<?php
mb_internal_encoding('UTF-8');
$str = '����������';

// UTF-8����Shift_JIS�ɕϊ�
$sjis =  mb_convert_encoding($str, 'SJIS', 'UTF-8');

// �����G���R�[�f�B���O����EUC-JP�ɕϊ�
$euc = mb_convert_encoding($str, 'EUC-JP');
?>
<html>
<head>
 <title>Hello</title>
</head>
	<body>
		<h1><?php echo e($name); ?>����A����ɂ��́I</h1>
	</body>
</html>