<?php
class User extends AppModel
{
    var $name = 'User';
    var $validate = array(

            //単純なルール指定のみ
            'mail' => array(
                'rule' => array('email'),
                'required' => true,    //入力を必須とする
                'allowEmpty' => false, //空白を許可しない
                'message' => 'メールアドレスを入力してください' //エラー時のメッセージ
            ),
            //設定を追加したルール指定
            'name' => array(
                'rule' => array('maxLength',32),
                'required' => true,    //入力を必須とする
                'allowEmpty' => false, //空白を許可しない
                'on' => 'create', //検証を登録時のみ実施する
                'message' => '名前は全角16文字以内で入力してください' //エラー時のメッセージ
            ),

            //複数のルールを1つの項目に指定する
            'password' => array(
                //1つめのルール
                'passtype' => array(
                    'rule' => 'alphaNumeric',
                    'required' => true,    //入力を必須とする
                    'allowEmpty' => false, //空白を許可しない
                    'message' => 'パスワードは英数字で入力してください' //エラー時のメッセージ
                ),
                //2つめのルール
                'passlength' => array(
                    'rule' => array('maxLength',8),
                    'required' => true,    //入力を必須とする
                    'allowEmpty' => false, //空白を許可しない
                    'message' => 'パスワードは8文字以内で入力してください' //エラー時のメッセージ
                ),
            )
        );

    function validates()
    {
        //設定されたvalidatesを検証
        parent::validates();

        //パスワードとメールアドレスの一致を禁止する
        if ( $this->data['User']['mail'] === $this->data['User']['password'] ) {
            $this->invalidate("password","パスワードとメールアドレスが同一です");
        }

        //結果の返却
        if ( count($this->invalidFields()) > 0) {
            return false;  //失敗
        } else {
            return true;  //成功
        }

    }
}
?>