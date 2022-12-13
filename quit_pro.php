<?php
    //UPDATE 테이블명 SET 컬럼명 = '수정데이터' WHRER id=1
    //DELETE FROM 테이블명 WHRER id=1 
    require_once('_conn.php');
  
    $no = $_SESSION['no'];
    //$sql = "UPDATE user SET del_flag = 1 WHERE no=$no";
    $sql = "DELETE FROM user WHERE no=$no";
    
    //$sql="UPDATE `user` SET `del_flag`=1 WHERE no=\"$_SESSION['no']\""; DB에 남기고 로그인불가
    //$sql= "DELETE FROM user WHERE no =\"$_SESSION['no']\""; 완전삭제
    //따옴표 충돌시 "\
    $result = mysqli_query($conn, $sql);
    if($result) {
        include_once('logout_action.php');
        echo "<script>alert('회원탈퇴가 완료되었습니다. 안녕히 가십시오'); location.href='index.php'</script>";
    }
  
?>
