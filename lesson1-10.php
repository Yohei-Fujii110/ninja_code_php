<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h2 class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    配列から文字列を組み立てよう
  </h2>

  <p>
    <?php
    // 教材に指定されたコード
    $list = [
      1 => '忍者',
      2 => ['CO', 'DE'],
      3 => '{"text1":"無", "text2":"料"}',
      4 => [
        401 => '集',
        402 => '人参',
        403 => '問題',
      ],
    ];

    // 自分で書いたコード
    // listの3を連想配列に変換
    $arrayList3 = json_decode($list[3], true);

    // 欲しいものを出していく
    echo $list[1];

    foreach($list[2] as $value) {
      echo $value;
    }

    foreach($arrayList3 as $key => $value) {
      echo $value;
    }

    echo $list[4][403];
    echo $list[4][401];
    ?>
  </p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>