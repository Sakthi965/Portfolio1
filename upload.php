<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["subject"];
    $target_dir = "uploads/";

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file = $_FILES["file"];
    $target_file = $target_dir . basename($file["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($fileType != "pdf") {
        echo "<script>alert('Only PDF files are allowed!'); window.history.back();</script>";
        exit();
    }

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo "<script>alert('Assignment uploaded successfully!'); window.location.href='view_assignments.php';</script>";
    } else {
        echo "<script>alert('Error uploading file.'); window.history.back();</script>";
    }
}
?>