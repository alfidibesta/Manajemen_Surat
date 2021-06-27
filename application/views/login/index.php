<?=
    form_open('login/proses_login');
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets'); ?>/img/kemenag.png" style="width: 170px;">
                                    <h1 class="h4 text-gray-900"><b>PERSURATAN<b></h1>
                                    <h1 class="h5 text-gray-900 mb-4">KEMENTERIAN AGAMA</h1>
                                </div>
                                <form class="user" method="post" role="form" autocomplete="off" id="formlogin" novalidate="" method="POST"">
                                    <div class=" form-group">
                                    <input type="text" class="form-control form-control-user" name="uname1" id="uname1" placeholder="Enter username">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="pwd1" id="pwd1" required="" autocomplete="new-password" placeholder="Enter Password">
                                <div class="invalid-feedback">Enter your password too!</div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Login
                            </button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>


<?=
    form_close();
?>