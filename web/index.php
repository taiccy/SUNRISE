<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<main>
  <div class="top-wrapper">
    <div class="container">
      <h1>SUNRISEグループ</h1>
      <p>成果が出ない時こそ、不安がらずに、恐れずに、迷わずに一歩一歩進めるかどうかが、成長の分岐点である。</p>
      <div class="btn-wrapper">
        <a class="btn" href="#">シフト提出</a>
        <p></p>
        <a class="btn btn-2" href="#">予約管理</a>
        <a class="btn" href="#">顧客管理</a>
      </div>
    </div>
  </div>
  <div class="item-wrapper">
    <div class="container">
      <div class="heading">
        <h2>各ページの概要</h2>
      </div>
      <div class="items">
        <div class="item">
          <div class="item-icon">
            <img src="../image/item.png">
            <p>シフト提出</p>
          </div>
          <p class="txt-content">シフトの更新は月曜日から日曜日の１週間単位で公開され、前の週の木曜日22時に自動更新されます。よって、木曜日の21時ごろまでには、次の週のシフト提出を済ませておいてください。期日までに提出がない場合は、デフォルトの値で更新されます。</p>
        </div>
        <div class="item">
          <div class="item-icon">
            <img src="../image/item.png">
            <p>予約管理</p>
          </div>
          <p class="txt-content">ボーイごとの予約状況や、お客様からのお問い合わせを確認することができます。お客様からのお問い合わせに関しては、出来るだけ早く、返信ができるようにしましょう。</p>
        </div>
        <div class="item">
          <div class="item-icon">
            <img src="../image/item.png">
            <p>顧客管理</p>
          </div>
          <p class="txt-content">今までにご指名があったお客様の情報を確認することができます。リピートのお客様がどのくらいの頻度で来ているのか確認したり、お客様メモの追加をすることも可能です。</p>
        </div>
        <div class="item">
          <div class="item-icon">
            <img src="../image/item.png">
            <p>その他</p>
          </div>
          <p class="txt-content">その他追加してほしいページがあればオーナーまで</p>
        </div>
      </div>
    </div>
  </div>
  <div class="message-wrapper">
    <div class="container">
      <div class="heading">
        <h2>さぁ、管理ページをフル活用しよう</h2>
        <p>安定したシフト更新、予約の把握、しっかりとした顧客管理が、着実な売り上げアップに繋がります。常にログインをして、成長に繋げよう。</p>
      </div>
      <div class="btn-wrapper">
        <a class="btn" href="">ログイン</a>
      </div>
    </div>
  </div>
</main>

<?php

include('../app/_parts/_footer.php');
