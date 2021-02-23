<?php

require_once('../header.php');
require_once('../databaseConn/database.php');
require_once('../databaseConn/readContact.php');

$dataTable = "
    <div class='row'>
        <div class='card-body'>
            <div class='col card'>
                <table class='table'>
                    <a href='../contact.php'><h1>Admin - Customer Message:</h1></a>
                        <tr>
                            <th>Contact ID</th>
                            <th>Customer</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>";

                        foreach ($contactResult as $key => $value) {
                                    
                                $dataTable .="
                                    <tr>
                                        <td>
                                            <label for='order'><i class='fa fa-user'></i> Customer Name: $value[1]</label>
                                        </td>
                                        <td>
                                            <label for='name'><i class='fa fa-envelope'></i> Customer Email: $value[2]</label>
                                        </td>
                                        <td>
                                            <label for='phone'><i class='fa fa-inbox'></i> Customer Message: $value[3]</label>
                                        </td>
                                        <td>
                                            <a href='remove.php?id=$value[0]'>Remove</a></td>
                                        </td>
                                        <td>
                                            <a href='remove.php?id=all'>Remove All</a></td>
                                        </tr>
                                    </tr>
                                ";
                        }
                                
                    $dataTable .= "
                </table>
            </div>
        </div>
    </div>
    ";
echo $dataTable;
require_once('../footer.php');