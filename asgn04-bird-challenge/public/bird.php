<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Birds'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" />
      <h2>Flocks of Birds</h2>
      <p>Watch the birds you love.</p>
      <p>Birds will deliver their songs straight to your door.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>
<?php

$parser = new parsecsv(PRIVATE_PATH . '/wnc-birds.csv');
$bird_array = $parser->parse();


?>
      <?php foreach($bird_array as $args) { 
        $bird = new Bird($args);?>
      <tr>
        <td><?php echo h($bird->commonName); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->nestPlacement); ?></td>
        <td><?php echo h($bird->behavior); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyardTips); ?></td>
      </tr>
      <?php } ?>
      </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
