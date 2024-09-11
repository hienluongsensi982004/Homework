<?php
try {
    // Tạo kết nối PDO
    $dsn = "mysql:host=localhost;dbname=DB;charset=utf8mb4";
    $username = "root";
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Bật chế độ ngoại lệ
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mặc định fetch kiểu mảng kết hợp
    ];
    
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Chuẩn bị câu lệnh SQL với placeholder
    $sql = "INSERT INTO Hien_Luong (  `id`, `full_names`, `gender`, `contact_no`, `email`,`hometown`)) 
    VALUES ('Lnn', 'Female', '987', 'venu @planet.pt.co', 'Viet Tri')";
    $stmt = $pdo->prepare($sql);
    
    // Dữ liệu cần thêm
    $data = [
        ':value1' => 'Giá trị1',
        ':value2' => 'Giá trị2',
    ];
    
    // Thực thi câu lệnh
    $stmt->execute($data);
    
    echo "Thêm dữ liệu thành công!";
    
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
