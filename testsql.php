<?php
// Kết nối tới cơ sở dữ liệu
$mysqli = new mysqli("localhost", "root", "", "dms");

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Viết truy vấn SQL
$id = 1; // Ví dụ: lấy thông tin từ dòng có id = 1
$sql = "SELECT Content FROM facility_problem WHERE id = $id";

// Thực hiện truy vấn
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Lấy dữ liệu
    $row = $result->fetch_assoc();
    echo "Giá trị của trường: " . $row['Content'];
} else {
    echo "Không tìm thấy dữ liệu.";
}

// Đóng kết nối
$mysqli->close();
?>