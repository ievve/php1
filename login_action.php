<?php
//session.auto_start : 
//PHP시작과 동시에 세션이 자동으로 스타트 되도록 하는 옵션
    
    require('_conn.php');
    $id = $_POST['id']; //form 태그에서 POST로 받아온
    //$_SESSION['id'] = $id; 세션에 id 넣기
    $pw = $_POST['pw'];

    $sql = "SELECT * FROM `user` WHERE id = '$id' AND pw = '$pw' AND del_flag= 0 "; //백틱+테이블명
    $result = mysqli_query($conn, $sql);
    $row = $result -> num_rows; //결과값을 정수로 변환 ex)결과값이 하나면 1
    if($row > 0) { //로그인처리
        require('_loginok.php');
        echo "<script>alert('로그인 완료!'); location.href='index.php'</script>"; //세미콜론 2개필요
    } else {
        echo "<script>alert('로그인 실패! 아이디나 비밀번호를 확인해주세요.'); location.href='login.php'</script>"; //세미콜론 2개필요
    }

?>
<!-- DB 확인없이 로그인시
<script>location.href="index.php"</script>
-->