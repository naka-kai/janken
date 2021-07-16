<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>じゃんけん</title>
</head>

<body>
  <?php
  $myHand = $_POST['myHand'];
  if (isset($_POST['myHand'])) :
    $pcHands = ['グー', 'チョキ', 'パー'];
    $key = array_rand($pcHands);
    $pcHand = $pcHands[$key];

    if ($myHand == $pcHand) : ?>
      <p>PC：<?php echo $pcHand; ?></p>
      <p>あなた：<?php echo $myHand; ?></p>
      <p>あいこです</p>
    <?php elseif ($myHand == 'グー' && $pcHand == 'チョキ') : ?>
      <p>PC：<?php echo $pcHand; ?></p>
      <p>あなた：<?php echo $myHand; ?></p>
      <p>あなたの勝ちです</p>
    <?php elseif ($myHand == 'チョキ' && $pcHand == 'パー') : ?>
      <p>PC：<?php echo $pcHand; ?></p>
      <p>あなた：<?php echo $myHand; ?></p>
      <p>あなたの勝ちです</p>
    <?php elseif ($myHand == 'パー' && $pcHand == 'グー') : ?>
      <p>PC：<?php echo $pcHand; ?></p>
      <p>あなた：<?php echo $myHand; ?></p>
      <p>あなたの勝ちです</p>
    <?php else : ?>
      <p>PC：<?php echo $pcHand; ?></p>
      <p>あなた：<?php echo $myHand; ?></p>
      <p>あなたの負けです</p>
    <?php endif; ?>
  <?php endif; ?>
  <a href="index.php">もう一度する</a>
</body>

</html>
