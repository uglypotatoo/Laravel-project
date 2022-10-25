@extends('layouts.default')

@section('page-content')  

       <section id="home" class="intro d-flex align-items-center" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5">
              <img src="../assets/img/combat.png" class="img-fluid" alt="" style="width:800px" >
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center" >
              
              <h1 class="fw-bolder">CONTACT TRACING SYSTEM </h1>
                      <h3 class="lead " >Be connected. Be alerted. Be safe.</h3>
                      <div class="row login-register d-flex flex-row">
                        <div class="p-3 col">
                          <a class="btn btn-lg btn-light " href="/register" style="background-color:#2596be; color: white; ">REGISTER</a>
                        </div>
                        <div class="p-3 col">
                          <a class="btn btn-lg btn-light" href="/login" style="background-color:white; color:#2596be; border-color:#2596be ">LOG IN</a>
                        </div>
                      </div>
                      
            </div>
          </div>
       </section>
            
        
@endsection

@section('page-about')
<section id="about" class="about d-flex align-items-center">
  <div class="container">
      <div class="row justify-content-center">
       
        <div class="col-lg-6">
          <img src="../assets/img/group.png" class="img-fluid" alt="" style="">
        </div>
          <div class="col-lg-6 card" >
              <h2>About Us</h2>
              <p class="lead">KONEK is a capstone project prepared by the students of Tarlac State University under the College of Computer Studies in partial fulfillment of the requirements for Bachelor of Information Technology Major in Web and Mobile Development. Prepared features of this project includes:
              </p>
              <ul>
                  <li>QR Code ID</li>
                  <li>SMS alert notification</li>
                  <li>Log trail</li>
                  <li>Real-time monitoring</li>
              </ul>
          </div>
         

      </div>
  </div>
</section>
@endsection

@section('page-user-manual')

<section class="manual" id="usermanual" >
 


  <div class="container justify-content-center">
    
    <div class="row">
      
      <div class="col-lg-6 " >
         <h2>User Manual</h2>
            <div id="carousel-user" class="carousel slide carousel-user card card-carousel carousel-dark" data-bs-ride="carousel" >
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-user" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel-user" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel-user" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                  
                          <div class="carousel-inner inside">
                          
                          <div class="carousel-item active">
                            <h3>How to register</h3>
                            <ul>
                              <li>Click Register</li>
                              <li>Provide a phone number then a 4 pin verification code will be sent to your device. Input the verification code in the box then you can proceed into the registration.</li>
                              <li>Provide yourfirst name, last name, password, re-enter the password, full address.</li>
                              <li>Read the TERMS AND CONDITIONS.</li>
                              <li>Click submit</li>
                            </ul>
                          </div>
                          <div class="carousel-item">
                            <h3>How to Login</h3>
                            <ul>
                              <li>
                                Input phone number which was used to register on the website.
                              </li>
                              <li>
                                Input your password. If password is forgotten, click on forgot password
                              </li>
                              <li>
                                Once done, click login.
                              </li>
                            </ul>
                          
                          </div>
                          <div class="carousel-item">
                            <h3>How to use QR-ID</h3>
                            <ul>
                              <li>Pull up your unique QR ID.</li>
                              <li>Show the QR ID to the establishment to be scanned.</li>
                              <li>Once done, your time in or time out is logged.</li>
                            </ul>
                          </div>
                          </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-user" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-user" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                        </div>
      </div>
    
      <div class="col-lg-6  " >
        <h2>Estaliblishment Manual</h2>
        <div id="carousel-establishment" class="carousel slide carousel-establishment card card-establishment carousel-dark" data-bs-ride="carousel" >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-establishment" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-establishment" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-establishment" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner inside">
            <div class="carousel-item active">
              <h3> How to Register</h3>
              <ul>
                <li>Input username which was used to register on the website.</li>
                <li>Input password. If password is forgotten, click on forgot password.</li>
                <li>Once done, click on submit.</li>
              </ul>
            </div>
            <div class="carousel-item">

              <h3> How to Login</h3>
              <ul>
                <li>Click sign up.</li>
                <li>Provide your username, establishment name, password, re-enter passowrd, full address, and email.</li>
                <li>Provide registration code given by the administrator.</li>
                <li>Read the TERMS AND CONDITIONS.</li>
                <li>Click submit.</li>
              </ul>
            </div>
            <div class="carousel-item">
              <h3> How to use QR-ID</h3>
              <ul>
                <li>Request for the unique QR-ID of the customer.</li>
                <li>Scan the QR-ID of the customer.</li>
                <li>Once done, their information is logged into the system.</li>
              </ul>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carousel-establishment" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel-establishment" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


    
@endsection

