 

<html>
  <head>
    <title>Mongol Tori:contact</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="bracu mongol tori" content="website presentation">
    <meta name="keywords" content="about the team, rover, sponsors, recuitment, achivements">
    <meta name="author" content="MD Hashibul Islam">

    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>

  <body>
    <header>
    <!--nav bar-->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/mtlogo.png" width="120px">
			&nbsp
			<img src="assets/images/download.png" width="120px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="achivements.html">Achivements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="outreach.html">Outreach</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sponsor.html">Sponsors</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="other_projects.html">Other Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="join.html">Join</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div> 
    </header>
    <!--contact-->
    <section class="contact container">
      <div class="row m-3">
        <div class="col-lg-12">
		&nbsp &nbsp
          <h3 class="text-center">Contact us!</h3>
		  &nbsp &nbsp
          <!--info-->
          <div class="row">
            <div class="col-4 d-flex justify-content-end">
              <div align="center">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                <h5>66 Mohakhali<br>Dhaka 1212,Bangladesh</h5>
              </div> 
            </div>
          <!--icons-->
          <div class="col-4 d-flex justify-content-center">
             <div align="center">
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
               </svg>
              <h5>+880 1913072676</h5>
             </div>
          </div>
          <!--data-->
          <div class="col-4 d-flex justify-content-start">
            <div align="center">
               <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
               </svg>
              <h5>mongol-tori@bracu.ac.bd</h5>
            </div>
          </div>
        </div>
      </div>
	  &nbsp &nbsp
      <!--map and message-->
	  <?php 
		if(isset($_POST['submit'])){
			$to = "sadikulalim@gmail.com"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			$name = $_POST['name'];
			$subject = $_POST['subject'];
			$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
			$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

			$headers = "From:" . $from;
			//$headers2 = "From:" . $to;
			mail($to,$subject,$message,$headers);
			/* mail($from,$subject2,$message2,$headers2); */ // sends a copy of the message to the sender
			//echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			// You can also use header('Location: thank_you.php'); to redirect to another page.
    }
		?>
		
      <div class="row m-3 mx-auto">
        <!--message-->        
        <div class="col-lg-6 col-sm-12 d-flex justify-content-start">
          <form method="POST" name="myemailform" action="contact.php">
            <h5 class="text-center">Send us a message for any query / sponsorship</h5>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
			<div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="Textarea">Message</label>
              <textarea class="form-control" name="message" id="Textarea" rows="3"></textarea>
            </div>
            <button class="btn btn-outline-dark" type="submit" class="btn btn-primary" name="submit">Send</button>
          </form>
		  
        <!--map-->
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
          
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=brac%20university&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            </div>
          </div> 
        </div>
        
      </div>
	

    </section>
	
	
	
	
<!--
    <section class="website_bulider container">
      <div class="row mx-auto mb-2">
        <h4 class="col-12 text-center p-3">Website built by</h4>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
          <div class="card h-100">
            <img src="assets/team/hashib.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column ">
              <h5 class="card-title text-center">Hashib Islam</h5>
              <p class="card-text text-center">Sub-team lead, Network and Communications</p>
              <div class=" row team_contact mx-auto">
                <div class="col">
                  <a href="" target="_blank" class="fa fa-facebook"></a>
                  <a href="" target="_blank" class="fa fa-linkedin"></a>
                  <a href="" target="_blank" class="fa fa-github"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    
    <footer class="footer ">
      <a href="https://www.facebook.com/bracumongoltori/" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.youtube.com/channel/UCc2N93zxSEi8roo1JZ_YVZg" target="_blank" class="fa fa-youtube"></a>
	  <a href="https://www.linkedin.com/company/bracu-mongol-tori/" target="_blank" class="fa fa-linkedin"></a>
      <p class="mt-2">BRACU Mongol-Tori</p>
    </footer>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>