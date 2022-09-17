<?php include "database.php";?>
<?php   
    function create(){
       
        global $connection;
        $fullName = $_POST['fullName'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $query = "INSERT INTO reservation(fullName, date, time) ";
        $query .= "VALUES ('$fullName', '$date', '$time')";
        $result = mysqli_query($connection, $query); 

        if(!$result){
            die("Query Failed");
        }
        
    }
    function readData(){
        global $connection;
        global $result;
        $query = "SELECT * FROM reservation";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }
    }
    function showAlldata(){
        global $connection;
        $query = "SELECT * FROM reservation";
        $result = mysqli_query($connection, $query); 

        if(!$result){
            die("Query Failed");
        }
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value ='$id'>$id</option>";
        }
    }
    function updateTable(){
        global $connection;
        $fullName = $_POST['fullName'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $id = $_POST['id'];

        $query = "UPDATE reservation SET ";
        $query .= "fullName = '$fullName', ";
        $query .= "date = '$date', ";
        $query .= "time = '$time' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query); 

        if(!$result){
            die("Query Failed");
        }
    }
    function deleteRows(){
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM reservation ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($connection, $query); 

        if(!$result){
            die("Query Failed");
        }
    }

?>