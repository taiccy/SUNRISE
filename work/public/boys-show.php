<?php

$title = 'ボーイ編集 | ';
include('../app/_parts/_header.php');

?>

  <main>
    <h1 class="page-name">ボーイ編集</h1>
    <div class="add">
      <h3>ボーイ追加</h3>
      <form action="" method="post">
          <input type="text" name="name" placeholder="源氏名">
          <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      </form>
    </div>
    <div class="boy-container">
      <table>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>is_working</th>
          <th>shop</th>
          <th>start_date</th>
          <th>real_name</th>
          <th>real_name_j</th>
          <th>birthday</th>
          <th>address</th>
          <th>phone_number</th>
        </tr>
        <?php foreach ($casts as $cast): ?>
        <tr>
          <td><a href=""><?= $cast->id; ?></a></td>
          <td><?= $cast->name; ?></td>
          <td><?= $cast->is_working; ?></td>
          <td><?= $cast->shop; ?></td>
          <td><?= $cast->start_date; ?></td>
          <td><?= $cast->real_name; ?></td>
          <td><?= $cast->real_name_j; ?></td>
          <td><?= $cast->birthday; ?></td>
          <td><?= $cast->address; ?></td>
          <td><?= $cast->phone_number; ?></td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
  </main>

<?php

include('../app/_parts/_footer.php');