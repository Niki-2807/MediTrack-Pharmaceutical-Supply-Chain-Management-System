<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>Reports</title>
<style>
    /* Center the report container horizontally */
    .report-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 40px;
        padding-top: 40vh;
        padding-left: 38vh;
    }

    /* Style each report button as a stylish card */
    .report-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: #333;
        background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
        padding: 30px;
        border-radius: 15px;
        width: 300px;
        height: 180px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    /* Hover effect for button */
    .report-button:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
        background: linear-gradient(135deg, #b2ebf2, #4dd0e1);
    }

    /* Icon style inside each button */
    .report-icon {
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    }

    /* Title text style */
    .report-title {
        font-size: 1.2em;
        font-weight: 600;
        color: #00796b;
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
        <h2>REPORTS</h2>
    </div>
    </center>

    <div class="report-container">
        <!-- Low Stock Report Button -->
        <a href="stockreport.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/out-of-stock.png" class="report-icon" alt="Low Stock Icon">
            <span class="report-title">Low Stock Medicines</span>
        </a>

        <!-- Soon to Expire Report Button -->
        <!--<a href="expiryreport.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/calendar.png" class="report-icon" alt="Soon to Expire Icon">
            <span class="report-title">Soon to Expire</span>
        </a> -->

        <!-- Transaction Report Button -->
        <a href="salesreport.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/sales-performance.png" class="report-icon" alt="Transactions Icon">
            <span class="report-title">Transactions Reports</span>
        </a>

        <a href="medicines-expiry.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/calendar.png" class="report-icon" alt="Transactions Icon">
            <span class="report-title">Medicines Expired / Near Expiration</span>
        </a>

        <a href="med_aggregate.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/sales-performance.png" class="report-icon" alt="Transactions Icon">
            <span class="report-title">General Statistics</span>
        </a>

        <a href="med_join.php" class="report-button">
            <img src="https://img.icons8.com/ios-filled/80/00796b/sales-performance.png" class="report-icon" alt="Transactions Icon">
            <span class="report-title">Minimum Cost per Unit</span>
        </a>

    </div>

</body>

</html>
