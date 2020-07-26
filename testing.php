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
      </style>
</head>
<body>
 <?php
        require "includes/header.php";
    ?>
    <div class="sidebar">
  <a  href="hospitals.php">Isolation Centres</a>
  <a href="quarantine.php">Quarantine Centres</a>
          <a class="active" href="testing.php">Testing Centres</a>
           <a href="pre.php">Pre-requisite</a>
      
     
</div>

<!-- Page content -->
<div class="content">
  <h2></h2>
           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Hospital Name</th>
        <th>Address</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>1</td>
        <td>Gandhi Medical College, Secunderabad</td>
        <td>Gandhi Medical College, Musheerabad, Padmarao Nagar, Secunderabad, Telangana 500003</td>
        
        
      </tr>
      <tr>
        <td>2</td>
        <td>Osmania Medical College, Hyderabad
</td>
       <td>Osmania Medical College, 5-1-876, Turrebaz Khan Rd, Troop Bazaar, Koti, Hyderabad, Telangana 500095</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Sir Ronald Ross of Tropical & Communicable Diseases, Hyderabad</td>
         <td>Sir Ronald Ross of Tropical & Communicable Diseases, (Fever Hospital), CGHS Complex, Old Aiport Road, Motilal Nehru Nagar, Begumpet, Hyderabad, Telangana 500016</td>
      </tr><tr>
          <td>4</td>
        <td>Nizam’s Institute Of Medical Sciences, Hyderabad</td>
         <td> Punjagutta Rd, Punjagutta Market, Punjagutta, Hyderabad, Telangana 500082</td>
       
      </tr><tr>
        <td>5</td>
        <td>Institute of Preventive Medicine, Hyderabad</td>
        <td>Institute of Preventive Medicine, Narayanaguda, Hyderabad, Telangana 500029
</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
