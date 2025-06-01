<?php
require_once 'models/BaseModel.php';

$model = new BaseModel();
if ($model->conn) {
    echo "Kết nối thành công!";
    // Thử truy vấn
    $stmt = $model->conn->query("SELECT 1");
    if ($stmt) {
        echo "Truy vấn thành công!";
    }
} else {
    echo "Kết nối thất bại!";
}