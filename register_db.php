<?php 
    session_start();
    include('connect.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confpassword = mysqli_real_escape_string($conn, $_POST['confpassword']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($confpassword != $password) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR password = '$password' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        // $result = mysqli_fetch_assoc($query);

        // if ($result) { // if user exists
        //     if ($result['username'] === $username) {
        //         array_push($errors, "Username already exists");
        //     }
        //     if ($result['password'] === $password) {
        //         array_push($errors, "password already exists");
        //     }
        // }

        if (count($errors) == 0) {
            $password = md5($password);

            $sql = "INSERT INTO tblusers (fullname, username ,useremail , custaddr,password ) VALUES ('$fullname', '$username','$email','$address','$password' )";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            header("location: register.php");
        }
    }

?>
