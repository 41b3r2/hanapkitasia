<?php
	if(isset($_GET['verify'])){

		$verify=$_GET['verify'];
		$sql = "UPDATE residence SET register_status='Verify' WHERE id='$verify'";

		if ($conn->query($sql) === TRUE) {

			$numbers = $_GET['number'];
		    $message = "Congratulations! Your account is now VERIFIED. You may now avail of the E-Brgy. Services.";

		   
		    
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
		  		location.href="?page=residence";
		  	</script>
		  	<?php
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}

	if(isset($_GET['declined'])){

		$declined=$_GET['declined'];
		$sql = "UPDATE residence SET register_status='Declined' WHERE id='$declined'";

		if ($conn->query($sql) === TRUE) {

			$numbers = $_GET['number'];
		    $message = "Sorry, you account has been DENIED. Please kindly review again if you have submitted all the required and proper documents needed for verification. You may also visit the barangay hall and inquire with your barangay about the issue. Thank you!";

		   
		    
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
		  		alert('Account Declined');
		  		location.href="?page=residence";
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
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Residents LIST</h1>
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
				<li class="breadcrumb-item text-muted">Residents List</li>
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
		<!--begin::Semester-->
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
						<input type="text" data-kt-semester-list-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Residents" />
					</div>
					<!--end::Search-->
					<!--begin::Export buttons-->
					<div id="kt_report_semester_list_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar d-flex justify-content-end gap-5" data-kt-semester-list-toolbar="base"/>
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
						<div id="kt_report_semester_list_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-semester-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-semester-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-semester-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-semester-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Export dropdown-->
					<!--begin::Add Semester-->
					<a type="button" class="btn btn-primary w-200px" href="../sign-up-residence.php">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						Add Residents
					</a>
					<!--end::Add Semester-->
				</div>
				<!--end::Card toolbar-->
				<!--begin::Group actions-->
				<div class="d-flex justify-content-end gap-5 align-items-center d-none" data-kt-semester-list-toolbar="selected">
					<div class="fw-bolder me-5">
						<span class="me-2" data-kt-semester-list-select="selected_count"></span>
						Selected
					</div>
					<button type="button" class="btn btn-danger w-200px" data-kt-semester-list-select="delete_selected">Delete Selected</button>
				</div>
				<!--end::Group actions-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_report_semester_list_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th class="w-10px pe-2">
								<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
									<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_report_semester_list_table .form-check-input" value="1" />
								</div>
							</th>
							<th class="min-w-75px">Name</th>
							<th class="min-w-75px">Barangay</th>
							<th class="min-w-55px">Address</th>
							<th class="min-w-75px">Goverment ID</th>
							<th class="min-w-75px">Letters</th>
							<th class="min-w-75px">NBI</th>
							<th class="min-w-75px">User Type</th>
							<th class="text-end min-w-70px"></th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						

    					<?php
    						$sql = "SELECT r.*,
IFNULL((SELECT name FROM images WHERE user_id=r.id AND user_type='gov_id' ORDER BY id DESC LIMIT 1 ),'philsys.png') AS gov_id,
IFNULL((SELECT name FROM images WHERE user_id=r.id AND user_type='nbi' ORDER BY id DESC LIMIT 1 ),'philsys.png') AS nbi,
IFNULL((SELECT name FROM images WHERE user_id=r.id AND user_type='letters' ORDER BY id DESC LIMIT 1 ),'philsys.png') AS letters FROM residence r ORDER BY id DESC";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							    ?><tr>
							    <td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
							    <td><?php echo$row['f_name']?> <?php echo$row['m_name']?> <?php echo$row['l_name']?></td>
							    <td><?php echo$row['brgy']?></td>
							    <td><?php echo$row['street_address']?> <?php echo$row['address']?></td>
							    <td>
							    	<a href="../residence/uploads/<?php echo$row['gov_id']?>" target="_blank"><img src="../residence/uploads/<?php echo$row['gov_id']?>" style="width: 50px;"></a>
							    </td>
							    <td> 
									<a href="../residence/uploads/<?php echo$row['letters']?>" target="_blank"><img src="../residence/uploads/<?php echo$row['letters']?>" style="width: 50px;"></a>
								</td>
								<td> 
									<a href="../residence/uploads/<?php echo$row['nbi']?>" target="_blank"><img src="../residence/uploads/<?php echo$row['nbi']?>" style="width: 50px;"></a>
								</td>
							    <td><?php echo$row['registration_type']?></td>
							    <?php
							    	if($row['register_status']=="Not Verified"){
							    		?>
								    		<td class="text-end text-primary">
												<a href="?page=residence&verify=<?php echo$row['id']?>&number=<?php echo$row['cp_1']?>" class="px-3 text-hover-info" data-toggle="tooltip" data-placement="top" title="Edit" >
													Verify
												</a>
												<a href="?page=residence&declined=<?php echo$row['id']?>&number=<?php echo$row['cp_1']?>" class="px-3 text-hover-info text-danger" data-toggle="tooltip" data-placement="top" title="Edit" >Declined
												</a>
											</td>
							    		<?php
							    	}else if($row['register_status']=="Declined"){
							    		?>
									    <td class="text-end text-danger">
											 Declined
										</td>
									    <?php
							    	}else{
							    		?>
									    <td class="text-end text-success">
											<i class="fa fa-check text-success" aria-hidden="true"></i> Verified
										</td>
									    <?php
							    	}
							    ?></tr><?php
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
		<!--end::Semester-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->
