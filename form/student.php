<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>

<body>
    <center>
        <!-- <marquee behavior="alternate" direction="right"> -->
        <h2>---- STUDENT REGISTRATION FORM ----</h2>
        <!-- </marquee> -->

        <form action="valid.php" method="POST" name="form1">
            <table style="color: white" border="1" bgcolor="gray" cellspacing="0" cellpadding="10px">

                <tr style="text-align: center;">
                    <td>Enter Name: </td>
                    <td><input style="width: 97%" type="text" name="txtname" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td>Address: </td>
                    <td><textarea cols="30" rows="5" name="txtadd" required></textarea></td>
                </tr>

                <tr style="text-align: center;">
                    <td>City: </td>
                    <td>
                        <select style="padding: 3px 10px;" name="selcity" required>
                            <option value="">---Select City---</option>
                            <option value="Surat">Surat</option>
                            <option value="Valsad">Valsad</option>
                            <option value="Navsari">Navsari</option>
                        </select>
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>