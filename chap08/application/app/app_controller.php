<?php
class AppController extends Controller {

    var $needAuth = false; //ログインを必須とするかどうかのフラグ

    function beforeFilter()
    {
        //セッションから取り出したログイン情報をセット
        $auth = $this->Session->read('auth');
        $this->set("auth",$auth);

        //ログイン必須の機能でログインされていない場合はログイン画面へ転送
        if ($this->needAuth) {
            if (empty($auth)) {
                $this->redirect("/users/login");
                return;
            }
        }
    }
}
?>