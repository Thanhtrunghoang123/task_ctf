<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<8){  
  alert("vui lòng nhập hơn 8 kí tự");  
  return false;  
  }  
}  
</script>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="myform" method="post" action="xuly.php" onsubmit="return validateform()" >  
    Name: <input type="text" name="name"><br/>  
    Password: <input type="password" name="password"><br/>  
    <input type="submit" name="btn" value="gửi">

</body>
</html>

<?php
    
    $sever='localhost';
    $user='root';
    $pass='';
    $database='website';
    $conn= new mysqli($sever,$user,$pass,$database);
    if($conn){
        mysqli_query( $conn,"SET NAMES 'utf8'"); 
        echo " ";
    }
    else{
        echo "kết nối database không thành công";
    }

?>