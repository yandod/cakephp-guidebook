<?php
class UserController extends AppController
{
  var $name = 'User';
  var $uses = array('User');
  var $helpers = array('Form');

  /**
   * 認証が必要なアクション
   */
  function index()
  {
    if (!$this->Session->check('auth')) {
      $this->redirect(array('action' => 'login'));
    }
    $login = $this->Session->read('auth');
    $this->set('name', $login['name']);
  }

  /**
   * ログインアクション
   */
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
        $this->redirect(array('action' => 'index'));
      }

      $this->set('login_error', true);
    }
  }
}
?>
