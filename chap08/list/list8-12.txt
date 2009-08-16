<p>
<?php echo $form->create('User'); ?>

<!-- 標準の出力 -->
<?php echo $form->input('mail');?>

<!-- 関連する要素の出力をオフに -->
<?php echo $form->input('mail',array('div'=>false,'label'=>false)); ?>
</p>