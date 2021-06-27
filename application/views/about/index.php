<div class="container">
    <br><br><br>
    <h1> Hello, <?= $this->session->userdata('level'); ?>! </h1>
    <br>
    <br>
    <a href="<?= base_url(); ?>login/logout" class="btn btn-dark">Logout</a>

</div>