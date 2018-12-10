<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>
<?php

  $data = read_file('../private/used_bicycles.csv');

  foreach ($data as $k => $v)
  {

  }



$args = ['brand'=>'Trek', 'model'=>'Emonda', 'year'=>'2017', 'gender'=>'Unisex', 'color'=>'black',
  'weight_kg' => 1.5, 'price' =>1000, 'category' => Bicycle::CATEGORIES[0]];
$bike = new Bicycle($args);

?>
      <?php for ($i = 0; $i < sizeof($data); $i++) {

        if($i == 0) { continue; }

        $args1 = ['brand' => $data[$i][0], 'model' => $data[$i][1], 'year' => $data[$i][2], 'category' => $data[$i][3],
          'gender' => $data[$i][4], 'color' => $data[$i][5], 'weight_kg' => floatval($data[$i][6]), 'condition_id' => $data[$i][7],
          'price' => floatval($data[$i][8])];

        $bike = new Bicycle($args1);

      ?>
      <tr>
        <td><?php echo h($bike->brand); ?></td>
        <td><?php echo h($bike->model); ?></td>
        <td><?php echo h($bike->year); ?></td>
        <td><?php echo h($bike->category); ?></td>
        <td><?php echo h($bike->gender); ?></td>
        <td><?php echo h($bike->color); ?></td>
        <td><?php echo h($bike->weight_kg()) . ' / ' . h($bike->weight_lbs()); ?></td>
        <td><?php echo h($bike->condition()); ?></td>
        <td><?php echo "$" . number_format(h($bike->price), 2); ?></td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
