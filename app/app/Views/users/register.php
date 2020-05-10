
<body class="container">

    <br>
    <br>
    <?= \Config\Services::validation()->listErrors('my_list') ?>

    <form action="register" method="post">
        <?= csrf_field() ?>

        <label for="username">Username</label>
        <input type="input" name="username" class="form-control" /><br />

        <label for="email">Email</label>
        <input type="input" name="email" class="form-control" /><br />

        <div class="g-recaptcha" data-sitekey="<?= env('GOOGLE_RECAPTCHA_KEY') ?>"></div>

        <input type="submit" name="submit" value="Register" class="btn btn-primary right" />

    </form>
</body>

</html>
