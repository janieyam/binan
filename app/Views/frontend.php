<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FrontEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        font-size: 2rem;
    }

    #nav {
        margin: 1rem 0;
    }

    #nav ul {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    #nav button {
        background-color: #3498db;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        cursor: pointer;
        margin: 0 0.5rem;
        font-size: 1rem;
    }

    #nav button:hover {
        background-color: #2980b9;
    }

    #mycontent {
        background-color: #ecf0f1;
        padding: 2rem;
        text-align: center;
    }

    footer {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        font-size: 1rem;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>
    <header>G2 CMS</header>
    <nav id="nav">
    <ul>
        <li><button>Page 1</button></li>
        <li><button>Page 2</button></li>
        <li><button>Page 3</button></li>
    </ul>
</nav>

<div id="mycontent">
    <h2>Welcome to CMS</h2>
    <p>Dapat dito lalabas yung mga iiinput sa cms guys</p>
</div>

<footer>&copy; 2023 CMS.</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>