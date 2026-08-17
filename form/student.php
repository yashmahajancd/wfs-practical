<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <center>
        <!-- <marquee behavior="alternate" direction="right"> -->
        <h3 style="background-color: #cacaca; padding: 10px 0px">--- Student Registration Form ---</h3>
        <!-- </marquee> -->

        <form action="valid.php" method="POST" name="form1">
            <table border="1" bgcolor="#cacaca" cellspacing="0" cellpadding="10px">

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

                <tr style="text-align: center;">
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td>Hobbies: </td>
                    <td>
                        <input type="checkbox" name="reading" value="Reading">Reading
                        <input type="checkbox" name="playing" value="Playing">Playing
                        <input type="checkbox" name="dancing" value="Dancing">Dancing
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td>DOB: </td>
                    <td><input style="width: 97%" type="text" name="date" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td>Contact: </td>
                    <td><input style="width: 97%" type="text" name="contact" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td>Email: </td>
                    <td><input style="width: 97%" type="email" name="email" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td>Password: </td>
                    <td><input style="width: 97%" type="password" name="" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <button style="padding: 3px 10px; cursor: pointer;" type="submit" name="submitBtn">Submit</button>
                        <button style="padding: 3px 10px; cursor: pointer;" type="submit" name="resetBtn">Reset</button>
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>