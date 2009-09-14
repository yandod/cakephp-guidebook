<?php
  function login()
  {
    $this->Session->delete('auth');

    if (!empty($this->data['User'])) {
      $conditions = array('mail' => Set::extract($this->data, 'User.mail'),
                          'password' => Set::extract($this->data, 'User.password'));
      $ret = $this->User->find('first', compact('conditions'));
      if (!empty($ret)) {
        $login = array('name' => $ret['User']['name']);
        $this->Session->write('auth', $login);
        $this->Session->renew();
        $this->redirect(array('action' => 'index'));
      }

      $this->set('login_error', true);
    }
  }
?>