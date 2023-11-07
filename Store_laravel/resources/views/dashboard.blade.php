<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departmental Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
.side{
color: #f8f9fa;
}
.navbar {
    padding: 15px;
}
.navbar-brand {
    font-size: 24px;
    color: #fff;
}
.navbar-nav .nav-link {
    color: #fff;
}
.navbar-toggler {
    background-color: #fff;
}
.navbar-toggler-icon {
    background-color: #007BFF;
}
.slide-image {
    text-align: center;
    margin-top: 20px;
}

.image {
    text-align: center;
    margin-top: 20px;
}
.footer {
    background-color: #f8f9fa;
    text-align: center;
    padding: 10px;
}
.footer p {
    color: #333;
    font-size: 14px;
}

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Departmental Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select">Sales</a>
                    </li>
                    

                </ul>
            </div>
        </nav>
    </header>

    <div class="container side mt-5 mb-5 text-center ">
        <h1>Welcome to our Departmental Store</h1>
        <p>We offer a wide range of products for your daily needs.</p>
    </div>
    <div class="container slide-image d-flex align-item-center justify-content-center">
        <img src="img2.webp" alt="" width="80%" height="300px">
    </div>

    <div class="container image d-flex align-item-center justify-content-center">
        <img src="store.webp" alt="" width="80%" height="300px">
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2023 Departmental Store</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


</x-app-layout>
