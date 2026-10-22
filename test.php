<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ShoeHub - Online Shoe Store</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f5f5f5;
}

/* Header */
header{
    background:#222;
    color:white;
    padding:15px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:sticky;
    top:0;
}

.logo{
    font-size:28px;
    font-weight:bold;
}

nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin-left:25px;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-size:18px;
}

nav ul li a:hover{
    color:orange;
}

/* Hero */
.hero{
    height:500px;
    background:url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=1200') center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero h1{
    color:white;
    background:rgba(0,0,0,0.6);
    padding:20px;
    border-radius:10px;
    font-size:50px;
}

section{
    padding:60px 40px;
}

h2{
    text-align:center;
    margin-bottom:30px;
}

/* About */
.about-container{
    display:flex;
    flex-wrap:wrap;
    gap:30px;
    align-items:center;
    background:white;
    padding:20px;
    border-radius:10px;
}

.about-container img{
    width:450px;
    max-width:100%;
    border-radius:10px;
}

.about-text{
    flex:1;
}

/* Products */
.products{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:25px;
}

.card{
    width:250px;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 0 10px #ccc;
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.card h3,
.card p{
    padding:10px;
}

.btn{
    display:block;
    text-align:center;
    margin:10px;
    background:orange;
    color:white;
    padding:10px;
    text-decoration:none;
    border-radius:5px;
}

/* Contact */
.contact-form{
    max-width:600px;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:10px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:5px;
}

.contact-form button{
    background:orange;
    color:white;
    border:none;
    padding:12px 20px;
    cursor:pointer;
    border-radius:5px;
}

/* Footer */
footer{
    background:#222;
    color:white;
    padding:30px;
    margin-top:30px;
}

.footer-content{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
}

.footer-content div{
    margin:10px;
}

footer h3{
    margin-bottom:10px;
}

.copy{
    text-align:center;
    margin-top:20px;
}
</style>
</head>

<body>

<header>
    <div class="logo">ShoeHub</div>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="hero" id="home">
    <h1>Welcome to ShoeHub<br>Best Online Shoe Store</h1>
</section>

<section id="about">
    <h2>About Us</h2>

    <div class="about-container">
        <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=800" alt="Casual Shoes">

        <div class="about-text">
            <h3>Welcome to ShoeHub</h3>
            <br>
            <p>
                ShoeHub is a premium online shoe store offering stylish,
                comfortable, and affordable footwear for all age groups.
                Our mission is to provide customers with quality products,
                secure shopping, and fast delivery services.
            </p>
            <br>
            <p>
                We offer sports shoes, running shoes, sneakers,
                casual footwear, and fashion collections from trusted brands.
            </p>
        </div>
    </div>
</section>

<section id="menu">
    <h2>Our Products</h2>

    <div class="products">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500">
            <h3>Sports Shoes</h3>
            <p>₹1,999</p>
            <a href="buy.php?product=Sports Shoes&price=1999" class="btn">
    Buy Now
</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=500">
            <h3>Casual Shoes</h3>
            <p>₹1,499</p>
           <a href="buy.php?product=Sports Shoes&price=1499" class="btn">
    Buy Now
</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=500">
            <h3>Running Shoes</h3>
            <p>₹2,499</p>
           <a href="buy.php?product=Sports Shoes&price=2499" class="btn">
    Buy Now
</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1543508282-6319a3e2621f?w=500">
            <h3>Sneakers</h3>
            <p>₹1,799</p>
            <a href="buy.php?product=Sports Shoes&price=1799" class="btn">
    Buy Now
</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=500">
            <h3>Training Shoes</h3>
            <p>₹2,299</p>
            <a href="buy.php?product=Sports Shoes&price=2299" class="btn">
    Buy Now
</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?w=500">
            <h3>Fashion Shoes</h3>
            <p>₹1,699</p>
           <a href="buy.php?product=Sports Shoes&price=1699" class="btn">
    Buy Now
</a>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=500">
            <h3>Canvas Shoes</h3>
            <p>₹1,299</p>
            <a href="buy.php?product=Canvas Shoes&price=1299" class="btn">Buy Now</a>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1508609349937-5ec4ae374ebf?w=500">
            <h3>Leather Shoes</h3>
            <p>₹2,799</p>
            <a href="buy.php?product=Leather Shoes&price=2799" class="btn">Buy Now</a>
        </div>
         <div class="card">
            <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500">
            <h3>Basketball Shoes</h3>
            <p>₹2,999</p>
            <a href="buy.php?product=Basketball Shoes&price=2999" class="btn">Buy Now</a>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=500">
            <h3>Walking Shoes</h3>
            <p>₹1,399</p>
            <a href="buy.php?product=Walking Shoes&price=1399" class="btn">Buy Now</a>
        </div>


    </div>
</section>

<section id="contact">
    <h2>Contact Us</h2>

    <div class="contact-form">
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Enter Your Name">

<input type="email" name="email" placeholder="Enter Your Email">

<input type="tel" name="phone" placeholder="Enter Your Phone Number">

<textarea name="message" rows="5"></textarea>
                <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <div class="footer-content">

        <div>
            <h3>ShoeHub</h3>
            <p>Your trusted online footwear destination.</p>
        </div>

        <div>
            <h3>Quick Links</h3>
            <p>Home</p>
            <p>About</p>
            <p>Products</p>
            <p>Contact</p>
        </div>

        <div>
            <h3>Contact Info</h3>
            <p>Email: shoehub@gmail.com</p>
            <p>Phone: +91 9876543210</p>
            <p>Karaikudi, Tamil Nadu</p>
        </div>

    </div>

    <div class="copy">
        © 2026 ShoeHub. All Rights Reserved.
    </div>
</footer>

</body>
</html> 