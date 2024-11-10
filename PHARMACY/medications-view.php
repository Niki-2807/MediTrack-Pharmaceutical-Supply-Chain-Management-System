<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Medicines - View</title>
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
        <h2 style="font-family:Arial; color:white; text-align:center;"> PHARMACIA </h2>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="inventory-add.php">Add New Medicine</a>
            <a href="inventory-view.php">Manage Inventory</a>
        </div>
        <!-- Add other dropdowns as needed -->
        <a href="logout.php">Logout</a>
    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>

    <center>
        <div class="head">
            <h2> MEDICINE INVENTORY </h2>
        </div>
    </center>

    <!-- Add Inventory Button with Icon positioned above the table -->
    <a href="inventory-add.php" class="add-button">Add New Medicine</a>

    <!-- Medicine Inventory Table -->
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
        include "config.php"; // Database connection

        // SQL query to fetch data from the meds table
        $sql = "SELECT MED_ID, MED_NAME, MED_QTY, CATEGORY, MED_PRICE, LOCATION_RACK FROM meds";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["MED_ID"] . "</td>";
                echo "<td>" . $row["MED_NAME"] . "</td>";
                echo "<td>" . $row["MED_QTY"] . "</td>";
                echo "<td>" . $row["CATEGORY"] . "</td>";
                echo "<td>" . $row["MED_PRICE"] . "</td>";
                echo "<td>" . $row["LOCATION_RACK"] . "</td>";
                echo "<td align=center>";
                echo "<a class='button1 edit-btn' href=inventory-update.php?id=" . $row['MED_ID'] . ">Edit</a>";
                echo "<a class='button1 del-btn' href=inventory-delete.php?id=" . $row['MED_ID'] . ">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }

        $conn->close(); // Close the database connection
        ?>
</body>

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

</html>
