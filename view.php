<?php
$title = 'Index'; 
require 'includes/header.php'; 
require_once 'db/conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);
}else{
    echo '<h2>there has been an error here</h2>';
}
?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result["firstname"] . " " . $result["lastname"] ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $result["name"] ?> </h6>
    <p class="card-text">Date of Birth: <?php echo $result["dateofbirth"]?></p>
    <p class="card-text">Email: <?php echo $result["emailadress"];?></p>
    <p class="card-text">Phone number: <?php echo $result["contacnumber"];?></p>
    <a href="#" class="card-link">Facebook</a>
    <a href="#" class="card-link">Twitter</a>
  </div>
</div>
<?php require 'includes/footer.php'; ?>