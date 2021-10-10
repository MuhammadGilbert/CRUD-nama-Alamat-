<?php include './connection.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="edit-siswa.post.php?id=<?php echo $_GET['id'] ?>" method="post">
        <?php
        $sql = 'select * from student where id = ' . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>

        <div>
            <span>Nama : </span>
            <input type="text" name="name" value="<?php echo $data['name'] ?>">
        </div>
        <div>
            <span>Alamat : </span>
            <input type="text" name="address" value="<?php echo $data['address'] ?>">
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
