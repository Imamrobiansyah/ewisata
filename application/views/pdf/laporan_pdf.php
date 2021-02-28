<!doctype html>
<html>
<head>
<title></title>
<style type="text/css">
table, tr, td, th{padding: 5px}
</style>
<head>
<body>
<h1>--</h1>
<table border="1" cellspacing="0">
<thead>
        <tr>
            <th>No</th>
            <th width="25%">Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>
</thead>
<tbody>
    <?php $no=1; foreach($la as $r){ ?>
        <tr>
            <td width="3%"><?=$no; ?></td>
            <td width="23%"><?=$r->nama ?></td>
            <td width="60%"><?=$r->alamat ?></td>
            <td width="14%"><?=$r->telp ?></td>
        </tr>
    <?php $no++; } ?>
</table>
</body>
</html>