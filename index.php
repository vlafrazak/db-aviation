
<?php
    include 'header.php';
?>

<h1>Test</h1>

<?php
    include 'models/connect.php';
    connect();
    echo "<p>Hello World</p>";
    disconnect();
?>

<?php
    include 'footer.php';
?>

