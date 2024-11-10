<?php
include "config.php";

// Query to find medicines nearing expiration and recently purchased
$query = "
    SELECT med_name, med_qty, med_price
    FROM meds
    WHERE med_id IN (
        SELECT MED_ID
        FROM purchase
        WHERE DATEDIFF(EXP_DATE, CURDATE()) <= 30
    );
";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Medicines Near Expiration</title>
    <link rel="stylesheet" type="text/css" href="nav2.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #333;
    }

    .container {
        text-align: center;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        width: 80%;
        max-width: 900px;
    }

    .head h2 {
        font-size: 24px;
        color: #444;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 15px;
        text-align: center;
        font-size: 16px;
    }

    th {
        background-color: #f0f4f8;
        color: #555;
        font-weight: 600;
        border-bottom: 2px solid #ddd;
    }

    td {
        background-color: #ffffff;
    }

    tr:nth-child(even) td {
        background-color: #f9f9fb;
    }

    tr:hover td {
        background-color: #e9f3fb;
    }
</style>

<body>

<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;">MediTrack</h2>
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
				<a href="expiryreport.php">Medicines - Soon to Expire</a>
				<a href="salesreport.php">Transactions Reports</a>
                <a href="medicines-expiry.php">Medicines Expired/Near Expiration</a>				
			</div>			
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
    <div class="container">
        <div class="head">
            <h2>Medicines Expired/ Near Expiration</h2>
        </div>
        <div class="one">
            <!-- Your PHP code will inject the table here -->
            <?php if ($result && $result->num_rows > 0): ?>
                <table>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['med_name']) ?></td>
                            <td><?= htmlspecialchars($row['med_qty']) ?></td>
                            <td><?= htmlspecialchars($row['med_price']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <p>No medicines found that are near expiration.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
