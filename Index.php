<?php include './connection.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <h1>Fill your data</h1>
    <a class="btn btn-primary" href="create-siswa.php" role="button">create</a>

    <hr>

    <?php
        $sql = 'select * from student';
        $result = mysqli_query($conn, $sql);
    ?>
    <Table border="1">
        <thead>
            <tr><th>Nama</th><th>Alamat</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td>
                        <a href="edit-siswa.php?id=<?php echo $data['id'] ?>">Edit</a>
                        <a href="delete-siswa.post.php?id=<?php echo $data['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </Table>
</body>
</html>
