<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark/Light Mode Switch</title>
    <style>
        body {
            transition: background-color 0.3s ease;
        }

        /* Dark mode styles */
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }

        /* Light mode styles */
        body.light-mode {
            background-color: #fff;
            color: #333;
        }

        /* Button styles */
        .mode-switch {
            cursor: pointer;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
        }

        .dark-mode {
            background-color: #343a40;
            color: #fff;
        }

        .light-mode {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body class="light-mode">

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
					<a href="?page=light_mode" class="text-muted text-hover-primary">Home</a>
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
		<!--end::Navbar-->
		<!--begin::details View-->
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			<div class="card-body p-9">
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Label-->
					
					<div class="card-header cursor-pointer">
				<div class="card-title m-9">



<a href="?page=dark_mode" class="mode-switch dark-mode">Switch to Dark Mode</a>
<a href="?page=light_mode" class="mode-switch light-mode">Switch to Light Mode</a>

<script>
	document.querySelectorAll('.mode-switch').forEach(function(el) {
		el.addEventListener('click', function(e) {
			e.preventDefault();
			const body = document.body;

			if (el.classList.contains('dark-mode')) {
				body.classList.remove("light-mode");
				body.classList.add("dark-mode");
				window.location.href = el.getAttribute('href');
			} else {
				body.classList.remove("dark-mode");
				body.classList.add("light-mode");
				window.location.href = el.getAttribute('href');
			}
		});
	});
</script>












 

				</div>
					
				<!--end::Action-->
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

</body>
</html>