<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Coba</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="margin:10px; background-color: #e3f2fd;">
    <a class="navbar-brand" href="#" style="margin-left:10px;">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
    </nav>
    </header>
    <main>
    <article>
    
        <div class="card-body">
        <h1 style="text-align:center;"><?php echo $project->title;?></h1>
        <img src="/assets/uploads/<?= $project->filename ?>" class="img-fluid rounded-start" style="margin-left: 150px; margin-top: 50px; width:300px;" alt="Card image cap">
        <p><?php echo $project->content;?></p>
        </div>

    </article>
    <aside id="news"><h2>News</h2></aside>
    <aside id="contact"><h2>Contact</h2><aside>
    </main>
    <footer><footer>

    
</body>
</html>