<!DOCTYPE html>
<html>
<head>
    <?php
    require 'includes/links.php';
    ?>
    <style>
      
            margin-top:80px;
        
        </style>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "COVID-19 Coronavirus India State and District Wise Tally"
	},
	subtitles: [{
		text: "Click Legend to Hide or Unhide Data Series"
	}], 
	axisX: {
		title: "States"
	},
	axisY: {
		title: "Cured cases",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Death cases",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Cured",
		showInLegend: true,      
		yValueFormatString: "#,##0.# Units",
		dataPoints: [
			{ label: "Maharashtra",  y: 19034.5 },
			{ label: "Tamil Nadu", y: 20015 },
			{ label: "Delhi", y: 25342 },
			{ label: "Karnataka",  y: 20088 },
			{ label: "Andhra Pradesh",  y: 28234 },
                        { label: "Uttar Pradesh",  y: 19034.5 },
			{ label: "Gujarat", y: 20015 },
			{ label: "West Bengal", y: 25342 },
			{ label: "Telangana",  y: 20088 },
			{ label: "Rajasthan",  y: 28234 },
                        { label: "Bihar", y: 210.5 },
			{ label: "Haryana", y: 135 },
			{ label: "Assam", y: 425 },
			{ label: "Madhya Pradesh", y: 130 },
			{ label: "Odisha", y: 528 },
                        { label: "Jammu and Kashmir", y: 210.5 },
			{ label: "Kerala", y: 135 },
			{ label: "Punjab", y: 425 },
			{ label: "Jharkhand", y: 130 },
			{ label: "Chhattisgarh", y: 528 },
                        { label: "Uttarakhand", y: 130 },
			{ label: "Goa", y: 528 },
                        { label: "Tripura", y: 210.5 },
			{ label: "Pudicherry", y: 135 },
			{ label: "Manipur", y: 425 },
			{ label: "Himachal Pradesh", y: 528 },
                        { label: "Ladakh", y: 528 },
                        { label: "Nagaland", y: 210.5 },
			{ label: "Arunachal Pradesh", y: 135 },
			{ label: "Chandigarh", y: 425 },
			{ label: "Dadra and Nagar Haveli and Daman and Diu", y: 130 },
			{ label: "Meghalaya", y: 528 },
                        { label: "Sikkim", y: 210.5 },
			{ label: "Mizoram", y: 135 }
                ]
	},
	{
		type: "column",
		name: "Death",
		axisYType: "secondary",
		showInLegend: true,
		yValueFormatString: "#,##0.# Units",
		dataPoints: [
			{ label: "Maharashtra",  y: 19034.5 },
			{ label: "Tamil Nadu", y: 20015 },
			{ label: "Delhi", y: 25342 },
			{ label: "Karnataka",  y: 20088 },
			{ label: "Andhra Pradesh",  y: 28234 },
                        { label: "Uttar Pradesh",  y: 19034.5 },
			{ label: "Gujarat", y: 20015 },
			{ label: "West Bengal", y: 25342 },
			{ label: "Telangana",  y: 20088 },
			{ label: "Rajasthan",  y: 28234 },
                        { label: "Bihar", y: 210.5 },
			{ label: "Haryana", y: 135 },
			{ label: "Assam", y: 425 },
			{ label: "Madhya Pradesh", y: 130 },
			{ label: "Odisha", y: 528 },
                        { label: "Jammu and Kashmir", y: 210.5 },
			{ label: "Kerala", y: 135 },
			{ label: "Punjab", y: 425 },
			{ label: "Jharkhand", y: 130 },
			{ label: "Chhattisgarh", y: 528 },
                        { label: "Uttarakhand", y: 130 },
			{ label: "Goa", y: 528 },
                        { label: "Tripura", y: 210.5 },
			{ label: "Pudicherry", y: 135 },
			{ label: "Manipur", y: 425 },
			{ label: "Himachal Pradesh", y: 528 },
                        { label: "Ladakh", y: 528 },
                        { label: "Nagaland", y: 210.5 },
			{ label: "Arunachal Pradesh", y: 135 },
			{ label: "Chandigarh", y: 425 },
			{ label: "Dadra and Nagar Haveli and Daman and Diu", y: 130 },
			{ label: "Meghalaya", y: 528 },
                        { label: "Sikkim", y: 210.5 },
			{ label: "Mizoram", y: 135 }
			
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
</script>
    <style>
        h2,p{
            font-size:30px;
        }
#customers {
    margin-top: 80px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 16px;
  font-size: 20px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
 
}

    </style>

</head>
<body>
    <?php
        require "includes/header.php";
    ?>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="customers">
  <h2>Telangana</h2>
  <p>District cases as of 25th july 2020</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>District</th>
        <th>Cured cases</th>
        <th>Active cases</th>
        <th>Death cases</th>
        <th>Total cases</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Hyderabad</td>
        
        <td>305</td>
        <td>35001</td>
        <td>23</td>
        <td>35329</td>
      </tr>
      <tr>
        <td>Ranga Reddy</td>
        <td>17</td>
        <td>4230</td>
        <td>2</td>
        <td>4249</td>  
      </tr>
      <tr>
        <td> Medchal Malkajgiri</td>
        <td>9</td>
        <td>2466</td>
        <td>1</td>
        <td>2476</td>
      </tr>
      <tr>
        <td> Karimnagar</td>
        <td>16</td>
        <td>987</td>
        <td>0</td>
        <td>1003</td>

      </tr>
      <tr>
        <td>Sangareddy</td>
        <td>6</td>
        <td>949</td>
        <td>0</td>
        <td>955</td>
      </tr>
      <tr>
        <td> Warangal Urban</td>
        <td>23</td>
        <td>835</td>
        <td>0</td>
        <td>858</td>
      </tr>
      <tr>
        <td> Nalgonda</td>
        <td>12</td>
        <td>762</td>
        <td>0</td>
        <td>774</td>
   </tr>
      <tr>
        <td>  Nizamabad</td>
        <td>30</td>
        <td>465</td>
        <td>0</td>
        <td>495</td>
      

      </tr>
      <tr>
        <td>Medak</td>
        <td>4</td>
        <td>422</td>
        <td>0</td>
        <td>426</td>
 
      </tr>
      <tr>
        <td>Mahabubnagar</td>
        <td>8</td>
        <td>412</td>
        <td>0</td>
        <td>420</td>
  </tr>
      <tr>
        <td>Kamareddy</td>
        <td>8</td>
        <td>404</td>
        <td>0</td>
        <td>412</td>
      </tr>
      <tr>
        <td>Suryapet</td>
        <td>24</td>
        <td>385</td>
        <td>0</td>
        <td>409</td>
      </tr>
      <tr>
        <td> Warangal Rural</td>
        <td>329</td>
        <td>0</td>
        <td>329</td>
        <td>329</td>
      </tr>
      </tr>
      <tr>
        <td>Peddapalli</td>
        <td>1</td>
        <td>297</td>
        <td>0</td>
        <td>298</td>
        
      </tr>
      
      <tr>
        <td>Khammam</td>
        <td>3</td>
        <td>287</td>
        <td>0</td>
        <td>290</td>
        
      </tr>
     
      <tr>
        <td>Nagarkurnool</td>
        <td>2</td>
        <td>288</td>
        <td>0</td>
        <td>290</td>
        
      </tr>
<tr>
        <td>Rajanna Sircilla</td>
        <td>2</td>
        <td>286</td>
        <td>0</td>
        <td>288</td>
        
      </tr>
      <tr>
        <td>Mahabubabad</td>
        <td>1</td>
        <td>271</td>
        <td>0</td>
        <td>272</td>
        
      </tr>
      <tr>
        <td>Vikarabad</td>
        <td>15</td>
        <td>201</td>
        <td>1</td>
        <td>217</td>
        
      </tr>
      <tr>
        <td>jagityal</td>
        <td>2</td>
        <td>155</td>
        <td>0</td>
        <td>157</td>
        
      </tr>
<tr>
        <td>Adilabad</td>
        <td>15</td>
        <td>148</td>
        <td>0</td>
        <td>163</td>
        
      </tr>
      <tr>
        <td>Jayashankar Bhupalapally</td>
        <td>0</td>
        <td>174</td>
        <td>0</td>
        <td>174</td>
        
      </tr>
      <tr>
        <td>Siddipet</td>
        <td>1</td>
        <td>174</td>
        <td>0</td>
        <td>175</td>
        
      </tr>
      <tr>
        <td>Wanaparthy</td>
        <td>0</td>
        <td>179</td>
        <td>0</td>
        <td>179</td>
        
      </tr>
      <tr>
        <td>Jangaon</td>
        <td>1</td>
        <td>196</td>
        <td>0</td>
        <td>197</td>
        
      </tr>
      <tr>
        <td>Mancherial</td>
        <td>0</td>
        <td>209</td>
        <td>1</td>
        <td>210</td>
        
      </tr>
       <tr>
        <td>Jogulamba Gadwal</td>
        <td>25</td>
        <td>119</td>
        <td>1</td>
        <td>145</td>
        
      </tr>
       <tr>
        <td>Bhadradri Kothagudem</td>
        <td>4</td>
        <td>135</td>
        <td>0</td>
        <td>139</td>
        
      </tr>
       <tr>
        <td>Yadadri Bhuvanagiri</td>
        <td>0</td>
        <td>137</td>
        <td>0</td>
        <td>137</td>
        
      </tr>
       <tr>
        <td>Mulugu</td>
        <td>2</td>
        <td>95</td>
        <td>0</td>
        <td>97</td>
        
      </tr>
       <tr>
        <td>Komaram Bheem</td>
        <td>2</td>
        <td>56</td>
        <td>0</td>
        <td>58</td>
        
      </tr>
       <tr>
        <td>Nirmal</td>
        <td>13</td>
        <td>44</td>
        <td>0</td>
        <td>57</td>
        
      </tr>
       <tr>
        <td>Narayanpet</td>
        <td>0</td>
        <td>47</td>
        <td>1</td>
        <td>48</td>
        
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
