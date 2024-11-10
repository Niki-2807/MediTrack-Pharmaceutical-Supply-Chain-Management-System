<?php
include "config.php"; // Include your database connection

$query = "
    SELECT 
        meds.med_name AS Medicine_Name,
        SUM(purchase.P_QTY) AS Total_Quantity_Purchased,
        AVG(purchase.P_COST) AS Average_Cost,
        COUNT(purchase.MED_ID) AS Times_Purchased
    FROM 
        purchase
    JOIN 
        meds ON purchase.MED_ID = meds.med_id
    GROUP BY 
        meds.med_name
    ORDER BY 
        Total_Quantity_Purchased DESC;
";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Medicine Purchase Summary</title>
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <style>
        /* Center the content */
        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        /* Style the table */
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Header styling */
        h2 {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
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
				<a href="expiryreport.php">Medicines - Soon to Expire</a>
				<a href="salesreport.php">Transactions Reports</a>				
			</div>			
	</div>
    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>

    <div class="container1">
            <h2>Medicine Purchase Summary</h2>
        
        <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Medicine Name</th>
                    <th>Total Quantity Purchased</th>
                    <th>Average Cost</th>
                    <th>Times Purchased</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['Medicine_Name']) ?></td>
                        <td><?= htmlspecialchars($row['Total_Quantity_Purchased']) ?></td>
                        <td><?= htmlspecialchars(number_format($row['Average_Cost'], 2)) ?></td>
                        <td><?= htmlspecialchars($row['Times_Purchased']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No data available for medicines purchased.</p>
        <?php endif; ?>
    </div>
</body>
</html>
