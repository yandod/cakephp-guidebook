<p>
<?php
$data = array(
    '1' => 'メールを受信しない',
    '2' => '重要なメールのみ受信',
    '3' => '全てのメールを受信'
);

$selected = "2";
?>
<?php echo $form->select("User.mail_setting",$data,$selected);?>
</p>