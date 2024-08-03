<?php include 'includes/header.php'; ?>
<section>
    <h1>Contact Me</h1>
    <form action="send_email.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
</section>
<?php include 'includes/footer.php'; ?>
