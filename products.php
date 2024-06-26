<html>

<head>
    <title>PRODUCTS</title>
</head>

<center>

    <body>
        <a href="category.php">Back to Category</a><br><br>
        <table border="2" cellpadding="15px">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
            </tr>

            <?php
            include 'connect.php';
            $query = mysqli_query($connect, "SELECT * FROM products WHERE CategoryID='$_GET[id]'");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= $data['ProductID']; ?> </td>
                    <td><a href="detail_products.php?id=<?= $data['ProductID']; ?>"><?= $data['ProductName']; ?></a></td>
                    <td><?= $data['UnitPrice']; ?>$ </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</center>

</html>