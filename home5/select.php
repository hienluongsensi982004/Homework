<?php
try {
    // Tạo kết nối PDO
    $dsn = "mysql:host=localhost;dbname=DB;charset=utf8mb4";
    $username = "root";
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Chuẩn bị câu lệnh SQL
    $sql = "SELECT id, full_names FROM Hien_Luong";
    $stmt = $pdo->prepare($sql);
    
    // Thực thi câu lệnh
    $stmt->execute();
    
    // Lấy tất cả kết quả
    $results = $stmt->fetchAll();
    
    if ($results) {
        foreach ($results as $row) {
            echo "Column1: " . htmlspecialchars($row['column1']) . " - Column2: " . htmlspecialchars($row['column2']) . "<br>";
        }
    } else {
        echo "Không có dữ liệu nào được tìm thấy.";
    }
    
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
