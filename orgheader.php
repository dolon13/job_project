
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternInsight</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #007bff; /* Bootstrap primary color */
            position: fixed; /* Fix the navbar to the top */
            width: 100%; /* Occupy full width of the viewport */
            top: 0; /* Align to the top */
            z-index: 1000; /* Ensure the navbar is above other content */
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: white !important; /* Text color */
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important; /* Light gray on hover */
        }
        .navbar-nav .nav-item:hover .nav-link {
            color: #f8f9fa !important; /* Light gray on hover */
        }
        body {
            padding-top: 56px; /* Adjust body padding to accommodate fixed navbar */
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="orghome.php">InternInsight</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="orghome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="postJob1.php">Post circular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Log out</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
