<html>

<head>
    <title>CATEGORY</title>
</head>

<center>

    <body>
        <a href="cart.php">Go to Cart</a><br><br>
        <table border="2" cellpadding="15px">
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Description</th>
            </tr>

            <?php
            include 'connect.php';
            $query = mysqli_query($connect, "SELECT * FROM categories");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= $data['CategoryID']; ?> </td>
                    <td><a href="products.php?id=<?= $data['CategoryID']; ?>"><?= $data['CategoryName']; ?></a></td>
                    <td><?= $data['Description']; ?> </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</center>

</html>