@section('page-privacy')
<section id="privacy" class="privacy">
           
    <div class="container px-4 ">
                    <div class="row justify-content-center" >
                        <div class="col">

                            <h2 style="text-align:left">KONEK Privacy Statement</h2>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">KONEK is a contact tracing system which requires specific establishments in Brgy. San Vicente, Tarlac City to scan OR IDs of individuals when entering and exiting their premises. It uses SMS alert notification for alerting individuals and Geofencing to determine the location of the individual. The system is compliant with the Philippines Data Privacy Act of 2012 (R.A. 10173).</span>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>
                            
                            <span style="font-family: 'montserrat'; font-weight: 600;" data-alt-style="font-family: 'montserrat'; font-weight: 600;" pagecloud-guid="10ae8dfc-96eb-46d6-db6c-47f1244f728b">User-Establishment</span>

                          

                            <h2 class="lead">What is data collected and for what purpose?</h2>
                            

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <ol>
                                <li>Establishment Name</li>
                                <li>Username</li>
                                <li>Address</li>
                                <li>Email</li>
                            </ol>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">These are collected to verify the legibility of the establishment to be able to grant the registration code to be register and login into the app.</span>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-weight: 600;" data-alt-style="font-family: 'montserrat'; font-weight: 600;" pagecloud-guid="10ae8dfc-96eb-46d6-db6c-47f1244f728b">USER-PERSON</span>


                            <ol>
                                <li>First Name</li>
                                <li>Middle name</li>
                                <li>Last Name</li>
                                <li>Suffix (optional)</li>
                                <li>Phone number</li>
                                <li>Address</li>
                            </ol>


                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">These are collected for the registration and generating the designated QR code ID. This information is also used for the purpose of COVID-19 contact tracing.</span>
                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>


                            <h2 class="lead">When an Individual enters or leaves an establishment</h2>

                            

                            <ol>
                                <li>Individual QR code</li>
                                <li>Date of in/out</li>
                                <li>Time of in/out</li>
                                <li>Temperature</li>
                                <li>Location</li>
                            </ol>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">These are gathered to track individual check-ins and outs at establishments, and they are processed for CoVID-19 contact tracing.</span>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>


                            <h2 class="lead">Why process data under legal basis</h2>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>


                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We processed data only for the purpose of COVID-19 Contact tracing and in accordance with Philippine Data Privacy Act of 2012 (R.A. 10173).</span>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">When registering you will be asked to authorize the following: </span>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">“I hereby authorize the ContactTracing to collect and process my personal information for the purpose of assisting in controlling COVID-19 infection. I understand that my personal data is protected by Data Privacy Act of 2012 (R.A. 10173) and I am legally required to provide legitimate information in accordance with Bayanihan to Heal as One Act (R.A. 11469), as may be amended, and other government issuances relative to COVID-19 prevention and control.”
                                </span>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">When you register you will be ask to attest:</span>  

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">“I attest that the provided information above is legitimate. By signing here, I also consent to the processing of my above-declared personal data, including but not limited to the collection, use, and dissemination of that data for the purposes of COVID-19 contact tracing. Personal data acquired for these reasons will only be kept for as long as is permitted by current government legislation and issuances. Following that, all personal data will be securely deleted, preventing future processing and/or illegal access or disclosure.”</span>  

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>


                            <h2 class="lead">How is your data collected.</h2>

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Data is collected when an individual registers for a QR ID; and when an individual checks-in/out of establishment and:</span>  

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We use geofencing to determine your exact location when using the system.</span>  

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>

                            <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</span>  

                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>


                                <ul>
                                    <li>Cookies or Browser Cookies.
                                        <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, you may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.

                                        <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>             
                                        </span>  

                                        
                                     </li>
                                
                                </ul>
                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: </span> <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>             
                                </span>  

                                <ul>
                                    <li>Necessary / Essential Cookies
                                        <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      	     
                                           <li style="list-style: none">Type: Session Cookies</li> 
                                           
                                           <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      
                                            
                                           <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.
                                            
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>             
                                        </span>  

                                        
                                     </li>
                                
                                </ul>

                                <ul>
                                    <li>Cookies Policy / Notice Acceptance Cookies
                                        <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      	     
                                           <li style="list-style: none">Type: Persistent Cookies</li> 
                                           
                                           <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      
                                            
                                           <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Purpose: These Cookies identify if users have accepted the use of cookies on the Website.
                                            
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>             
                                        </span>  

                                        
                                     </li>
                                
                                </ul>

                                <ul>
                                    <li>Functionality Cookies
                                        <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      	     
                                           <li style="list-style: none">Type: Persistent Cookies</li> 
                                           
                                           <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      
                                            
                                           <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.
                                            
                                            <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>             
                                        </span>  

                                        
                                     </li>
                                
                                </ul>
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>      
                                <h2 class="lead">How do we protect your data?</h2>
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 

                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Your data can only be accessed by authorized personnel. We also provide a One-time password (OTP) to verify individuals who register into the system. The security of Your Personal Data is important to us but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, we cannot guarantee its absolute security.
                                            

                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 

                                <h2 class="lead">When do we share your data?</h2>
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 

                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">Only when the system concludes that you may have been in contact with someone who tested positive for CoVID-19 as a consequence of a contact tracing activity does your data get shared. Your personal information is shared with government and law enforcement agencies so that you can receive prompt health precautions and assistance.
                                
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 
                                    


                                <h2 class="lead">How long do we retain your data?</h2>
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 

                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We retain our personal information for the purpose of contact tracing but will only remain for 30 days, after 30 days your data will be completely deleted into our system.

                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 
                                <h2 class="lead">Changes to this Privacy Policy</h2>
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p> 
                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>   
                                
                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>   
                                
                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>   

                                <h2 class="lead">Contact us</h2>

                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>   
                                
                                <span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px;" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px;" pagecloud-guid="3decb74e-59c4-4d7e-fc49-89804e30dc6b">If you have any questions about this Privacy Policy, You can contact us:
                                    •	By email: covidoffice@mycompany.com
                                    
                                <p style="font-weight: normal; margin-bottom: 0.7em;" data-alt-style="font-weight: normal; margin-bottom: 0.7em;" pagecloud-guid="e4faa762-ce25-4ec5-86cb-ca1f61b430e5"><span style="font-family: 'montserrat'; font-size: 15px; font-weight: 400; letter-spacing: 0px; line-height: 1.8; text-align: left;" data-block="true" data-alt-style="font-family: 'montserrat'; font-size: 18px; font-weight: 400; letter-spacing: 1px; line-height: 1.5; text-align: left;" pagecloud-guid="2a06379c-53ef-4b59-a658-284cc189b2d7">&nbsp;</span></p>   

            </div>
        </div>
    </div>
</section>

@endsection