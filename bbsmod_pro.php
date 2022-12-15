<?php

    require('_conn.php');
    //php?no=<?=$mod['no']로 던져서 GET 으로 받아도 되지만 input hidden 으로 던지고 POST로 받음
    $no= $_POST['no'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $title= $_POST['title'];
    $content= $_POST['content'];

    $img_file = $_FILES['img_file']; //enctype 필수
    $img_size = $_FILES['img_file']['size'];

    require('bbs_file_upload.php');

    if($result) {
        $sql="UPDATE bbs SET name='$name', email='$email', title='$title', img_file='$file_name', img_size= '$img_size'
        ,content='$content', mod_date=CURRENT_TIMESTAMP() WHERE no=$no"; 
    } else {
        $sql="UPDATE bbs SET name='$name', email='$email', title='$title', content='$content', mod_date=CURRENT_TIMESTAMP() WHERE no=$no"; 
    }

    $result = mysqli_query($conn,$sql);
    if($result) {
        echo "<script>alert('게시판 수정 완료!'); location.href='bbs.php'</script>";
    }
?>