<?php
session_start();
ob_start();
include('Head.php');
include("Assets/Connection/Connection.php");
// Your query to retrieve category and subcategory data
$query = "SELECT c.category_name, s.subcategory_name, s.subcategory_price
          FROM tbl_category c
          INNER JOIN tbl_subcategory s ON c.category_id = s.category_id";

$result = $con->query($query); // Use $con to execute the query
?>
<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <title>Category and Subcategory </title>
    <style>
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ensure the table is centered vertically on the page */
        }

        table {
            border-collapse: collapse;
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table horizontally */
        }

        th, td {
    border: 3px solid black;
    padding: 10px;
    text-align: center;
    color: black; /* Set text color to black */
}

th {
    font-weight: bold; 
    font-size: 20px;/* Make text in <th> elements bold */
}
td{
    font-size: 18px;
}
    </style>
</head>
<body>
<h1 style="text-align: center;">PRICE LIST</h1>

    <?php
    include("Assets/Connection/Connection.php");

    // Query to retrieve categories
    $categoryQuery = "SELECT * FROM tbl_category";
    $categoryResult = $con->query($categoryQuery);
    ?>

    <table border="1">
        <tr>
            <th>Sl.No</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Price</th>
        </tr>
        <?php
        $i = 1;
        while ($row = $categoryResult->fetch_assoc()) {
            $categoryId = $row['category_id'];
            $categoryName = $row['category_name'];
            
            // Query to retrieve subcategories for the selected category
            $subcategoryQuery = "SELECT subcategory_name, subcategory_price FROM tbl_subcategory WHERE category_id = $categoryId";
            $subcategoryResult = $con->query($subcategoryQuery);
            
            if ($subcategoryResult->num_rows > 0) {
                while ($subcategoryRow = $subcategoryResult->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $categoryName . '</td>';
                    echo '<td>' . $subcategoryRow['subcategory_name'] . '</td>';
                    echo '<td>₹' . $subcategoryRow['subcategory_price'] . '</td>';
                    echo '</tr>';
                    $i++;
                }
            }
        }
        ?>
    </table>

    <!-- Close the database connection -->
    <?php
    $con->close();
    ?>
    <script>
        function getsubcategory(selectElement) {
            var selectedValue = selectElement.value;
            var subcategorySelect = $(selectElement).closest('.data-row').find('.sl-subcategory');

            $.ajax({
                url: "Assets/AjaxPages/AjaxSubCat.php?pid=" + selectedValue,
                success: function (data) {
                    subcategorySelect.html(data);
                }
            });
        }
    </script>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>

