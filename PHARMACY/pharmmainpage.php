<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="table1.css">
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>
Pharmacist Dashboard
</title>
</head>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.dashboard-container {
    max-width: 1200px;
    width: 100%;
    padding-top: 20px;
    text-align: center;
}

header {
    margin-bottom: 30px;
}

header h1 {
    font-size: 36px;
    font-weight: 700;
    color: #333;
}

.cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.card {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card h3 {
    font-size: 22px;
    color: #007BFF;
    margin-bottom: 10px;
}

.card p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
}

.card a {
    text-decoration: none;
    color: #007BFF;
    font-weight: 500;
    transition: color 0.3s;
}

.card a:hover {
    color: #0056b3;
}


#patients-card {
    background-color: #fce4ec;
}

#inventory-card {
    background-color: #e0f2f1;
}
#sales-card {
    background-color: #e8f5e9;
}

    </style>


<body>
	
	<?php
	
	include "config.php";
	session_start();
	
	$sql="SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
	$result=$conn->query($sql);
	$row=$result->fetch_row();
	
	$ename=$row[0];
		
	?>

	<div class="topnav">
		<a href="logout1.php">Logout</a>
	</div>
	
	<div class="dashboard-container">

        <div class="main-content">
        <header>
                <h1>Welcome to MediTrack Dashboard !!</h1>
            </header>
            <div class="cards-container">
                <div class="card" id="inventory-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/pill.png" alt="Inventory" class="card-image">
                    <h3>INVENTORY</h3>
                    <p>View inventory levels and stock</p>
                    <a href="pharm-inventory.php">View Inventory</a>
                </div>
				<div class="card" id="patients-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/user.png" alt="Patients" class="card-image">
                    <h3>PATIENTS</h3>
                    <p>View patient details and add new patient</p>
                    <a href="pharm-customer-view.php">View Patients</a>
                </div>
                
                <div class="card" id="sales-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/discount--v1.png" alt="Sales" class="card-image">
                    <h3>SALES MANAGEMENT</h3>
                    <p>Add new sale of medicines</p>
                    <a href="pharm-pos1.php">Add Sales</a>
                </div>
                
            </div>
        </div>
    </div>
	
</body>

<script>

	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		  } 
		  else {
		  dropdownContent.style.display = "block";
		  }
		});
	}
	
</script>

</html>