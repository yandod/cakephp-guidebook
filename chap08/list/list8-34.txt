<?php
class UsersController extends AppController
{
    var $name = "Users"; //PHP4の場合は必要な設定
    var $scaffold;       //scaffoldを使用

    /**
     * ログイン画面表示
     * http://設置URL/users/login  にアクセス時に実行される
     **/
    function login()
    {
        $this->set("login_error",false);
    }

    /**
     * ログイン処理
     * http://設置URL/users/login_cmp  にアクセス時に実行される
     */
    function login_cmp()
    {

        //メールアドレスとパスワードを検査する
        unset($this->User->validate['name']);
        $this->User->set($this->data);

       //入力エラーがある場合は画面を再表示
       if ($this->User->validates() === false) {
           $this->render("login");
           return;
       }

        //入力パラメータを元にデータ検索を行う
        $param = array(
          'conditions' => array(
            'mail =' => $this->data['User']['mail'],
            'password =' => $this->data['User']['password']
          )
        );
        $data = $this->User->find('first',$param);

        //データが存在しない場合は再度ログイン画面
        if ($data === false) {
            $this->User->invalidate('password','メールアドレスまたはパスワードが違います');
            $this->render("login");
            return;
        }
        //セッションにログイン情報を格納する
        $this->Session->write("auth", $data['User']);
        $this->flash("{$data['User']['name']}さん、ようこそ","/bookmarks/");
    }

    /**
     * ログアウト処理
     */
    function logout()
    {
	    //セッションからログイン情報を削除する
        $this->Session->delete("auth");
        $this->flash("さようなら","/users/login");
    }
}
?>