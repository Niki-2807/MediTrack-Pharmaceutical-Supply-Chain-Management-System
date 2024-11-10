<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="table1.css">
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>Medicines</title>
<style>
        .add-button {
        background-color: #2ecc71;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1em;
        position: absolute;
        right: 110px; /* Adjust this value to align with the table */
        top: 160px; /* Adjust to position button vertically as desired */
        text-decoration: none;
    	}
        .add-button:hover {
            background-color: #2ecc71;
        }
    </style>
</head>

<body>

	<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;"> MediTrack </h2>
			<a href="adminmainpage.php">Dashboard</a>
			<button class="dropdown-btn">Inventory
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="inventory-add.php">Add New Medicine</a>
				<a href="inventory-view.php">Manage Inventory</a>
			</div>
			<button class="dropdown-btn">Suppliers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="supplier-add.php">Add New Supplier</a>
				<a href="supplier-view.php">Manage Suppliers</a>
			</div>
			<button class="dropdown-btn">Stock Purchase
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="purchase-add.php">Add New Purchase</a>
				<a href="purchase-view.php">Manage Purchases</a>
			</div>
			<button class="dropdown-btn">Employees
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="employee-add.php">Add New Employee</a>
				<a href="employee-view.php">Manage Employees</a>
			</div>			
			<button class="dropdown-btn">Patients
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="customer-add.php">Add New Patient</a>
				<a href="customer-view.php">Manage Patients</a>
			</div>
			<a href="sales-view.php">View Sales Invoice Details</a>
			<a href="salesitems-view.php">View Sold Products Details</a>
			<a href="pos1.php">Add New Sale</a>		
			<button class="dropdown-btn">Reports
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="stockreport.php">Medicines - Low Stock</a>
				<a href="salesreport.php">Transactions Reports</a>	
				<a href="medicines-expiry.php">Medicines Expired/Near Expiration</a>
				<a href="med_aggregate.php">General Statistics</a>
				<a href="med_join.php">Minimum Cost Per Unit</a>			
			</div>		
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
        <div class="head">
            <h2> MEDICINE INVENTORY </h2>
        </div>
    </center>
	
	<a href="inventory-add.php" class="add-button">+ Add New Inventory</a>

	<table align="right" id="table1" style="margin-right:100px;">
		
		<tr>
			<th>Medicine ID</th>
			<th>Medicine Name</th>
			<th>Quantity Available</th>
			<th>Category</th>
			<th>Price</th>
			<th>Location in Store</th>
			<th>Action</th>
		</tr>
	
	<?php
	include "config.php";
	
		$sql = "SELECT med_id, med_name,med_qty,category,med_price,location_rack FROM meds";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {

		echo "<tr>";
			echo "<td>" . $row["med_id"]. "</td>";
			echo "<td>" . $row["med_name"] . "</td>";
			echo "<td>" . $row["med_qty"]. "</td>";
			echo "<td>" . $row["category"]. "</td>";
			echo "<td>" . $row["med_price"] . "</td>";
			echo "<td>" . $row["location_rack"]. "</td>";
			echo "<td align=center>";
						 
				echo "<a class='button1 edit-btn' href=inventory-update.php?id=".$row['med_id'].">Edit</a>";
			
				echo "<a class='button1 del-btn' href=inventory-delete.php?id=".$row['med_id'].">Delete</a>";
				
			echo "</td>";
		echo "</tr>";
		}
		echo "</table>";
		} 

	$conn->close();
	?>
	
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
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			
</script>

</html>
