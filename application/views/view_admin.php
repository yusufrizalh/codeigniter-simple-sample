<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Halaman Admin</h1>
    <h3>Hay, <?php echo $this->session->userdata("nama"); ?></h3>

    <a href="<?php echo base_url('index.php/web/logout'); ?>">Logout</a>
</body>
</html>