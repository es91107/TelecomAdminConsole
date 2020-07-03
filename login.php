<?php
    
    session_start();
    
    if($_GET["logout"]==1 and $_SESSION['id']){
        
        session_destroy();
        $message="已登出。";
    }
    
    
    include("connection.php");
   
    
    if ($_POST['submit'] == "Sign Up"){
        
    
        session_start();
        
        if (!$_POST['email']) {
            $error.= "請輸入郵箱";
        }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            $error.= "請輸入有效的email";             
        }
        
        if (!$_POST['password']) {
            $error.= "請輸入密碼";
        }else{
            
            if(strlen($_POST['password']<8)) $error.= "請輸入至少８位元密碼。";
            if(!preg_match('`[A-Z]`',$_POST['password'])) $error.= "請輸入至少一個字母。"; 
            
        }
        
        if($error) $error= "there were errors in your signup details。".$error;
        //如果error這個變量存在
        else{
            
            $query = "SELECT * FROM login where email ='".mysqli_real_escape_string($link,$_POST['email'])."'"; //mysqli_real_escape_string function is used to create a legal SQL string that can be used in an SQL statement.
        }
        
        $result = mysqli_query($link,$query);
        
        $results = mysqli_num_rows($result); //如果有相同的資料，會輸出有幾個rows，沒有的話會是０
        
        if($results) $error.="email已被註冊";
             
        else{
            $query = "INSERT INTO users (email,password) values('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
            mysqli_query($link,$query);
            
            echo "您已經成功註冊";
            
            // $_SESSION['id']=mysqli_insert_id($link);
            
            header("location:mainpage.php"); //redirect
            
        }
        
        
        
        
    }
    
    if ($_POST['submit'] == "login"){
        
        $query = "select * from users where email='".mysqli_real_escape_string($link,$_POST['loginemail'])."'AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
        
        $result = mysqli_query($link,$query);
        
        $row = mysqli_fetch_array($result);
        
        if ($row){
            $_SESSION['id'] = $row['id'];
             header("location:index.html");


        }else{
            $error =  "找不到用戶";
        }
        
    }
    
    
    
    
?>