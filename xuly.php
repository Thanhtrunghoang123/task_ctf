<form action="xuly.php" method="post" enctype="multipart/form-data">
    <input type="file" name="hinhanh" value="chọn tệp">
    <input type="submit" name="btn" value="gửi">
</form>

<?php
    if(isset($_POST['btn'])){
        if(isset($_FILES['hinhanh'])){
            if($_FILES['hinhanh']['size']==0){
                echo "bạn chưa chọn file";
            }
            else{
                move_uploaded_file($_FILES['hinhanh']['tmp_name'], './img/' . $_FILES['hinhanh']['name']);
            }
        }
    }

    $my_file = fopen("file.txt","r") or die("lỗi");// mở file
    echo fread($my_file,filesize("file.txt"));// đọc file
    fclose($my_file);// đóng file
?>