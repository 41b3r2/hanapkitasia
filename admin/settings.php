<?php

$sql = "SELECT * FROM admin WHERE email='$email'";
$dark_result = $conn->query($sql);

$row = $dark_result->fetch_assoc();


if(isset($_GET['first_name'])){
		$f_name=$_GET['first_name'];
		$m_name=$_GET['middle_name'];
		$l_name=$_GET['last_name'];


		$sql = "UPDATE admin SET f_name='$f_name',m_name='$m_name',l_name='$l_name' WHERE email='$email'";

		if ($conn->query($sql) === TRUE) {
		  ?><script type="text/javascript">location.href="?page=settings"</script><?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}
}

if(isset($_GET['emailaddress'])){
	$cemail=$_GET['emailaddress'];

	$password=$row['password'];
	$pass=md5($_GET['confirmemailpassword']);

	if($password==$pass){

		$sql = "UPDATE admin SET email='$cemail' WHERE email='$email'";

		if ($conn->query($sql) === TRUE) {

			 		
          $_SESSION['email']=$cemail;
          


		  ?><script type="text/javascript">location.href="?page=settings"</script><?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}

	}

}

if(isset($_GET['currentpassword'])){
	$password=$row['password'];
	$currentpassword=md5($_GET['currentpassword']);
	$newpassword=md5($_GET['newpassword']);

	if($password==$currentpassword){

		$sql = "UPDATE admin SET password='$newpassword' WHERE email='$email'";

		if ($conn->query($sql) === TRUE) {

		?><script type="text/javascript">location.href="?page=settings"</script><?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}

	}else{
		?><script type="text/javascript">alert('Wrong password');location.href="?page=settings"</script><?php
	}
}

if(isset($_GET['deactivate'])){


	$sql = "UPDATE admin SET status='inactive' WHERE email='$email'";

		if ($conn->query($sql) === TRUE) {

		?><script type="text/javascript">location.href="dark_sign-out.php"</script><?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}

}
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>


<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">ACCOUNT SETTINGS</h1>
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
				<li class="breadcrumb-item text-muted">Account Settings</li>
				<!--end::Item-->
			</ul>


			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=light_mode" class="text-muted text-hover-primary">Mode</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Display</li>
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
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="?page=overview">Overview</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?page=settings">Settings</a>
					</li>
					<!--end::Nav item-->
				</ul>
				<!--begin::Navs-->
			</div>
		</div>
		<!--end::Navbar-->
		<!--begin::Basic info-->
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Profile Details</h3>
				</div>
				<!--end::Card title-->
			</div>
			<!--begin::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_profile_details" class="collapse show">
				<!--begin::Form-->
				<form id="kt_account_profile_details_form" class="form" method="GET">
					<!--begin::Card body-->
					<div class="card-body border-top p-9">
						<!--begin::Input group-->
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="hidden" name="page" value="settings">
										<input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First Name" value="<?php echo$row['f_name']?>" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="middle_name" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" value="<?php echo$row['m_name']?>" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last Name" value="<?php echo$row['l_name']?>" />
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Card body-->
					<!--begin::Actions-->
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
							<span class="indicator-label">Save Changes</span>
      				<span class="indicator-progress">Please wait...
      					<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
      				</span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Basic info-->
		<!--begin::Sign-in Method-->
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Sign-in Method</h3>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_signin_method" class="collapse show" method="POST">
				<!--begin::Card body-->
				<div class="card-body border-top p-9">
					<!--begin::Email Address-->
					<div class="d-flex flex-wrap align-items-center">
						<!--begin::Label-->
						<div id="kt_signin_email">
							<div class="fs-6 fw-bolder mb-1">Email Address</div>
							<div class="fw-bold text-gray-600"><?php echo$email?></div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_email" class="form" novalidate="novalidate" method="GET">
								<div class="row mb-6">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<div class="fv-row mb-0">
											<input type="hidden" name="page" value="settings">
											<label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
											<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="<?php echo$email?>" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="fv-row mb-0">
											<label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
										</div>
									</div>
								</div>
								<div class="d-flex">
									<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
									<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_email_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Change Email</button>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Email Address-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Password-->
					<div class="d-flex flex-wrap align-items-center mb-10">
						<!--begin::Label-->
						<div id="kt_signin_password">
							<div class="fs-6 fw-bolder mb-1">Password</div>
							<div class="fw-bold text-gray-600">************</div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_password" class="form" novalidate="novalidate" method="GET">
								<div class="row mb-1">
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<input type="hidden" name="page" value="settings">
											<label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
										</div>
									</div>
								</div>
								<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
								<div class="d-flex">
									<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
									<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_password_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Reset Password</button>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Password-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Sign-in Method-->
		<!--begin::Deactivate Account-->
		<div class="card">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Deactivate Account</h3>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_deactivate" class="collapse show">
				<!--begin::Form-->
				<form id="kt_account_deactivate_form" class="form" method="GET" >
					<!--begin::Card body-->
					<div class="card-body border-top p-9">
						<!--begin::Notice-->
						<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
							<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
									<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
									<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-bold">
									<h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
									<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or contact number.
									<br />
									<a class="fw-bolder" href="#">Learn more</a></div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
						<!--begin::Form input row-->
						<div class="form-check form-check-solid fv-row">
							<input type="hidden" name="page" value="settings">
							<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
							<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
						</div>
						<!--end::Form input row-->
					</div>
					<!--end::Card body-->
					<!--begin::Card footer-->
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">Deactivate Account</button>
					</div>
					<!--end::Card footer-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Deactivate Account-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->
<?php
  //POST method for login
  if(isset($_POST['staff_id'])){
  	$acc_f_name = $_POST['first_name'];
  	$acc_m_name = $_POST['middle_name'];
  	$acc_l_name = $_POST['last_name'];
  	$acc_staff_id = $_POST['staff_id'];
  	$acc_phone_number = $_POST['phone_number'];

  	$sql = "UPDATE admin SET f_name='$acc_f_name', m_name='$acc_m_name', l_name='$acc_l_name', staff_id='$acc_staff_id', phone_number='$acc_phone_number' WHERE email='$email'";
  	$dark_result = $conn->query($sql);

  	if($dark_result === true){
		  ?>
        <script type="text/javascript">
          setTimeout(function() {
            swal.fire({
              text: "Thank you! You've updated your basic information.",
              icon: "success",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn fw-bold btn-light-primary"
              }
          	});
          }, 500);  
        </script>
      <?php
		}else{
		  echo "Connection Error: " . $conn->error;
		}
	}
?>


</body>
 
</html>