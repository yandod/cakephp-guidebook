

<!-- input() はエラーを自動で表示する -->
<?php echo $form->input("User.mail");?>
<br/>

<!-- 自力でエラーを表示する -->
パスワード
<?php echo $form->password("User.password");?>

<?php if ($form->isFieldError('User.password')): ?>
パスワードが正しくありません
<?php endif; ?>