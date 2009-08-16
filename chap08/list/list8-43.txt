<?php echo $html->link("ブックマークを追加","/bookmarks/add");?>
<table>
<!-- 見出し行をソート用のリンクとしても使う -->
  <tr>
    <th><?php echo $paginator->sort('id','id'); ?></th>
    <th><?php echo $paginator->sort('アドレス','url'); ?></th>
    <th><?php echo $paginator->sort('登録日時','created'); ?></th>
  </tr>
<?php
foreach ($data as $row) {
?>
  <tr>
    <td><?php echo $row['Bookmark']['id']; ?></td>
    <td><?php echo $row['Bookmark']['url']; ?></td>
    <td><?php echo $row['Bookmark']['created']; ?></td>
  </tr>
<?php
}
?>
</table>
<!-- ページ送り用のリンク -->
<?php echo $paginator->prev('前へ'); ?>

<?php echo $paginator->next('次へ'); ?>
<br/>
<?php echo $paginator->numbers(); ?>