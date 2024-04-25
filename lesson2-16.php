<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>35問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h2 class="p-3 bg-success text-white border border-success-subtle">
    うるう年を求めよう
  </h2>

  <p class="p-2 border border-dark-subtle bg-body-tertiary">
    <?php
    // 配列に格納している年から閏年のみ取得したい
    // 教材に指定されたコード
    $years = [1900, 2000, 2020, 2022];

    function is_leap_year($year) {
      if($year % 4 === 0) {
        if($year % 100 === 0) {
          if($year % 400 === 0) {
            return 1;
          } else {
            return 0;
          }
        } else {
          return 1;
        }
      } else {
        return 0;
      }
    }

    foreach($years as $year) {
      if(is_leap_year($year)) {
        echo "{$year}年はうるう年です<br>";
      } else {
        echo "{$year}年はうるう年ではありません<br>";
      }
    }
    ?>
  </p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>