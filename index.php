<!DOCTYPE html>
<html>
    <head>
        <title>Hospital Triage</title>
    </head>
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }
        .hero-content {
            margin-top: 30px;
        }
  </style>
    <body>
        <?php
            include("include/header.php");
        ?>

    <section class="hero-section">
        <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6">
            <img src="img/doctors.svg" class="img-fluid pr-5" alt="Image">
            </div>
            
            <div class="col-md-6 hero-content">
            <h2>Welcome to Hospital Triage</h2>
            <p class="lead">Hospital Triage helps staff and patients better understand waiting times in the emergency room.</p>
            <form method="post">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            </div>
        </div>
        </div>
    </section>
    </body>
</html>