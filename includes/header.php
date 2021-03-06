<?php include_once 'includes/session.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/site.css">
    <title> Attendance - <?php echo $title?> </title>
  </head>

  <body>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">IT Conferece</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            
            <div class="navbar-nav mr-auto">
            
                <a class="nav-item nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>
            </div>

            <div class="navbar-nav ml-auto">
              <?php if(!isset($_SESSION['userid'])){ ?>
                <a class="nav-item nav-link active" aria-current="page" href="login.php">Login</a>
                <?php } else{ ?>
                  <a class="nav-item nav-link active" aria-current="page" href="#"><span>Hello <?php echo $_SESSION['username']?> </span></a>
                  <a class="nav-item nav-link active" aria-current="page" href="logout.php">Log out</a>
                  <?php }?>
            </div>
          </div>
        </div>
      </nav>

      