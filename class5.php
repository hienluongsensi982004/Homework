<!-- CREATE TABLE IF NOT EXISTS `Hien_Luong` (

`id` int(11) NOT NULL AUTO_INCREMENT,
`full_names` varchar(255) NOT NULL,
`gender` varchar(6) NOT NULL,
`number` varchar(75) NOT NULL,
`email` varchar(255) NOT NULL,
`hometown` varchar(255) NOT NULL,
PRIMARY KEY (`id`)

) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 5 ;

INSERT INTO `Hien_Luong` (
  `id`,
  `full_names`,
  `gender`,
  `contact_no`,
  `email`,
  `hometown`)

VALUES
(1, 'Hien Luong', 'Female', '0981827526', 'hienluong09082004@gmail.com','Thai Binh'),
(2, 'Ly', 'Female', '123', 'anthena@olympus.mt.co','Thai Binh'),
(3, 'Chi', 'Female', '783', 'jupiter@planet.pt.co', 'Hung Yen'),
(4, 'Lnn', 'Female', '987', 'venu @planet.pt.co', 'Viet Tri'); -->

<?php
// Kết nối đến MySQL
$conn = new mysqli("localhost", "root", " ", "DB");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// SQL để thêm dữ liệu
$sql = "INSERT INTO table_name (column1, column2) VALUES ('value1', 'value2')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// SQL để cập nhật dữ liệu
$sql = "UPDATE table_name SET column1='new_value1' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// SQL để xóa dữ liệu
$sql = "DELETE FROM table_name WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Xóa dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// SQL để hiển thị dữ liệu
$sql = "SELECT column1, column2 FROM table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while($row = $result->fetch_assoc()) {
        echo "Column1: " . $row["column1"]. " - Column2: " . $row["column2"]. "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

$conn->close();
?>
