<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="registration_check.php" method="post">
        <fieldset>
            <legend>Registration</legend>
        <table>


            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input type="text" name="username" value=""/>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="email" name="email" value=""/>
                </td>
            </tr>
            <tr>
                <td>
                    Create Password:
                </td>
                <td>
                    <input type="password" name="password" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</body>
</html>