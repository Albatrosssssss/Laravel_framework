<?php 
    // session_start();
    // if($_SESSION["authenticated"]!="true"){
    //   header("Location: login.php");
    //   exit;
    // }
?>

<?php
//session_start();
$count = 0;
//include('header.php');
require('../Controller/dashboard_action.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="Javascript_validation/dashboard.js"></script>
  <title> Dashboard </title>
</head>

<body>


  <div class="img">
    <form action="../Controller/dashboard_action.php" method="post" novalidate onsubmit="return validate(this);">
      <div class="sign_up">
        <fieldset>
          <legend>Welcome to Dashboard </legend>
          <div class = "add">
          <label for="dob"><b>Date :</b></label>
          <input type="date" name="dob" id="dob" value="<?php if (isset($dob)) echo $dob ?>"><br>
          <span id="errordob">
            <?php
            if (isset($error['dob'])) {
              echo $error['dob'];
            }
            ?>
          </span><br><br>


          <label for="Dropdown"><b>Select Debit/Credit :</b></label>
          <select name="dropdown">
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
          </select><br>
          <span id="errordropdown">
            <?php
            if (isset($error['dropdown'])) {
              echo $error['dropdown'];
            }
            ?>
          </span><br><br>

          <label for="Number"><b>Amount :</b></label>
          <input type="number" placeholder="Enter Amount" name="amount" id="amount" value="<?php if (isset($amount)) echo $amount ?>"><br>
          
          <span id="erroramount">
            
            <?php
            if (isset($error['amount'])) {
              echo $error['amount'];
            }
            ?>
          </span><br><br>

          <label for="description"><b>Description :</b></label>
          <input type="text" placeholder="Write Description" name="description" id="description" value="<?php if (isset($description)) echo $description ?>"><br>
          <span id="errordescription">
            <?php
            if (isset($error['description'])) {
              echo $error['description'];
            }
            ?>
          </span><br><br>
          <input type="button"  value="Add Data" id="buttonAdd" name="button_add"><br><br>
          </div>
          <h1>--------------------------------------------------------</h1>

          <!-- For delete -->
          <label for="Number"><b>
              Want to delete any row. <br>Enter Serial No :</b></label>
          <input type="number" placeholder="Enter Amount" name="Serial" value="<?php if (isset($serial)) echo $serial ?>"><br>
          <span id="erroramount">
            <?php
            if (isset($error['Serial'])) {
              echo $error['Serialk'];
            }
            ?>
          </span><br>
          <input type="submit" value="Delete Data" name="button_delete"><br><br>

          <h1>--------------------------------------------------------</h1>
          <!-- For Update  -->
          <label for="Number"><b>
              Want to Update any row. <br>Enter Serial No :</b></label>
          <input type="number" placeholder="Enter Amount" name="Serial_update" value="<?php if (isset($serial)) echo $serial ?>"><br>
          <span id="erroramount">
            <?php
            if (isset($error['Serial'])) {
              echo $error['Serial'];
            }
            ?>
          </span><br>


          <label for="dob"><b>Date :</b></label>
          <input type="date" name="dob_update" id="dob" value="<?php if (isset($dob)) echo $dob ?>"><br>
          <span id="errordob">
            <?php
            if (isset($error['dob'])) {
              echo $error['dob'];
            }
            ?>
          </span><br><br>


          <label for="Dropdown"><b>Select Debit/Credit :</b></label>
          <select name="dropdown_update">
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
          </select><br>
          <span id="errordropdown">
            <?php
            if (isset($error['dropdown'])) {
              echo $error['dropdown'];
            }
            ?>
          </span><br><br>

          <label for="Number"><b>Amount :</b></label>
          <input type="number" placeholder="Enter Amount" name="amount_update" id="amount" value="<?php if (isset($amount)) echo $amount ?>"><br>
          <span id="erroramount">
            <?php
            if (isset($error['amount'])) {
              echo $error['amount'];
            }
            ?>
          </span><br><br>

          <label for="description"><b>Description :</b></label>
          <input type="text" placeholder="Write Description" name="description_update" id="description" value="<?php if (isset($description)) echo $description ?>"><br>
          <span id="errordescription">
            <?php
            if (isset($error['description'])) {
              echo $error['description'];
            }
            ?>
          </span><br><br>
          <input type="submit" value="Update Data" name="button_update">
          <h1>--------------------------------------------------------</h1>

          <label for="dob"><b>Date :</b></label>
          <input type="date" name="dob_show" id="dob" value="<?php if (isset($dob)) echo $dob ?>"><br>
          <span id="errordob">
            <?php
            if (isset($error['dob'])) {
              echo $error['dob'];
            }
            ?>
          </span><br><br>
          <input type="submit" value="Show Data" name="button_show"><br>
          <!-- <h1>--------------------------------------------------------</h1> -->
          <a href="login.php">Back </a><br><br>

          <?php
          //var_dump($_SESSION['authenticated']);
          $sum_debit =0 ;
          $sum_credit =0 ; 
          $sum = 0;
          //var_dump($_SESSION['myVariable']); 
          if ($_SESSION["myVariable"]=="sas") {
            echo '<table align="center" border=2 color=black style="background-color: rgb(143,188,143);"  >';
            echo '<tr style="background-color: rgb(8,157,73);">
                          <th>Serial</th>
                          <th>Date</th>
                          <th>Select</th>
                          <th>Amount</th>
                          <th>Description</th>
                      </tr>';
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "user";
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            $dob = $_SESSION['dob_show'];
            $sql = "SELECT * FROM balance where date = '$dob'";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['serial'] . '</td>';
              echo '<td>' . $row['date'] . '</td>';
              echo '<td>' . $row['select_d_c'] . '</td>';
              echo '<td>' . $row['amount'] . '</td>';
              echo '<td>' . $row['description'] . '</td>';
              echo '</tr>';
              if($row['select_d_c']=="Debit"){
                $sum_debit = $sum_debit + $row['amount'];
              }
              else if($row['select_d_c']=="Credit"){
                $sum_credit = $sum_credit + $row['amount'];
              }
            }
            $sum = $sum_credit - $sum_debit;
            echo '<tr>';
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Net Balance</td>";
            echo "<td>$sum Tk</td>";
            echo "<td></td>";
            echo '</tr>';
          } 
          else {
            echo '<table align="center" border=2 color=black style="background-color: rgb(143,188,143);"  >';
            echo '<tr style="background-color: rgb(8,157,73);">
                          <th>Serial</th>
                          <th>Date</th>
                          <th>Select</th>
                          <th>Amount</th>
                          <th>Description</th>
                      </tr>';
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "user";
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            $dob = date('Y-m-d');
            $sql = "SELECT * FROM balance where date = '$dob'";
            $result = $conn->query($sql);
            
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['serial'] . '</td>';
              echo '<td>' . $row['date'] . '</td>';
              echo '<td>' . $row['select_d_c'] . '</td>';
              echo '<td>' . $row['amount'] . '</td>';
              echo '<td>' . $row['description'] . '</td>';
              echo '</tr>';
              if($row['select_d_c']=="Debit"){
                $sum_debit = $sum_debit + $row['amount'];
              }
              else if($row['select_d_c']=="Credit"){
                $sum_credit = $sum_credit + $row['amount'];
              }
            }
            $sum = $sum_credit - $sum_debit;
            echo '<tr>';
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Net Balance</td>";
            echo "<td> $sum Tk</td>";
            echo "<td></td>";
            echo '</tr>';
          }

          ?>
        </fieldset>
      </div>
    </form>
  </div>
</body>

</html>