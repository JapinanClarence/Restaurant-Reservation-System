<?php include "database.php";?>
<?php include "functions.php";?>
<?php
    readData();
?>
<?php include "includes/header.php";?>

    <div class="container">
       
            <table>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Time
                    </th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
               
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['fullName']; ?>
                    </td>
                    <td>
                        <?php echo $row['date'];?>
                    </td>
                    <td>
                        <?php echo $row['time']; ?>
                    </td>
            
                </tr>
                <?php
                    }
                ?>
            </table>
            <a class="links" href="home_page.html">Back</a>
    </div>
<?php include "includes/footer.php";?>