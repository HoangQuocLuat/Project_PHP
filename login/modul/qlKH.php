<?php
$sql_lietke = "SELECT `id_KH`, `Name`, `Phone`, `EmailKH`, `Address`, `Checkin`, `Checkout`, `Roomtype`, `numberRoom`
               FROM tbl_sigupkh, tbl_sigup
               WHERE tbl_sigupkh.id_KH = tbl_sigup.id_sigup
               ORDER BY id_KH DESC";
$query_lietke = mysqli_query($mysqli,$sql_lietke);
?>
<div>
            <form action="">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Checkin</th>
                        <th>Checkout</th>
                        <th>Roomtype</th>
                        <th>NumberOfRoom</th>
                    </tr>
                    <?php
                    $i = 0;
               
                    while ($row = mysqli_fetch_array($query_lietke)){
                        $i++;
                    ?> 
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Phone'] ?></td>
                        <td><?php echo $row['EmailKH'] ?></td>
                        <td><?php echo $row['Address'] ?></td>
                        <td><?php echo $row['Checkin'] ?></td>
                        <td><?php echo $row['Checkout'] ?></td>
                        <td><?php echo $row['Roomtype'] ?></td>
                        <td><?php echo $row['numberRoom'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>