<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>View Assignments</header>

    <section class="assignment-list">
        <h2>Available Assignments</h2>
        <ul>
            <?php
            $dir = "uploads/";
            if (is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file !== "." && $file !== "..") {
                        echo "<li><a href='$dir$file' target='_blank'>$file</a></li>";
                    }
                }
            } else {
                echo "<li>No assignments uploaded yet.</li>";
            }
            ?>
        </ul>
        
        <a href="upload.html" class="btn">Upload More Assignments</a>
    </section>

</body>
</html>