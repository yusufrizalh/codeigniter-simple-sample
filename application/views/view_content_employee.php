<section>
    <h2>
        <?php echo $judul; ?>
    </h2>

    <!-- menampilkan seluruh isi tabel users -->
    <table border="1" width="60%">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
        </tr>
        <?php foreach($employee as $emp) { ?>
        <tr>
            <td><?php echo $emp->nama ?></td>
            <td><?php echo $emp->email ?></td>
            <td><?php echo $emp->telepon ?></td>
        </tr>
        <?php } ?>
    </table>

</section>