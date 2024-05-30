
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">REQUEST LIST</h1>
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
				<li class="breadcrumb-item text-muted">Request List</li>
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
					
					<?php
						if($row['register_status']=='Verify'){
							?>
							<!--end::Export dropdown-->
								<a type="button" class="btn btn-primary w-200px" href="?page=request_form">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
											<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									Add Request
								</a>
							<?php
						}
					?>
					
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
								<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
									<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_report_subject_list_table .form-check-input" value="1" />
								</div>
							</th>
							<th class="min-w-75px">Type</th>
							<th class="min-w-75px">Purpose</th>
							<th class="min-w-75px">Date Request</th>
							<th class="min-w-75px">Time Request</th>
							<th class="min-w-75px">Status</th>
							<th class="min-w-75px">Date Approved</th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						<?php
							$sql = "SELECT * FROM request WHERE residence_id='$id'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {


							    ?>
							    	<tr>
							    		<td></td>
								    	<td><?php echo$row['type']?></td>
								    	<td><?php echo$row['purpose']?></td>
								    	<td><?php echo$row['date_request']?></td>
								    	<td><?php echo$row['time_request']?></td>
								    	<td><?php echo$row['status']?></td>
								    	<td><?php echo$row['date_approve']?></td>
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