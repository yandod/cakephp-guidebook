<p>
<?php
$data = array(
    '1' => 'メールを受信しない',
    '2' => '重要なメールのみ受信',
    '3' => '全てのメールを受信'
);
?>
<?php echo $form->radio("User.mail_cd",$data,array("value"=>"2"));?>
</p>
