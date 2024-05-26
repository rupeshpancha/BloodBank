<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side-by-Side Containers with Centered Tables</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>
    <div class="big-box">
        <div class="left-table1">
            <div class="table1">
                <div class="row1">
                    <?php
                    // Database connection
                    require 'conn.php';

                    // Query to fetch donor data
                    $sql = "SELECT f_name, l_name, bloodgroup FROM donor";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<div class='table1'>";
                        echo "<div class='row1 header1'>";
                        echo "<div class='box'>Name</div>";
                        echo "<div class='box'>Age</div>";
                        echo "<div class='box'>Occupation</div>";
                        echo "</div>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='row1'>";
                            echo "<div class='box'>" . $row["f_name"] . "</div>";
                            echo "<div class='box'>" . $row["l_name"] . "</div>";
                            echo "<div class='box'>" . $row["bloodgroup"] . "</div>";
                            echo "</div>";
                        }

                        echo "</div>"; // Close table1
                    } else {
                        echo "No records found";
                    }

                    $conn->close();
                    ?>


                </div>
            </div>
        </div>

        <div class="right-table1">
            <div class="table1">
                <?php
                // Database connection
                require 'conn.php';

                // Query to fetch product data
                $sql = "SELECT f_name, l_name,bloodgroup FROM donor";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='table1'>";
                    echo "<div class='row1 header1 green'>";
                    echo "<div class='box'>Product</div>";
                    echo "<div class='box'>Unit Price</div>";
                    echo "<div class='box'>Quantity</div>";
                    echo "</div>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='row1'>";
                        echo "<div class='box'>" . $row["f_name"] . "</div>";
                        echo "<div class='box'>" . $row["l_name"] . "</div>";
                        echo "<div class='box'>" . $row["bloodgroup"] . "</div>";
                        echo "</div>";
                    }

                    echo "</div>"; // Close table1
                } else {
                    echo "No records found";
                }

                $conn->close();
                ?>

            </div>

        </div>
    </div>
    
</body>

</html>