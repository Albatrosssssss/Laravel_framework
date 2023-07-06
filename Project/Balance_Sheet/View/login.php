<?php
    $count = 0; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="Javascript_validation/login.js"></script>
    <title> Login Balance Sheet </title>
</head>

<body>

    <?php include('header.php');
    include('../Controller/login_action.php');
    ?>
    <div class="img">
        <form action="../Controller/login_action.php" method="post" novalidate onsubmit="return validate(this);"><br>
            <div class="login_container">
                    <label for="username"><b>Username</b></label> <br>
                    <input type="text" placeholder="Enter username" name="username" value="<?php if (isset($username)) echo $username ?>"><br>
                    <span id="errorusername">
                        <?php
                        if (isset($error['username'])) {
                            echo $error['username'];
                        }
                        ?>
                    </span><br><br>

                    <label for="password"><b> Password </b></label><br>
                    <input type="text" placeholder="Type Password " name="password" value="<?php if (isset($password)) echo $password ?>"><br>
                    <span id="errorpassword">
                        <?php
                        if (isset($error['password'])) {
                            echo $error['password'];
                        }
                        if ($count == 1) {
                            echo $error['wrongpassword'];
                        }
                        ?>
                    </span><br><br>
                    <input type="submit" value="Log in" name="button"><br><br>
            </div>
        </form>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>