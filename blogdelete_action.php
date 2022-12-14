<?php
    //UPDATE 테이블명 SET 컬럼명 = '수정데이터' WHRER id=1
    //DELETE FROM 테이블명 WHRER id=1 
    require_once('_conn.php');
  
    $no = $_GET['no']; //버튼누르면 삭제니까 GET 방식
    //$sql = "UPDATE user SET del_flag = 1 WHERE no=$no";
    $sql = "DELETE FROM blog WHERE no=$no";
    
    //$sql="UPDATE `blog` SET `del_flag`=1 WHERE no=\"$_SESSION['no']\""; DB에 남기고 로그인불가
    //$sql= "DELETE FROM blog WHERE no =\"$_SESSION['no']\""; 완전삭제
    //따옴표 충돌시 "\
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('블로그 글삭제 완료'); location.href='blog.php'</script>";
    }
  
?>
