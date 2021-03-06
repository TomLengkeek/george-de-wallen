<?php
session_start();
include("../functions.php");
is_authorized(['begeleider', 'eigenaar']);
include("./side-navbar.php"); 
include("../connect_db.php");

//set name from url if its not already
if(empty($_SESSION["name"])){
    $_SESSION["name"] = explode("@", $_SESSION["em"])[0];
}


$sql = 'SELECT * FROM `begeleidersrooster` WHERE `Begeleider` =  "' . $_SESSION["name"] . '";';

$result = mysqli_query($conn, $sql);

$records = "";
$table = "";

if(mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
            <th scope='row'>" . $record["Lespakket"] . "</th>
            <td> " . explode(",", $record["Date"])[0] . "</td>
            <td> " . explode(",", $record["Date"])[1] . "</td>
            </tr>  ";
    } 
    $table = '<th scope="col">lesson</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>';
}else {
    $records .= '<tr><div class="alert alert-primary" role="alert">
    There are no planned lessons yet please <a href="./" class="alert-link">plan a lesson</a>.
  </div></tr>';
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/side-navbar-docent.css">
    <link rel="stylesheet" href="./b-style.css">


</head>

<body>
    <div class="container" id="container-begeleider">
        <div class="jumbotron jumbotron-fluid" id="jumbotron-home">
            <div class="container">
                <h1 class="display-4">Welcome Begeleider!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="begeleider-table">
                <h3>Your planned lessons:</h3>
                <!-- de tabel -->
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <?php 
                            echo $table;
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo $records;
                        ?>
                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>