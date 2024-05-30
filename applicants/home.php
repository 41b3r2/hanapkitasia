<?php
include'../connect/connect.php';
session_start();

if(!isset($_SESSION['email'])){
    header('Location:../');
}



$fullName = $_SESSION['f_name'] . " " . $_SESSION['l_name'];
$email = $_SESSION['email'];



?>

<!DOCTYPE html>
<html  >
<head>
<title>Welcome | UB Job Seeker</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

  <!-- Site made with Mobirise Website Builder v5.8.9, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.9, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets1/images/logo1.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="../assets1/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="../assets1/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets1/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets1/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets1/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets1/parallax/jarallax.css">
  <link rel="stylesheet" href="../assets1/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets1/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets1/theme/css/style.css">


  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets1/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="../assets1/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="../assets2/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="../assets1/mobirise/css/welpage.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .new-dropdown-menu {
        background-color: rgba(255, 255, 255, 0);
        border: 1px solid #ccc; /* Border style */
        border-radius: 10px;
        padding: 10px;
        z-index: 1000;
        position: absolute;
        display: flex; /* Baguhin ang display sa flex */
        justify-content: center; /* Pantayin sa gitna ng horizontal axis */
        align-items: center; /* Pantayin sa gitna ng vertical axis */
        width: max-content; /* Set to max-content */
        left: 50%; /* Ilagay sa gitna ng screen */
        transform: translateX(-50%); /* Ilipat ng kalahati ng kanyang lapad sa kaliwa */
    }

    .new-dropdown-menu a {
        color: #333;
        text-decoration: none;
        display: block;
        padding: 10px;
    }

    .new-dropdown-menu a:hover {
        background-color: #f5f5f5;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }
</style>

</head>
<body>
  
<section data-bs-version="5.1" class="menu menu2 cid-tF11Mlb988" once="menu" id="menu2-1">
    
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand d-flex align-items-center">
                <span class="navbar-logo">
                    <a href="index.php#top" class="d-flex align-items-center">
                        <img src="../assets2/images/logo.png" alt="Barangay" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-primary display-7" href="index.php#top">HANAP KITA</a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="index.php#jobsearch1-2">JOB SEARCH</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="index.php#popular1-3">POPULAR</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="index.php#jobhiring1-4">JOB HIRING</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="index.php#aboutus1-5">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4">|</a></li>
                    <div><a class="nav-link link text-primary display-4" style="font-weight: bold;" href="../index1.php">Employer Site</a></div>
                    <div class="dropdown">
                    <style>
.new-dropdown-menu {
    background-color: white;
}
</style>

<a class="nav-link link text-primary display-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink">
    <?php echo $_SESSION['l_name']; ?>
</a>

<div class="new-dropdown-menu" aria-labelledby="dropdownMenuLink" style="display: none; width: 170px; margin: 0 auto; text-align: center; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; background-color: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); padding: 10px;">
    <a class="dropdown-item" href="#" style="display: block; color: #333; text-decoration: none; padding: 8px 0;">Dashboard</a>
    <a class="dropdown-item" href="#" style="display: block; color: #333; text-decoration: none; padding: 8px 0;">Profile</a>
    <hr style="margin: 10px 0;">
    <a class="dropdown-item" href="sign-out.php" style="display: block; color: #333; text-decoration: none; padding: 5px 0;">Sign Out</a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown-toggle');
    var menu = document.querySelector('.new-dropdown-menu');

    // Set the initial state of the menu to closed
    menu.style.display = 'none';

    dropdown.addEventListener('click', function() {
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    });

    // Close the dropdown menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!dropdown.contains(event.target) && !menu.contains(event.target)) {
            menu.style.display = 'none';
        }
    });
});
</script>









            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>

<section data-bs-version="5.1" style="background-image: url('../image/indexbg.png'); background-size: cover; background-position: center;">
    <br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <div class="card p-5" style="min-width: 300px;">
                    <div class="d-flex flex-wrap justify-content-between align-items-start bg-transparent rounded mb-3" style="gap: 10px; padding-left: 8%; padding-right: 8%;">
                        <div class="d-flex flex-column flex-grow-1">
                            <label for="searchInput1">WHAT</label>
                            <input id="searchInput1" type="text" class="form-control form-control-solid ps-4" placeholder="Enter Keywords">
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <label for="button1" style="color: blue; opacity: 0;">Search</label>
                            <select id="selectInput1" class="form-select form-select-solid ps-4" style="height: 50px;">
                                <option value="">Any Classification</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <label for="selectInput2">WHERE</label>
                            <select id="selectInput2" class="form-select form-select-solid ps-4" style="height: 50px;">
                                <option value="">Enter City or Region</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column flex-grow-0">
                            <label for="button1" style="font-size: 7px; color: blue; opacity: 0;">Search</label>
                            <button id="button1" type="button" class="btn btn-primary" style="height: 50px;">ㅤSearchㅤ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</section>









<section data-bs-version="5.1" class="jobsearch1 cid-tF14owlxwk" id="jobsearch1-2">
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Find your next employer</h1>
                        <p class="card-text">Maaari kang magdagdag ng iba pang mga detalye o teksto dito sa loob ng card.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section data-bs-version="5.1" class="popular1 cid-tF14owlxwk" id="popular1-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>POPULAR</strong></h3>
                
            </div>
        </div>
        <div class="row">
        POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>POPULAR<br>
            
        </div>
    </div>
</section>



<section data-bs-version="5.1" class="jobhiring1 cid-tF14owlxwk" id="jobhiring1-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>JOB HIRING</strong></h3>
            </div>
        </div>
        <div class="row">
        JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>JOB HIRING<br>
        </div>
    </div>
</section>





<section data-bs-version="5.1" class="aboutus1 cid-tF14owlxwk" id="aboutus1-5">
<div class="container">
  <div class="row">
    <div class="col-12">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>ABOUT US</strong></h3>
    </div>
      <div class="row">
        ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>ABOUT US<br>
      </div>
    </div>
  </div>
</section>





<section data-bs-version="5.1" class="footer7 cid-tF155Q2SJ4" once="footers" id="footer7-4">
    <div class="container">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <div class="card-body d-flex justify-content-between">
                    <div class="column">
                        <h3 class="card-title mb-4">Job Seekers</h3>
                        <p class="card-text mb-3"><a href="#" class="btext" >Job Search</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Profile</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Recomended Jobs</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Saved Searches</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Saved Jobs</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Job Applicantions</a></p>
                    </div>
                    <div class="column">
                        <h3 class="card-title mb-4">Employers</h3>
                        <p class="card-text mb-3"><a href="#" class="btext" >Registration For Free</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Post a Job ad</a></p>
                    </div>
                    <div class="column">
                        <h3 class="card-title mb-4">About Jobstreet</h3>
                        <p class="card-text mb-3"><a href="#" class="btext" >About Us</a></p>
                        <p class="card-text mb-3"><a href="#" class="btext" >Work for Jobstreet</a></p>
                    </div>
                    <div class="column">
                        <h3 class="card-title mb-4">Contact</h3>
                        <p class="card-text mb-3"><a href="#" class="btext" >Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><hr>
        <div class="media-container-row align-center mbr-white">
            <div>
                <p class="display-7"><a href="#" class="termstext" >Terms & conditions</a> <a class="termstext1">| </a><a href="#" class="termstext" >Security & Privacy</a></p>
            </div>
        </div>
    </div>
</section>
  
<?php
  include '../upsign/index.php';
?>
</body>
</html>