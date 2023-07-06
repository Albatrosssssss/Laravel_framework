<?php
require('Connect.php');
$dob = 2023-06-14;

// Insert data
//if(isset($_POST['button_add'])){
    function add($dob, $dropdown, $amount, $description){
    $conn = Connect();
    if ($conn) {
        $stmt = $conn->prepare("INSERT INTO `balance` (`date`, `select_d_c`, `amount`, `description`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $dob, $dropdown, $amount, $description);
        $stmt->execute();
        $_SESSION['count'] = 1;
        $stmt->free_result();
        $stmt->close();
        $conn->close();
        $flag= "true";
        }
    }


function view(){
    $conn = Connect();
    $sql = "SELECT * FROM balance ";
    $result = $conn->query($sql);
}

function delete($serial){
    $conn = Connect();
    //DELETE FROM table_name WHERE condition;
    $stmt = $conn->prepare("DELETE FROM `balance` where serial = $serial");
    //$stmt->bind_param("s",$serial);
    $stmt->execute();
    $stmt->free_result();
    $stmt->close();
    $conn->close();
    $flag= "true";
}

function update($serial ,$dob , $dropdown , $amount, $description){
    $conn = Connect();
    //DELETE FROM table_name WHERE condition;
    $stmt = $conn->prepare("UPDATE `balance` SET `date`=?,`select_d_c`=?,`amount`=?,`description`=?  WHERE `serial`=$serial");
    //var_dump($serial);
    $stmt->bind_param("ssss", $dob, $dropdown, $amount, $description);
    //var_dump($stmt);
    $stmt->execute();
    $stmt->free_result();
    $stmt->close();
    $conn->close();
    $flag= "true";
}

?>