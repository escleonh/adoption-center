<?php require_once "templates/header.php" ?>

<div class="container">
    <div class="row home-header">

    </div>
</div>
<div class='container-sm' >
    <div class='row justify-content-center' >
<!-- <div class='col'> -->
<?php 
$con = new mysqli('192.168.64.3','admin', 'Admin','adoption_center');

if($con->connect_error){
    die("Connection error: ".$con->connect_error);

}




$sql = "select * from cats";
$result = $con->query($sql);
if($result->num_rows>0){

    while($row = $result->fetch_assoc()){
        echo "
    <div class='card' style='width: 18rem; margin:20px'>
      <img src='".$row["image"]. "'class='card-img-top' alt='Image of a cute cat' >
      <div class='card-body'>
        <h5 class='card-title'>" . $row["name"]. "</h5>
        <p class='card-text'>".$row["description"]."</p>
        <a href='adoption-form.php' class='btn '>Adopt</a>
      </div>
    </div>";
    }
    
}
else{
    echo "<h5><strong>No Cute Pets at the Moment</strong></h5>";
}

?>
<!-- </div> -->
</div>
</div>
<?php require_once "templates/footer.php" ?>
