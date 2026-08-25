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
                    <td><input type="number" name="txtcarid" value="" placeholder="Enter Car Id" required></td>
                </tr>

                <tr>
                    <td>Enter Car Name : </td>
                    <td><input type="text" name="txtcarname" value="" placeholder="Enter Car Name" required></td>
                </tr>

                <tr>
                    <td>Enter Model Name : </td>
                    <td><input type="text" name="txtmodelname" value="" placeholder="Enter Model Name" required></td>
                </tr>

                <tr>
                    <td>Enter Car Year : </td>
                    <td>
                        <select name="selyear">
                            <option value="">--Select Year--</option>
                            //
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Enter Car Price : </td>
                    <td><input type="number" name="txtcarprice" value="" placeholder="Enter Car Price" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button style="padding: 2px 8px; cursor: pointer;" type="submit" name="btnupdate">Update</button>
                        <button style="padding: 2px 8px; cursor: pointer;" type="submit" name="btninsert">Insert</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>