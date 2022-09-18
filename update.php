<?php include "database.php"; ?>
<?php include "functions.php"; ?>
<?php
    if(isset($_POST['submit'])){
        updateTable();
    }
?>
<?php include "includes/header.php"; ?>

<section>
        <form action="update.php" method="post">
    
            <div class="container">
                <h1>Update Reservation</h1>
                <label for="id">Select id</label>
                <select name="id" id="">
                    <?php showAllData();?>
                </select>
                <label for="name">Name</label>
                <input type="text" name="fullName">
                <label for="date">Date</label>
                <input type="date" name="date">
                <label for="time">Time</label>
                <input type="time" name="time">
                <input class="submit-button" type="submit" name="submit" value="Update">
                <a class="links" href="home_page.html">Back</a>
            </div>
        </form>
    
    </section>

<?php include "includes/footer.php"; ?>