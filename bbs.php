<?php require ('lib/top.php'); //현재경로 ./ 도 가능 ?>

<?php require_once('bbspage.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>자유 게시판</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### BBS Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                <?php
                    if(isset($_SESSION['id'])) {
                ?>
                    <button class="btn btn-secondary" onclick="location.href='bbswrite_form.php'">새 글</button>
                    <br><br>
                <?php
                    }
                ?>

                <?php
                    foreach($result as $bbs) {                
                ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- 게시판 
                        $day = date("d", strtotime($blog['mod_date'])); -->
                
                        <!-- POST 제목 -->
                        <div class="blog-content">
                            <div class="post-meta d-flex mb-30">

                                <?php if($bbs['img_file']) { ?>
                                    <img class="w-25" src="bbs_img/<?=$bbs['img_file'];?>" >
                                <?php } else { ?>
                                    <img class="w-25" src="bbs_img/noimage.png" alt="no bbs image">
                                <?php } ?> &nbsp &nbsp 

                                <a href="bbsview.php?no=<?=$bbs['no'];?>&current_page=<?=$current_page?>" class="pr-5 post-title"> <?=$bbs['title'];?> </a>
                                <p class="post-author">By<a href="#"> <?=$bbs['name'];?></a></p>
                                <p class="tags">emali address<a href="#"> <?=$bbs['email'];?></a></p>
                              
                                <?php 
                                    if(isset($_SESSION['id'])) {//로그인상태에서만 버튼보임             
                                        if($_SESSION['id'] == $bbs['id']) {//아이디랑 게시물아이디랑 같아야 활성화
                                ?>
                                            <button class= "ml-3 btn btn-secondary" onclick="location.href='bbsdelete_action.php?no= <?=$bbs['no'];?> '">삭제</button>
                                            <button class= "ml-3 btn btn-secondary" onclick="location.href='bbsmod_form.php?no= <?=$bbs['no'];?> '">수정</button>

                                <?php 
                                        }
                                    }
                                ?>
                            </div>
                            <!-- Post Excerpt -->
                          
                            <!-- 수정,삭제 버튼-->
                        </div>
                    </div>

                    <?php } ?>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="bbs.php?current_page=<?=$first_page; ?>">⏮</a></li> 
                                <?php if ($current_page > 1) { ?>   
                                    <li class="page-item active"><a class="page-link" href="bbs.php?current_page=<?=$prev_page;?>">이전</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a class="page-link" href="bbs.php?current_page=<?=$first_page;?>">이전</a></li>
                                <?php } ?>
                                <?php if ($current_page < $last_page) { ?>  
                                    <li class="page-item active"><a class="page-link" href="bbs.php?current_page=<?=$next_page;?>">다음</a></li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="bbs.php?current_page=<?=$last_page;?>">다음</a></li> 
                                    <?php } ?>
                                <li class="page-item"><a class="page-link" href="bbs.php?current_page=<?=$last_page;?>">⏭</a></li> 
                            <br>
                            <p>현재 페이지 <?=$current_page?> / 총 페이지<?=$last_page?></p>
                            </ul>
                        </nav> <br>
                    </div>

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Events &amp; Press</a></li>
                                    <li><a href="#">Festivals</a></li>
                                    <li><a href="#">Lyfestyle</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Archive</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">March 2018</a></li>
                                    <li><a href="#">April 2018</a></li>
                                    <li><a href="#">May 2018</a></li>
                                    <li><a href="#">June 2018</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">music</a></li>
                                    <li><a href="#">events</a></li>
                                    <li><a href="#">artists</a></li>
                                    <li><a href="#">press</a></li>
                                    <li><a href="#">mp3</a></li>
                                    <li><a href="#">videos</a></li>
                                    <li><a href="#">concerts</a></li>
                                    <li><a href="#">performers</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add2.gif" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### BBS Area End ##### -->
    
    <?php require ('lib/bottom.php'); ?>