<?php
class Bookmark extends AppModel
{
    var $name = "Bookmark";
    var $belongsTo = "User";

    var $validate = array(
        'url' => array(
            'rule' => 'url',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'URLが正しくありません'
        ),
        'count' => array(
            'rule' => 'numeric',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'カウントが数値ではありません'
        )
    );
}
?>
