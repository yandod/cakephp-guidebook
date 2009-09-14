<cake:nocache>
<!-- アクセス毎に時刻が表示される -->
<?php echo date('Y/m/d H:i:s'); ?>
<!-- ヘルパーは利用できる -->
<?php echo $html->link('test'); ?>
<!-- コントローラーでset()した変数は値がnullになる -->

<?php echo $users; ?>
</cake:nocache>