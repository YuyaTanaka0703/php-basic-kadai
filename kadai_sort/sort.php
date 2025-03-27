<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      
        function sort_2way($array,$order) {
          if($order === TRUE){
            echo '昇順にソートします。<br>';
            asort($array);
            foreach ($array as $value) {
              echo $value . '<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            arsort($array);
            foreach ($array as $value) {
              echo $value . '<br>';
            }
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソートする
        sort_2way($nums, TRUE);

        // 降順にソートする
        sort_2way($nums, FALSE);
      ?>
    </p>
  </body>
</html>