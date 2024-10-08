<div>
    {{-- Do your work, then step back. --}}
        <link rel="stylesheet" href="assets/css/adminlte.css">
        <link rel="stylesheet" href="assets/css/register.css">
        <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">

    
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="/" class="logo">
                                Digital Bulletin
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/student" class="active">Sign Up</a></li>
                                <div class="img-size-50"><img src="assets/images/catsulogo.png"></div>
                                <div class="img-size-64"><img src="assets/images/CICT_logo.png"></div>
                                
                            </ul>        
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    
                </div>
            </div>
        </header>
        <section class="section main-banner" id="top" data-section="section1"> 
            <img src="assets/images/CICT_BLDG.jpg">
      
            <div class="video-overlay header-text">
                <div class="register">
                        <form action="thank-you.html">
                        <h2>Create a Faculty/Student Org Account</h2>
                        
                        <div class="rowbox">
                            <div class="lastname">
                                <div class="form-group lastname">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" id="lastname" placeholder="">
                                  </div>
                            </div>
                            <div class="firstname">
                                <div class="form-group firstname">
                                    <label for="firstname">First Name</label>
                                    <input type="text" id="firstname" placeholder="">
                                  </div>
                            </div>
                            <div class="middleinitial">
                                <div class="form-group middleinitial">
                                    <label for="firstname">MI.</label>
                                    <input type="text" id="firstname" placeholder="">
                                  </div>
                            </div>
                            <div class="email">
                                <div class="form-group email">
                                    <label for="email">Email Address</label>
                                    <input type="text" id="email" placeholder="">
                                  </div>
                            </div>
                        </div>
                        
                        <div class="rowbox">
                            
                            <div class="IdNo">
                                <div class="form-group fullname">
                                    <label for="fullname">ID Number</label>
                                    <input type="text" id="fullname" placeholder="">
                                  </div>
                            </div>
                            <div class="password">
                                <div class="form-group password">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" placeholder="">
                                    <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
                                  </div>
                            </div>
                            <div class="confirmpassword">
                                <div class="form-group password">
                                    <label for="password"> Confirm Password</label>
                                    <input type="password" id="password" placeholder="">
                                    <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
                                  </div>
                            </div>
                        </div>
    
                        <div class="rowbox">
                            <div class="box">
                                <div class="form-group date">
                                    <label for="date">Birth Date</label>
                                    <input type="date" id="date" placeholder="Select your date">
                                  </div>
                            </div>
                            <div class="box">
                                <div class="form-group gender">
                                    <label for="gender">Sex</label>
                                    <select id="gender">
                                      <option value="" selected disabled>Male or Female?</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="box">
                                <div class="form-group gender">
                                    <label for="gender">Department/Organization</label>
                                    <select id="department">
                                      <option value="" selected disabled>Select your Department/Org</option>
                                      <option value="">IT Training Center</option>
                                      <option value="">CICT Student Council</option>
                                      <option value="">Vanguard Society</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="rowbtn">

                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required> <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                                <button class="btn btn-info" type="submit">Submit form</button>
                        </div>
                      </form>
                </div>
            </div>
</div>
