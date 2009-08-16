<?php
class BookmarksController extends AppController
{
    var $name = "Bookmarks"; //PHP4の場合は必要な設定
    var $scaffold;       //scaffoldを使用
    var $needAuth = true; //認証を必須とする
    var $uses = array('Bookmark','User');
    var $helpers = array('Html','Form','Paginator');
    var $paginate = array(
        'limit' => 3,
        'order' => 'Bookmark.created DESC'
    );

    function index()
    {
        //セッションからログイン中のユーザーIDを取得
        $auth = $this->Session->read("auth");
        $param = array(
          'conditions' => array(
          'user_id' => $auth['id']
          )
        );

        //データの取得
        //$data = $this->Bookmark->find('all',$param);
        $data = $this->paginate('Bookmark',$param['conditions']);
        $this->set("data",$data);

    }

    function add()
    {
        // submitされていない場合は初期表示
        if (empty($this->data)) {
            return;
        }

        //セッションからログイン中のユーザーIDを取得
        $auth = $this->Session->read("auth");

        //入力データの形式を整える(フォームから取得できない部分のみ補う)
        $this->data['Bookmark']['user_id'] = $auth['id'];
        $this->data['Bookmark']['count']   = 1;

        //モデルにデータをセットする
        $this->Bookmark->set($this->data);

        //入力検査に失敗した場合は再度、入力画面へ
        if ( $this->Bookmark->validates() === false ) {
            //$this->set("url",$this->params['form']['url']);    //ヘルパーがあれば不要
            //$this->Session->setFlash('入力内容に不備があります');
            return;
        }

        //登録処理
        $this->Bookmark->save($this->data,false);    //検査済みなので検査はしない
        $this->flash("ブックマークを登録しました","/bookmarks/");
        return;
    }

    function search()
    {

        //ユーザーのリストを取得
        $user_list = $this->User->find('list');
        $this->set("user_list", $user_list);

        //その他の初期化
        //$this->set("url","");
        //$this->set("user_id",array());
        //$this->set("count","");
        //$this->set("created","");

        //検索ボタンを押されていない場合
        if ( empty($this->data) ) {
            $this->set("bookmark_list", array());
            return;
        }

        //条件指定用の配列を初期化
        $cond = array();

        //URLはLIKEで検索
        if ( !empty($this->data['Bookmark']['url']) ) {
            $cond['url LIKE'] = "%".$this->data['Bookmark']['url']."%";
            //$this->set("url", $this->params['form']['url']);
        }

        //登録者は複数指定(IN)で検索
        if ( !empty($this->data['Bookmark']['user_id']) ) {
            $cond['user_id'] = $this->data['Bookmark']['user_id'];
            //$this->set("user_id", $this->params['form']['user_id']);
        }

        //カウントは範囲検索
        if ( !empty($this->data['Bookmark']['count']) ) {
            $cond['count >='] = $this->data['Bookmark']['count'];
            //$this->set("count", $this->params['form']['count']);
        }

        //日付は範囲検索
        if ( !empty($this->data['Bookmark']['created']) ) {
            $cond['Bookmark.created >='] = $this->data['Bookmark']['created'];
            //$this->set("created", $this->params['form']['created']);
        }

        //検索 (カウント数の降順でソート)
        $params = array(
            'conditions' => $cond,
            'order' => 'count DESC'
        );
        $bookmark_list = $this->Bookmark->find('all',$params);
        $this->set("bookmark_list",$bookmark_list);
        return;
    }

    function trans($id)
    {

        $this->Bookmark->id = $id;
        $params = array(
            'condtions' => array('id' => $id)
        );
        $data = $this->Bookmark->find('first',$params);
        $this->Bookmark->saveField("count",$data['Bookmark']['count'] + 1);
        $this->redirect($data['Bookmark']['url']);
        return;
    }

}
?>