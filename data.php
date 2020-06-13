<?php 
    
    
    
    
    $link = mysqli_connect("localhost", "bscom_bill","\$EvNx[td}r@s","bscom_cmt",3306 );
    
    
    // if ($_GET['submit2'] == "GO"){
    
    // $_GET['name'];
    $name = "Tom";
    echo $name;
    
    // $query = "SELECT * FROM users where name ='".$name."'"; 
    $query = "SELECT * FROM users where name ='Tom'"; 

        
    $result = mysqli_query($link,$query);
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($outp);

    // }
    
    
    
    







?>