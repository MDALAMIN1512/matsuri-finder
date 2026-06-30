<?php
// Database connection configuration
$host = "localhost";
$user = "root";
$password = "";
$database = "matsuri_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetching all hotel records from database
$query = "SELECT * FROM hotels ORDER BY id ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Travel - Hotel Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="red-banner">
        <p>Japan Travel and Culture Guide</p>
    </div>

    <div class="nav-tabs">
        <a href="index.php" class="tab-item">Matsuri Finder</a>
        <a href="spots.php" class="tab-item">Sightseeing Spots</a>
        <a href="holidays.php" class="tab-item">Public Holidays</a>
        <a href="hotels.php" class="tab-item active">Hotel Booking</a>
    </div>

    <div class="hotel-page-container">
        <div class="hotel-info-box">
            <p>Explore and book the best hotels across Japan's 47 prefectures. Find your perfect stay from over 120 premium listings.</p>
        </div>

        <div class="unique-hotel-grid">
            <?php
            if (mysqli_num_rows($result) > 0) {
                $counter = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    
                    // ডাটাবেজ থেকে সরাসরি লাইভ ইমেজ লিঙ্ক নেওয়া হচ্ছে
                    $hotel_img = htmlspecialchars($row['image_url']);
                    ?>
                    <div class="unique-hotel-card">
                        <div class="unique-hotel-image" style="background-image: url('<?php echo $hotel_img; ?>');">
                            <span class="unique-region-badge"><?php echo htmlspecialchars($row['prefecture_name']); ?> Region</span>
                        </div>
                        
                        <div class="unique-hotel-content">
                            <h3><?php echo $counter . ". " . htmlspecialchars($row['hotel_name']); ?></h3>
                            <p class="unique-rating">⭐ <?php echo htmlspecialchars($row['rating']); ?> / 5.0 Rating</p>
                            <p class="unique-price">Price: <strong>¥<?php echo number_format($row['price_per_night']); ?></strong> / Night</p>
                            <button class="unique-book-btn">Book Stay Now</button>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
            } else {
                echo "<p class='unique-no-data'>No hotel records found in database.</p>";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>

</body>
</html>