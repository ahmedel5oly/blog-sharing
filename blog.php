<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM blog';
$result = mysqli_query($conn, $sql);
$blog = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

   
  <h2>Past Blog</h2>

  <?php if (empty($blog)): ?>
    <p class="lead mt-3">There is no blog</p>
  <?php endif; ?>

  <?php foreach ($blog as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">By <?php echo $item[
         'name'
       ]; ?> on <?php echo date_format(
   date_create($item['date']),
   'g:ia \o\n l jS F Y'
 ); ?></div>
     </div>
   </div>
  <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>
