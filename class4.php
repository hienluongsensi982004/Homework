<?php
// Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.

$namhientai = date("2024");
if ($namhientai % 2 == 0) {
    echo "<strong>Câu 3. Năm hiện tại: </strong> $namhientai là năm chẵn.";
} else {
    echo "<strong>Câu 3. Năm hiện tại: </strong> $namhientai là năm lẻ.";
}
echo "<br>";

// Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo "<strong>Câu 4. Các số từ 1 đến 100 là: </strong> ";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
echo "<br>";

// Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
echo "<strong>Câu 5. Dãy số từ 1 đến 100: </strong>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<strong>$i</strong> "; 
    } else {
        echo "$i ";
    }
}
echo "<br>";

// Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
// $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
echo "<strong>Câu 6. Các năm đó là: </strong>";
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
foreach ($nam as $namla) {
    echo $namla . " ";
}
?>
