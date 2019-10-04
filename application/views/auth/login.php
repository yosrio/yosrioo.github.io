<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form-2" style="background:rgba(0,0,0,0.2);">
            <h3>Login</h3>
            <form method="post" action="<?= base_url('auth'); ?>">
            <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email *" value="" />
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" value="" />
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="login" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('auth/registration'); ?>" class="ForgetPwd">Create Account!</a>
                </div>
            </form>
        </div>
    </div>
</div>