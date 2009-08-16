<?php echo $javascript->link('prototype')?>
<?php echo $javascript->link('scriptaculous')?>
<?php
$opt = array(
"url" => "/bookmarks",
"update" => "load_space"
);

echo $ajax->link("ページ読み込み","#",$opt);
?>

<div id="load_space"></div>
