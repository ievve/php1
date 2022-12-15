<?php require ('lib/top.php'); //현재경로 ./ 도 가능 ?>

<?php
    $no = $_GET['no'];
    $current_page = $_GET['current_page'];
?>

<?php require_once('boardpage.php'); ?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>자유 게시판</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">

                <?php
                    if(isset($_SESSION['id'])) {
                ?>
                    <button class="btn btn-secondary" onclick="location.href='bbs.php?current_page=<?=$current_page?>'">뒤로가기</button>
                    <hr><br>
                <?php
                    }
                ?>

                <?php
                    foreach($result as $bbs) {                
                ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($bbs['img_file']) { ?>
                                <a href="#"><img src="bbs_img/<?=$bbs['img_file'];?>" ></a>
                            <?php } else { ?>
                                <a href="#"><img src="bbs_img/noimage.png" alt="no bbs image"></a>
                            <?php } ?>    
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php
                                if($bbs['mod_date'] != null) { //!= null 없어도됨
                                    $day = date("d", strtotime($bbs['mod_date']));
                                    $month = date("F", strtotime($bbs['mod_date']));
                                    $year = date("y", strtotime($bbs['mod_date']));
                                } else {
                                    $day = date("d", strtotime($bbs['reg_date']));
                                    $month = date("F", strtotime($bbs['reg_date']));
                                    $year = date("y", strtotime($bbs['reg_date']));
                                }   ?>
                             <span> <?=$day;?></span>
                             <span> <?=$month;?></span>
                             <span> <?=$year;?></span>
                            </div>
                        </div>
                
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"> <?=$bbs['title'];?> </a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#"> <?=$bbs['name'];?></a></p>
                                <p class="tags">emali address<a href="#"> <?=$bbs['email'];?></a></p>
                              
                            </div>
                            <!-- Post Excerpt -->
                            <p> <?=$bbs['content'];?></p>
                            <hr>
                            <!-- 수정,삭제 버튼-->
                            <?php 
                                if(isset($_SESSION['id'])) {//로그인상태에서만 버튼보임             
                                    if($_SESSION['id'] == $bbs['id']) {//아이디랑 게시물아이디랑 같아야 활성화
                            ?>
                                        <button class="btn btn-secondary" onclick="location.href='bbsdelete_action.php?no= <?=$bbs['no'];?> '">삭제</button>
                                        <button class="btn btn-secondary" onclick="location.href='bbsmod_form.php?no= <?=$bbs['no'];?> '">수정</button>

                            <?php 
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <?php } ?>
               
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
    
    <?php require ('lib/bottom.php'); ?>