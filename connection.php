<?php

    $servername = "sql6.freesqldatabase.com";
    $username = "sql6686761";
    $password = "n7RCsNEXXp";
    $db_name = "sql6686761";

    // $conn = new mysqli($servername, $username, $password, $db_name, 3306);

    $conn = new mysqli("localhost", "root", "", "database1", 3306);

    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    else{
        echo "connection successful!!";
    }







    
    // if(isset($_POST['submit'])){
    //     $username = $_POST['user'];
    //     $password = $_POST['pass'];

    //     $sql = "select * from login where username = '$username' and password = '$password'";
    //     $result = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //     $count = mysqli_num_rows($result);

    //     if ($count==1){
    //         header("location:https://btkcreations.github.io/MyPortfolio/");
    //         // header("location:welcome.php");
    //     }
    //     else
    //     {
    //         echo '<script>
    //                     window.location.href = "index.php";
    //                     alert("Login failed. Invalid username or password!!!");
    //               </script>';
    //     }
    // }
?>