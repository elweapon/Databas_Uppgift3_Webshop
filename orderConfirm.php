<?php
require_once('databaseConn/createOrder.php');
require_once('databaseConn/orderRead.php');
require_once('databaseConn/database.php');
require_once('header.php');
?>

<div class="row">
    <div class="col-sm">
        <div class="container" id="formStyle">
            <h3>Product &amp; Delivery Information</h3>

            <?php

            // echo "<pre>";
            // echo print_r($orderResult);
            // echo "</pre>";

            //$dataTable ="
            // <div class='container'>
            //     <table class='table'>
            //         <tr>
            //             <th>Order Number</th>
            //             <th>Customer</th>
            //             <th>Product</th>
            //             <th>Picture</th>

            //         </tr>
            //     </div>";

            //             foreach ($orderResult as $key => $value) {
            //                 if ($value['orderID'] === $lastorder) {
            //                     $dataTable .=
            //                     "<tr>
            //                         <td>$value[orderID]</td>
            //                         <td>$value[customerName]</td>
            //                         <td>$value[productName]</td>
            //                         <td><img src ='$value[pictureLink]'></td>
            //                         </tr>";
            //                 }
            //             }

            //             $dataTable .= "</table>";
            //             echo $dataTable . "<hr>";

            $dataTable = "<hr>" . "
            <div class='row'>
                <div class='card-body'>
                    <div class='col card'>
                        <table class='table'>
                            <h1>Order Confirmation:</h1>
                                <tr>
                                <th>Image</th>
                                <th>Customer</th>
                                <th>Product</th>
                                
                                    
                                </tr>";

                                foreach ($orderResult as $key => $value) {
                                    if ($value['orderID'] === $lastorder) {
                                        $dataTable .="
                                        <label for='order'><h3><i class='fa fa-atom'></i> Order: $value[orderID]</h3></label>
                                            <tr>
                                                <td>
                                                <img src='$value[pictureLink]' id='imageHeight' style='max-width: 300px'> 
                                                </td>
                                            
                                                <td style='min-width: 250px'>
                                                    <label for='name'><h5><i class='fa fa-user'></i> Name:<br> $value[customerName]</h5></label>
                                                    <br>
                                                    <label for='phone'><h5><i class='fa fa-phone'></i> Phone:<br> $value[phone]</h5></label>
                                                    <br>
                                                    <label for='email'><h5><i class='fa fa-envelope'></i> Email:<br> $value[email]</h5></label>
                                                    <br>
                                                    <label for='adress'><h5><i class='fa fa-address-card-o'></i> Adress:<br> $value[adress]</h5></label>
                                                </td>
                                                
                                                <td style='max-width: 500px'>
                                                    <h3>$value[productName]</h3>
                                                    <br>
                                                    <h5>$value[description]</h5>
                                                    <br>
                                                    
                                                    </td>
                                                        
                                                    <td>
                                                    
                                                    </td>
                                            </tr>
                                        ";
                                    }
                                }
                                
                            $dataTable .= "
                        </table>
                    </div>
                </div>
            </div>
            ";
            echo $dataTable;
            ?>

            <!-- <div class="row">
                <div class="card-body">
                    <div class="col card">
                        <label for="name"><i class="fa fa-user"></i> Name: <?php echo $_POST['name'] ?></label>
                        <label for="phone"><i class="fa fa-phone"></i> Phone: <?php echo $_POST['phone'] ?></label>
                        <label for="email"><i class="fa fa-envelope"></i> Email: <?php echo $_POST['email'] ?></label>
                        <label for="adress"><i class="fa fa-address-card-o"></i> Adress: <?php echo $_POST['adress'] ?></label>
                    </div>
                </div> -->
        </div>
    </div>
</div>
</div>
<?php
require_once('footer.php');
?>