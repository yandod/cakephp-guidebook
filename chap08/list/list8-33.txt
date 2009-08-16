<?php echo $form->create('User',array(
  'url' => array(
    'controller' => 'users',
    'action' => 'login_cmp',
  )
)) ?>
<?php echo $form->input('mail', array(
  'label' => array(
    'text' => 'メールアドレス'
  ),
)); ?>
<br/>
<?php echo $form->input('password', array(
  'type' => 'password',
  'label' => array(
    'text' => 'パスワード'
  ),
)); ?>
<br/>
<?php echo $form->submit('ログイン'); ?>
<?php echo $form->end() ?>
