<p>
<?php $cols = array("id","名前","性別"); ?>
<?php $cells = array(
    array("1","山田","男"),
    array("10","佐藤","女"),
    array("22","加藤","男"),
    array("24","手塚","男"),
); ?>

<style type="text/css">
table tr td {
background-color: transparent
}
</style>
<table>
<?php echo $html->tableHeaders($cols);?>

<?php echo $html->tableCells($cells,array("style" => "background-color:#DDDDDD"),array("style"=>"background-color:#FFFFFF"));?>

</table>
</p>
