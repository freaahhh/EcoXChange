<?php 
    include('../includes/dbconn.php');
    
    $status = mysqli_real_escape_string($dbconn, $_GET['book_status']);
    $id = mysqli_real_escape_string($dbconn, $_GET['book_ID']);
    
    $updateQuery = "UPDATE booking SET book_status='$status' WHERE book_ID='$id'";
    mysqli_query($dbconn, $updateQuery);
    header('Location: VehicleBooking.php');
    exit;
?>