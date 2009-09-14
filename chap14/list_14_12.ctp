<h1>携帯ログイン</h1>
<?php if (!empty($login_error)): ?>
<div class="error_message">ログインできません</div>
<?php endif; ?>
<div>
<?php echo $form->create(array('controller' => 'user', 'action' => 'login')); ?>
<?php echo $form->input('mail'); ?>
<?php echo $form->input('password'); ?>
<?php echo $form->end('ログイン'); ?>
</div>