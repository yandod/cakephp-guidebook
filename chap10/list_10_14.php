<?php
class DboSimple extends DboSource {
  /**
   * @return boolean 成功時True
   */
  function connect()
  {
    // 接続処理
    return true;
  }

  /**
   * @return boolean 成功時True
   */
  function disconnect()
  {
    // 切断処理
    return true;
  }

  /**
   * @return integer
   */
  function lastNumRows()
  {
    return 0;
  }

  /**
   * @return integer
   */
  function lastAffected()
  {
    return 0;
  }

  /**
   * @param Model &$model モデル
   * @param array $fields カラム連想配列
   * @param array $values 値連想配列
   * @return boolean 成功時True
   */
  function create(&$model, $fields = null, $values = null)
  {
    // 追加処理
    return true;
  }

  /**
   * @param Model &$model モデル
   * @param array $queryData 条件連想配列
   * @param integer $recursive アソシエーションレベル
   * @return array 読込結果連想配列
   */
  function read(&$model, $queryData = array(), $recursive = null)
  {
    $values = array();
    $values[] = array('id' => 1, 'name' => 'Hoge', 'email' => 'foo@ example.com');
    $values[] = array('id' => 2, 'name' => 'Hoge2', 'email' => 'foo2@ example.com');
    // 読み込み処理
    return $values;
  }

  /**
   * @param Model &$model モデル
   * @param array $fields カラム連想配列
   * @param array $values 値連想配列
   * @param mixed $conditions 条件連想配列 or 文字列
   * @return boolean 成功時True
   */
  function update(&$model, $fields = array(), $values = null, $conditions = null)
  {
    // 更新処理
    return true;
  }

  /**
   * @param Model &$model モデル
   * @param mixed $conditions 条件連想配列 or 文字列
   * @return boolean 成功時True
   */
  function delete(&$model, $conditions = null)
  {
    // 削除処理
    return true;
  }

  /**
   * @param mixed $data 取得した値（キャッシュ生成時に使用）
   * @return array テーブル一覧連想配列
   */
  function listSources($data = null)
  {
    // テーブル一覧取得
    return array('users', 'items');
  }

  /**
   * @param Model &$model モデル
   * @return mixed データレコード定義連想配列
   */
  function describe($model)
  {
    // テーブルカラム取得
    $columns = array(
      'id' => array(
          'type' => 'integer',
          'null' => false,
          'default' => null,
          'length' => PHP_INT_SIZE,
          ),
    );

    return $columns;
  }
}
?>