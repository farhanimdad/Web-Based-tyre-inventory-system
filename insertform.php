<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Tyre</title>
    <link rel="stylesheet" href="./Inventory.css">
</head>
<body>
    <div class="contain">
    <img src="logo.jpg" alt="MRF logo" width="100%"></body>
        <nav>
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About Us</a></li>
                <li><a href="./location.html">Location</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./Inventory.html">Inventory</a></li>
            </ul>
        </nav>
        <div class="container">
            <h1>Add New Tyre</h1>
            <form method="POST" action="insert.php">
                <input type="number" name="id" placeholder="id" required>
                <input type="text" name="tyresize" placeholder="Tyre Size" required>
                <input type="text" name="tyrenumber" placeholder="Tyre Number" required>
                <input type="number" step="0.01" name="price" placeholder="Price" required>
                <input type="number" name="quantity" placeholder="Quantity" required>
                <button type="submit">Add Tyre</button>
            </form>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h4>Stay Connected</h4>
                    <p>Join over 10,500 people who receive bi-weekly updates.</p>
                    <input type="email" placeholder="Email Address">
                    <button>Sign Up</button>
                </div>
                <div class="footer-section">
                    <h4>Committed to Service</h4>
                    <p>We strive to educate and collaborate with like-minded businesses to make a difference environmentally and socially. Let’s collaborate!</p>
                </div>
                <div class="footer-section">
                    <h4>Navigate</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="inventory.html">Inventory</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Address: NH-33, SAHARA CITY, Mango, Jamshedpur, Jharkhand 832110</p>
                    <p>Email: <a href="mailto:farhan2003imdad@gmail.com">farhan2003imdad@gmail.com</a></p>
                    <p>Phone: +91-9905157637</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SANGUM TYRES | All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>