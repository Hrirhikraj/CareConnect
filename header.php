<?php
error_reporting(0);
ob_start();
session_start();
include "config.php"; ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hospital and dical Management system</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="medical_files/style.css" rel="stylesheet" type="text/css" media="all">

  
 
</head>
<body cz-shortcut-listen="true">

<div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php">Care Connect</a></h1>
		</div>
		
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
        <?php
		if(($_SESSION['uname']=='')&&($_SESSION['dname']=='')&&($_SESSION['muname']=='')&&($_SESSION['lbname']=='')&&($_SESSION['hname']=='')&&($_SESSION['emp_name']=='')&&($_SESSION['aid']==''))
		{
		?>
         <li class="active"><a href="index.php">Home</a></li>
			<li><a href="doctor-login.php">Doctor Login</a></li>
 			<li><a href="medical-login.php">Medical Centre Login</a></li>
 			<li><a href="lab-login.php">Lab Login</a></li>
 			<li><a href="hospital-login.php">Hospital Login</a></li>
			<li><a href="admin-login.php">Admin Login</a></li>
			
       <?php
		}
		?>
        
        <?php
		if(($_SESSION['muname']!='')||($_SESSION['emp_name']!=''))
		{
		?>
         <li><a href="medicalprofile.php">Profile</a></li>
		 <li><a href="add_medicine.php">Add Medicine</a></li>
		 <li><a href="add_employee.php">Add employee</a></li>
		 <li><a href="add_bill.php">Add bill</a></li>
         
		 <li><a href="logout.php">Logout</a></li>
        <?php
		}
		if($_SESSION['uname']!='')
		{
		?>
         
		 <li><a href="prescription_status.php">Update prescription status</a></li>
		 <li><a href="report.php">Report</a></li>
         <li><a href="logout.php">Logout</a></li>
		 <li><a href="chat.php">Ask Queries</a></li>
        <?php
		}
		if($_SESSION['aid']!='')
		{
		?>
		 <li><a href="adashboard.php">View Patient</a></li>
		 <li><a href="performance-report.php">Performance Report</a></li>
		  <li><a href="view_doctor.php">View Doctor</a></li>
		  <li><a href="view_hospital.php">View Hospital</a></li>
		  <li><a href="view_medical_center.php">View Medical Center</a></li>
		  <li><a href="view_dcomment.php">View Doctor comment</a></li>
		  <li><a href="view_scomment.php">View Lab comment</a></li>
         <li><a href="logout.php">Logout</a></li>
        <?php
		}
		if($_SESSION['lbname']!='')
		{
		?>
		 <li><a href="add_scan_report.php">Add Scan Report</a></li>
		  <li><a href="view_scan.php">View Scan Report</a></li>
         <li><a href="logout.php">Logout</a></li>
        <?php
		}
		?>
         <?php
		if($_SESSION['dname']!='')
		{
		?>
		<li><a href="doctorprofile.php">Profile</a></li>
        <li><a href="view_appointment.php">View Appointment</a></li>
		<li><a href="view_health.php">Patient History</a></li>
         <li><a href="logout.php">Logout</a></li>
        <?php
		}
		if($_SESSION['hname']!='')
		{
		?>
		<li><a href="hospital_profile.php">Hospital Profile</a></li>
		<li><a href="dashboard.php">Add Medical </a></li>
		 <li><a href="report.php">Report</a></li>
		<li><a href="hospitaldashboard.php">Hospital Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php
		}
		?>
        
        
			
            
		<div class="clear"></div>
		</ul>
</div>
</div>

<div class="h_btm_bg">
<img src='banner.jpg' />

<div class="wrap">
<div class="h_btm">
	
	<div class="clear"></div>
</div>
</div>
</div>