<?php include_once('..\model\dbcon.php')?> 
<div class="mensagens">
<?php
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
?>
<?php
    if(isset($_GET['msg'])){
        echo "<h6>".$_GET['msg']."</h6>";
    }
?>
<?php
    if(isset($_GET['update_msg'])){
        echo "<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php
    if(isset($_GET['delete_msg'])){
        echo "<h6>".$_GET['delete_msg']."</h6>";
    }
?>
</div>