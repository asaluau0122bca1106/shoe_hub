<?php
include 'db.php';

$name = $_POST['customer_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product_name'];
$price = $_POST['price'];

$sql = "INSERT INTO orders
(customer_name,email,phone,product_name,price)
VALUES
('$name','$email','$phone','$product','$price')";

if(mysqli_query($conn,$sql))
{
?>

<!DOCTYPE html>

<html>
<head>
    <title>Order Success</title>

```
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#4facfe,#00f2fe);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.success-card{
    background:white;
    width:450px;
    padding:35px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.success-icon{
    font-size:80px;
    color:#28a745;
    margin-bottom:15px;
}

h2{
    color:#28a745;
    margin-bottom:10px;
}

.msg{
    color:#555;
    margin-bottom:20px;
}

.details{
    text-align:left;
    background:#f5f7ff;
    padding:15px;
    border-radius:12px;
    margin-bottom:20px;
}

.details p{
    margin:10px 0;
    font-size:15px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#4facfe;
    color:white;
    padding:12px 25px;
    border-radius:10px;
    font-weight:bold;
    transition:0.3s;
}

.btn:hover{
    background:#2196f3;
}

</style>
```

</head>

<body>

<div class="success-card">

```
<i class="fas fa-check-circle success-icon"></i>

<h2>Order Placed Successfully!</h2>

<p class="msg">
    Thank you for your purchase. Your order has been received.
</p>

<div class="details">
    <p><strong>Customer:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Product:</strong> <?php echo $product; ?></p>
    <p><strong>Amount:</strong> ₹<?php echo $price; ?></p>
</div>

<a href="index.php" class="btn">
    <i class="fas fa-home"></i> <a href="test.php">Back to Home</a>
</a>

</div>

</body>
</html>

<?php
}
else
{
    echo "<h2 style='color:red;'>Error: ".mysqli_error($conn)."</h2>";
}

mysqli_close($conn);
?>
