<?php include_once('..\model\dbcon.php')?>   

<?php
    
?>


<?php
    if(isset($_POST['add_cadastro'])){

        $idnew = $_REQUEST['id'];

        $name = $_POST['nome_comercial'];
        $preco = $_POST['preco'];

        $query = "UPDATE farmacos SET 
        nome_comercial = '$name',
        preco = $preco
        WHERE id = $idnew";

        print_r($query);
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error($connection));
        }           
        else {
            header('location:..\view\index.php?update_msg=Atualização realizada com sucesso');
        }
    }
    else {
        print_r('olá');
    }

?>