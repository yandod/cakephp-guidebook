<?php echo $html->link("ブックマーク一覧","/bookmarks/");?>
<?php echo $form->create('Bookmark');?>
登録するURLを入力してください<br/>
<br/>
<?php echo $form->input('url',array(
    'label' => array(
        'text' => '登録するURL'
    )
))?>
<?php echo $form->end('登録'); ?>

