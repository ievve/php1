<?php

    $id = $_SESSION['id'];

    $name= $_POST['name'];
    $email= $_POST['email'];
    $title= $_POST['title'];
    $content= $_POST['content'];


    require('_conn.php');
    $sql = "INSERT INTO blog (id, name, email, title,content)VALUES
    ('$id','$name','$email','$title' ,'$content')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>alert('블로그 게시글 작성 완료!'); location.href='blog.php'</script>"; //세미콜론 2개필요   
    }
?>