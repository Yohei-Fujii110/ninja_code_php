<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>28問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h2 class="p-3 bg-success text-white border border-success-subtle">
    URLを分解しよう
  </h2>

  <p class="p-2 border border-dark-subtle bg-body-tertiary">
    <?php
    // 教材に指定されたコード
    $url = 'https://example.com/a/b/c.php?d=1&e=2#f';

    // クエリパラメータ：urlの?以降のところ。データのやり取りの方法を指定しているらしい
    // parse_urlでurlを分解し、parse_strで配列として取得する
    parse_str(parse_url($url, PHP_URL_QUERY), $query);

    // 出力
    foreach($query as $key=>$value) {
      echo "{$key}：{$value}<br>";
    }

    echo '<pre>';
    print_r($query);
    echo '</pre>';
    ?>
  </p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>