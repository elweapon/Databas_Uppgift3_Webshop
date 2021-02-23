<?php
require_once('databaseConn/read.php');
require_once('header.php');
require_once('databaseConn/createOrder.php');
?>

<div class="row">
    <div class="col-sm" id="formIn">
        <div class="container" id="formStyle">
            <h3>Product &amp; Delivery Information</h3>

            <?php

            $dataTable = "
                <div class='container'>
                    <table class='table'>
                        <tr>
                            <th>Product Name</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Product</th>
                        </tr>";

            foreach ($result as $key => $value) {
                if ($value['ID'] === $_GET['id']) {
                    $dataTable .= "
                    <tr>
                        <td>$value[productName]</td>
                        <td>1 pcs</td>
                        <td>$value[price] €</td>
                        <td>$value[description]</td>
                        <td><img src='$value[pictureLink]' id='imageSmal'></td>
                    </tr>";
                }
            }

            $dataTable .= "</table>" . "<hr>";
            echo $dataTable;
            ?>

            <form action="orderConfirm.php" method="POST">
                <div class="row">
                    <input type=hidden name="productID" value="<?php echo $_GET['id'] ?>">
                    <div class="col">
                        <label for="name"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Unicorn Dump" required>
                    </div>

                    <div class="col">
                        <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+45-1234567" pattern="[0-9]{4,}" title="Numbers only and minimum of 5." required>
                    </div>

                    <div class="col">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                        title="example: Unicorn.dump@sobjerrys.dk" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="adress"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adress" name="adress" placeholder="Kronprinsessegade 7" required>
                    </div>
                </div>
                <input type="submit" value="Confirm Order" class="btn">
            </form>
        </div>
    </div>
</div>
</div>

<?php

require_once('footer.php');
?>