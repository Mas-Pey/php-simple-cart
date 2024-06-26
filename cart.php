<html>

<head>
    <title>CART</title>
</head>

<center>

    <body>
        <a href="category.php">Back to Category</a><br><br>
        <table border="2" cellpadding="10px">
            <tr>
                <th>Order Number</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
                <th>Option</th>
            </tr>
        
        <?php
            session_start();
            if(empty($_SESSION['id'])){
                $id=[];$name=[];$qty=[];$price=[];
            }else{
                $id=$_SESSION['id'];
                $name=$_SESSION['name'];
                $qty=$_SESSION['qty'];
                $price=$_SESSION['price'];
            }
            if(isset($_POST['id'])){
                $id[]=$_POST['id'];
                $name[]=$_POST['name'];
                $qty[]=$_POST['qty'];
                $price[]=$_POST['price'];
            }
            
            $_SESSION['id']=$id;
            $_SESSION['name']=$name;
            $_SESSION['qty']=$qty;
            $_SESSION['price']=$price;

            $index=0;$total=0;
            foreach($id as $i=>$data){
                $index++;
                $total=$total+($qty[$i]*$price[$i]);
        ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $id[$i] ?></td>
                    <td><?= $name[$i] ?></td>
                    <td><?= $qty[$i] ?></td>
                    <td><?= $price[$i] ?>$</td>
                    <th><?= $qty[$i]*$price[$i] ?>$</td>
                    <th><a href="delete.php?id=<?= $i ?>"><button>DELETE</button></a></td>
                </tr>
            <?php } ?>
            <tr>
                <th colspan="5">TOTAL PRICE</th>
                <th><?= $total ?>$</th>
                <th><a href="delete.php?id=all"><button>DELETE ALL</button></a></td>
            </tr>
        </table>
    </body>
</center>

</html>