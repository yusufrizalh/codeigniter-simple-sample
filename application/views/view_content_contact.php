<section>
    <h2>
        <?php echo $judul; ?>
    </h2>
    <p>Ini adalah halaman contact.</p>
    <hr>

    <?php echo validation_errors(); ?>
    <?php echo form_open('web/form_action'); ?>

    <!-- membuat form -->
    <label for="nama">Nama</label> <br>
    <input type="text" name="nama"> <br> 

    <label for="email">Email</label> <br> 
    <input type="email" name="email"> <br> 

    <input type="submit" value="Simpan">
</section>