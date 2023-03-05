<?php
// CONNECT MYSQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "todo_list1";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
  die("Connection failed<br>" . mysqli_connect_error());
}

// echo $_SERVER["REQUEST_METHOD"];

if (isset($_GET["delete"])) {
  $sno = $_GET["delete"];

  $sql = "DELETE FROM `list_info` WHERE `id` = $sno";
  $result = mysqli_query($con, $sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $data = $_POST["data"];
  $sql = "INSERT INTO `list_info` (`work`) VALUES('$data')";

  $result = mysqli_query($con, $sql);

  if (!$result) {
    echo "Data insertion failed " . mysqli_error($con) . "<br>";
  }


  // $sql = "DELETE FROM `list_info` WHERE `work` = $data";
  // $result = mysqli_query($con, $sql);

  // if ($result)
  //   echo "Data deleted successfully";
  // else {
  //   $err = mysqli_error($con);

  //   echo "Data deletion failed --> " . $err;
  // }
}


?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
  <script src="index1.js"></script>
</head>

<body>
  <div class="container">
    <h2>TO DO LIST</h2>

    <form action="index.php" method="post" onsubmit="return dataVal(data.value)">
      <div class="input">
        <input id="data" class="curve" type="text" name="data" placeholder="Max 40 letters" />
        <button class="submit color-btn curve" type="submit">
          Submit
        </button>
      </div>

      <p id="errorMsg"></p>

      <div class="list">
        <?php
        $sql = "SELECT * FROM `list_info`";

        $result = mysqli_query($con, $sql);

        $sno = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
          $sno += 1;
          echo '<div class="workStyle">' . $rows["work"] . '<div class="del-btn" id=' . $rows["id"] . ' name="delete"></div></div>';
        }

        // <div class="list"></div>
        ?>
      </div>
    </form>
  </div>
  <script src="delete.js"></script>

</body>

</html>