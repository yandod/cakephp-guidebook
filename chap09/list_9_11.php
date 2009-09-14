名前は <?php echo h($form->value('User.name')); ?> です。
<?php echo $form->create(array('action' => 'xss')); ?>
<?php echo $form->input('User.name', array('size' => 70)); ?>
<?php echo $form->end(' 送信'); ?>