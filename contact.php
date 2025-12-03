<?php include "src/database.php"; 
// checck for form submission
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    //get data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // insert the data into contacr_us table
    // SQL query
    $query = "INSERT INTO contact_us (name,email,subject,message,submitted_at)
    VALUES(?,?,?,?,NOW() )
    ";
    $statement = $connection -> prepare($query);
    $statement -> bind_param("ssss",$name,$email,$subject,$message);
    if( !$statement -> execute() ) {
        //there's an error
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "fragments/head.php"; ?>
<body>
    <header class="main-header">
        <button type="button" class="nav-button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <a href="/">
            <img class="logo" src="ProGearHubLogo.png">
        </a>
        <form class="search" method="get" action="/search.php">
            <input type="search" placeholder="search for a product">
            <button>
                <img src="images/search_40dp_4A3D28_FILL0_wght400_GRAD0_opsz40.png">
            </button>
        </form>
        <nav class="user-nav">
            <a href="stores.html">
                <span class="material-symbols-outlined">
                    storefront
                </span>
            </a>
            <a href="account.html">
                <span class="material-symbols-outlined">
                    person
                </span>
            </a>
            <a href="cart.html">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
            </a>
        </nav>
        <nav class="shop-nav">
            <a href="womens.html">Womens</a>
            <a href="mens.html">Mens</a>
            <a href="kids.html">Kids</a>
            <a href="brands.html">Brands</a>
            <a href="clearance.html">Clearance</a>
        </nav>
    </header>
    <!-- carousel -->
    <!-- <div class="main-carousel" data-flickity='{ "autoPlay": true, "cellAlign": "left", "contain": true }'>
        <div class="slide">
            <h2>Black Friday Sale</h2>
            <a href="#" class="slide-button">Shop Black Friday</a>
        </div>
        <div class="slide">2</div>
        <div class="slide">3</div>
        <div class="slide">4</div>
    </div> -->
    <main class="content">
        <div class="card">
            <div class="card-content">
                <form id="contact" method="post" action="/contact.php">
                    <h1>Contact Us</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="name" type="text" placeholder="Gemma Smith">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    <label for="subject">Subject</label>
                    <input required id="subject" name="subject" type="text" placeholder="inquiry">
                    <label for="message">Message</label>
                    <textarea required id="message" name="message" rows="5" cols="30" placeholder="Hello there"></textarea>
                    <button type="submit" class="form-button">Send</button>
                </form>
            </div>
        </div>
         
    </main>
    <footer class="main-footer">
        <nav class="social">
            <a href="https://facebook.com">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://instagram.com">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="https://x.com">
                <i class="fa-brands fa-square-x-twitter"></i>
            </a>
            <a href="https://linkedin.com">
                <i class="fa-brands fa-square-linkedin"></i>
            </a>
        </nav>
        <nav class="footer-nav">
            <a href="contact.html">Contact</a>
            <a href="terms.html">Terms</a>
            <a href="support.html">Support</a>
            <a href="policies.html">Policies</a>
        </nav>
    </footer>
</body>

</html>