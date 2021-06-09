<?php
  include __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>php ajax dischi</title>
</head>
<body>
  <!-- HEADER -->
  <header class="d-flex justify-content-between ps-3 pe-3">
    <div>
      <img src="assets/img/spotify-logo.png" alt="Spotify">
    </div>
  </header>

  <!-- MAIN -->
  <div class="container mt-5">
    <div class="d-flex flex-wrap">
      <?php foreach($database as $disc) {?>
        <div class="box_album text-center">
          <div class="p-3">
            <div class="box_img">
              <img class="album_img img-fluid mb-3" src="<?php echo $disc['poster']?>" alt="foto album">
            </div>
            <h3><?php echo $disc['title']?></h3>
            <p><?php echo $disc['author']?></p>
            <p><?php echo $disc['year']?></p>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
  
</body>
</html>