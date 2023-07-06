<?php

include_once "scripts/checklogin.php";
include_once "scripts/helpers.php";
include_once "scripts/DB.php";


$booking_id = clean($_GET['id']);
$isRemoved = DB::query("DELETE FROM bookings WHERE id=?", [$booking_id]);

if ($isRemoved) {
    header('Location: Bookingspending.php?msg=success');
    exit();
} else {
    header('Location: Bookingspending.php?msg=error');
    exit();
}
?>
