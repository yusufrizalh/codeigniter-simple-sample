<section>
    <h2>
        <?php echo $judul; ?>
    </h2>

    <!-- menampilkan seluruh isi tabel users -->
    <table border="1" width="60%">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach($users as $usr) { ?>
        <tr>
            <td><?php echo $usr->nama ?></td>
            <td><?php echo $usr->alamat ?></td>
            <td><?php echo $usr->pekerjaan ?></td>
        </tr>
        <?php } ?>
    </table>

</section>