<?php
    //회원가입 로직 loginAction 에서 복사
    require('_conn.php');
    $id = $_POST['id']; //form 태그에서 POST로 받아온
    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    //ID 중복된 경우의 처리
    $sql = "SELECT * FROM `user` WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    $row = $result -> num_rows; //결과값을 정수로 변환 ex)결과값이 하나면 1
    if($row > 0) { //ID 중복시
    
        echo "<script>alert('중복된 ID가 있습니다!'); location.href='join_form.php'</script>"; //세미콜론 2개필요
    } //else 시 밑으로 GO

    //password 재입력잘못입력한 경우 처리
    if ($pw != $pwc) { 
        echo "<script>alert('패스워드 재입력을 확인해주세요!'); location.href='join_form.php'</script>"; 
    } //else시 밑으로 GO

    //$sql = "INSERT INTO `user` (`id`,`pw`,`name`,`email`) VALUE
    $sql = "INSERT INTO user (id, pw, name, email)VALUES
    ('$id','$pw','$name','$email')"; //String은 '$변수' OR "$변수"
    
    $result = mysqli_query($conn, $sql);
    $row = $result -> num_rows; //결과값을 정수로 변환 ex)결과값이 하나면 1
    if($result) { //회원가입시 자동로그인
        require('_loginok.php');
        echo "<script>alert('회원가입 완료!'); location.href='index.php'</script>"; //세미콜론 2개필요
    } else { //나올가능성은없음 위에서다 필터링했으므로
        echo "<script>alert('회원가입 실패!'); location.href='join_form.php'</script>"; //세미콜론 2개필요
    }

?>