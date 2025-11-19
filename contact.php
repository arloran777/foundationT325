<!DOCTYPE html>
<html lang="en">

<?php include "fragments/head.php"; ?>

<body>
    <?php include "fragments/pageheader.php"; ?>
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
                <form id="contact" method="post" action="/contact">
                    <h1>Contact Us</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="name" type="text" placeholder="Gemma Smith">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    <label for="message">Message</label>
                    <textarea required id="message" name="message" rows="5" cols="30" placeholder="Hello there"></textarea>
                    <button type="submit" class="form-button">Send</button>
                </form>
            </div>
        </div>
         
    </main>
    <?php include "fragments/footer.php"; ?>
</body>

</html>