<?php require ('lib/top.php'); //현재경로 ./ 도 가능 ?>

    <!--  일단 로그인폼에서 복사해오기  -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>회원가입</h2>
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
                            <form action="join_pro.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-danger">* ID</label>
                                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="* ID를 입력해주세요.">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-success">* Password</label>
                                    <input type="password" name="pw" class="form-control" id="exampleInputPassword1" placeholder="* Password를 입력해주세요">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-warning">* Password Check</label>
                                    <input type="password" name="pwc" class="form-control" id="exampleInputPassword1" placeholder="* Password 재입력 해주세요">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-info">* 이름</label>
                                    <input type="text" name="name" class="form-control"  placeholder="* 이름을 입력해주세요">
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">E-MAIL</label>
                                    <input type="email" name="email" class="form-control"  placeholder="E-MAIL 입력해주세요">
                                </div>

                                <button type="submit" class="btn oneMusic-btn mt-30">Join</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <?php require ('lib/bottom.php'); ?>