<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brgy";

$conn = new mysqli($servername, $username, $password, $dbname);
	if(isset($_GET['verify'])){

		$verify=$_GET['verify'];
		$sql = "UPDATE request SET status='Verified', date_approve=NOW() WHERE id='$verify'";

		if ($conn->query($sql) === TRUE) {
			$numbers = $_GET['number'];
		    $message = "Good day, your request for ".$_GET['type']." has been APPROVED.It will be ready for pick-up in 10 minutes. Thank you!";

		   
		    
$ch = curl_init();
$parameters = array(
	'apikey' => 'a61656a941875a02af6535da52cb3c98', //Your API KEY 
	'number' => $numbers,
	'message' =>$message, 
	'sendername' => 'SEMAPHORE'
	);

	curl_setopt($ch, CURLOPT_URL, 'https://semaphore.co/api/v4/messages' ); curl_setopt( $ch, CURLOPT_POST, 1);
	//Send the parameters set above with the request
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
	// Receive response from server
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
	$output = curl_exec( $ch);
	curl_close($ch);
	//Show the server response
	 $output;

		  	?>
		  	<script type="text/javascript">
		  		alert('Successfully verify');
		  		location.href="?page=request";
		  	</script>
		  	<?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}


	if(isset($_GET['declined'])){

		$declined=$_GET['declined'];
		$sql = "UPDATE request SET status='Declined', date_approve=NOW() WHERE id='$declined'";

		if ($conn->query($sql) === TRUE) {
			$numbers = $_GET['number'];
		    $message = "Good day, your request for ".$_GET['type']." has been DENIED. Please visit the barangay hall and inquire with your barangay about the issue. Thank you!";

		   
		    
$ch = curl_init();
$parameters = array(
	'apikey' => 'a61656a941875a02af6535da52cb3c98', //Your API KEY 
	'number' => $numbers,
	'message' =>$message, 
	'sendername' => 'SEMAPHORE'
	);

	curl_setopt($ch, CURLOPT_URL, 'https://semaphore.co/api/v4/messages' ); curl_setopt( $ch, CURLOPT_POST, 1);
	//Send the parameters set above with the request
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
	// Receive response from server
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
	$output = curl_exec( $ch);
	curl_close($ch);
	//Show the server response
	 $output;

		  	?>
		  	<script type="text/javascript">
		  		alert('Request Declined');
		  		//location.href="?page=request";
		  	</script>
		  	<?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}
?>
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=ayuda_distribution" class="text-muted text-hover-primary">Ayuda</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Distribution</li>
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
		<!--begin::Subject-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header align-items-center py-5 gap-2 gap-md-5">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-subject-list-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Form" />
					</div>
					<!--end::Search-->
					<!--begin::Export buttons-->
					<div id="kt_report_subject_list_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar d-flex justify-content-end gap-5" data-kt-subject-list-toolbar="base"/>
					<!--begin::Export dropdown-->
					<div>
						<button type="button" class="btn btn-light-primary w-200px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
									<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
									<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							Export
						</button>
						<!--begin::Menu-->
						<div id="kt_report_subject_list_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-subject-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-subject-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-subject-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-subject-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Export dropdown-->
					
				</div>

				<!--begin::Group actions-->
				<div class="d-flex justify-content-end gap-5 align-items-center d-none" data-kt-subject-list-toolbar="selected">
					<div class="fw-bolder me-5">
						<span class="me-2" data-kt-subject-list-select="selected_count"></span>
						Selected
					</div>
					<button type="button" class="btn btn-danger w-200px" data-kt-subject-list-select="delete_selected">Delete Selected</button>
				</div>
				<!--end::Group actions-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_report_subject_list_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th class="w-10px pe-2">

							</th>
							<th class="min-w-75px">Name</th>
							<th class="min-w-75px">Gender</th>
							<th class="min-w-75px">Barangay</th>
							<th class="min-w-75px">Cash</th>
							<th class="min-w-75px text-end"></th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						<?php
							$sql =  "SELECT * FROM residence";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {


							    ?>
							    	<tr>
							    		<td></td>
							    		<td><?php echo$row['f_name']?> <?php echo$row['m_name']?> <?php echo$row['l_name']?></td>
								    	<td><?php echo$row['gender']?></td>
										<td><?php echo$row['brgy']?></td>
										<td>₱ <?php echo$row['cash']?></td>
								    	<?php
								    	if($row['status']=="pending"){
								    		?>
								    		<?php
								    	}else{
								    		?>
										    <td class="text-end text-success">
												<a href="print/?id=<?php echo$row['id']?>" target="_blank" class="text-hover-info text-primary">
											</td>
										    <?php
								    	}

								    	?>
							    	</tr>
							    <?php


							  }
							}
						?>
					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Subject-->
	</div>
	<!--end::Container-->
</div>