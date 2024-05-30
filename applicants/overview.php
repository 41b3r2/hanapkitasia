<?php

// Establish connection to your MySQL database
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "ubsiadb"; // Change this to your MySQL database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_SESSION['applicant_id'])) {
    $applicantId = $_SESSION['applicant_id'];

    // Query to fetch user information from tblemployer
    $query = "SELECT * FROM tblapplicants WHERE id = $applicantId"; // Adjust this query according to your database schema

    // Execute the query
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Extract the necessary variables from the user data
            // Define the following variables based on your database schema
            $email = $row['email']; // Placeholder, replace with actual column name
            $status = $row['status']; // This seems to be already defined in your code
            $register_status = $row['register_status']; // Placeholder, replace with actual column name

            // Display the user's profile details
            // You can use these variables to display the user's information in your HTML
        } else {
            echo "User not found";
        }
    } else {
        echo "Query failed: " . mysqli_error($connection);
    }
} else {
    echo "User ID not set";
}

// Close the database connection
mysqli_close($connection);
?>

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">MY PROFILE</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=dashboard" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">My Profile</li>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
		<!--begin::Navbar-->
		<div class="card mb-5 mb-xl-10">
			<div class="card-body pt-9 pb-0">
				<!--begin::Navs-->
				<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?page=overview">Overview</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="?page=settings">Settings</a>
					</li>
					<!--end::Nav item-->
				</ul>
				<!--begin::Navs-->
			</div>
		</div>
		<!--end::Navbar-->
		<!--begin::details View-->
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			<!--begin::Card header-->
			<div class="card-header cursor-pointer">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Profile Details</h3>
				</div>
				<!--end::Card title-->
				<!--begin::Action-->
				<a href="?page=settings" class="btn btn-primary align-self-center">Edit Profile</a>
				<!--end::Action-->
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Full Name</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><?=$fullName?></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">User Type</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800">Residence</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Email</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"><?=$email?></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Address</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><?php echo$row['address']?></span>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Cellphone Number</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><?php echo$row['cp_1']?></span>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Status</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><?php echo$status?></span>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Registration Status</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><?php echo$register_status?></span>
					</div>
					<!--end::Col-->
				</div>
				
				
				
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::details View-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->