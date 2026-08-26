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

// DELETE CAR
if(isset($_POST['btndelete']))
{
    $carid = $_POST['carid'];

    if(is_numeric($carid))
    {
        $delete = "DELETE FROM car_table WHERE carid = ?";

        $stmt = mysqli_prepare($con, $delete);

        mysqli_stmt_bind_param($stmt, "i", $carid);

        if(mysqli_stmt_execute($stmt))
        {
            header("Location: index.php?msg=deleted");
            exit();
        }
        else
        {
            header("Location: index.php?msg=error");
            exit();
        }
    }
}


// EDIT CAR
$editRow = null;

if(isset($_GET['editid']))
{
    $editid = $_GET['editid'];

    if(is_numeric($editid))
    {
        $selectEdit = "SELECT * FROM car_table WHERE carid = ?";

        $stmt = mysqli_prepare($con, $selectEdit);

        mysqli_stmt_bind_param($stmt, "i", $editid);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0)
        {
            $editRow = mysqli_fetch_assoc($result);
        }
        else
        {
            header("Location: index.php?msg=notfound");
            exit();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR CRUD</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <center>
        <h2 style="padding: 10px 5px;  background-color: #bdbdbd;">-- Car Crud Operation --</h2>

        <!-- SUCCESS / ERROR MESSAGE -->
        <?php
        
        if(isset($_GET['msg']))
        {
            if($_GET['msg'] == 'inserted')
            {
                echo "<p style='color: green;'>Car Inserted Successfully!</p>";
            }

            if($_GET['msg'] == 'updated')
            {
                echo "<p style='color: blue;'>Car Updated Successfully!</p>";
            }

            if($_GET['msg'] == 'deleted')
            {
                echo "<p style='color: red;'>Car Deleted Successfully!</p>";
            }

            if($_GET['msg'] == 'empty')
            {
                echo "<p style='color: red;'>All Fields Are Required!</p>";
            }

            if($_GET['msg'] == 'invalid')
            {
                echo "<p style='color: red;'>Invalid Data Entered!</p>";
            }

            if($_GET['msg'] == 'notfound')
            {
                echo "<p style='color: red;'>Car Record Not Found!</p>";
            }

            if($_GET['msg'] == 'error')
            {
                echo "<p style='color: red;'>Something Went Wrong!</p>";
            }
        }
        
        ?>

        <!-- INSERT / UPDATE FORM -->
        <form action="" method="POST">

            <?php if($editRow != null) { ?>

            <input type="hidden" name="txtcarid" value="<?php echo htmlspecialchars($editRow['carid']); ?>">

            <?php } ?>

            <table border="2" cellpadding="8px" cellspacing="0px">

                <?php if($editRow != null) { ?>
                <tr>
                    <td>Car ID : </td>
                    <td><input style="padding: 3px 5px;" type="number" name="txtcarid" value="<?php echo htmlspecialchars($editRow['carid']); ?>" readonly></td>
                </tr>
                <?php } ?>

                <!-- CAR NAME -->
                <tr>
                    <td>Enter Car Name : </td>
                    <td><input style="padding: 3px 5px;" type="text" name="txtcarname" value="<?php if($editRow != null) { echo htmlspecialchars($editRow['name']); } ?>" placeholder="Enter Car Name" required></td>
                </tr>

                <!-- MODEL NAME -->
                <tr>
                    <td>Enter Model Name : </td>
                    <td><input style="padding: 3px 5px;" type="text" name="txtmodelname" value="<?php if($editRow != null) { echo htmlspecialchars($editRow['model']); } ?>" placeholder="Enter Model Name" required></td>
                </tr>

                <!-- CAR YEAR -->
                <tr>
                    <td>Enter Car Year : </td>
                    <td>
                        <select style="padding: 3px 5px;" name="selyear" required>
                            <option value="">-- Select Year --</option>

                            <?php

                            for($i = 1990; $i <= date('Y'); $i++)
                            {
                                $selected = "";

                                if($editRow != null && $editRow['year'] == $i)
                                {
                                    $selected = "selected";
                                }
                                
                                echo "<option value='$i' $selected>$i</option>";
                            }

                            ?>
                        </select>
                    </td>
                </tr>

                <!-- CAR PRICE -->
                <tr>
                    <td>Enter Car Price : </td>
                    <td><input style="padding: 3px 5px;" type="number" name="txtcarprice" value="<?php if($editRow != null) { echo htmlspecialchars($editRow['price']); } ?>" placeholder="Enter Car Price" min="0" required></td>
                </tr>

                <!-- BUTTON -->
                <tr>
                    <td colspan="2" align="center">
                        <?php if($editRow != null) { ?>
                        <button style="padding: 5px 15px; cursor: pointer;" type="submit" name="btnupdate">Update</button>
                        <a href="index.php" style="margin-left: 10px; text-decoration: none;">Cancel</a>
                        <?php } else { ?>
                        <button style="padding: 5px 15px; cursor: pointer;" type="submit" name="btninsert">Insert</button>
                        <?php } ?>
                    </td>
                </tr>

            </table>

        </form>

        <br><br>

        <!-- CAR LIST -->
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
                
            $selectCars = "SELECT * FROM car_table ORDER BY carid DESC";

            $resultCars = mysqli_query($con, $selectCars);

            if(mysqli_num_rows($resultCars) > 0)
            {
                while($car = mysqli_fetch_assoc($resultCars))
                {
                
            ?>

            <tr>
                <td><?php echo htmlspecialchars($car['carid']); ?></td>
                <td><?php echo htmlspecialchars($car['name']); ?></td>
                <td><?php echo htmlspecialchars($car['model']); ?></td>
                <td><?php echo htmlspecialchars($car['year']); ?></td>
                <td><?php echo htmlspecialchars($car['price']); ?></td>
                <td>
                    <!-- EDIT -->
                    <a href="index.php?editid=<?php echo $car['carid']; ?>">Edit</a>
                    &nbsp; | &nbsp;

                    <!-- DELETE -->
                    <form method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this car?');">
                        <input type="hidden" name="carid" value="<?php echo $car['carid']; ?>">
                        <button style="border: none; background: none; color: red; cursor: pointer; padding: 0;" type="submit" name="btndelete">Delete</button>
                    </form>
                </td>
            </tr>

            <?php
            
                }
            }
            else
            {
            
            ?>

            <tr>
                <td colspan="6" align="center">No Car Records Found</td>
            </tr>

            <?php
            
            }
            
            ?>
        </table>
    </center>
</body>

</html>