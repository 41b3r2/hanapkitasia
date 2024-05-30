<?php

		if(isset($_GET['submit'])){

			$purpose=$_GET['purpose'];

			if(isset($_GET['coi'])){
				$request='CERTIFICATE OF INDIGENCY';

				$sql = "SELECT * FROM request WHERE residence_id='$id' AND type='$request' AND status='pending'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						  ?>
						  	<script type="text/javascript">alert('Currently under request: <?php echo$request?>');</script>
						  <?php

					} else {
					  	$sql = "INSERT INTO request(residence_id, type, status,date_request,time_request,purpose)
						VALUES ('$id', '$request', 'pending', '$date_now',' $timestamp2','$purpose')";
						$conn->query($sql);
						?>
						  	<script type="text/javascript">alert('Successfully request <?php echo$request?>');</script>
						  <?php
					}
				
			}

			if(isset($_GET['bc'])){
				$request='BARANGAY CLEARANCE';

				$sql = "SELECT * FROM request WHERE residence_id='$id' AND type='$request' AND status='pending'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						  ?>
						  	<script type="text/javascript">alert('Currently under request: <?php echo$request?>');</script>
						  <?php

					} else {
					  	$sql = "INSERT INTO request(residence_id, type, status,date_request,time_request,purpose)
						VALUES ('$id', '$request', 'pending', '$date_now',' $timestamp2','$purpose')";
						$conn->query($sql);
						?>
						  	<script type="text/javascript">alert('Successfully request <?php echo$request?>');</script>
						  <?php
					}
			}

			if(isset($_GET['bbp'])){
				$request='BARANGAY BUSINESS PERMIT';

				$sql = "SELECT * FROM request WHERE residence_id='$id' AND type='$request' AND status='pending'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						  ?>
						  	<script type="text/javascript">alert('Currently under request: <?php echo$request?>');</script>
						  <?php

					} else {
					  	$sql = "INSERT INTO request(residence_id, type, status,date_request,time_request,purpose)
						VALUES ('$id', '$request', 'pending', '$date_now',' $timestamp2','$purpose')";
						$conn->query($sql);
						?>
						  	<script type="text/javascript">alert('Successfully request <?php echo$request?>');</script>
						  <?php
					}
			}

			if(isset($_GET['bc2'])){
				$request='BARANGAY CERTIFICATE';

				$sql = "SELECT * FROM request WHERE residence_id='$id' AND type='$request' AND status='pending'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						  ?>
						  	<script type="text/javascript">alert('Currently under request: <?php echo$request?>');</script>
						  <?php

					} else {
					  	$sql = "INSERT INTO request(residence_id, type, status,date_request,time_request,purpose)
						VALUES ('$id', '$request', 'pending', '$date_now',' $timestamp2','$purpose')";
						$conn->query($sql);
						?>
						  	<script type="text/javascript">alert('Successfully request <?php echo$request?>');</script>
						  <?php
					}
			}

			if(isset($_GET['cor'])){
				$request='CERTIFICATE OF RESIDENCY';

				$sql = "SELECT * FROM request WHERE residence_id='$id' AND type='$request' AND status='pending'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						  ?>
						  	<script type="text/javascript">alert('Currently under request: <?php echo$request?>');</script>
						  <?php

					} else {
					  	$sql = "INSERT INTO request(residence_id, type, status,date_request,time_request,purpose)
						VALUES ('$id', '$request', 'pending', '$date_now',' $timestamp2','$purpose')";
						$conn->query($sql);
						?>
						  	<script type="text/javascript">alert('Successfully request <?php echo$request?>');</script>
						  <?php
					}
			}

			?> <script type="text/javascript">location.href="?page=request";</script><?php

		}
?>
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">REQUESTING</h1>
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
				<li class="breadcrumb-item text-muted">REQUEST FORM</li>
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
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Request</a>
					</li>
					<!--end::Nav item-->
				</ul>
				<!--begin::Navs-->
			</div>
		</div>
		<!--end::Navbar-->
		<form method="GET">
		<!--begin::details View-->
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			<!--begin::Card header-->
			<div class="card-header cursor-pointer">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">FORM Details</h3>
				</div>
				<!--end::Card title-->
				<!--begin::Action-->
				<input type="hidden"  name="page" value="request_form">
				<input type="submit" class="btn btn-primary align-self-center" name="submit">
				<!--end::Action-->
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">CERTIFICATE OF INDIGENCY</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><input type="checkbox" class="form-check-input" name="coi"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">BARANGAY CLEARANCE</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"><input type="checkbox" class="form-check-input" name="bc"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">BARANGAY BUSINESS PERMIT</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"><input type="checkbox" class="form-check-input" name="bbp"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">BARANGAY CERTIFICATE</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><input type="checkbox" class="form-check-input" name="bc2"></span>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">CERTIFICATE OF RESIDENCY</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"><input type="checkbox" class="form-check-input" name="cor"></span>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">PURPOSE OF REQUEST</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<textarea type="checkbox" class="form-control" name="purpose" placeholder="for what purpose?" required style="height:150px;"></textarea>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::details View-->
		</form>
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->