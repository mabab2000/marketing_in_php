<link href="style.css" rel="stylesheet">

<?php
session_start();

// Redirect user to login page if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Retrieve user data from session
$user_id = $_SESSION['user_id'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
?><!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}
  
		
	
form {
  box-shadow: 0 0 5px 2px #888888;
  padding: 30px;
  width: 500px;
  background-color: rgba(255, 255, 255, 0.8);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

input[type="text"],select,
    textarea {
        background-color: grey;
        padding:7px 10px;
    }
    input[type="submit"] {
        background-color: green;
        color:white;
        padding:15px 10px;
    }
</style>

	</style>
<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div class="text-center sm:text-left">
        <h1 class="text-5xl font-bold text-gray-900 sm:text-3xl">
        Welcome, <?php echo $first_name . ' ' . $last_name; ?>!
        </h1>

        <p class="mt-1.5 text-sm text-gray-500">
          Manage the post of product on the site! 🎉
        </p>
      </div>

      <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
        <a href="market.php"><button
          class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 px-5 py-3 text-gray-500 transition hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:ring"
          type="button"
        >
          <span class="text-sm font-medium"> View Website </span>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
            />
          </svg>
        </button></a>

        <a href="upload_image.php"><button
          class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
          type="button"
        >
          Create Post
        </button></a>
        <a href="logout.php">
        <button
          class="block rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
          type="button"
        >
          Logout
        </button></a>
      </div>
    </div>
  </div>
<br><br><br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
Enter image title:
    <input type="text" name="head" id="description" required>
    <br><br>
   Property type:
<select name="ubwoko" id="gender" required>
<option value="">...Select property type...</option>
  <option value="Electronic">Electronics</option>
  <option value="Restorent">Restorent</option>
  <option value="Schools">Schools</option>
  <option value="salle">Salle</option>
  <option value="ibibanza">Land</option>
  <option value="plot">Plot</option>
  <option value="house">House</option>
 
</select><br>
    Add image :
    <input type="file" name="image" id="image" required>
    <br>
    Enter image description: <br>
    <textarea name="description" id="description" rows="5" required></textarea>
    <br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
