<?php include "database.php"; ?>
<?php include "functions.php"; ?>
<?php
    if(isset($_POST['submit'])){
        deleteRows();
    }
?>
<?php include "includes/header.php"; ?>

<section>
        <form action="delete.php" method="post">
    
            <h1>Delete Reservation</h1>

            <label for="id">Select id</label>
            <select name="id" id="">
                <?php showAllData();?>
            </select>

            <input class="submit-button" type="submit" name="submit" value="Delete">
            <a class="links" href="home_page.html">Back</a>
        </form>
    </section>

<?php include "includes/footer.php"; ?>