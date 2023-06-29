<!DOCTYPE html>
<html lang='en'>
    <head>
     <meta charset="utf-8">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <title>تسجيل الطلاب </title>
     <style>

    </style>
     <script></script>
    </head>
    <body dir="rtl">
    <aside>
        <form action="php/Add&Del.php" method="POST">
        <img src="https://www.privo.com/hs-fs/hubfs/images/privo-circle-kid-5.png?width=200&name=privo-circle-kid-5.png" alt='"مشكلة فى تحميل الصورة"'><h3>لوحة المدير</h3>

            <label for="id">الرقم التسلسلى</label><br>
            <input  id='id' disabled type="text" ><br>
            <label for="name">اسم الطالب </label><br>
            <input id='name' name="student_name" placeholder="" type="text" required><br>
            <label  for="address">عنوان الطالب</label><br>
            <input id="addresss" name="address" type="text" ><br><br>
            <button name="add">اضافة طالب</button>
            <button name="del">حذف طالب</button>
        </form>
     </aside>
     <main>
     <table >
        <tr>
            <th>الرقم التسلسلى</th>
            <th>اسم الطالب</th>
            <th>عنوان الطالب</th>
        </tr>
        <?php
        require_once("php/display.php");
        display();
        ?>
     </table>
     </main>
    </body>
</html>