<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmaceutical Supply Chain Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="nav2.css"> <!-- Include your navigation CSS -->
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

#medications-card {
    background-color: #e3f2fd;
}

#suppliers-card {
    background-color: #f3e5f5;
}

#warehouses-card {
    background-color: #fbe0e4;
}

#hospitals-card {
    background-color: #fff3e0;
}

#patients-card {
    background-color: #fce4ec;
}

#compliance-card {
    background-color: #fbe0e4;
}

#transactions-card {
    background-color: #f9fbe7;
}

#user-card {
    background-color: #e0f7fa;
}

#feedback-card {
    background-color: #fbcff4;
}

#inventory-card {
    background-color: #e0f2f1; /* Light teal background for inventory */
}
#sales-card {
    background-color: #e8f5e9; /* Light teal background for inventory */
}

    </style>
</head>

<body>


	<div class="topnav">
		<a href="logout.php">Logout</a>
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
                    <p>Manage medication inventory levels and stock.</p>
                    <a href="inventory-view.php">View Inventory</a>
                </div>
                <div class="card" id="suppliers-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/supplier.png" alt="Suppliers" class="card-image">
                    <h3>SUPPLIERS</h3>
                    <p>Manage suppliers and compliance status</p>
					<a href="supplier-view.php">View Suppliers</a>
                </div>

                <div class="card" id="warehouses-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/purchase-order.png" alt="Warehouses" class="card-image">
                    <h3>STOCK PURCHASE</h3>
                    <p>Track inventory and stock purchases</p>
                    <a href="purchase-view.php">View purchases</a>
                </div>
                <div class="card" id="transactions-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/money-transfer.png" alt="Transactions" class="card-image">
                    <h3>TRANSACTIONS</h3>
                    <p>Manage supply chain transactions and deliveries</p>
                    <a href="sales-view.php">View Transactions</a>
                </div>
				<div class="card" id="patients-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/user.png" alt="Patients" class="card-image">
                    <h3>PATIENTS</h3>
                    <p>Manage patient records and personal details</p>
                    <a href="customer-view.php">View Patients</a>
                </div>
				<div class="card" id="user-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/user-male-circle.png" alt="Users" class="card-image">
                    <h3>EMPLOYEES</h3>
                    <p>Manage employee accounts and their roles</p>
                    <a href="employee-view.php">View employees</a>
                </div>
                
                <div class="card" id="sales-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/discount--v1.png" alt="Sales" class="card-image">
                    <h3>SALES MANAGEMENT</h3>
                    <p>Add new sale and manage medicine sales events</p>
                    <a href="pos1.php">View Sales</a>
                </div>
                <div class="card" id="feedback-card">
                    <img src="https://img.icons8.com/ios-filled/50/007BFF/report-card.png" alt="Reports" class="card-image">
                    <h3>REPORTS</h3>
                    <p>Generate and analyze comprehensive reports</p>
                    <a href="reports.php">View Reports</a>
                </div>

                
            </div>
        </div>
    </div>

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
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
</body>

</html>
