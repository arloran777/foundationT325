<?php include "src/database.php"; 
// check for form submission
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // get data from form
    $name = $_POST['customer_name'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
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
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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