<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Driftwood Lodge</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/index.css" />
	</head>

	<body>
		<header>
			<h1>Driftwood Lodge</h1>
			<h2>Your premier destination on Lake Huron.</h2>
		</header>

		<main>
			<div id="guestbookForm">

				<?php 
                     require('database.php');
                     $name = $_POST('name');
                     $email = $_POST('email');
                     $comments = $_POST('comments');
         
                     $name_input = set_string($db_connect, $name);
                     $email_input = set_string($db_connect, $email);
                     $comments_input = set_string($db_connect, $comments);
         
                     $s = "INSERT INTO guest_details(name, email, comments) VALUES (?,?,?)";
         
                     $user_comments_input = mysqli_prepare($db_connect, $s);
         
                     mysqli_stmt_bind_param(
                         $user_comments_input,
                         'sss',
                         $name_input,
                         $email_input,
                         $comments_input
                     );
         
                     $input = mysqli_stmt_execute($user_comments_input);
                     if ($input) {
                         echo "<p>Thank you for your comments $name.</p>";
                         echo "<p>You'll be sent an email with confirmation at $email, and your comments will help improve the quality of the hotel</p>";
                     }
                     else {
                         echo "<p>500. Internal error. Please try again later.</p>";
                     }

                ?>

			</div>
		</main>
	</body>
</html>