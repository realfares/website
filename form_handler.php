<?php
// Database configuration
$host = 'localhost';
$dbname = 'tourism_website';
$username = 'root';
$password = '';

try {
    // Establish a database connection using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data (sanitize input to avoid SQL injection or XSS attacks)
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        die("All fields are required.");
    }
  
    // Check if the `contact` table exists
    $tableExistsQuery = "SHOW TABLES LIKE 'contact'";
    $tableExists = $pdo->query($tableExistsQuery)->rowCount();
    
    if ($tableExists === 0) {
        // Create the table if it doesn't exist
        $createTableQuery = "
            CREATE TABLE contact (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                message TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ";
        $pdo->exec($createTableQuery);
    }

    // Insert the form data into the `contact` table
    $sql = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);

        // Success message
        echo "Your message has been successfully submitted.";
    } catch (PDOException $e) {
        // Handle SQL errors
        die("Error: " . $e->getMessage());
    }
} else {
    // If the form was not submitted via POST
    echo "Invalid request.";
}
?>