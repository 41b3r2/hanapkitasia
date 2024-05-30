<?php
include'../../connect/connect.php';

$id=$_GET['id'];

$sql = "SELECT r.*,
(SELECT f_name FROM residence WHERE id=r.residence_id) AS f_name,
(SELECT m_name FROM residence WHERE id=r.residence_id) AS m_name,
(SELECT l_name FROM residence WHERE id=r.residence_id) AS l_name,
(SELECT street_address FROM residence WHERE id=r.residence_id) AS street_address,
(SELECT address FROM residence WHERE id=r.residence_id) AS address,
(SELECT brgy FROM residence WHERE id=r.residence_id) AS brgy,
(SELECT zone FROM residence WHERE id=r.residence_id) AS zone,
(SELECT district FROM residence WHERE id=r.residence_id) AS district FROM request r WHERE id='$id'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$brgy=$row['brgy'];



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div style="width: 800px;height: 1160px; border: 2px solid #ffc000;">
	<center>
		<div style="width: 790px;height: 1150px; border: 2px solid #ffc000; margin-top:3px ;">

			<img src="../../image/Barangay.svg.png" style="width:150px; position: absolute; left: 50px; margin-top:50px;">
			<img src="../../image/Barangay.svg.png" style="width:750px; position: absolute;margin-left: -375px;margin-top: 200px;opacity: 10%;">
			<img src="../../image/logo.png" style="width:150px; position: absolute; right: 50px; margin-top:50px;">

			<p style="margin-top:50px;">
				<b>
					Republic of the Philippines<br><br>
					Barangay <?php echo $row['brgy'];?> Zone <?php echo $row['zone'];?><br><br>
					District <?php echo $row['district'];?><br><br>
					City of Manila
				</b>
			</p><br>
			<p>
				<b>Office of the Barangay Chairman</b>
			</p>
			<div style="border: black 1px dashed; width:90%;"></div>
			<h1><?php echo$row['type']?></h1>

			<?php

				if($row['type']=="CERTIFICATE OF INDIGENCY"){
					?>
						<br><p style="margin-left: -55%;">To whom it may concern,</p><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> is to certify that <b><i><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></i></b> is a bonafide resident of <b><i>Barangay <?php echo $row['brgy'];?></i></b>, <b><i>Zone <?php echo $row['zone'];?></i></b> and residing at <?php echo$row['street_address']?> <?php echo$row['address']?>
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">It</label>  is further certified that the said person is one of the many indigent families in our Barangay.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label>   certification is being issued upon the request of the above person.
						</p>
					</div><br>

					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Given</label>  on this day <?php echo date('d')?>, <?php echo date('M')?> <?php echo date('Y')?>, at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, District <?php echo $row['district'];?>, Manila City, Philippines.
						</p>
					</div><br><br><br><br><br>

					<div style="width:50%; float: right;">
						<p style="text-align: center;">
							_________________<br>
							<?php brgy_chairman($brgy)?>
							<br> Barangay Chairman<br>
						</p>
					</div><br><br><br><br><br>
					<div style="width:75%; text-align: left;">
						<p style="color:red;">
							Note:<br>
							- Not valid without official seal<br>
							- Shall be valid for six (6) months from the date of issuance.<br>
						</p>
					</div>
					<?php
				}

				if($row['type']=="BARANGAY CLEARANCE"){
					?>

					<br><p style="margin-left: -55%;">To whom it may concern,</p><br>
					<div style="width:75%; text-align: left;">
						<p >
							 <label style="margin-left: 40px;">This</label> is to certify that <b><i><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></i></b> is Filipino of legal age, is a  resident of <b><i>Barangay <?php echo $row['brgy'];?></i></b>, <b><i>Zone <?php echo $row['zone'];?></i></b> and residing at <?php echo$row['street_address']?> <?php echo$row['address']?>
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> further certifies that he/she is a person of good  moral character, law abiding citizen, and has never been convicted of any crime involving moral turpitude nor been a member of any subversive organization which seeks to overthrow our government.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> certification is being issued upon the request of the above person for whatever legal purpose it may serve.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Given</label>  on this day <?php echo date('d')?>, <?php echo date('M')?> <?php echo date('Y')?>, at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, District <?php echo $row['district'];?>, Manila City, Philippines.
						</p>
					</div><br><br><br><br><br>

					<div style="width:50%; float: right;">
						<p style="text-align: center;">
						    _________________<br>
							<?php brgy_chairman($brgy)?>
							<br> Barangay Chairman<br>
						</p>
					</div><br><br><br><br><br>
					<div style="width:75%; text-align: left;">
						<p style="color:red;">
							Note:<br>
							- Not valid without official seal<br>
						</p>
					</div>
					<?php
				}

				if($row['type']=="BARANGAY CERTIFICATE"){
					?>
					<br><p style="margin-left: -55%;">To whom it may concern,</p><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> is to certify that <b><i><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></i></b> is a bonafide resident of <b><i>Barangay <?php echo $row['brgy'];?></i></b>, <b><i>Zone <?php echo $row['zone'];?></i></b> and residing at <?php echo$row['street_address']?> <?php echo$row['address']?>
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> further certifies that he/she is a person of good  moral character, law abiding citizen, and has never been convicted of any crime involving moral turpitude nor been a member of any subversive organization which seeks to overthrow our government.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label> certification is being issued upon the request of the above person for whatever legal purpose it may serve.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Given</label>  on this day <?php echo date('d')?>, <?php echo date('M')?> <?php echo date('Y')?>, at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, District <?php echo $row['district'];?>, Manila City, Philippines.
						</p>
					</div><br><br><br><br><br>

					<div style="width:50%; float: right;">
						<p style="text-align: center;">
						    _________________<br>
							<?php brgy_chairman($brgy)?>
							<br> Barangay Chairman<br>
						</p>
					</div><br><br><br><br><br>
					<div style="width:75%; text-align: left;">
						<p style="color:red;">
							Note:<br>
							- Not valid without official seal<br>
						</p>
					</div>
					<?php

					

				}

				if($row['type']=="CERTIFICATE OF RESIDENCY"){
					?>
					<br><p style="margin-left: -55%;">To whom it may concern,</p><br>
					<div style="width:75%; text-align: left;">
						<p >
							 <label style="margin-left: 40px;">This</label> is to certify that <b><i><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></i></b>  of legal age, a Filipino citizen, who citizen signature below is a <b>PERMANENT RESIDENCE</b> of <b><i>Barangay <?php echo $row['brgy'];?></i></b>, <b><i>Zone <?php echo $row['zone'];?></i></b> and residing at <?php echo$row['street_address']?> <?php echo$row['address']?>
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Based</label>  on the records of this office, he/she has been residing at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, and <?php echo$row['street_address']?> <?php echo$row['address']?>
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label>   certification is being issued upon the request of the above-named person for whatever legal purpose it may serve.
						</p>
					</div><br>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Given</label>  on this day <?php echo date('d')?>, <?php echo date('M')?> <?php echo date('Y')?>, at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, District <?php echo $row['district'];?>, Manila City, Philippines.
						</p>
					</div><br><br><br><br><br>

					<div style="width:50%; float: right;">
						<p style="text-align: center;">
						    _________________<br>
							<?php brgy_chairman($brgy)?>
							<br> Barangay Chairman<br>
						</p>
					</div><br><br><br><br><br>
					<div style="width:75%; text-align: left;">
						<p style="color:red;">
							Note:<br>
							- Not valid without official seal<br>
						</p>
					</div>
					<?php
				}

				if($row['type']=="BARANGAY BUSINESS PERMIT"){
					?>
					<br><p style="margin-left: -55%;">To whom it may concern,</p><br>
					<div style="width:75%; text-align: left;">
						<p >
							 <label style="margin-left: 40px;">This</label> is to certify that the undersigned hereby approved the herein application of 
						</p>
					</div><br>
					<div style="width:75%; text-align: center;">
						<p >
							<h2 style="text-decoration: underline;"><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></h2>
							<b><i>Business Owner</i></b>
						</p>
					</div>
					
					<p>for a Barangay Clearance / Permit to operate the business of</p>
					<div style="width:75%; text-align: center;" >
						<p >
							<h2 id="business_name" style="text-decoration: underline;"><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></h2>
							<b><i>Business Name</i></b>
						</p>
					</div>
					<script type="text/javascript">var input = prompt("What's Business name?");document.getElementById("business_name").innerHTML=input; </script>
					<p>located at</p>
					
					<div style="width:75%; text-align: center;" >
						<p >
							<h2 id="business_address" style="text-decoration: underline;"><?php echo$row['l_name']?>, <?php echo$row['f_name']?> <?php echo$row['m_name']?></h2>
							<b><i>Business Address</i></b>
						</p>
					</div>
					<script type="text/javascript">var input = prompt("What's Business address?");document.getElementById("business_address").innerHTML=input; </script>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">This</label>   certifies that the applicant pledges to abide with the laws, rules, and regulations regarding the said activity and the same is not puissance to public order and safety.
						</p>
					</div>
					<div style="width:75%; text-align: left;">
						<p >
							<label style="margin-left: 40px;">Given</label>  on this day <?php echo date('d')?>, <?php echo date('M')?> <?php echo date('Y')?>, at Barangay <?php echo $row['brgy'];?>, Zone <?php echo $row['zone'];?>, District <?php echo $row['district'];?>, Manila City, Philippines.
						</p>
					</div><br><br>

					<div style="width:50%; float: right;">
						<p style="text-align: center;">
						    _________________<br>
							<?php brgy_chairman($brgy)?>
							<br> Barangay Chairman<br>
						</p>
					</div><br><br>
					<div style="width:75%; text-align: left;">
						<p style="color:red;">
							Note:<br>
							- Not valid without official seal<br>
						</p>
					</div>
					<?php
				}
			?>
		</div>
	</center>
</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>