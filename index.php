<?php
//HELLO WORLD!
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP 8</title>
    <link rel="stylesheet" href="public/stylesheets/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-straight/css/uicons-regular-straight.css'>
</head>

<body>


    <div class="container-fluid row">
        <form class="col-4 p-3 ">
            <fieldset>
                <legend>Insert new student</legend>
                <div class="row">
                    <label for="staticTextFirstName" class="col-sm-2 col-form-label">Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextFirstName" placeholder="Firstname of the student">
                    </div>
                </div>

                <div class="row">
                    <label for="staticTextlastName" class="col-sm-2 col-form-label">Lastname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextLastName" placeholder="Lastname of the student">
                    </div>
                </div>

                <div class="row">
                    <label for="staticTextCI" class="col-sm-2 col-form-label">CI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticTextCI" placeholder="CI of the student" pattern="d[0-9]{8}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Insert</button>
            </fieldset>
        </form>

        <div class="col-8 p-4 ">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">CI</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/edit" class="btn btn-info "><i class="fi fi-rs-user-pen"></i></a>
                            <a href="/delete" class="btn btn-danger "><i class="fi fi-rs-remove-user"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>