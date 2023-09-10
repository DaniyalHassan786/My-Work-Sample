<html>
<head>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/responsive.css"> 
</head>
<body>
	 <div class= "top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" id="location">
                <img src="images/map-icon.png" id="img1">
               <span id="text-loc">Locations</span>
            </div>
            <div class="col-sm-4" id="Phone">
              <img src="images/call-icon.png" id="img2">
               <span id="text-phone">+01 1234567890</span>
            </div>
            <div class="col-sm-4" id="mail">
              <img src="images/mail-icon.png" id="img3">
              <span id="text-mail">Demo@gmail.com</span>
             </div>
        </div> 
    </div>
  </div>
        <div class="low-header">
          <div class="container">
            <div class="row">
               <div class="col-sm-2" id="logo">
                 <img src="images/logo.png" id="img4">
                </div>
                    <div class="col-sm-8" id="navbar">
                      <ul class="navbar nav">
                        <li><a class="nav-link" href="index.html">HOME</a></li>
                       <li><a class="nav-link" href="About.html">ABOUT US</a></li>
                       <li><a class="nav-link" href="Service.html">SERVICES</a></li>
                       <li><a class="nav-link" href="Customer.html">CUSTOMER</a></li>
                       <li><a class="nav-link" href="News.html">NEWS</a></li>
                       <li><a class="nav-link" href="Contact.html">CONTACT US</a></li>
                       <li><a class="nav-link" href="login.html">LOGIN</a></li>
                       <li><a class="nav-link" href="Signup.html">SIGNUP</a></li>
                     </ul>
                   </div>
                       <div class="col-sm-2" id="search">
                          <img src="images/search-icon.png" id="img5">
                    </div>
             </div>
          </div>
       </div> 
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
				   <h1>Registration Form</h1>
			   </div>
			      <div class="panel-body">
              <form action="connect.php" method="post">
			   	     <div class="form-group">
                       <label for="firstname" class="text-reg">First Name</label>
                       <input
                       type="text"
                       class="form-reg"
                       name="firstname"
                        />
                     <div class="form-group">  
                       <label for="lastname" class="text-reg">Last Name</label>
                       <input
                       type="text"
                       class="form-reg"
                       name="lastname"
                       />
                     <div class="form-group">
                       <label for="Gender" class="text-reg">Gender</label>
                      </div>
                       <label for="male" class="radio-btn">
                       <input type="radio" name="gender" value="m" id="male">Male
                   		</label>
                       <label for="female" class="radio-btn">
                       	<input 
                       	type="radio" 
                       	name="gender" 
                       	value="f" 
                       	id="female">Female</label>
                       	<label for="others" class="radio-btn">
                       	 <input 
                       	 type="radio" 
                       	 name="gender" 
                       	 value="o" 
                       	 id="others">Others</label>
                       <div class="form-group">  
                         <label for="email" class="text-reg">Email</label>
                         <input
                         type="text"
                         class="form-reg"
                         name="email"
                         />
                       <div class="form-group">  
                         <label for="password" class="text-reg">Password</label>
                         <input
                         type="text"
                         class="form-reg"
                         name="password"
                         />
                       <div class="form-group">  
                         <label for="phone number" class="text-reg">Number</label>
                         <input
                         type="text"
                         class="form-reg"
                         name="number"
                         />
                         </div>
                         <input type="submit" class="reg-btn" value="Submit">
                       </div>
                     </div>
                 </div>
                </form>    
			  </div>
	      </div>
      </div>
   </div>
</div>
   <div class="contact_section layout_padding">
          <div class="footer_section layout_padding">
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                  <img src="images/footer-logo.png" id="img13">
                  <p class="dolor_amet_text">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it 
                 </p>
                </div>
                <div class="col-sm-4">
                  <h1 class="footer_about">About Us</h1>
                  <p class="dolor_amet_text_1">
                  distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                  </p>
                </div>
                <div class="col-sm-4">
                  <h1 class="footer_about">Newsletter</h1>
                    <input type="text" name="text" placeholder="Enter your Email" class="email-btn"></input>
                    <h4 class="subscribe_bt">Send</h4>
                </div>
              </div>
            </div>
          </div>
       </div>
        <div class="copyright_section">
          <div class="container">
            <h2 class="text-copyright">2023 All Rights Reserved. Free html Templates Distributed By ThemeWagon</h2>
          </div>
        </div>
</body>
</html>