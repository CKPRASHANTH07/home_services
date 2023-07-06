<?php
include_once "scripts/checklogin.php";
include_once "include/header.php";

if (!check()) {
    header('Location: Bookingspending.php');
    exit();
}

$provider = $_SESSION['user'];

$cities = ["Coimbatore", "Chennai", "Tirupur", "Madurai", "Salem"];
?>

<div class="container">
  <h1>Welcome</h1>
  <p>Our company is committed to maintaining high work ethics and delivering quality service to our clients.</p>
  <p>Workers must be punctual and arrive at the scheduled time.</p>
<p>Workers must dress appropriately and wear a uniform or other suitable attire.</p>
<p>Workers must be courteous and respectful to customers at all times.</p>
<p>Workers must maintain a clean and tidy appearance.</p>
<p>Workers must follow all safety protocols and guidelines.</p>
<p>Workers must possess the necessary skills and experience to perform their job duties.</p>
<p>Workers must be reliable and trustworthy.</p>
<p>Workers must maintain confidentiality and protect customer privacy.</p>
<p>Workers must have good communication skills and be able to clearly communicate with customers.</p>
<p>Workers must have a positive attitude and maintain a professional demeanor.</p>
<p>Workers must complete their job duties within the scheduled time frame.</p>
<p>Workers must maintain a high level of cleanliness and hygiene.</p>
<p>Workers must use appropriate tools and equipment for the job.</p>
<p>Workers must properly dispose of waste and debris.</p>
<p>Workers must maintain a safe and secure work environment.</p>
<p>Workers must comply with all applicable laws and regulations.</p>
<p>Workers must keep accurate records of their work.</p>
<p>Workers must follow all company policies and procedures.</p>
<p>Workers must report any incidents or accidents to their supervisor.</p>
<p>Workers must undergo regular training to improve their skills.</p>
<p>Workers must use their own tools and equipment unless otherwise provided by the company.</p>
<p>Workers must keep their tools and equipment in good condition.</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</div>

<?php include_once "./include/footer.php"; ?>
