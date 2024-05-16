<?php include_once('..\model\dbcon.php')?> 
<?php

    $row = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * from farmacos WHERE id = '$id'";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query Failed".mysqli_error($connection));
        }
        else{
            $row = mysqli_fetch_assoc($result);
            
        }
    }
?>