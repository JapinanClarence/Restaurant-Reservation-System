<?php include "database.php"; ?>
<?php include "functions.php"; ?>
<?php 
     if(isset($_POST['create'])){
    create();
    }
?> 
<?php include "includes/header.php"; ?>

    <section>
        
        <form action="create_reservation.php" method="post">
    
            <h1>Make Reservation</h1>

            <label for="name">Name</label>
            <input type="text" name="fullName">
            <label for="date">Date</label>
            <input type="date" name="date">
            <label for="time">Time</label>
            <input type="time" name="time">

            <input class="submit-button" type="submit" name="create" value="Create">
            <a class="links" href="home_page.html">Back</a>
   
        </form>
    </section>


<?php include "includes/footer.php";?>