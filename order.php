<<<<<<< HEAD
<?php include "src/database.php"; ?>
<?php include "fragments/head.php"; ?>


<?php
//Check for form submission


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get data from server
=======
<?php include "src/database.php"; 
// check for form submission
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // get data from form
>>>>>>> befc2cc6e41db99db4bfd3fb83d602718cb47f64
    $name = $_POST['customer_name'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
<<<<<<< HEAD
    //$total_price = 0; //($quantity * $price);
    //insert data into order table


    //echo $total_price;


    $query = "INSERT INTO orders(customer_name,email,product_name,quantity,price,order_date)
            VALUES(?,?,?,?,?,NOW())
    ";
    $statement = $connection -> prepare($query);
    $statement -> bind_param("sssid",$name,$email,$product_name,$quantity,$price);
   
    if(!$statement -> execute()) {
        // there is an error
        //echo "FAILED"
=======
    // $total_price = $quantity * $price;
    // insert the data into order table
    // SQL query
    $query = "INSERT INTO orders (customer_name,email,product_name,quantity,price,order_date)
            VALUES(?,?,?,?,?,NOW() )
    ";
    $statement = $connection -> prepare($query);
    $statement -> bind_param("sssid",$name,$email,$product_name,$quantity,$price);
    if( !$statement -> execute() ) {
        // there's an error
        echo $connection -> error;
>>>>>>> befc2cc6e41db99db4bfd3fb83d602718cb47f64
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD

<body>
    <?php include "fragments/pageheader.php"; ?>


    <!--  M A I N  -->
    <main class="content">
        <div class="card">
            <div class="card-content">
                <form id="contact" action="/order.php" method="post">
                    <h1>Order</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="customer_name" type="text" placeholder="Simon Smith">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="simon_smith@email.com">
                    <label for="product_name">Product Name</label>
                    <input id="product_name" name="product_name" type="text" placeholder="product name">
                    <label for="quantity">Amount</label>
                    <input required id="quantity" name="quantity" type="number" min="1" value="1">
                    <label for="price">Price</label>
                    <input required id = "price" name="price" type="number" min="0.99" step="0.5" value="1.99">
                    <button  type="submit" class="form-button">SUBMIT ORDER</button>


                </form>
            </div>


        </div>






       
    </main>
    <footer>
        <nav class="social">
            <a href="https://facebook.com">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://x.com">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="https://instagramm.com">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </nav>


        <nav class="footer-nav">
            <a href="contact.html">Contact</a>
            <a href="terms.html">Terms</a>
            <a href="terms.html">Support</a>
            <a href="policies.html">Policies</a>
        </nav>
    </footer>






</body>




</html>
=======
<?php include "fragments/head.php"; ?>

<body>
    <?php include "fragments/pageheader.php"; ?>
    
    <main class="content">
        <div class="card">
            <div class="card-content">
                <form id="contact" method="post" action="/order.php">
                    <h1>Order Form</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="customer_name" type="text" placeholder="Gemma Smith">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    <label for="product_name">Product Name</label>
                    <input required id="product_name" name="product_name" type="text" placeholder="inquiry">
                    <label for="quantity">Quantity</label>
                    <input required id="quantity" name="quantity" type="number" min="1" value="1">
                    <label for="price">Price</label>
                    <input required id="price" name="price" type="number" min="0.99" step="0.5" value="1.99">
                    <button type="submit" class="form-button">Submit Order</button>
                </form>
            </div>
        </div>
         
    </main>
    <?php include "fragments/footer.php"; ?>
</body>

</html>
>>>>>>> befc2cc6e41db99db4bfd3fb83d602718cb47f64
