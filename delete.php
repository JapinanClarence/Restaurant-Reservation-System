<?php include "database.php"; ?>
<?php include "functions.php"; ?>
<?php
    if(isset($_POST['submit'])){
        deleteRows();
    }
    readData();
?>

<?php include "includes/header.php"; ?>

    <section>
        
        <form  action="delete.php" method="post">
            <div class="container">
                <h1>Delete Reservation</h1>
    
                    <table class="content-table">
                        <thead>
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
                        </thead>
                        <tbody>
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
                            </tbody>
                    </table>
    
                <label for="id">Select id</label>
                <select name="id" id="">
                    <?php showAllData();?>
                </select>
                <input class="submit-button" type="submit" name="submit" value="Delete">
                <a class="links" href="home_page.html">Back</a>
            </div>

        </form>
    </section>

<?php include "includes/footer.php"; ?>