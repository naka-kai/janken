<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>じゃんけん</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
</head>

<body>
  <form action="result.php" method="post">
    <p>じゃんけん...</p>
    <div class="myHand_wrapper">
      <div class="myHand_gu_wrapper">
        <input type="radio" name="myHand" id="myHand_gu" value="グー">
        <label>グー</label>
      </div>

      <div class="myHand_choki_wrapper">
        <input type="radio" name="myHand" id="myHand_choki" value="チョキ">
        <label>チョキ</label>
      </div>

      <div class="myHand_pa_wrapper">
        <input type="radio" name="myHand" id="myHand_pa" value="パー">
        <label>パー</label>
      </div>
    </div>
    <div class="submitBtn-wrapper">
      <input type="submit" name="submit" value="ぽん">
    </div>
  </form>
</body>

</html>
