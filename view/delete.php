<?php 
    include '../model/conection.php';
    $id = $_GET['id'];
    $sql = $conection->query("select firstname from students WHERE id = $id");
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
    <title>Delete</title>
    <link rel="stylesheet" href="../public/stylesheets/bootstrap.min.css">
</head>
<body>
<form class="col-4 p-3" method="POST">
    <?php include '../controller/delete.php'; ?>
            <fieldset>
                <legend>You is sure?</legend>

                <div class="row">
                    <label for="staticTextFirstName" class="col-sm-2 col-form-label">Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextFirstName" placeholder="Firstname of the student" name="firstname" value="<?=$student[0]->firstname?>" required>
                    </div>
                </div>
                <button type="submit" name="delete" class="btn btn-primary" value='ok'>Delete</button>
            </fieldset>
        </form>
</body>
</html>