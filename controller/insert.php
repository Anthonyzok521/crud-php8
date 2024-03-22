<?php
    if(!empty($_POST['submit'])){
        if(!empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['ci'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $ci = $_POST['ci'];    

            $sql = $conection->query("INSERT INTO students(firstname, lastname, ci) VALUES('$firstname','$lastname', $ci)");

            if($sql == 1){
                echo '<div class="alert alert-success">Success</div>';
            }else{
                echo '<div class="alert alert-danger">That a problem</div>';
            }
        }
    }else{
        echo '<div class="alert alert-warning">Empty filds</div>';
    }
?>