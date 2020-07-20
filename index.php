<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">symptoms</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#prventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>    
    </ul>
    
  </div>
</nav>

<!-- *************** Main Header **************** -->

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/together.png" width="300" height="300">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center text-center">
                <h1>Let's Stay Safe & Fight Against Cor<span class="corona_rotate">
                <img src="images/corona.png" width="50" height="50">
                </span>na Virus</h1>
            </div>
        
        </div>
    </div>
</div>

<!-- ************ Latest updates *********** -->

<section class="corona_update">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
    </div>

    <div class="d-flex justify-content-around align-items-center count_style">
        <div>
            <h1 class="count">1,524,266</h1>
            <p>Passengers screened at airport</p>
        </div>

        <div>
            <h1 class="count">512</h1>
            <p>Active COVID-19 cases*</p>
        </div>

        <div>
            <h1 class="count">40</h1>
            <p>Cured/discharged cases</p>
        </div>

        <div>
            <h1 class="count">9</h1>
            <p>Death cases</p>
        </div>

    </div>
</section>

<!-- ************** about section *************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">

    <div class="section_header text-center mb-3 mt-3">
        <h1>What is COVID-19?</h1>
    </div>

    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 about_reponsive_image">
            <figure class="text-center">
            <img src="images/about.jpg" width="400" height="400" class="img-fluid">
            </figure>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <p class="text-justify"><b>Coronavirus disease 2019 (COVID-19)</b> is an infectious disease
            caused by severe acute respiratory syndrome coronavirus 2
            (SARS-CoV-2).It was first identified in December 2019 in
            Wuhan, Hubei, China, and has resulted in an ongoing
            pandemic. The first confirmed case has been traced back
            to 17 November 2019 in Hubei. As of 20 July 2020, more
            than 14.5 million cases have been reported across 188 countries
            and territories, resulting in more than 607,000 deaths. More than
            8.19 million people have recovered.</p>
            <p class="text-justify">The virus is primarily spread between people during close
            contact, most often via small droplets produced by coughing, sneezing, 
            and talking. The droplets usually fall to the
            ground or onto surfaces rather than travelling through air over
            long distances. Transmission may also occur through
            smaller droplets that are able to stay suspended in the air for
            longer periods of time. Less commonly, people may become
            infected by touching a contaminated surface and then touching
            their face. It is most contagious during the first three days
            after the onset of symptoms, although spread is possible before
            symptoms appear, and from people who do not show
            symptoms. The standard method of diagnosis is by realtime reverse transcription 
            polymerase chain reaction (rRT-PCR)
            from a nasopharyngeal swab. Chest CT imaging may also be
            helpful for diagnosis in individuals where there is a high
            suspicion of infection based on symptoms and risk factors;
            however, guidelines do not recommend using CT imaging for
            routine screening.</p>
            <p class="text-justify">There are no vaccines nor specific antiviral treatments for COVID-19.[6] Management involves the treatment of symptoms,
            supportive care, isolation, and experimental measures. The
            World Health Organization (WHO) declared the COVID‑19
            outbreak a public health emergency of international concern
            (PHEIC) on 30 January 2020 and a pandemic on 11 March
            2020. Local transmission of the disease has occurred in most
            countries across all six WHO regions.</p>
        </div>
    <div>

</div>

<!-- ********** Coronavirus Symptoms ************ -->

<div class="container-fluid pt-5 pb-5" id="symptomid">

    <div class="section_header text-center mb-3 mt-3">
        <h1>Coronavirus Symptoms</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/cough.png" class="img-fluid" width="120" height="120">
                <figcaption>Cough</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/images.png" class="img-fluid" width="120" height="120">
                <figcaption>Runny Nose</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/fever.png" class="img-fluid" width="120" height="120">
                <figcaption>Fever</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/sick.png" class="img-fluid" width="120" height="120">
                <figcaption>Cold</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/fatigue.jpg" class="img-fluid" width="120" height="120">
                <figcaption>Tiredness</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/breath1.png" class="img-fluid" width="120" height="120">
                <figcaption>Difficulty in Breathing</figcaption>
                </figure>
            </div>

        </div>

    </div>

