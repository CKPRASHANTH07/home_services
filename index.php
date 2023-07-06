<?php

include_once "./include/header.php";
$cities = ["Coimbatore", "Chennai", "Madurai", "Tirupur", "Salem"];

?>
<body style="background-color: white;">
<h2 class="text-center" style="margin-top: 20px">Home Services</h2>
<hr>
<div class="container" style="margin-top:40px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-5">
            <label for="" style="color:black">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
            <label for="" style="color:black">Who's Required</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="mobile">Mobile Repairer</option>
                <option value="baby sitter">Baby sitter</option>
                        <option value="beatucian">beautician</option>
                        <option value="gardener">gardener</option>
                        <option value="plumber">Priest</option>
                        <option value="painter">Painter</option>
            </select>
        </div>

        <div class="form-group col-2">
            <label for="" style="color:black">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>
    <style>
        th{
            color:black;
        }
        td{
            color:grey;
        }
    </style>

    <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
    <body>
        <style>
            h2 {
                color:black;
            }
            p{
                color:grey;
            }
            h3{
                color:red;
            }
        </style>
    <main>
     <section id="services">
		<h2 class="text-center" style="margin-top: 20px">Our Services</h2>
        <br></br>
		<ul>
			<li>
				<img src="https://media.istockphoto.com/id/1096963880/photo/worker-fixing-water-tap.jpg?s=612x612&w=0&k=20&c=EamDu9m9vLIuf_3vqNUe2O4suu1I__zdOBNcSGOSEA4=" alt="Plumber" width="100%" height="50%">
				<h3 style="color:black">Plumbing</h3>
				<p>We offer professional plumbing services for both residential and commercial customers.</p>
			</li>
			<li>
				<img src="https://media.istockphoto.com/id/1369703409/photo/focus-on-hand-young-electrical-engineer-with-protective-workware-repairing-or-connecting.jpg?s=612x612&w=0&k=20&c=yeOFZSbZJlPIxuRfbaJwT6C95AxIy0EpuZU5a79_WXY=" alt="Electrical" width="100%" height="50%">
				<h3 style="color:black">Electrical</h3>
				<p>Our experienced electricians are ready to tackle any electrical issue in your home or business.</p>
			</li>
			<li>
				<img src="https://media.istockphoto.com/id/938085736/photo/workamn-painting-wall-indoors.jpg?s=612x612&w=0&k=20&c=wW_LTcleg_2L21j8FTRMxFMwzMamIYjRAyRgQyjEjyc=" alt="Painter" width="100%" height="50%">
				<h3 style="color:black">Painting</h3>
				<p>Transform your home with a fresh coat of paint. We offer interior and exterior painting services.</p>
			</li>
		</ul>
	</section>

	<section id="pricing">
		<h2 class="" style="margin-left: 20px">Pricing</h2>
		<p class="" style="margin-left: 20px">Our pricing is transparent and competitive. Contact us for a free estimate.</p>
	</section>

	<section id="about-us">
		<h2 class="" style="margin-left: 20px">About Us</h2>
		<p class="" style="margin-left: 20px">We are a team of professionals dedicated to providing top-quality home maintenance services.</p>
	</section>

	</main>
</body>
</html>


<?php include_once "./include/footer.php";

