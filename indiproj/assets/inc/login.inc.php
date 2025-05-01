<div id="loginPopup" class="login-popup">
    <div class="login-popup-content">
        <span class="close" onclick="closeLoginPopup()">&times;</span>
        <h2>Login</h2>
        <form id="loginForm" method="POST" onsubmit="return validateLoginForm();">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <button type="submit">Login</button>
        </form>
        <?php
            include "../../../" . $PATH . "connection.db.php";

            // Handle login form submission
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Fetch hashed password from the database
                $stmt = $mysqli->prepare("SELECT password FROM Login WHERE username = ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->bind_result($hashedPassword);
                $stmt->fetch();
                $stmt->close();

                if ($hashedPassword && hash('sha256', $password) === $hashedPassword) {
                    echo "Login successful!";
                    $stmt2 = $mysqli->prepare("UPDATE Login SET `lastLog` = NOW() WHERE `username` = ?");
                    $stmt2->bind_param("s", $username);
                    $stmt2->execute();
                    $stmt2->close();
                    $_SESSION['username'] = $username; // Store username in session
                } else {
                    echo "Invalid username or password.";
                }
            }
        ?>
        <br>
        <hr>
        <br> 
        <h2>Create Account</h2>
        <form id="createAccountForm" method="POST" onsubmit="return validateCreateAccountForm();">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername">
            <br>
            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword">
            <br>
            <button type="submit">Create Account</button>
        </form>
        <?php
            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['newUsername']) && isset($_POST['newPassword'])) {
                $newUsername = $_POST['newUsername'];
                $newPassword = $_POST['newPassword'];

                // Hash the password
                $hashedPassword = hash('sha256', $newPassword);

                // Insert into database
                $stmt = $mysqli->prepare("INSERT INTO Login (username, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $newUsername, $hashedPassword);

                if ($stmt->execute()) {
                    echo "Account created successfully!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }

            $mysqli->close();
        ?>
    </div>
</div>