</div>


<!-- ********** Coronavirus prevention ************ -->

<div class="container-fluid sub_section pt-5 pb-5" id="prventionid">

    <div class="section_header text-center mb-3 mt-3">
        <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/handwash.png" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds, with 
                        soap and water or alcohol-based hand rub.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/mask.png" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or 
                        flexed elbow when you cough or sneeze and use mask.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/quarantine.png" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact with people who are unwell. 
                        Maintain (1 meter or 3 feet) distance from people.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/home.jpg" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay home and self-isolate from others in the 
                        household if you fell sick.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/news.png" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news & follow the 
                        recommended practices.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                        <img src="images/medical.png" class="img-fluid" width="90" height="90">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>If you have fever, cough and difficulty in breathing, 
                        seek medical care quickly.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- ********** Contact us ************ -->

<div class="container-fluid sub_section pt-5 pb-5" id="contactid">

    <div class="section_header text-center mb-3 mt-3">
        <h1>Contact Us ASAP</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col=12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
                     </div>

                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
                     </div>

                     <div class="form-group">
                        <label>Mobile no</label>
                        <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
                     </div>

                     <div class="form-group">
                        <label>Select Symptoms</label><br>

                        <div class="custom-control custom-checkbox 
                        custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" 
                            id="customcheckbox1" name="coronasym[]" value="cold">
                            <label class="custom-control-label" for="customcheckbox1">cold</label>
                        </div>

                        <div class="custom-control custom-checkbox 
                        custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" 
                            id="customcheckbox2" name="coronasym[]" value="fever">
                            <label class="custom-control-label" for="customcheckbox2">fever</label>
                        </div>

                        <div class="custom-control custom-checkbox 
                        custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" 
                            id="customcheckbox3" name="coronasym[]" value="breath">
                            <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
                        </div>

                        <div class="custom-control custom-checkbox 
                        custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" 
                            id="customcheckbox4" name="coronasym[]" value="tired">
                            <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
                        </div>
                     </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>

</div>

<!-- ************** top cursor *************** -->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- *************** footer ************** -->
<footer class="col-12 mt-5 padding">
    <div class="footer_style text-white text-center ">
        <p>copyright @ Saklain</p>
    </div>
</footer>


<script type="text/javascript">

// this code is for counting the numbers
    $('.count').counterUp({
        delay:10,
        time:3000
    })

    // codes for showing scrollUp button stars here
    mybutton = document.getElementById("myBtn");
    // when the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
            mybutton.style.display = "block";
        } else{
            mybutton.style.display = "none";
        }
    }

    // when the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For safari
        document.documentElement.scrollTop = 0; // For chrome, firefox, IE and opera
        
    }
</script>

</body>

</html>


<?php

include 'dbconnection.php';

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $symptom = $_POST['coronasym'];
        $message = $_POST['message'];

        $check = "";

        foreach($symptom as $check1) {
            $check .= $check1.",";
        }

        $insertquery = "insert into coronacase(username, email, mobile, symptom, message) 
        values('$username', '$email', '$mobile', '$check', '$message') ";

        $query = mysqli_query($con, $insertquery);


        if($query) {
            ?>
            <script>
                window.alert("data stored successful");
                if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>
            <?php
        } else {
            ?>
            <script>
                window.alert("data insertion failed");
                if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>
            <?php
        }




        /* this piece of code replace the state of a page. we do that because, 
        after saving data in the database, when user reload the page the 
        data is saved again. To solve the problem we write the code.
        ?>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>

        <?php   */

        
        /***********
        // checks whether data has been successfully inserted or not. 
        if($query) {
            ?>
            <script>
                alert("data stored successful");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("data insertion failed");
            </script>
            <?php
        }   ***********/

    }

?>