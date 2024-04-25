<?php
// 今月のカレンダーを画面に表示させる

// 準備

date_default_timezone_set('Asia/Tokyo');
// 今日、月の初日、見出しとなる年-月を取得
$today = new DateTime();
$start_day = new DateTime('first day of'.$today->format('Y-m'));
$year_month = $start_day->format('Y-m');


// カレンダーの最初の日を取得
$w = $start_day->format('w');
$start_day->modify('-'.$w.' day');

// カレンダーの最後の日付の一日後を作成する
$end_day = new DateTime('last day of'.$today->format('Y-m'));
$w = $end_day->format('w');
$end_day->modify('+'.$w.' day');

// カレンダーに載せたい期間のDateTimeインスタンスを作成する
// DatePeriodの第三引数（終了日）は当日を含まない！！！
$period = new DatePeriod(
  $start_day,
  new DateInterval('P1D'),
  $end_day
);


// 表示のための処理
$body = '';

foreach($period as $day) {
  // 当月以外の日付はgreyクラスを付与してCSSで色をグレーにする
  $grey_class = $day->format('Y-m') === $year_month ? '' : 'grey' ;

  // 当日にはtodayクラスを付与してCSSで数字の見た目を変える
  $today_class = $day->format('Y-m-d') === $today->format('Y-m-d') ? 'today' : '';

  // その日が日曜日なら<tr>
  if($day->format('w') == 0) {
    $body .= '<tr>';
  }

  // sprintfを使って整形しながらhtml部分を作成する
  $body .= sprintf(
    '<td class="youbi_%d %s %s">%d</td>',
    $day->format('w'),
    $today_class,
    $grey_class,
    $day->format('d')
  );

  // その日が土曜なら</tr>
  if($day->format('w') == 6) {
    $body .= '</tr>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>48問目</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="lesson3-12.css">
</head>

<body>
  <h2 class="p-3 bg-danger bg-gradient text-white border border-danger-subtle">
    カレンダーを表示しよう
  </h2>

  <p class="p-2 border border-dark-subtle bg-body-tertiary">
   <table>
    <thead>
      <tr>
        <th></th>
        <th colspan="5"><?php echo $year_month; ?></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>日</td>
        <td>月</td>
        <td>火</td>
        <td>水</td>
        <td>木</td>
        <td>金</td>
        <td>土</td>
      </tr>
      <?php echo $body; ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="7"><a href="">today</a></th>
      </tr>
    </tfoot>
   </table>
  </p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>