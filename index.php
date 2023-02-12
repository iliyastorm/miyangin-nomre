<table border="2">
    <?php
    if (isset($_POST['submit'])) {
        $first_name = $_POST['fn'];
        $last_name = $_POST['ln'];
        $computer = $_POST['com'];
        $science = $_POST['sci'];
        $math = $_POST['math'];
        $quran = $_POST['quran'];
        $english = $_POST['eng'];
        $sport = $_POST ['sport'];
        $persian = $_POST['per'];
        $arabic = $_POST['arabic'];
        $health = $_POST['health'];
        $geometry = $_POST['geo'];
        $average = ($computer + $science + $math + $quran + $english + $sport + $persian + $arabic + $health + $geometry) / 10;
        //نام
        echo "<tr>";
        echo "<td>";
        echo "نام";
        echo "</td>";
        echo "<td>";
        echo $first_name;
        echo "</td>";
        echo "</tr>";
        //نام خانوادگی
        echo "<tr>";
        echo "<td>";
        echo "نام خانوادگی";
        echo "</td>";
        echo "<td>";
        echo $last_name;
        echo "</td>";
        echo "</tr>";
        //نمره درس کاپیوتر
        echo "<tr>";
        echo "<td>";
        echo "کامپیوتر";
        echo "</td>";
        echo "<td>";
        if ($computer >= 0 && $computer <= 20) echo $computer;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($computer < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس علوم
        echo "<tr>";
        echo "<td>";
        echo "علوم";
        echo "</td>";
        echo "<td>";
        if ($science >= 0 && $science <= 20) echo $science;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($science < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس ریاضی
        echo "<tr>";
        echo "<td>";
        echo "ریاضی";
        echo "</td>";
        echo "<td>";
        if ($math >= 0 && $math <= 20) echo $math;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($math < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس قرآن
        echo "<tr>";
        echo "<td>";
        echo "قرآن";
        echo "</td>";
        echo "<td>";
        if ($quran >= 0 && $quran <= 20) echo $quran;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($quran < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس زبان انگلیسی
        echo "<tr>";
        echo "<td>";
        echo "زبان انگلیسی";
        echo "</td>";
        echo "<td>";
        if ($english >= 0 && $english <= 20) echo $english;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($english < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس ورزش
        echo "<tr>";
        echo "<td>";
        echo "ورزش";
        echo "</td>";
        echo "<td>";
        if ($sport >= 0 && $sport <= 20) echo $sport;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($sport < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس ادبیات فارسی
        echo "<tr>";
        echo "<td>";
        echo "ادبیات فارسی";
        echo "</td>";
        echo "<td>";
        if ($persian >= 0 && $persian <= 20) echo $persian;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($persian < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس زبان عربی
        echo "<tr>";
        echo "<td>";
        echo "زبان عربی";
        echo "</td>";
        echo "<td>";
        if ($arabic >= 0 && $arabic <= 20) echo $arabic;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($arabic < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس سلامت و بهداشت
        echo "<tr>";
        echo "<td>";
        echo "سلامت و بهداشت";
        echo "</td>";
        echo "<td>";
        if ($health >= 0 && $health <= 20) echo $health;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($health < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //نمره درس هندسه
        echo "<tr>";
        echo "<td>";
        echo "هندسه";
        echo "</td>";
        echo "<td>";
        if ($geometry >= 0 && $geometry <= 20) echo $geometry;
        else echo "خطا";
        echo "</td>";
        echo "<td>";
        if ($geometry < 12) echo "مشروط";
        else echo "قبول";
        echo "</td>";
        echo "</tr>";
        //میانگین نمرات
        echo "<tr>";
        echo "<td>";
        echo "میانگین نمرات";
        echo "</td>";
        echo "<td>";
        if ($average >= 0 && $average <= 20) echo $average;
        else echo "خطا";
        echo "</td>";
        echo "</tr>";

    }
    ?>
</table>
<form method="post">
    <label>.لطفا مشخصات و نمرات خود را وارد کنید</label><br>
    <label>:نام</label><br>
    <input type="text" name="fn"><br>
    <label>:نام خانوادگی</label><br>
    <input type="text" name="ln"><br>
    <label>:نمره درس کامپیوتر</label><br>
    <input type="number" name="com"><br>
    <label>:نمره درس علوم</label><br>
    <input type="number" name="sci"><br>
    <label>:نمره درس ریاضی</label><br>
    <input type="number" name="math"><br>
    <label>:نمره درس قران</label><br>
    <input type="number" name="quran"><br>
    <label>:نمره درس زبان انگلیسی</label><br>
    <input type="number" name="eng"><br>
    <label>:نمره درس ورزش</label><br>
    <input type="number" name="sport"><br>
    <label>:نمره درس ادبیات فارسی</label><br>
    <input type="number" name="per"><br>
    <label>:نمره درس زبان عربی</label><br>
    <input type="number" name="arabic"><br>
    <label>:نمره درس سلامت و بهداشت</label><br>
    <input type="number" name="health"><br>
    <label>:نمره درس هندسه</label><br>
    <input type="number" name="geo"><br>
    <input type="submit" name="submit" value="run">
</form>
