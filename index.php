<?php
    
    // định nghĩa đường dẫn sử dụng 
    define('BASE_URL', "/abc");
    define('VIEW_URL', './mvc/views');
    define('CONTROLLER_URL', './mvc/controllers');
    define('MODEL_URL', './mvc/models');
    //định nghĩa đường dẫn chứa ảnh sử dụng trong upload
    define('IMAGE_BE', $_SERVER["DOCUMENT_ROOT"] . BASE_URL . "/public/backend/image");

    // định nghĩa đường dẫn ảnh hiển thị
    define('IMGAE_DISPLAY', BASE_URL.'/public');

    require_once "./mvc/Bridge.php";
    $myApp = new App();
?>