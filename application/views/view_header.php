<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Template pada CodeIgniter</title>

    <!-- import file css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h3>www.inixindosurabaya.id</h3>
                <h5>Membuat Template pada CodeIgniter</h5>
            </hgroup>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'index.php/web/index' ?>">Home</a>
                        <a href="<?php echo base_url().'index.php/web/employee' ?>">Employee</a>
                        <a href="<?php echo base_url().'index.php/web/about' ?>">About</a>
                        <a href="<?php echo base_url().'index.php/web/gallery' ?>">Gallery</a>
                        <a href="<?php echo base_url().'index.php/web/contact' ?>">Contact</a>
                        <a href="<?php echo base_url().'index.php/web/login' ?>">Login</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    