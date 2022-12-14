<?php require ('lib/top.php'); //현재경로 ./ 도 가능 ?>

<?php require_once('blogpage.php'); ?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Blog</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                <?php
                    if(isset($_SESSION['id'])) {
                ?>
                    <button class="btn btn-secondary" onclick="location.href='blogwrite_form.php'">새 글</button>
                    <br><br>
                <?php
                    }
                ?>

                <?php
                    foreach($result as $blog) {                
                ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/blog1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php
                                    $day = date("d", strtotime($blog['reg_date']));
                                    $month = date("F", strtotime($blog['reg_date']));
                                    $year = date("y", strtotime($blog['reg_date']));
                                ?>
                             <span> <?=$day;?></span>
                             <span> <?=$month;?></span>
                             <span> <?=$year;?></span>
                            </div>
                        </div>
                
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"> <?=$blog['title'];?> </a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#"> <?=$blog['name'];?></a></p>
                                <p class="tags">in<a href="#"> <?=$blog['category'];?></a></p>
                              
                            </div>
                            <!-- Post Excerpt -->
                            <p> <?=$blog['content'];?></p>
                            <hr>
                            <!-- 수정,삭제 버튼-->
                            <?php 
                                if(isset($_SESSION['id'])) {//로그인상태에서만 버튼보임             
                                    if($_SESSION['id'] == $blog['id']) {//아이디랑 게시물아이디랑 같아야 활성화
                            ?>
                                        <button class="btn btn-secondary" onclick="location.href='blogdelete_action.php?no= <?=$blog['no'];?> '">블로그 삭제</button>
                                        <button class="btn btn-secondary" onclick="location.href='blogmod_form.php?no= <?$blog['no'];?> '">블로그 수정</button>

                            <?php 
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <?php } ?>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
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
    <!-- ##### Blog Area End ##### -->
    
    <?php require ('lib/bottom.php'); ?>