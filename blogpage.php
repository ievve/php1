<?php
    require_once("_conn.php");
    //페이지네이션

    //조회

    $sql = "SELECT * FROM blog" ;
    $result = mysqli_query($conn, $sql);
?>