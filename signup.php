<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_email = $_POST['user_email'];
	$password = $_POST['password'];

	if (!empty($user_email) && !empty($password) && !is_numeric($user_email)) {

		//save to database
		$user_id = random_num(8);
		$query = "insert into users (user_id,user_email,password) values ('$user_id','$user_email','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="style.css">

	<link rel="shortcut icon" href="img/fiv/1.ico" type="image/x-icon">
	<title>Cara Fashion</title>

	<script>
		function myFunction() {
			window.location.href = "login.html";
		}
	</script>
</head>

<body>


	<section class="bg-gray-50 dark:bg-gray-900 relative bg-cover lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat"
		id="signUp">
		<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
			<a href="#" class="items-center pl-10 mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
				<img class="w-40 h-15 mr-2" src="img/logo.png" alt="logo">
			</a>
			<div
				class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
				<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
					<h1
						class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
						Create and account
					</h1>
					<form class="space-y-4 md:space-y-6" method="post">
						<div>
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
								email</label>
							<input type="email" name="user_email" id="email"
								class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
								placeholder="name@company.com" required="">
						</div>
						<div>
							<label for="password"
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
							<input type="password" name="password" id="password" placeholder="••••••••"
								class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
								required="">
						</div>
						<div>
							<label for="confirm-password"
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
								password</label>
							<input type="confirm-password" name="confirm-password" id="confirm-password"
								placeholder="••••••••"
								class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
								required="">
						</div>
						<div class="flex items-start">
							<div class="flex items-center h-5">
								<input id="terms" aria-describedby="terms" type="checkbox"
									class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
									required="">
							</div>
							<div class="ml-3 text-sm">
								<label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
									<a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
										href="#">Terms and Conditions</a></label>
							</div>
						</div>
						<button type="submit"
							class="w-full text-white bg-blue-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
							an account</button>
						<p class="text-sm font-light text-gray-500 dark:text-gray-400">
							Already have an account? <a href="login.php"
								class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
								here</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</section>











	<script src="script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

</body>

</html>