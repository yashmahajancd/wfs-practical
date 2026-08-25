<?php

include('connect.php');

if(isset($_POST['btninsert']))
{
    $name = $_POST['txtcarname'];
    $model = $_POST['txtmodelname'];
    $year = $_POST['selyear'];
    $price = $_POST['txtcarprice'];

    $insert = "INSERT INTO car_table (name, model, year, price) VALUES ('$name', '$model', '$year', '$price')";

    mysqli_query($con, $insert);

    header('location:index.php');
}

if(isset($_POST['btnupdate']))
{
    $carid = $_POST['txtcarid'];
    $name = $_POST['txtcarname'];
    $model = $_POST['txtmodelname'];
    $year = $_POST['selyear'];
    $price = $_POST['txtcarprice'];

    $update = "UPDATE car_table SET name='$name', model='$model', year='$year', price='$price' WHERE carid=$_GET[editid]";

    mysqli_query($con, $update);

    header('location:index.php');
}

if(isset($_GET['editid']))
{
    $select = "SELECT * FROM car_table WHERE carid=$_GET[editid]";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_array($result);
}

if(isset($_GET['delid']))
{
    $delete = "DELETE FROM car_table WHERE carid=$_GET[delid]";
    mysqli_query($con, $delete);
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Crud Operation</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <center>
        <h2 style="padding: 10px 5px;  background-color: #bdbdbd;">-- Car Crud Operation --</h2>

        <form action="" method="POST" name="form1">
            <table border="2" cellpadding="8px" cellspacing="0px">
                <tr>
                    <td>Enter Car ID : </td>
                    <td><input style="padding: 3px 5px;" type="number" name="txtcarid" value="<?php if(isset($_GET['editid'])) echo $row['carid']; ?>" placeholder="Enter Car Id" required></td>
                </tr>

                <tr>
                    <td>Enter Car Name : </td>
                    <td><input style="padding: 3px 5px;" type="text" name="txtcarname" value="<?php if(isset($_GET['editid'])) echo $row['name']; ?>" placeholder="Enter Car Name" required></td>
                </tr>

                <tr>
                    <td>Enter Model Name : </td>
                    <td><input style="padding: 3px 5px;" type="text" name="txtmodelname" value="<?php if(isset($_GET['editid'])) echo $row['model']; ?>" placeholder="Enter Model Name" required></td>
                </tr>

                <tr>
                    <td>Enter Car Year : </td>
                    <td>
                        <select style="padding: 3px 5px;" name="selyear">
                            <option value="">--Select Year--</option>
                            <?php
                                for($i = 1990; $i <= 2024; $i++)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Enter Car Price : </td>
                    <td><input style="padding: 3px 5px;" type="number" name="txtcarprice" value="<?php if(isset($_GET['editid'])) echo $row['price']; ?>" placeholder="Enter Car Price" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <?php if(isset($_GET['editid'])) { ?>
                        <button style="padding: 2px 8px; cursor: pointer;" type="submit" name="btnupdate">Update</button>
                        <?php } else { ?>
                        <button style="padding: 2px 8px; cursor: pointer;" type="submit" name="btninsert">Insert</button>
                        <?php } ?>
                    </td>
                </tr>
            </table>

            <br><br>

            <table border="3" cellspacing="0px">
                <tr>
                    <th style="padding: 8px 15px;">CarId</th>
                    <th style="padding: 8px 15px;">CarName</th>
                    <th style="padding: 8px 15px;">ModelName</th>
                    <th style="padding: 8px 15px;">CarYear</th>
                    <th style="padding: 8px 15px;">CarPrice</th>
                    <th style="padding: 8px 15px;">Action</th>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>