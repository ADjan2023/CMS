<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add New Contact</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="css/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="css/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="css/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- css CSS-->
    <link href="css/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="css/wow/animate.css" rel="stylesheet" media="all">
    <link href="css/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="css/slick/slick.css" rel="stylesheet" media="all">
    <link href="css/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="css/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       
        

               

                <!-- PAGE CONTENT-->
                <div class="page-content--bgf7">
                   

                    <!-- WELCOME-->
                    <section class="welcome p-t-10">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </section>
                    <!-- END WELCOME-->
                    <section class="p-t-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <h3 class="title-5 m-b-35">Create New Contact</h3>

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Enter Contact Details</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form  method="POST" class="form-horizontal" action="controllers/createback.php" onSubmit="return confirm('Do you want add this contact?') ">
                                                
                                                <div class="row form-group">
                                                    
                                                    
                                                    <div class="col col-md-3">
                                                        <label for="description" style="padding-top: 7px;">Enter Your Name: </label>
                                                    </div>
                                                    <div class="col col-md-3">
                                                        <input type="textarea-input" name='name' id="textarea-input" class="form-control" placeholder="Enter name here" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="edate" style="padding-top: 7px;">Enter Your Phone Number: </label>
                                                    </div>
                                                    <div class="col col-md-3">
                                                        <input type="text" name='number' id="textarea-input" class="form-control" placeholder="Enter Number Here" required pattern="[0-9]{10}" onkeypress='validate(event)' oninvalid="this.setCustomValidity('Phone number should be 10 numbers')" oninput="this.setCustomValidity('')" onkeypress='validate(event)'>
                                                    </div>
                                                </div>
                                                
                                                <div class="card-footer">
                                                    <input type="submit" name="create" class="au-btn au-btn-icon au-btn--green au-btn--small" value="Add Contact">
                                                    
                                                </div>
                                                
                                                
                                                
                                            </form> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- COPYRIGHT-->
                    
                    <!-- END COPYRIGHT-->
                </div>

            </div>

            <!-- Jquery JS-->
            <script src="css/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap JS-->
            <script src="css/bootstrap-4.1/popper.min.js"></script>
            <script src="css/bootstrap-4.1/bootstrap.min.js"></script>
            <!-- css JS       -->
            <script src="css/slick/slick.min.js">
            </script>
            <script src="css/wow/wow.min.js"></script>
            <script src="css/animsition/animsition.min.js"></script>
            <script src="css/bootstrap-progressbar/bootstrap-progressbar.min.js">
            </script>
            <script src="css/counter-up/jquery.waypoints.min.js"></script>
            <script src="css/counter-up/jquery.counterup.min.js">
            </script>
            <script src="css/circle-progress/circle-progress.min.js"></script>
            <script src="css/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="css/chartjs/Chart.bundle.min.js"></script>
            <script src="css/select2/select2.min.js">
            </script>

            <!-- Main JS-->
            <script src="js/main.js"></script>

        </body>

        </html> <script > function validate(evt) { var theEvent = evt ||
        window.event;

  // Handle paste
  if (theEvent.type === 'paste') { key = event.clipboardData.getData
  ('text/plain'); } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which; key = String.fromCharCode
      (key); } var regex = /[0-9]|\./; if( !regex.test(key) )
      { theEvent.returnValue = false; if
      (theEvent.preventDefault) theEvent.preventDefault(); } } </script>
        <!-- end document-->
