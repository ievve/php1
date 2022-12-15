<?php require('lib/top.php'); ?>
 
<?php
    $no = $_GET['no'];
    require('_conn.php');
    $sql = "SELECT * FROM bbs WHERE `no` = $no ";
    $result = mysqli_query($conn,$sql);

?>
 <!-- ##### 블로그 작성 ##### -->
 <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>게시판 게시물을 수정해주세요!</p>
                        <h2>게시판 수정</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- 반복문 시작-->
                    <?php foreach($result as $mod) { ?>
                  
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="bbsmod_pro.php" method="post" enctype="multipart/form-data">
                        
                        <input type="hidden" name="no" value="<?= $mod['no']; ?>">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $mod['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?= $mod['email']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" placeholder="Title" value="<?= $mod['title']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="img_file">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" cols="30" rows="10" name="content" placeholder="Content"><?= $mod['content'];?></textarea>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } //반복문끝 ?>
                </div>
            </div>
        </div>
</section>
    <!-- ##### Contact Area End ##### -->

    <?php require_once('lib/bottom.php');?>