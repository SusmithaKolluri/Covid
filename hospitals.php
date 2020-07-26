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
  <a class="active" href="#">Isolation Centres</a>
  <a href="quarantine.php">Quarantine Centres</a>
          <a href="testing.php">Testing Centres</a>
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
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>1</td>
        <td>Gandhi General Hospital, Secunderabad</td>
        
        
      </tr>
      <tr>
        <td>2</td>
        <td>Government Chest and General Hospital, Hyderabad</td>
       
      </tr>
      <tr>
        <td>3</td>
        <td>Fever Hospital, Nallakunta, Hyderabad</td>
       
      </tr><tr>
          <td>4</td>
        <td>MGM Hospital, Warangal</td>
        
       
      </tr><tr>
        <td>5</td>
        <td>RIMS, Adilabad</td>
       
      </tr><tr>
        <td>6</td>
        <td>District Hospital, Khammam</td>
       
      </tr>
      <tr>
        <td>7</td>
        <td>District Hospital, Karimnagar</td>
       
      </tr>
      <tr>
        <td>8</td>
        <td>Government General Hospital, Nizamabad</td>
       
      </tr><tr>
        <td>9</td>
        <td>Government General Hospital, Nalgonda</td>
       
      </tr><tr>
        <td>10</td>
        <td>Government General Hospital, Suryapet</td>
       
      </tr><tr>
        <td>11</td>
        <td>Government General Hospital, Siddipet</td>
       
      </tr><tr>
        <td>12</td>
        <td>Government General Hospital, Mahbubnagar</td>
       
    </tbody>
  </table>
</div>

</body>
</html>
