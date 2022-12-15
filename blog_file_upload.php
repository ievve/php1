<?php
    if(isset($img_file)) { 
        $dir = "blog_img/"; //폴더명
        $file_name = basename($img_file['name']); //순수 파일 이름만 반환
        $tmp_name = $img_file['tmp_name']; //임시 파일로 저장
        
        //파일이름의 중복을 방지
        $addName = strtotime(date("Y-m-d H:i:s")); //현재 날짜,시간 구함
        $milliseconds = round(microtime(true) * 1000); //현재날짜를 밀리초로 바꾼다 
        $addName .= $milliseconds; //현재시간+밀리초
        $file_name = $addName."_".$file_name; //파일명 변경
        //php는 위에서 아래로 읽기므로 $file_name 윗놈이랑 아랫놈 다름 이놈이 최종서버로 전송

        //파일변경
        $result = move_uploaded_file($tmp_name, $dir.$file_name);//서버로 전송된 파일을 저장

    }
?>