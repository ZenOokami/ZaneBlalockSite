
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Handle Form 1</title>
    </head>
    <body>
        <?php
    		$title = $_POST['Title'];
        $first_name = $_POST['First_Name'];
    		$family_name = $_POST['Family_Name'];
    		$address = $_POST['Address'];
    		$date_of_birth = $_POST['Date_of_birth'];

    		$year = date("Y");
    		$age = $year - $date_of_birth;


    		print("<p>This is for testing:</p>");
            print "<p>You typed $first_name</p>";
            print '<p>You typed $first_name</p>';
            print '<p>You typed ' . $first_name . '</p>';
    		print("<hr>");

    		// Real output
    		print("<p>Hello, $title $first_name $family_name of $address. </p>");
    		print("You will be $age this year!");
        ?>
    </body>
</html>
