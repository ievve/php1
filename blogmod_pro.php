<?php

    require('_conn.php');
    //php?no=<?=$mod['no']로 던져서 GET 으로 받아도 되지만 input hidden 으로 던지고 POST로 받음
    $no= $_POST['no'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $title= $_POST['title'];
    $content= $_POST['content'];

    $sql="UPDATE blog SET name='$name', email='$email', title='$title', content='$content', mod_date=CURRENT_TIMESTAMP() WHERE no=$no"; 
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>alert('블로그 수정 완료!'); location.href='blog.php'</script>";
    }
?>