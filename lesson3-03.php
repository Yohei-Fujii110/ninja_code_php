<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>39問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h2 class="p-3 bg-danger bg-gradient text-white border border-danger-subtle">
    くじを引こう
  </h2>

  <p class="p-2 border border-dark-subtle bg-body-tertiary">
    <?php
    // 一等が1個、二等が3個、三等が6個、ハズレが90個のおみくじを引く

    // おみくじを引く
    $omikuji = rand(1, 100);

    // 出力
    if($omikuji === 1) {
      echo "{$omikuji}：一等";
    } elseif(2 <= $omikuji && $omikuji <= 4) {
      echo "{$omikuji}：二等";
    } elseif(5 <= $omikuji && $omikuji <= 10) {
      echo "{$omikuji}：三等";
    } else {
      echo "{$omikuji}：ハズレ";
    }
    ?>
  </p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>