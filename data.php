<?php 
    
    
    include("connection.php");
    

    $name = $_GET['name'];
    session_start();
    $_SESSION['name_result'] = $name;
    

    $id_query = "SELECT ID FROM user where name ='".$name."' limit 1"; 
    $id_result = mysqli_query($link,$id_query);
    $_SESSION['id_result'] = mysqli_fetch_assoc($id_result)['ID'];


    $query = "SELECT * FROM user where name ='".$name."' limit 1"; 
        
    $result = mysqli_query($link,$query);

    $outp = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($outp);




?>