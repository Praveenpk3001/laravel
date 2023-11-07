<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(90deg,rgb(95, 95, 100),rgb(110, 110, 226),rgb(195, 193, 228));
}
form{
    width: 70%;
    background-color: white;
    padding: 50px;
    border-radius: 20px;
    margin-left: 150px;
}
.btn-btn-primary{
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 50px;
    background: linear-gradient(90deg,rgb(95, 95, 100),rgb(110, 110, 226),rgb(195, 193, 228));
}
.form-control{
    color: rgba(0, 0, 0,.87);
    border-color:rgba(0, 0, 0,.42) ;
    box-shadow: none;
    border: none;
    border: 1px solid black;
    border-radius: 4px 4px 0 0;
    outline: none;
} 
h4{
    font-size: 32px !important;
    font-weight: 600;
}
.form-label{
    font-family: 700 !important;
}
.text-dark{
    text-align: center;
    font-size: smaller;
   
}
</style>
</head>
<body>
<div class="container mt-3 text-center mt-5">
  <h2>Products</h2>
  <form action="/add_product" method="post mt-5">
    @csrf
    <div class="mb-3 mt-3">
      <label for="product">Product Name:</label>
      <input type="text" class="form-control" id="product" placeholder="Enter product " name="product_name">
    </div>
    <div class="mb-3">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    
</body>
</html>