<?php
  class Home {
    // プロパティ
    private $dbconnect = '';
    // コンストラクタ
    function __construct() {
      // DB接続ファイルを読み込む
      require('dbconnect.php');
      // DB接続設定の値をプロパティに代入
      $this->dbconnect = $db;
    }


    // function duplicate() {
    // // 重複チェック
    //   $error = array();
    //   $sql   = sprintf('SELECT COUNT(*) AS cnt FROM `users` WHERE`user_name` = "%s"',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name'])
    //   );
    // //SQL実行
    //   $record = mysqli_query($this->dbconnect, $sql)or die(mysqli_error($this->dbconnect));
    // //連想配列としてSQL実行結果を受け取る
    //   $table = mysqli_fetch_assoc($record);
    //     if($table['cnt']>0){
    //     //同じエラーが1件以上あったらエラー
    //     $error_message['user_name'] = 'duplicate';
    //     }
    //   return $error_message;
    // }

  }
?>