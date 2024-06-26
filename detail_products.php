<html>

<head>
    <title>DETAILS PRODUCTS</title>
</head>

<center>

    <body>
        <a href="category.php">Back to Category</a><br><br>
        <form action="cart.php" method="POST">
            <table border="2" cellpadding="15px">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Supplier ID</th>
                    <th>Category ID</th>
                    <th>Quantity per Unit</th>
                    <th>Unit Price</th>
                    <th>Units In Stock</th>
                    <th>Units On Order</th>
                    <th>Reorder Level</th>
                    <th>Discontinued</th>
                </tr>

                <?php
                include 'connect.php';
                $query = mysqli_query($connect, "SELECT * FROM products WHERE ProductID='$_GET[id]'");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $data['ProductID']; ?> </td>
                        <input type="hidden" value="<?= $data['ProductID']; ?>" name="id">
                        <td><?= $data['ProductName']; ?></a></td>
                        <input type="hidden" value="<?= $data['ProductName']; ?>" name="name">
                        <td><?= $data['SupplierID']; ?> </td>
                        <td><?= $data['CategoryID']; ?> </td>
                        <td><?= $data['QuantityPerUnit']; ?> </td>
                        <td><?= $data['UnitPrice']; ?>$</td>
                        <input type="hidden" value="<?= $data['UnitPrice']; ?>" name="price">
                        <td><?= $data['UnitsInStock']; ?> </td>
                        <td><?= $data['UnitsOnOrder']; ?> </td>
                        <td><?= $data['ReorderLevel']; ?> </td>
                        <td><?= $data['Discontinued']; ?> </td>
                    </tr>
                <?php } ?>
            </table><br>
            <label for="qty">Input Quantity : </label>
            <input type="number" placeholder="Input Qty" name="qty" id="qty" min="1" required><br><br>
            <input type="submit" value="Add to Chart">
        </form>
    </body>
</center>

</html>