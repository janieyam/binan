<?php

?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#" style="font-size: 30px;">Edit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        
        
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Edit">Dashboard</a>
          </li><li class="nav-item">
            <a class="nav-link active" aria-current="page" href="editor">Edit</a>
          </li>
        </ul>
        <div class="dropdown text-end -50px">
              <li><a class="dropdown-item" href="<?php echo site_url('logout') ?>">Sign out</a></li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
</header>


    <body>
      <!-- Footer -->

      <footer class="bg-dark text-center text-white py-3" style="position: fixed; left: 0; bottom: 0; width: 100%;">
        <div class="container">
          <p>&copy; 2023 - All rights reserved.</p>
        </div>
      </footer>
      </ul>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>