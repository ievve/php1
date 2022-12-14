<?php

    if(isset($_GET['current_page'])) {
        $current_page = $_GET['current_page'];
    }else {
        $current_page = 1;
    }

    // item=게시글 page=페이징넘버
    
    $show_item = 3; //페이지당 게시글수
    $start_item = ($current_page - 1) * $show_item;
    //* php 는 먼저 필요한 변수선언과 include는 위에있어야함

    require("_conn.php");
    //마지막 페이지 구하기
    $sql1 = "SELECT * FROM blog WHERE del_flag=0";
    $count = mysqli_query($conn, $sql1) -> num_rows;
    $last_page = ceil($count/3);
   
    //조회 x번인덱스부터 y개
    $sql = "SELECT * FROM blog WHERE del_flag = 0 ORDER BY no DESC
    LIMIT $start_item, $show_item";
    $result = mysqli_query($conn, $sql);

    $first_page = 1;
    $prev_page = $current_page - 1;
    $next_page = $current_page + 1;
?>