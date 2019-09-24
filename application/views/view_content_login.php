<section>
    <h2>
        <?php echo $judul; ?>
    </h2>
    <p>Ini adalah halaman login.</p>

    <!-- form login -->
    <hr>
    <form action="<?php echo base_url('index.php/web/login_action'); ?>" method="POST">
        <label for="username">Username</label> <br>
        <input type="text" name="username" placeholder="Username"> <br>
        <br>

        <label for="password">Password</label> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <br>

        <input type="submit" value="Login">
    </form>

</section>