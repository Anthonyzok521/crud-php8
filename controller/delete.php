<?php 
    if(!empty($_POST['delete'])){
        $sql = $conection->query("DELETE FROM students WHERE id=$id");
        if($sql == 1){
            header("location:../index.php");
        }
    }
?>