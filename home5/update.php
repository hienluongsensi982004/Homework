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
    
    // Chuẩn bị câu lệnh SQL với placeholder
    $sql = "UPDATE Hien_Luong SET id = :stt WHERE full_name = :name";
    $stmt = $pdo->prepare($sql);
    
    // Dữ liệu cần cập nhật
    $data = [
        ':id' => '01',
        ':full_name' => Luong Hien,
    ];
    
    // Thực thi câu lệnh
    $stmt->execute($data);
    
    echo "Cập nhật dữ liệu thành công!";
    
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
