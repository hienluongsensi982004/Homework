<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiền Lương _ Lesson 3</title>
</head>
<body>
<?php
    $a=5;
    $b=6;
    echo "a=".$a."<br>";
    echo "b=".$b."<br>";
    echo "a+b=".$a+$b."<br>";
    echo "a-b=".$a-$b."<br>";
    echo "axb=".$a*$b."<br>";
    echo "a:b=".$a/$b."<br>";
    echo "a%b=".$a%$b."<br>";
    echo $a==$b;
    if ($a==$b){
        echo "Chắc tao tin";
    } else
    echo "5!= 6 là câu trả lời EXCELLENT! <br>";
// Vòng lặp FOR
    for ($x=0; $x<=10; $x++) {
        echo "The number is: $x <br>";
    }

// Vòng lặp foreach
$F6 = array ("Hluong, ", "Chi, ", "Mp, ", "Nma, ", "Ly, ", "Lnn, ");
foreach ($F6 as $print) {
echo "F6 có: $print";
echo "<br>";
}

// Vòng lặp WHILE
$x = 1;
while($x <= 5) {
echo "The number is: $x <br>"; 
     $x++; //bắt buộc phải có trong vòng lặp while

}
// Vòng lặp break và continue

for ($q =1; $q<10; $q++){
    if($q==3){
        break;
    }
}
echo "Vòng lặp break:".$q;

echo "<br>";

// Các hàm

function canbachai(int $x) {
    return sqrt($x);
}
echo "Câu 1: Căn bậc hai của 16 là: " . canbachai(16);

echo "<br>";

function chuvihcn ($chieudai, $chieurong) {
    if ($chieudai > 0 && $chieurong > 0) {
        $chuvi = 2 * ($chieudai + $chieurong);
        return $chuvi;
    } else {
        return "Chiều dài và chiều rộng phải lớn hơn 0.";
    }
}
$chieudai=5;
$chieurong=2;
echo "Câu 2: Chu vi hình chữ nhật là: " . chuvihcn($chieudai, $chieurong);


echo "<br>";


function giaiptbac1($k, $l) {
    // Kiểm tra nếu a bằng 0
    if ($k == 0) {
        if ($l == 0) {
            return "Phương trình có vô số nghiệm.";
        } else {
            return "Phương trình vô nghiệm.";
        }
    } else {
        // Tính nghiệm của phương trình
        $nghiem = -$l / $k;
        return "Câu 3: Phương trình có nghiệm x = " . $nghiem;
    }
}
$k = 2;
$l = -4;
echo giaiptbac1($k, $l);

echo "<br>";

// Mảng kết hợp mine

$student = array(
    "1" => "Nguyen Thi Hien Luong",
    "2" => "Tran Thi Ly",
    "3" => "Le Mai Phuong",
    "4" => "Nguyen Mai Anh",
    "5" => "Nguyen Linh Chi",
    "6" => "Nguyen Ngoc Linh",
);
$stt = 3;
foreach ($student as $stt => $student[$stt]) {
    echo "Mời bạn có STT:" . $stt . " lên bảng làm câu 2:  " . $student[$stt];
    echo "<br>";
}


// Tạo mảng kết hợp - Thầy

    $list_sinh_vien = array(
        "1" => "Bạch Bùi Nguyệt Anh",
        "2" => "Đàm Phương Anh",
        "3" => "Nguyễn Mai Anh",
        "4" => "Phạm Thị Ngọc Ánh",
        "5" => "Đào Linh Chi",
        "6" => "Đinh Thị Ngọc Diễm",
        "7" => "Trần Ngọc Dũng",
        "8" => "Quế Thị Thùy Dương",
        "9" => "Tạ Văn Hải",
        "10" => "Phạm Thị Hằng",
        "11" => "Trần Thị Ngọc Hoa",
        "12" => "Nguyễn Thị Thu Hoài",
        "13" => "Trần Thị Hồng",
        "14" => "Lê Ngọc Huyền",
        "15" => "Nguyễn Đình Hưng",
        "16" => "Phạm Quốc Hưng",
        "17" => "Nguyễn Thị Hương",
        "18" => "Nguyễn Bá Khang",
        "19" => "Đỗ Thành Khoa",
        "20" => "Nguyễn Diệu Linh",
        "21" => "Nguyễn Thị Ngọc Linh",
        "22" => "Nguyễn Thị Hiền Lương",
        "23" => "Trần Bình Minh",
        "24" => "Nguyễn Thanh Nga",
        "25" => "Cao Trọng Nghĩa",
        "26" => "Đinh Thị Nhạn",
        "27" => "Nguyễn Linh Chi",
        "28" => "Trần Thị Ly"
    );

    // echo $list_sinh_vien['23']."<br>";

    function tim_sinh_vien_bang_STT(int $stt, array $student_list)
    {
        foreach ($student_list as $key => $value) {
            if ($stt == $key) {
                return $value;
            }
        }
    }

    $stt = rand(1, 28);
    echo '<div class="alert alert-success" role="alert"><b>';
    echo "Mời bạn may mắn có stt " . $stt . " tên là: " . tim_sinh_vien_bang_STT($stt, $list_sinh_vien);
    echo '</b></div>';

// Tạo mảng kết hợp - Hưng
$danhSachHocSinh = array(
    "1" => "Nguyễn Đình Hưng",
    "2" => "Trần Văn Hùng",
    "3" => "Lê Văn Luyện",
    "4" => "Phan Bá Vành"
);
$sttRandom = array_rand($danhSachHocSinh);
$tenTuongUng = $danhSachHocSinh[$sttRandom];
echo "Mời bạn có STT \"$sttRandom\" - \"$tenTuongUng\" lên bảng làm bài tập.";

?>
</body>
</html>