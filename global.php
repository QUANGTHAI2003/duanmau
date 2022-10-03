<?php
    session_start();

    // Định nghĩa các url cần thiết được sử dụng
    $ROOT_URL = '/duanmau';
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL = "$ROOT_URL/site";
    $IMAGES_URL = "$CONTENT_URL/images";
    $IMAGES_URL_USER = "$ROOT_URL/upload/users/";
    $UPLOAD_URL_PRO = "../../upload/product/";
    $UPLOAD_URL_USER = "../../upload/users/";
    $SL_PER_PAGE = 4;

    // ĐỊnh nghĩa đường dẫn chứa ảnh sử dụng trong upload
    $IMAGES_DIR = $_SERVER['DOCUMENT_ROOT'] . "ROOT_URL/content/images";

    // 2 biến toàn cục cần thiết để chia sẽ giữa controller và view
    $VIEW_NAME = 'index.php';
    $MESSAGE = "";

    /*
        * Kiểm tra sự tồn tại cảu một tham số trong request
        * @param string $fieldname là tên tham số cần kiểm tra
        * @return boolean true nếu tồn tại, false nếu không tồn tại
    */
    

    function exist_param($fieldname) {
        return array_key_exists($fieldname, $_REQUEST);
    }

    /*
        * Lưu file upload thư mục
        * @param string $fieldname là tên trường file
        * @param string $target_dir thư mục lưu file
        * @return tên file upload
    */

    function save_file($fieldname, $target_dir) {
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded['name']);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded['tmp_name'], $target_path);
        return $file_name;
    }

    /*
        * Tạo cookie
        * @param string $name tên cookie
        * @param string $value giá trị cookie
        * @param int $day số ngày cookie tồn tại
    */

    function add_cookie($name, $value, $day) {
        setcookie($name, $value, time() + (86400 * $day), "/");
    }

    /*
        * Xóa cookie
        @param string $name là tên cookie
    */

    function delete_cookie($name) {
        add_cookie($name, "", -1);
    }

    /*
        * Đọc giá trị cookie
        * @param string $name là tên cookie
        * @return string giá trị cookie
    */

    function get_cookie($name) {
        return $_COOKIE[$name];
    }

    /*
        * Kiểm tra đăng nhập và vai trò sử dụng
        * Các php trong admin hoặc php yêu cầu phải được đăng nhập
        * mới được phép sư dụng thì cần thiết phải gọi hàm này trước
    */ 

    function check_login() {
        global $SITE_URL;
        if (isset($_SESSION['user'])) {
            if($_SESSION['user']['vai_tro'] == 1) {
                return;
            }
            if(strpos($_SERVER['REQUEST_URL'], '/admin/') == FALSE) {
                return;
            }
        }
        $_SESSION['request_url'] = $_SERVER['REQUEST_URL'];
        header("Location: . $SITE_URL/tai-khoan/login-form.php");
    }
?>