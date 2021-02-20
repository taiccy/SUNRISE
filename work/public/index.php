<?php

$title = '';
$todayBoys = '出勤情報 ' . date('m') . '月'. date('d') . '日';
include('../app/_parts/_header.php');

?>

  <div class="slide-banner">
    <img src="img/slide-banner/grand-open.jpg" alt="">
  </div>

  <main>
    <h1><?= h($todayBoys); ?></h1>
    <div class="boy-container">
      <?php foreach ($casts as $cast): ?>
      <section>
        <a href="boy<?= $cast->id; ?>.php"></a>
        <img src="img/boys/boy<?= $cast->id; ?>.jpg">
        <p><?= $cast->name; ?></p>
        <p>14:00〜24:00</p>
        <p>STAY ◯</p>
        <p>オススメのボーイ</p>
      </section>
      <?php endforeach ?>
    </div>

    <h1>ニュース</h1>
    <p>NEWS</p>
    <p>NEWS</p>
    <p>NEWS</p>
    <p>NEWS</p>
    <p>NEWS</p>

    <img class="ad" src="img/slide-banner/nav1.jpg" alt="">
    <img class="ad" src="img/slide-banner/nav2.jpg" alt="">
    <img class="ad" src="img/slide-banner/nav3.jpg" alt="">
    
  </main>

<?php

include('../app/_parts/_footer.php');