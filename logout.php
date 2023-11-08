<?php
session_start();

// Xóa tất cả các biến phiên hiện tại
$_SESSION = array();

// Nếu muốn xóa toàn bộ phiên đăng nhập, hãy xóa cả cookie phiên.
// Lưu ý rằng điều này sẽ đánh mất phiên hiện tại và có thể ảnh hưởng đến người dùng khác
// nếu họ cũng đăng nhập vào trang web của bạn.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hủy tất cả phiên
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính của bạn
header("Location: start.php");
exit();
?>
