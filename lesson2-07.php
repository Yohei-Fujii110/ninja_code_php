<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>26問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h2 class="p-3 bg-success text-white border border-success-subtle">
    連想配列を操作しよう
  </h2>

  <p class="p-2 border border-dark-subtle bg-body-tertiary">
    <?php
    // 教材に指定されたコード
    $list[] = ['name' => 'A', 'test' => [10, 3, 5]];
    $list[] = ['name' => 'B', 'test' => [7, 9]];
    $list[] = ['name' => 'C', 'test' => []];
    $list[] = ['name' => 'D', 'test' => ""];
    $list[] = ['name' => 'E', 'test' => [7]];
    $list[] = ['name' => 'F', 'hoge' => []];

    // $listのそれぞれの要素についてみていく
    for($i = 0; $i < count($list); $i ++) {
      $total = 0;
      $count = 0;

      // testというキーがあり、且つ、値は配列の形をとっているか
      if(isset($list[$i]['test']) && is_array($list[$i]['test'])) {
        // 得点をみていく
        foreach($list[$i]['test'] as $point) {
          $total += $point;
          $count ++;
        }
      }

      // $countが0かそうでないかの場合分けでの処理
      if($count) {
        $list[$i]["average"] = $total / $count;
      } else {
        $list[$i]["average"] = 0;
      }
    }

      // usort()関数（配列ソートのためのコールバック関数）のためのコールバック部分を作る
      // 変数は何でもいい
      function sort_test($a, $b) {
        if($a["average"] === $b["average"]) {
          return 0;
        } else {
          // 三項演算子
          return ($a["average"] < $b["average"])?1:-1;
        }
      }
      // 並び替え
      usort($list, "sort_test");
      // 出力
      foreach($list as $value) {
        echo "{$value['name']}：{$value["average"]}<br>";
      }

      print_r($list);
    ?>
  </p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>