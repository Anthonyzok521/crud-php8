<?php
    include '../model/conection.php';
    $id = $_GET['id'];
    $sql = $conection->query("select * from students WHERE id = $id");
    $student = array();
    while($data=$sql->fetch_object()){
        array_push($student, $data);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../public/stylesheets/bootstrap.min.css">
</head>
<body>
<form class="col-4 p-3" method="POST">
    <?php include '../controller/edit.php'; ?>
            <fieldset>
                <legend>Insert new student</legend>

                <div class="row">
                    <label for="staticTextFirstName" class="col-sm-2 col-form-label">Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextFirstName" placeholder="Firstname of the student" name="firstname" value="<?=$student[0]->firstname?>" required>
                    </div>
                </div>

                <div class="row">
                    <label for="staticTextlastName" class="col-sm-2 col-form-label">Lastname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextLastName" placeholder="Lastname of the student" name="lastname" value="<?=$student[0]->lastname?>" required>
                    </div>
                </div>

                <div class="row">
                    <label for="staticTextCI" class="col-sm-2 col-form-label">CI</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control-plaintext" id="staticTextCI" placeholder="CI of the student" minlength="7" maxlength="8" name="ci" value="<?=$student[0]->ci?>" required>
                    </div>
                </div>
                <button type="submit" name="edit" class="btn btn-primary" value='ok'>Edit</button>
            </fieldset>
        </form>
</body>
</html>