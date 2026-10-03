<?php
$name = "رحاب هيثم محمد";
$major = "دبلوم نظم معلومات";
$bio = "طالبة نظم معلومات - مهتمة ببرمجة الويب PHP";
$skills = ["PHP", "MySQL", "HTML", "CSS"];
if(isset($_POST['c_name'])){ $ok="شكرا ".$_POST['c_name']." تم الاستلام!"; }
?>
<html dir=rtl><head><meta charset=UTF-8><meta name=viewport content="width=device-width"><title>بروفايل رحاب</title><style>
body{font-family:Tahoma;background:#f0f7ff;margin:0}
.box{max-width:700px;margin:15px auto;background:#fff;padding:15px;border-radius:15px}
.avatar{width:90px;height:90px;border-radius:50%;background:#007bff;color:#fff;display:flex;align-items:center;justify-content:center;font-size:36px;margin:auto}
.skill{background:#007bff;color:#fff;padding:4px 10px;border-radius:15px;margin:2px;display:inline-block}
.card{background:#f5f8ff;padding:10px;border-right:3px solid #007bff;margin:8px 0;border-radius:8px}
input,textarea{width:100%;padding:10px;margin:5px 0;border:1px solid #ddd;border-radius:8px;box-sizing:border-box}
button{width:100%;padding:10px;background:#007bff;color:#fff;border:0;border-radius:8px}
</style></head><body><div class=box>
<center><div class=avatar>R</div><h2><?php echo $name; ?></h2><p style=color:#007bff><?php echo $major; ?></p><p><?php echo $bio; ?></p></center>
<h3>مهاراتي</h3><?php foreach($skills as $s) echo "<span class=skill>$s</span>"; ?>
<h3>مشروعي</h3><div class=card><b>موقع بروفايل PHP</b><p>مشروع اعمال السنة</p></div>
<h3>تواصل</h3><?php if(isset($ok)) echo "<p style=background:#d4edda;padding:8px;border-radius:8px>$ok</p>"; ?>
<form method=POST><input name=c_name placeholder=اسمك required><input name=c_email type=email placeholder=ايميلك required><textarea name=c_msg placeholder=رسالتك></textarea><button>ارسال</button></form>
<p style=text-align:center;color:#999;font-size:11px>اعداد: <?php echo $name." - ".date("Y"); ?></p>
</div></body></html>