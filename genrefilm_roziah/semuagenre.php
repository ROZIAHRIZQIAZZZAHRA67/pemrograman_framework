<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>
<body>
    
</body>
        <h1>Data Genre</h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Gendre</th>
                <th>Genre</th>
                <th>Dibuat</th>
                <th>Di-update</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($semuagenre as $genre):?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td>
                        <img style="width: 35px;" src="/assets/cover/<?= $genre['cover'] ?>" alt="">
                    </td>
                    <td><?php echo $film['nama_genre'] ?></td>
                    <td><?php echo $film['created_at'] ?></td>
                    <td><?php echo $film['updated_at'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>    

</html>

