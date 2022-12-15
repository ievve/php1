<?php //필요 X

    require_once('_conn.php');

    //게시판 리스트 조회
    $sql = "SELECT * FROM bbs WHERE del_flag = 0 AND no=$no "; 
    $result = mysqli_query($conn, $sql);

?>