<h1>Hello Mobile!!</h1>
<div>
<?php echo h($name); ?>さん、<?php echo h(date('Y/m/d H:i:s')); ?>です。<br />
<?php echo $html->link('再表示', array('action' => 'index')); ?><br />
<br />
<?php echo $html->link('ログアウト', array('action' => 'login')); ?>
</div>