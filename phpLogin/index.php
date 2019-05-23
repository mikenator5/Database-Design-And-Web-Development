<?php
    session_start();
    require "header.php";
?>

    <main>
      <?php
        if (isset($_SESSION['userId'])) { // Test if user is logged in
            echo '<p>You are logged in!</p>';
        } else {
            echo '<p>You are logged out!</p>';
        }
      ?>
    
      <br>
      <pre>For testing purposes use this information:
        <ul><li>Email: tester@gmail.com</li>
            <li>Password: tester</li>
        </ul>
      </pre>
    </main>

<?php
    require "footer.php";
?>