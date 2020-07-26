<!DOCTYPE html>
<html >
<head>
  <?php
    require 'includes/links.php';
    ?>
    <title>Hospitals</title>  
      <link rel="stylesheet" text="text/css" href="index.css"> 
      <style>
          .sidebar {
  margin: 0;
  padding-top:  50px;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  font-size: 30px;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 30px 16px;
  height: 1000px;
  font-size:25px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
p{
    padding-top: 30px;
   font-size: 20px;
}
      </style>
</head>
<body>
 <?php
        require "includes/header.php";
    ?>
    <div class="sidebar">
  <a  href="hospitals.php">Isolation Centres</a>
  <a href="quarantine.php">Quarantine Centres</a>
          <a href="testing.php">Testing Centres</a>
           <a class="active"href="pre.php">Pre-requisite</a>
      
     
</div>

<!-- Page content -->
<div class="content">
    <p>1.Doctor&#39;s prescription and Valid ID Proof needed to avail the home collection facility.</p>
    <p>2. Order ID will only be generated once payment is received.</p>
     <p>3.  No payment will be accepted in Cash / Cheque or in Machine (PoS) due to threat of surface contamination.</p>
      <p>4.Ambulance collection facility can also be provided, subject to availability of the same in your area.</p>
       <p>5. Same day collection is possible if order is booked by or before 4.00 PM.</p>
        <p>6.TAT of report is 24 to 48 hours.</p>
         <p>7.Reports of positive patients will be shared with Government officials and not with the patients directly as per the given guidelines.</p>
          <p>8. Refund will not be possible incase appointment is cancelled after technician is allotted or reached at the customer&#39;s premises.</p>
           <p>9.Patients have to ensure that the technicians are allowed to enter into their societies, localities due to lockdown and all necessary permission is taken.</p> <p></p>
           
           
  
</div>

</body>
</html>
