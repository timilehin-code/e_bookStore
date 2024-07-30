<title>Contact us</title>
<?php
include '../includes/header.php';
// include '';
?>

<section class="get-in-touch">
    <h1 class="title">Get in touch with us</h1>
    <form action="../processors/contact.php" class="contact-form row" method="POST">
        <div class="form-field col-lg-6">
            <input id="form_name" name="form_name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Name</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="email" name="form_email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="subject" name="form_subject" class="input-text js-input" type="text" required>
            <label class="label" for="company">Subject</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="phone" name="form_phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">Contact Number</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" name="form_message" type="text" required>
            <label class="label" for="message">Message</label>
        </div>
        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>
<?php
include '../includes/footer.php';

?>