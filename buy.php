<?php
$product = $_GET['product'];
$price = $_GET['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy Product</title>

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
    background:linear-gradient(135deg,#667eea,#764ba2);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.order-card{
    background:#fff;
    width:100%;
    max-width:500px;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    animation:fadeIn 0.8s ease;
}

.order-card h2{
    text-align:center;
    color:#333;
    margin-bottom:25px;
}

.product-box{
    background:#f4f7ff;
    padding:15px;
    border-radius:12px;
    margin-bottom:25px;
    border-left:5px solid #667eea;
}

.product-box p{
    margin:8px 0;
    font-size:16px;
}

.price{
    color:#28a745;
    font-size:20px;
    font-weight:bold;
}

.input-group{
    margin-bottom:18px;
}

.input-group label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
    color:#555;
}

.input-group input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:10px;
    outline:none;
    transition:0.3s;
}

.input-group input:focus{
    border-color:#667eea;
    box-shadow:0 0 8px rgba(102,126,234,0.4);
}

.btn{
    width:100%;
    padding:14px;
    background:linear-gradient(135deg,#667eea,#764ba2);
    color:white;
    border:none;
    border-radius:12px;
    font-size:17px;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 15px rgba(0,0,0,0.2);
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

</style>
</head>

<body>

<div class="order-card">

    <h2><i class="fas fa-shopping-cart"></i> Order Details</h2>

    <div class="product-box">
        <p><strong>Product:</strong> <?php echo $product; ?></p>
        <p class="price">₹<?php echo $price; ?></p>
    </div>

    <form action="save_order.php" method="POST">

        <input type="hidden" name="product_name"
               value="<?php echo $product; ?>">

        <input type="hidden" name="price"
               value="<?php echo $price; ?>">

        <div class="input-group">
            <label><i class="fas fa-user"></i> Full Name</label>
            <input type="text" name="customer_name" required>
        </div>

        <div class="input-group">
            <label><i class="fas fa-envelope"></i> Email Address</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label><i class="fas fa-phone"></i> Phone Number</label>
            <input type="text" name="phone" required>
        </div>

        <button type="submit" class="btn">
            <i class="fas fa-check-circle"></i> Place Order
        </button>

    </form>

</div>

</body>
</html>