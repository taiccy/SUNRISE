<?php

$title = 'スケジュール | ';
include('../app/_parts/_header.php');

?>

  <main>
    <h1 class="page-name">スケジュール</h1>
    <div class="">
      <p>注意事項</p>
      <p>注意事項</p>
      <p>注意事項</p>
    </div>
    <div class="schedule-container">
      <?php foreach ($casts as $cast): ?>
      <section>
        <a href="boy<?= $cast->id; ?>.php"></a>
        <img src="img/boys/boy<?= $cast->id; ?>.jpg">
        <p><?= $cast->name; ?></p>
        <p>14:00〜24:00</p>
        <p>STAY ◯</p>
      </section>
      <?php endforeach ?>
    </div>

  </main>

<?php

include('../app/_parts/_footer.php');
