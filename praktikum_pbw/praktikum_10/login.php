<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card shadow p-4 mx-auto" style="max-width:400px">

<h3 class="text-center">Login</h3>

<?php if (isset($_GET['message'])): ?>
<div class="alert alert-info"><?= $_GET['message']; ?></div>
<?php endif; ?>

<form method="POST" action="proses_login.php">
    <input class="form-control mb-3" name="username" placeholder="Username" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
    <button class="btn btn-primary w-100">Login</button>
</form>

</div>
</div>

</body>
</html>