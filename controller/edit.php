<?php
    if(!empty($_POST['edit'])){
        if(!empty($_POST['firstname'] and !empty($_POST['lastname'] and !empty($_POST['ci'])))){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $ci = $_POST['ci'];

            $sql = $conection->query("UPDATE students SET firstname='$firstname', lastname='$lastname', ci=$ci WHERE id=$id");

            if($sql == 1){
                header("location:../index.php");
            }else{
                echo "<div class='alert alert-danger'>There a problem</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Empty filds</div>";
        }
    }
?>