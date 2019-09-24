<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('head');?>
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                    <?php 
                    if ($errors) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $messages;?>
                    </div>
                        <?php
                    }
                    ?>
                        
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url();?>utils/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url();?>auth/login" method="POST">
                            <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" minlengt="4" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" minlength="4" placeholder="Password" required>
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                        </div> 
                        <div class="row" style="text-align : right">
                            <div class="col-lg-12">
                            <a href="checkruang">Cek Peminjaman Ruang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->load->view('end-js');?>
    <!-- Jquery JS-->
    

</body>

</html>
<!-- end document-->