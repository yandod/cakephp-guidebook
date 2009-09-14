<?php
class SessionFixationController extends AppController
{
  var $uses = array('User');

  function login()
  {
    if (!empty($this->data)
      && !empty($this->data['User']['name'])
      && !empty($this->data['User']['pass'])) {

      $user = $this->User->findByName($this->data['User']['name']);

      if (!empty($user)
        && $this->data['User']['pass'] == $user['User']['password']) {
        $this->Session->renew(); // ①
        $this->Session->write('user', $user['User']);
        $this->render('index');
      }
    }
  }
}
?>