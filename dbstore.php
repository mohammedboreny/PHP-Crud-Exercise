<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost", "root", "root", "learn_php");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $carID = $_REQUEST['carID'];
    $carImage = $_REQUEST['carImage'];
    $carModel = $_REQUEST['carModel'];
    $carPrice = $_REQUEST['carPrice'];
    $carColor = $_REQUEST['carColor'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO CarInfo (carImage, carModel, carPrice, carColor) VALUES (
			'$carImage','$carModel','$carPrice','$carColor')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo ("<div class='card' style='width: 18rem;'>");
        echo ("<img src=" . $carImage . " class='card-img-top' alt=''>");
        echo ("<div class='card-body'>");
        echo ("<h5 class='card-title'>" . $carModel . "</h5>");
        echo ("<p class='card-text'>id is ="  . $carID . "</p>");
        echo ("</div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Price=" . $carPrice . "</li>
          <li class='list-group-item'>Color=" . $carColor . "</li>
        </ul>
      </div>");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>