<?php require ('lib/top.php'); //현재경로 ./ 도 가능 ?>

    <!--  일단 로그인폼에서 복사해오기  -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>회원정보 상세보기</p>
            <h2><?php echo $_SESSION['name'];//?php echo ?= ?>님의 회원정보</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Join Us!</h3>
                        <!-- Join Form -->
                        <div class="login-form">
                           
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-danger">ID</label>
                                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="* ID를 입력해주세요." value=<?= $_SESSION['id'];?> disabled>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-info">이름</label>
                                    <input type="text" name="name" class="form-control"  placeholder="* 이름을 입력해주세요" value=<?= $_SESSION['name'];?> disabled>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">E-MAIL</label>
                                    <input type="email" name="email" class="form-control"  placeholder="E-MAIL 입력해주세요" value=<?= $_SESSION['email'];?> disabled>
                                </div>

                                <input type="button" class="btn oneMusic-btn mt-30" onclick="location.href='userchange_form.php'" value='회원정보수정'>
                                <input type="button" class="btn oneMusic-btn mt-30" onclick="location.href='quit_pro.php'" value='회원탈퇴'>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <?php require ('lib/bottom.php'); ?>