<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <form class="user" method="Post" action="<?= base_url('auth/registration'); ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>" required>
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>" required>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user form-password" id="password1" placeholder="Password" name="password1" required>
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user form-password" id="password2" placeholder="Repeat Password" name="password2" required>
                            </div>
                            <div class="form-group custom-control custom-switch ml-2">
                                <input type="checkbox" class="custom-control-input form-checkbox" id="password-switch">
                                <label class="custom-control-label" for="password-switch">Show password</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>