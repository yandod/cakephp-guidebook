<!-- 画像の表示 -->
<?php echo $html->image("cake.power.png",array('alt' => 'ロゴ', 'border' => 0));?>
<br/>

<!-- 新規ウインドウへのテキストリンク -->
<?php echo $html->link("cakephp.jp","http://cakephp.jp/",array("target"=>"blank"));?>
<br/>

<!-- 確認メッセージありのリンク -->
<?php echo $html->link("cakephp.jp","http://cakephp.jp/",null,"外部サイトへ移動します");?>
<br/>

<!-- 画像を利用したリンク -->
<?php echo $html->link($html->image("cake.power.png"),"http://cakephp.org",null,null,false);?>
