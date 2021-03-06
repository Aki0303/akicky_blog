<?php
  class Blog {
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


    // function save() {
    //   $sql = sprintf('INSERT INTO `users` SET `user_name`="%s", `email`="%s", `password`="%s", `user_picture`="%s", `created`=now()',
    //             mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name']),
    //             mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['email']),
    //             mysqli_real_escape_string($this->dbconnect, sha1($_SESSION['user']['password'])),
    //             mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_picture'])
    //         );
    //         mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //         unset($_SESSION['user']);
    // }


    // function login() {
    //   $sql = sprintf('SELECT * FROM `users` WHERE `user_name` = "%s" AND password="%s"',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name']),
    //     mysqli_real_escape_string($this->dbconnect, sha1($_SESSION['user']['password']))
    //     );
    // // SQLの実行と変数に格納
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   return $record;
    // }


    // function mypage() {
    //   // SQLの実行
    //   $sql     = 'SELECT * FROM `users` WHERE `id` = "%d"';
    //   $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   // $rtn     = array();
    //   // while ($result = mysqli_fetch_assoc($results)) {
    //   //   $rtn[] = $result;
    //   // }
    //   // 取得結果を返すresultsに入らない
    //   return $results; 
    // }


    // function favUserList() {
    //   $sql = sprintf('SELECT * FROM `users` u, `user_like` ul WHERE u.`id` = ul.`favorite_user_id` AND `user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id'])
    //   );
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $rtn = array();
    //   while ($table = mysqli_fetch_assoc($record)) {
    //     $rtn[] = $table;
    //   }
    //   return $rtn;
    // }


    // function postPlanContents() {
    //   $sql = sprintf('SELECT * FROM `plans` p, (SELECT * FROM `plan_spots` WHERE `spot_number` = 1) ps WHERE p.`id` = ps.`plan_id` AND `user_id` = %d LIMIT %d, 5',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
    //     $_SESSION['start']
    //   );
    //   $content      = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $contents     = array();
    //   while ($table = mysqli_fetch_assoc($content)) {
    //     $contents[] = $table;
    //   }
    //   return $contents;
    // }


    // function favPlan() {
    //   $sql = sprintf('SELECT * FROM `plans` p, (SELECT * FROM `plan_spots` WHERE `spot_number` = 1) ps, `plan_like` pl, `users` u WHERE p.`id` = ps.`plan_id` AND p.`user_id` = u.`id` AND p.`id` = pl.`favorite_plan_id` AND pl.`user_id` = %d LIMIT %d, 5',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
    //     $_SESSION['likeStart']
    //   );
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $rtn = array();
    //   while ($table = mysqli_fetch_assoc($record)) {
    //     $rtn[] = $table;
    //   }
    //   return $rtn;
    // }


    // function friendPlanContents($id) {
    //   $sql = sprintf('SELECT * FROM `plans` p, `users` u, (SELECT * FROM `plan_spots` WHERE `spot_number` = 1) ps WHERE p.`user_id` = u.`id` AND p.`id` = ps.`plan_id` AND p.`user_id` = %d LIMIT %d, 5',
    //     mysqli_real_escape_string($this->dbconnect, $id),
    //     $_SESSION['start']
    //   );
    //   $content      = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $contents     = array();
    //   while ($table = mysqli_fetch_assoc($content)) {
    //     $contents[] = $table;
    //   }
    //   return $contents;
    // }


    // function friendPostPaging($id) {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `plans` p, `users` u, (SELECT * FROM `plan_spots` WHERE `spot_number` = 1) ps WHERE p.`user_id` = u.`id` AND p.`id` = ps.`plan_id` AND p.`user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   $recordSet = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $table     = mysqli_fetch_assoc($recordSet);
    //   // ceil()関数：切り上げする関数
    //   $maxPage   = ceil($table['cnt'] / 5);

    //   return $maxPage;
    // }


    // function likeNum() {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `user_like` WHERE `favorite_user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id'])
    //   );
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   // 連想配列としてSQLの実行結果を受け取る(keyと値)
    //   $likeNum = mysqli_fetch_assoc($record);

    //   return $likeNum;
    // }


    // function profile($id) {
    //   $sql     = sprintf('SELECT * FROM `users` WHERE `id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $result  = mysqli_fetch_assoc($results);
    //   return $result;
    // }


    // function mypostpaging() {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `plans` WHERE `user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id'])
    //   );
    //   $recordSet = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $table     = mysqli_fetch_assoc($recordSet);
    //   // ceil()関数：切り上げする関数
    //   $maxPage   = ceil($table['cnt'] / 5);

    //   return $maxPage;
    // }


    // function postpaging($id) {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `plans` WHERE `user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   $recordSet = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $table     = mysqli_fetch_assoc($recordSet);
    //   // ceil()関数：切り上げする関数
    //   $maxPage   = ceil($table['cnt'] / 5);

    //   return $maxPage;
    // }


    // function myLikePaging() {
    //   // ②必要なページ数を計算する
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `plans` p, `plan_like` pl WHERE p.`user_id` = %d AND pl.`favorite_plan_id` = p.`id`',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id'])
    //     );
    //   $recordSet = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   $table     = mysqli_fetch_assoc($recordSet);
    //   // ceil()関数：切り上げする関数
    //   $maxLikePage   = ceil($table['cnt'] / 5);

    //   return $maxLikePage;
    // }


    // function likeStatus($id) {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `user_like` WHERE `user_id` = %d AND `favorite_user_id`= %d',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //         );
    //   // SQL実行(失敗したらエラーを表示)
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   // 連想配列としてSQLの実行結果を受け取る(keyと値)
    //   $table = mysqli_fetch_assoc($record);
    //   $likeStatus = '';
    //   if ($table['cnt'] >= 1) {
    //     //１件以上あったらエラー
    //     $likeStatus = 'UNLIKE';
    //   } else if ($table['cnt'] == 0) {
    //     $likeStatus = 'LIKE';
    //   }
    //   return $likeStatus;
    // }


    // function likeCount($id) {
    //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `user_like` WHERE `favorite_user_id` = %d',
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    //   // 連想配列としてSQLの実行結果を受け取る(keyと値)
    //   $likeCount = mysqli_fetch_assoc($record);

    //   return $likeCount;
    // }


    // function like($id) {
    //   $sql = sprintf('INSERT INTO `user_like`(`user_id`, `favorite_user_id`) VALUES ( %d, %d)',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    // }


    // function unlike($id) {
    //   $sql = sprintf('DELETE FROM `user_like` WHERE `user_id` = %d AND `favorite_user_id`= %d',
    //     mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
    //     mysqli_real_escape_string($this->dbconnect, $id)
    //   );
    //   mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    // }
  }
?>