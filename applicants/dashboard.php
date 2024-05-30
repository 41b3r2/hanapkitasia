<?php

include'../connection.php';

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
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">MY DASHBOARD</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=overview" class="text-muted text-hover-primary">Home</a>
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
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Profile Details</h3>
                </div>
                <!--end::Action-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <div class="row">


				
				
				<div style="display: flex; justify-content: center;">
					<div style="flex: 1; margin-left: 10px;">
						<div style="background-color: #F0FFFF; border: 2px solid #3B2F2F; padding: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); border-radius: 30px; display: flex; align-items: center; justify-content: center;">
							<!-- First Column -->
							<div style="margin-right: 20px; text-align: center;">
								<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#3B2F2F" class="bi bi-tools" viewBox="0 0 16 16">
									<path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
								</svg>
							</div>
							<!-- Second Column -->
							<div style="text-align: center;">
								<h2 style="color: #3B2F2F; font-family: Arial, sans-serif; font-size: 24px; margin-bottom: 10px;">Applied</h2>
								<p style="color: #666; font-size: 28px; margin: 0;">###</p>
							</div>
						</div>
					</div>
					<div style="flex: 1; margin-left: 10px;">
						<div style="background-color: #E0FFFF; border: 2px solid #3B2F2F; padding: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); border-radius: 30px; display: flex; align-items: center; justify-content: center;">
							<!-- First Column -->
							<div style="margin-right: 20px; text-align: center;">
								<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
									<path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
								</svg>
							</div>
							<!-- Second Column -->
							<div style="text-align: center;">
								<h2 style="color: #3B2F2F; font-family: Arial, sans-serif; font-size: 24px; margin-bottom: 10px;">Worked</h2>
								<p style="color: #666; font-size: 28px; margin: 0;">###</p>
							</div>
						</div>
					</div>
					<div style="flex: 1; margin-left: 10px;">
						<div style="background-color: #E0FFFF; border: 2px solid #3B2F2F; padding: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); border-radius: 30px; display: flex; align-items: center; justify-content: center;">
							<!-- First Column -->
							<div style="margin-right: 20px; text-align: center;">
								<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
									<path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  									<path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
								</svg>
							</div>
							<!-- Second Column -->
							<div style="text-align: center;">
								<h2 style="color: #3B2F2F; font-family: Arial, sans-serif; font-size: 24px; margin-bottom: 10px;">Status</h2>
								<p style="color: #666; font-size: 28px; margin: 0;">###</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="card-header">
                <div class="card-title m-0">
                </div>
                <!--end::Action-->
            </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::details View-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->


