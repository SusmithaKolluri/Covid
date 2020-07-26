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
  padding: 50px 16px;
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
      </style>
</head>
<body>
 <?php
        require "includes/header.php";
    ?>
    <div class="sidebar">
  <a href="hospitals.php">Isolation Centres</a>
  <a class="active"href="quarantine.php">Quarantine Centres</a>
          <a href="testing.php">Testing Centres</a>
      <a href="pre.php">Pre-requisite</a>
     
</div>

<!-- Page content -->
<div class="content">
           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>S.No</th>
        <th>District Name</th>
        <th>Quarantine centres</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>1</td>
        <td>Adilabad</td>
            <td>Youth Training Centre Building,
    Tribal Welfare Residential Degree College, Boath H.Q.</td>
        
        
      </tr>
      <tr>
        <td>2</td>
        <td>Asifabad</td>
        <td> Asifabad PHC, Wankidi PHC</td>
       
      </tr>
      <tr>
        <td>3</td>
        <td>Bhupalpally</td>
        <td>Haritha Ramappa
,Haritha Tadwai
 ,Haritha Laknavaram</td>
      </tr><tr>
          <td>4</td>
        <td>Gadwal (Jogulamba)</td>
        <td>Minority Hostel, Undavalli
,Social Welfare Hostel, Itikyal</td>
        
       
      </tr><tr>
        <td>5</td>
        <td>Hyderabad</td>
        <td>Gandhi General Hospital
,DH, King Koti</td>
      </tr><tr>
        <td>6</td>
        <td>Jagtial</td>
        <td>Jayashankar Agri. University, Polasa
,JNTU – Kondagattu</td>
       
      </tr>
      <tr>
        <td>7</td>
        <td>Janagoan</td>
         <td>Social Welfare Residential School, Jangoan
,CHC 30 bedded Hospital, Jafargadda</td>
       
      </tr>
      <tr>
        <td>8</td>
        <td>Kamareddy</td>
       <td>Minority School, Bhanswada – Borlam
, South Campus University – Bikanoor
,Modal School, Ellareddy</td>
      </tr>
        
       
    </tbody>
  </table>
</div>

</body>
</html>
