<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="images/cradlecare1.jpg">
    <title>CradleCradle | Add Immunization</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
       <?php include('header.php')?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Immunization</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method = "post" action ="controller.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name = "fname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name = "lname">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger"></span></label>
                                        <input class="form-control" type="email" name = "email">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label><span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name =  "phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Id</label>
                                        <input class="form-control" type="text" name ="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Type Of Vaccine</label>
                                        <select class="form-control select" name = "gynotype">
                                            <option>select</option>
                                            <option>Chickenpox (varicella) vaccine</option>
                                            <option>Diphtheria, tetanus, and pertussis (DTaP) vaccine</option>
                                            <option>Hepatitis A (HepA) vaccine</option>
                                            <option>Haemophilus influenzae type b (Hib) vaccine</option>
                                            <option>Hepatitis B (HepB) vaccine</option>
                                            <option>Human papillomavirus (HPV) vaccine</option>
                                            <option>Influenza (flu) vaccine</option>
                                            <option>Measles, mumps, and rubella (MMR) vaccine</option>
                                            <option>Meningococcal (MenACWY, MenB) vaccines</option>
                                            <option>Pneumococcal (PCV13, PPSV23) vaccines</option>
                                            <option>Polio (IPV) vaccine</option>
                                            <option>Rotavirus (RV) vaccine</option>
                                            <option>COVID-19 vaccine</option>
                                        </select>

                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name = "dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value = "male">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value = "female">Female
											</label>
										</div>
									</div>
									
                                </div>
								 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Administer By <span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name = "PatientId" placeholder="Nurse">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"> 
                                        <label>Next Due Date<span class="text-danger"></span></label>
                                        <input class="form-control datetimepicker" type="text" name = "phone_k">
                                    </div>
                                </div>

                                
									<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label>State</label>
												<select class="form-control select" name = "gynotype">
													<option>Select</option>
													<option>Abia State</option>
													<option>Adamawa State</option>
													<option>Akwa Ibom State</option>
                                                    <option>Anambra State</option>
                                                    <option>Bauchi State</option>
                                                    <option>Bayelsa State</option>
                                                    <option>Benue State</option>
                                                    <option>Borno State</option>
                                                    <option>Cross River State</option>
                                                    <option>Delta State</option>
                                                    <option>Ebonyi State</option>
                                                    <option>Edo State</option>
                                                    <option>Ekiti State</option>
                                                    <option>Enugu State</option>
                                                    <option>Gombe State</option>
                                                    <option>Imo State</option>
                                                    <option>Jigawa State</option>
                                                    <option>Kaduna State</option>
                                                    <option>Kano State	</option>
                                                    <option>Katsina State</option>
                                                    <option>Kebbi State</option>
                                                    <option>Kogi State</option>
                                                    <option>Kwara State</option>
                                                    <option>Lagos State</option>
                                                    <option>Nasarawa State	</option>
                                                    <option>Niger State</option>
                                                    <option>Ogun State</option>
                                                    <option>Ondo State</option>
                                                    <option>Osun State</option>
                                                    <option>Oyo State</option>
                                                    <option>Plateau State</option>
                                                    <option>Rivers State</option>
                                                    <option>Sokoto State</option>
                                                    <option>Taraba State</option>
                                                    <option>Yobe State</option>
                                                    <option>Zamfara State</option>

												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label>Local Government(L.G.A)</label>
											<input class="form-control" type="text" name =  "phone">
											</div>
										</div>
									</div>

								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name = "address">
											</div>
										</div>

                                        <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Status:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value = "male">complete
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value = "female">Incomplete
											</label>
										</div>
									</div>
</div>
								
									<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label>Gynotype</label>
												<select class="form-control select" name = "gynotype">
													<option>Select</option>
													<option>AA</option>
													<option>AS</option>
													<option>SS</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label>Blood Group</label>
												<select class="form-control select" name = "bloodgroup">
													<option>Select</option>
													<option>A+</option>
													<option>A-</option>
													<option>AB</option>
													<option>O+</option>
													<option>O-</option>
												</select>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class = "col-sm-12">
										<div class = "form-group">
											<label>Allergies</label>
											<textarea  class = "form-control" name = "note"></textarea>
										</div>
									</div>
                            </div>
                        </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name = "Add-button">Add </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

			<!-- <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- add-patient24:07-->
</html> -->
