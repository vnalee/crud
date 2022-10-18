<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="<?= base_url();?>design/css/style.css">
</head>
<body>
        <center><hl>Data Mahasiswa</hl></center>
        <table style="margin:20px auto;" border="1" id="tampilantabel">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Foto</th>
                <th>Action</th>
</tr>
<?php
$no = 1;
foreach($mahasiswa as $u) {
?>
<tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nim ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->pekerjaan ?></td>
        <td><img src="<?php echo base_url();?><?php echo $u->foto ?>" width="50" height="50"></td>
        <td>
                <?php echo anchor('kampus/edit/'. $u->id, 'Edit'); ?>
                <?php echo anchor('kampus/hapus/'. $u->id, 'Hapus'); ?>
        </td>
    </tr>
    <?php } ?>
    </table>
    <center><?php echo anchor('kampus/tambah','<input type=button value=\'Tambah Data\'>'); ?></center>
</body>
</html>   
