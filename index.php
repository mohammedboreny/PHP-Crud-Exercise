<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "learn_php";

  // try {
  //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //     // set the PDO error mode to exception
  //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //     // sql to create table
  //     $sql = "CREATE TABLE CarInfo (
  //   carID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   carImage VARCHAR(100) NOT NULL,
  //   carModel VARCHAR(100) NOT NULL,
  //   carPrice BIGINT(100) NOT NULL,
  //   carColor VARCHAR(50) NOT NULL
  //   )";

  //     // use exec() because no results are returned
  //     $conn->exec($sql);
  //     echo "Table MyGuests created successfully";
  // } catch (PDOException $e) {
  //     echo $sql . "<br>" . $e->getMessage();
  // }

  // $conn = null;
  ?>



  <!-- Bootstrap -->
  <form class="row g-3" action="dbstore.php" method=POST>
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">carID</label>
      <input type="number" class="form-control is-valid" id="validationServer01" value="carID" name="carID">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">carImage</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="carImage" name="carImage" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationServer02" class="form-label">carModel</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="" name="carModel" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">carPrice</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="" name="carPrice" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">carColor</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="" name="carColor" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="container">
      <input class="btn btn-primary" type="submit" value="Submit">
      <input class="btn btn-primary" type="delete" value="delete">
    </div>
    <?php

    // $servername = "localhost";
    // $username = "username";
    // $password = "password";
    // $dbname = "myDBPDO";

    // try {
    //   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //   // set the PDO error mode to exception
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //   VALUES ('John', 'Doe', 'john@example.com')";
    //   // use exec() because no results are returned
    //   $conn->exec($sql);
    //   echo "New record created successfully";
    // } catch(PDOException $e) {
    //   echo $sql . "<br>" . $e->getMessage();
    // }

    // $conn = null;

    ?>
</body>

</html>