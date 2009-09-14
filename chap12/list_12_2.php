<?php
class User extends AppModel
{
  var $name = 'User';
  var $validate = array('name' => VALID_NOT_EMPTY,
                        'member_no' => '/^[A-Z][0-9]{5}$/'
  );
}
?>