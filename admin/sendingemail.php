<?php
$to_email = "nghlong011@gmail.com";
$subject = "Kích hoạt tài khoản";
$body = "Chúc mừng bạn đã đăng ký thành công";
$body .= "Vui lòng ấn vào link bên dưới để kích hoạt tài khoản";
$body .= " <a href=''></a>";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email đã được gửi";
} else {
    echo "Đã xảy ra lỗi";
}
?>