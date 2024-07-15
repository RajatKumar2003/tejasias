<!DOCTYPE html>
<html>
<head>

<?php $this->load->view('layouts/TopHeader'); ?>

    <style>
        .btn-background,
        .btn-background:hover {
            background-color: #160B00;
            color: #FFFFFF;
        }

        .position-relative {
            position: relative;
        }

        .password-toggle-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>



            </div>
            <img src="<?php echo base_url('uploads/seo/').$editseo->Logo; ?>" alt=""  style="max-width: 227px; margin-left: -24px;">
            <h3 style="margin-top: 20px;">Welcome to <?php echo $editseo->SiteTitle; ?></h3>

            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="<?php echo site_url('Login') ?>" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="" name="login_id">
                </div>
                <div class="form-group position-relative">
                    <input type="password" class="form-control" placeholder="Password" required="" name="login_pass">
                    <span class="password-toggle-icon" id="password-toggle">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                </div>

                <div class="form-group">
                <?php if($this->session->flashdata('status')) echo $this->session->flashdata('status'); ?>
                </div>



                <button type="submit" class="btn btn-background block full-width m-b text-light">Login</button>

                <!-- <a href="#"><small>Forgot password?</small></a> -->
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <p class="m-t"> <small><a href="https://digitalshakha.in/" style="text-decoration: none; color: inherit;">Copyright @2024 Digital Shakha. All Rights Reserved</a>.</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <?php $this->load->view('layouts/TopFooter'); ?>

</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('#password-toggle i');
        const passwordField = document.querySelector('input[name="login_pass"]');

        togglePassword.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });

        const alertDiv = document.getElementById('alert');
        setTimeout(function () {
            alertDiv.style.display = 'none';
        }, 3000); // 5000 milliseconds = 5 seconds
    });

    
</script>