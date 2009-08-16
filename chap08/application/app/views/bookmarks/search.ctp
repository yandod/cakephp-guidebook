<?php echo $html->link("ブックマークを追加","/bookmarks/add");?>
 
<?php echo $html->link("自分のブックマークを一覧","/bookmarks/");?>
<br/>
<br/>
<?php echo $form->create('Bookmark',array('url' => '/bookmarks/search'));?>
<table style="width:450px">
  <tr>
    <th>URL</th>
    <td><?php echo $form->text('url');?>を含む</td>
  </tr>
  <tr>
    <th>登録者</th>
    <td align="left"><?php echo $form->select('user_id',$user_list,null,array('multiple'=>'multiple'));?>
    </select></td>
  </tr>
  <tr>
    <th>カウント</th>
    <td><?php echo $form->text('count'); ?>以上</td>
  </tr>
  <tr>
    <th>登録日</th>
    <td><?php echo $form->text('created'); ?>(Y-m-d)以降</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $form->submit('検索'); ?></td>
  </tr>
</table>
<?php echo $form->end(); ?>
<table>
  <tr>
    <th>id</th>
    <th>URL</th>
    <th>登録者</th>
    <th>カウント</th>
    <th>登録日時</th>
  </tr>
<?php
foreach ($bookmark_list as $row):
?>
  <tr>
    <td><?php echo h($row['Bookmark']['id']); ?></td>
    <td><?php echo $html->link($row['Bookmark']['url'], "/bookmarks/trans/{$row['Bookmark']['id']}"); ?></td>
    <td><?php echo h($row['User']['name']); ?></td>
    <td><?php echo h($row['Bookmark']['count']); ?></td>
    <td><?php echo h($row['Bookmark']['created']); ?></td>
  </tr>
<?php
endforeach;
?>
</table>
