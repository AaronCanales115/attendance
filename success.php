<?php
$title = 'Success'; 
require 'includes/header.php'; 
require_once 'db/conn.php';
//require 'sendemail.php';

if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $specialty = $_POST['specialty'];
  $isSucces = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

  if($isSucces){
    //SendEmail::sendEmail($email, 'Welcome to IT conference', 'You have successfully registered.');
    echo '<h1 class="text-center text-success">You have been registered!</h1>';
  } 
  else{
    echo '<h1 class="text-center text-danger">There was an error with your registration!</h1>';
  }

}

?>

<!-- Get Method 
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php //echo $_GET["firstname"] . " " . $_GET["lastname"] ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"> <?php //echo $_GET["specialty"] ?> </h6>
    <p class="card-text">Date of Birth: <?php //echo $_GET["dob"]?></p>
    <p class="card-text">Email: <?php //echo $_GET["email"];?></p>
    <p class="card-text">Phone number: <?php //echo $_GET["phone"];?></p>
    <a href="#" class="card-link">Facebook</a>
    <a href="#" class="card-link">Twitter</a>
  </div>
</div> -->

<!-- Post Method -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["firstname"] . " " . $_POST["lastname"] ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST["specialty"] ?> </h6>
    <p class="card-text">Date of Birth: <?php echo $_POST["dob"]?></p>
    <p class="card-text">Email: <?php echo $_POST["email"];?></p>
    <p class="card-text">Phone number: <?php echo $_POST["phone"];?></p>
    <a href="#" class="card-link">Facebook</a>
    <a href="#" class="card-link">Twitter</a>
  </div>
</div>

<?php require 'includes/footer.php'; ?>