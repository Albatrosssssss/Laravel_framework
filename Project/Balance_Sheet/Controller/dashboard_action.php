<?php
    session_start();
    global $x;
    require ('../Model/prepared.php');

    //Add Operation
    if(isset($_POST['button_add'])){
        $dob = $_POST['dob'];
        $dropdown = $_POST['dropdown'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        if(!empty($_POST['dob']) && !empty($_POST['dropdown']) && !empty($_POST['amount']) && !empty($_POST['description'])){ 
            echo "Huda";
            $flag =add($dob , $dropdown , $amount, $description);
            header("Location: ../View/dashboard.php");
        }
        
    }

    //Delete Operation
    if(isset($_POST['button_delete'])){
        $serial = $_POST['Serial'];
        $dropdown = $_POST['dropdown'];
        if(!empty($_POST['Serial'])){ 
            $flag =delete($serial);
            var_dump($serial);
            header("Location: ../View/dashboard.php");
        }
        
    }

    //Update Opearation 
    if(isset($_POST['button_update'])){
        $dob = $_POST['dob_update'];
        $serial = $_POST['Serial_update'];
        $dropdown = $_POST['dropdown_update'];
        $amount = $_POST['amount_update'];
        $description = $_POST['description_update'];
        //var_dump($serial);
        //var_dump();
        if(!empty($_POST['dob_update']) && !empty($_POST['dropdown_update']) && !empty($_POST['amount_update']) && !empty($_POST['description_update'])){ 
            $flag =update($serial ,$dob , $dropdown , $amount, $description);
            header("Location: ../View/dashboard.php");
        }
    }

    //View
    if(isset($_POST['button_show'])){
       $dob = $_POST['dob_show'];
       $_SESSION['dob_show'] = $dob;
       var_dump($_SESSION['dob_show']);
        // $dropdown = $_POST['dropdown'];
        // var_dump($serial);
        if(!empty($_POST['dob_show'])){ 
            // $flag =show($dob);
            var_dump($dob);
            $_SESSION['myVariable'] = "sas";
            var_dump($_SESSION['myVariable']); 
            header("Location: ../View/dashboard.php");
        }
        
    }
?>