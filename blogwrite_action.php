<?php

    $id = $_SESSION['id'];

    $name= $_POST['name'];
    $email= $_POST['email'];
    $title= $_POST['title'];
    $content= $_POST['content'];

    $img_file = $_FILES['img_file']; //enctype 필수
    $img_size = $_FILES['img_file']['size'];

    require('file_upload.php');

    if($result) { //파일이 있으면
        $sql = "INSERT INTO blog (id, name, email, title,content, img_file, img_size)VALUES
        ('$id','$name','$email','$title' ,'$content', '$file_name', '$img_size')";
    } else { //파일이 없으면
        $sql = "INSERT INTO blog (id, name, email, title,content)VALUES
        ('$id','$name','$email','$title' ,'$content')";
    }

    require('_conn.php');
   
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>alert('블로그 게시글 작성 완료!'); location.href='blog.php'</script>"; //세미콜론 2개필요   
    }
?>