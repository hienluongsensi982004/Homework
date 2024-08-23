<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework_2108</title>
</head>
<body>
<style> 
    h1 {
        text-align: center;
        color: Red;
    }
</style>
<?php
echo '<h1>Xin chao! Hien Luong lam bai ve nha buoi 2 ne ^^</h1>';
$hluong='     Xin chao! Hien Luong lam bai ve nha buoi 2 ne ^^     ';
$hienluong='Nguyen Thi Hien Luong';

// 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "1. Độ dài : ".strlen($hluong)."<br>";
// 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "2. Số từ : ".str_word_count($hluong)."<br>";
// 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "3. Đảo ngược: ".strrev($hluong)."<br>";
// 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo "4. Tìm kiếm Hiền Lương ở vị trí kí tự: ".strpos($hluong, "Hien Luong")."<br>";
// 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo "5. Thay thế Hiền Lương thành Hiền Lương vui vẻ: ".str_replace ("Hien Luong", "Hien Luong vuive",$hluong)."<br>";
// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo "6. So sánh: ".strcmp($hluong,$hienluong)."<br>";
// 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo "7. Hiền Lương chữ in hoa: ".strtoupper($hienluong)."<br>";
// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo "8. Hiền Lương chữ thường: ".strtolower($hienluong)."<br>";
// 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "9. Biến đổi chuỗi: ".ucwords($hluong)."<br>";
// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo "10. Loại bỏ khoảng trắng ở đầu và cuối: ".trim($hluong)."<br>";
// 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo "11. Loại bỏ ký tự đầu tiên: ".ltrim($hienluong,'N')."<br>";
// 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo "12. Loại bỏ ký tự cuối cùng: ".rtrim($hienluong,'g')."<br>";
// 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$y= explode(' ', $hienluong);
echo "13. Tách một chuỗi thành một mảng: ";
print_r($y);
echo "<br>";
// 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$array = array('Nguyen', 'Thi', 'Hien', 'Luong', 'K58SN2');
$c = implode(" ", $array);
echo "14. Nối mảng thành một chuỗi: ".$c."<br>";
// 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo "15. Thêm một chuỗi: ".str_pad($hienluong, 27, "Hello!", STR_PAD_LEFT) ."<br>";
// 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
echo "16. Kiểm tra xem có chữ L hay không? ".strrchr($hienluong,'L') ."<br>";
// 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
$luong= 'Luong';
echo "17. Kiểm tra xem có chứa L hay không? ".strstr($hluong, $luong ) ."<br>";
// 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
echo "18. Thay thế số thành chữ: ".preg_replace("/[0-9]+/", "hai", $hluong) ."<br>";
// 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
echo "19. 20 có phải số nguyên không? ";
$nthl= 20;
if (is_int($nthl)) {
    echo 'true';
}else{
    echo 'false';
}
echo "<br>";
// 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
echo "20. hienluong@gmail.com có phải là một email hợp lệ hay không? ";
$email = "hienluong@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Địa chỉ email hợp lệ!";
} else {
    echo "Địa chỉ email không hợp lệ!";
}
?>
</body>
</html>