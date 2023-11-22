<?php 
include "config.php";
$query = "SELECT * FROM tb_note";
$sql = mysqli_query($conn,$query);


// var_dump($result);
// die();


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NotePAD</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- nav start -->
    <div class="container">
        <h3 class="text-info mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>
              NotePAD
        </h3>
      <div class="card shadow bg-body-tertiary rounded mb-4">
          <div class="card-body">
            <form class="d-flex" action="insert.php" method="post">
            <input class="form-control me-2" name="title_note" placeholder="TITLE..." required>
            <input class="form-control me-2" name="note_note" placeholder="KLIK..." required>
            <button class="btn btn-primary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
            </button>
            </form>
          </div>
        </div>    
    <!-- nav end -->

    <!-- card start -->
              <?php 
              while($result = mysqli_fetch_assoc($sql)){
              ?>
                <div class="card mt-4">
                    <h5 class="card-header"><?php echo ++$id_note ?></h5>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $result['title_note']; ?></h5>
                      <p class="card-text"><?php echo $result['note_note']; ?></p>
                      <a href="update.php?edit=<?php echo $result['id_note']; ?>" class="btn btn-info">Edit</a>
                      <a href="delete.php?delete=<?php echo $result['id_note']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
              <?php
              }
              ?>
            
          
    </div>
    <!-- card end -->

   <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>