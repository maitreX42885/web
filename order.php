<?php 

    $score=0;

    echo "คุณ".$_POST["name"]."<br>";
    echo "Email".$_POST["email"]."<br>";

    if (isset($_POST["book1"]) and isset($_POST["book2"]) ) {
        echo "ข้อ 1 คุณเลือกคำตอบ <br>";
        echo $_POST["book1"]."<br>";

        if ($_POST["book1"]=="2500") {
            echo "ถูกต้อง"."<br>";
            $score++;
        }else {
            echo "ยังไม่ถูกต้อง"."<br>";
        }

        echo "ข้อ 2 คุณเลือกคำตอบ <br>";
        echo $_POST["book2"]."<br>";

        if ($_POST["book2"]=="2516") {
            echo "ถูกต้อง"."<br>";
            $score++;
        }else {
            echo "ยังไม่ถูกต้อง"."<br>";
        }

    }else {
        echo '<h2>Please choose all answer </h2><br>';
    }
    echo "คะแนนที่ได้"."$score";
?>