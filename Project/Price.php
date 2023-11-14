<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category and Subcategory</title>
    <style>
        body {
            margin: 0;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            animation: animateTableBackground 10s infinite linear; /* Adjusted duration */
            background: radial-gradient(#57C2D3, white);
            background-size: 200% 200%; /* Fill the animation in the whole table */
        }

        @keyframes animateTableBackground {
            0%, 100% {
                background-position: 0 0; /* Initial position */
            }
            50% {
                background-position: 100% 100%; /* Final position */
            }
        }

        th, td {
            border: 3px;
            padding: 10px;
            text-align: center;
            color: black;
        }

        th {
            font-weight: bold;
            font-size: 20px;
            background-color: #007bff;
            color: white;
        }

        td {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">PRICE LIST</h1>

    <?php
    include("Assets/Connection/Connection.php");

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
