<?php include_once('..\model\dbcon.php')?>  

<?php
    print_r('ola');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $query = "DELETE from farmacos WHERE id = $id";
        print_r($query);
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query Failed". mysqli_error($connection));
        }
        else {
            header('location:..\view\index.php?delete_msg=Cadastro excluído com sucesso');
    

        }
        
    } else {
        print_r('morri');
    }

?>

