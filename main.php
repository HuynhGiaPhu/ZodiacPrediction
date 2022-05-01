<?php
    $day = "";
    $mon = "";

    $image = "";
    $name = "";
    $time = "";
    
    if (isset($_POST['day']) && isset($_POST['month'])) {
        $day = $_POST['day'];
        $mon = $_POST['month'];
    }
    switch ($mon) {
        case 1:
            if ($day >= 20) {
                $image = 'aquarius';
                $name = 'Bảo Bình';
                $time = '20/01 - 19/02';
            }
            else {
                $image = 'capricorn';
                $name = 'Ma Kết';
                $time = '23/12 - 19/01';
            }
            break;
        case 2:
            if ($day <= 18) {
                $image = 'aquarius';
                $name = 'Bảo Bình';
                $time = '20/01 - 19/02';
            }
            else {
                $image = 'pisces';
                $name = 'Song Ngư';
                $time = '19/02 - 20/03';
            }
            break;
        case 3:
            if ($day <= 20) {
                $image = 'pisces';
                $name = 'Song Ngư';
                $time = '19/02 - 20/03';
            }
            else {
                $image = 'aries';
                $name = 'Bạch Dương';
                $time = '21/03 - 19/04';
            }
            break;
        case 4:
            if ($day <= 19) {
                $image = 'aries';
                $name = 'Bạch Dương';
                $time = '21/03 - 19/04';
            }
            else {
                $image = 'taurus';
                $name = 'Kim Ngưu';
                $time = '20/04 - 20/05';
            }
            break;
        case 5:
            if ($day <= 20) {
                $image = 'taurus';
                $name = 'Kim Ngưu';
                $time = '20/04 - 20/05';
            }
            else {
                $image = 'gemini';
                $name = 'Song Tử';
                $time = '21/05 - 21/06';
            }
            break;
        case 6:
            if ($day <= 20) {
                $image = 'gemini';
                $name = 'Song Tử';
                $time = '21/05 - 21/06';
            }
            else {
                $image = 'cancer';
                $name = 'Cự Giải';
                $time = '22/06 - 22/07';
            }
            break;
        case 7:
            if ($day <= 22) {
                $image = 'cancer';
                $name = 'Cự Giải';
                $time = '22/06 - 22/07';
            }
            else {
                $image = 'leo';
                $name = 'Sư Tử';
                $time = '23/07 - 22/08';
            }
            break;
        case 8:
            if ($day <= 22) {
                $image = 'leo';
                $name = 'Sư Tử';
                $time = '23/07 - 22/08';
            }
            else {
                $image = 'virgo';
                $name = 'Xử Nữ';
                $time = '23/08 - 22/09';
            }
            break;
        case 9:
            if ($day <= 22) {
                $image = 'virgo';
                $name = 'Xử Nữ';
                $time = '23/08 - 22/09';
            }
            else {
                $image = 'libra';
                $name = 'Thiên Bình';
                $time = '23/09 - 22/10';
            }
            break;
        case 10:
            if ($day <= 22) {
                $image = 'libra';
                $name = 'Thiên Bình';
                $time = '23/09 - 22/10';
            }
            else {
                $image = 'scorpio';
                $name = 'Thiên Yết';
                $time = '23/10 - 22/11';
            }
            break;
        case 11:
            if ($day <= 22) {
                $image = 'scorpio';
                $name = 'Thiên Yết';
                $time = '23/10 - 22/11';
            }
            else {
                $image = 'sagittarius';
                $name = 'Nhân Mã';
                $time = '23/11 - 21/12';
            }
            break;
        case 12:
            if ($day <= 21) {
                $image = 'sagittarius';
                $name = 'Nhân Mã';
                $time = '23/11 - 21/12';
            }
            else {
                $image = 'capricorn';
                $name = 'Ma Kết';
                $time = '23/12 - 19/01';
            }
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="style.css" media="screen">
</head>
<body>
    <div class="content">
        <form action="#" method="post" name="main-form">
            <img src="zodiac-circle-with-astrology-symbols-icon-vector-32432419.jpg" alt="zodiac" width="40%" height="40%" style="margin-top:20px;" class="title-image">
            <div class="title">
                Bạn thuộc cung hoàng đạo nào ?
            </div>
            <div class="birthday-box">
                <div class="born-day">
                    <div class="born-day-title" style="margin-right: 17px;">
                        Ngày sinh
                    </div>
                    <input type="number" name="day" class="born-day-input" min="1" max="31" value="<?php echo $day?>">
                </div>
                <div class="born-month">
                    <div class="born-month-title">  
                        Tháng sinh
                    </div>
                    <input type="number" name="month" class="born-month-input" min="1" max="12" value="<?php echo $mon?>">
                </div>
            </div>
            <div class="get">
                <input type="submit" value="Lấy cung hoàng đạo" id="get-button" style="padding: 8px;margin-top: 30px;">
            </div>
        </form>
        <?php
            $result = '<div class="result" style="flex-direction: column; align-items: center; margin-top: 10px;">
                           <img src="zodiac_image/'.$image.'.jpg" alt="'.$image.'" class="result-image" width="30%" height="30%">
                           <p>'.$name.' <span>('.ucfirst($image).' '.$time.')</span></p>
                      </div>';
            if ($mon != "" && $day != "") echo $result;
        ?>
    </div>
</body>
</html>

