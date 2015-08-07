<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Bootcamp Day1 Lesson1</title>
</head>
<body>
	<div class="container-fluid">
<?php echo $this->element('header'); ?>

<?php echo $this->fetch('content'); ?>

<?php echo $this->element('footer'); ?>
	</div>
</body>
</html>
