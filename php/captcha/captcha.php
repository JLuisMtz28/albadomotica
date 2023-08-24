<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = 'yoursecretKey';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$ip}");

    $attributes = json_decode($response, TRUE);

    if (!$attributes['success']) {
        $errors[] = 'Verifica el captcha';
    }
}
?>

<?php
if (isset($errors) && count($errors) > 0) {    
?>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php
}
?>