<?php

include('connect.php');

// INSERT CAR
if(isset($_POST['btninsert']))
{
    $name = trim($_POST['txtcarname']);
    $model = trim($_POST['txtmodelname']);
    $year = $_POST['selyear'];
    $price = $_POST['txtcarprice'];

    if(empty($name) || empty($model) || empty($year) || $price === '')
    {
        header("Location: index.php?msg=empty");
        exit();
    }
    elseif(!is_numeric($year) || !is_numeric($price) || $price < 0)
    {
        header("Location: index.php?msg=invalid");
        exit();
    }
    else
    {
        $insert = "INSERT INTO car_table (name, model, year, price) VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $insert);

        mysqli_stmt_bind_param($stmt, "ssii", $name, $model, $year, $price);

        if(mysqli_stmt_execute($stmt))
        {
            header("Location: index.php?msg=inserted");
            exit();
        }
        else
        {
            header("Location: index.php?msg=error");
            exit();
        }
    }
}

// UPDATE CAR
if(isset($_POST['btnupdate']))
{
    $carid = $_POST['txtcarid'];
    $name = trim($_POST['txtcarname']);
    $model = trim($_POST['txtmodelname']);
    $year = $_POST['selyear'];
    $price = $_POST['txtcarprice'];

    if(empty($carid) || empty($name) || empty($model) || empty($year) || $price === '')
    {
        header("Location: index.php?msg=empty");
        exit();
    }
    elseif(!is_numeric($carid) || !is_numeric($year) || !is_numeric($price) || $price < 0)
    {
        header("Location: index.php?msg=invalid");
        exit();
    }
    else
    {
        $update = "UPDATE car_table SET name=?, model=?, year=?, price=? WHERE carid=?";

        $stmt = mysqli_prepare($con, $update);

        mysqli_stmt_bind_param($stmt, "ssiii", $name, $model, $year, $price, $carid);

        if(mysqli_stmt_execute($stmt))
        {
            header("Location: index.php?msg=updated");
            exit();
        }
        else
        {
            header("Location: index.php?msg=error");
            exit();
        }
    }
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
                <?php
                
                $select = "SELECT * FROM car_table ORDER BY carid DESC";
                $result = mysqli_query($con, $select);

                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['carid'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['year'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td><a href='index.php?editid=" . $row['carid'] . "'>Edit</a><a href='index.php?delid=" . $row['carid'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
                
                ?>
            </table>
        </form>
    </center>
</body>

</html>