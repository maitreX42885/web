<style>
        #t {color: green;}
        #f {color: red;}
</style>
<?php 
    echo "<h1>63413654 นายวีรภัทร ทองภาพ sec1 เลขที่ 24</h2>";
    echo "<hr>";

    function check($num, $ans_user, $check_ans) {
        echo "ข้อ $num คุณเลือกคำตอบ <br>";
        echo "ตัวเลือก : ".$ans_user."<br>";

        if ($ans_user == $check_ans) {
            echo "<label id='t'>ถูกต้อง</label>"."<hr>";
            return 1;
        }else {
            echo "<label id='f'>ยังไม่ถูกต้อง</label>"."<hr>";
            return 0;
        }
    }
    
    $score = 0;
    
    $score += check(1, (isset($_POST["book1"])) ? $_POST["book1"] : "Please choose some answer", "2500");
    $score += check(2, (isset($_POST["book2"])) ? $_POST["book2"] : "Please choose some answer", "2528");
    $score += check(3, (isset($_POST["book3"])) ? $_POST["book3"] : "Please choose some answer", "Ada Lovelace");
    $score += check(4, (isset($_POST["book4"])) ? $_POST["book4"] : "Please choose some answer", "4");
    $score += check(5, (isset($_POST["book5"])) ? $_POST["book5"] : "Please choose some answer", "1");
    echo "<h3>คะแนนของคุณ : $score คะแนน</h3>";
?>




