<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>title</title>
</head>

<body>
<hr>
<?php echo $content_for_layout; ?>
<?php echo $cakeDebug; ?>
<hr>
<?php echo $html->link(
    $html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
    'http://www.cakephp.org/',
    array('target'=>'_blank'), null, false
);
?>
</body>
</html>