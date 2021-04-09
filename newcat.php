<?php require_once "templates/header.php" ?>

<?php 
$server = "192.168.64.3";
$username = "admin";
$password = "Admin";
$dbname = "adoption_center";

$con = new mysqli($server, $username, $password, $dbname);

if ($con->connect_error){
    die("connection failed: ".$con->connect_error);
}


if(!empty($_POST['name'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $folder = "uploads/";
    $target_file = $folder.basename($_FILES["img"]["name"]);
    
    $sql = " INSERT INTO cats (name, description, image)
    VALUES('$name', '$description', '$target_file')";
    
    if($con->query($sql)===TRUE){
        

        if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
            echo "<div class='alert  ' role='alert' style='text-align:center';>
            You have successfully added ".$name."
            </div>";
            // header('Location: http://192.168.64.3/Cats/');
        }
        else{
            echo "could not upload image";
        }
    }
    else{
        echo "Error: ".$sql."<br>".$con->error;

    }
}

$con->close();
?>
<?php ?>


<div class="container-sm" >
    <div class="row align-items-center" style="margin-top:10vh;">
        <div class="col-lg-4"> 
        </div>
        
        <div class="col-lg-4">
            <form method="POST" id="new-pet-form" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Cat Name">
            </div>

            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea  class="form-control" id="description" name= "description" placeholder="Description" rows="5" ></textarea>
            </div>

            <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="file" class="form-control" id="img" name ="img" placeholder="Image">
            </div>

            <button type="submit" class="btn">Add</button>
            </form>
        </div>

        <div class="col-lg-4">
        </div>

    </div>
</div>



<?php require_once "templates/footer.php" ?>
