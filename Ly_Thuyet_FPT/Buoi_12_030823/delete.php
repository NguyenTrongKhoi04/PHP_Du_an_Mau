    <?php
    require_once "connect.php";

    $id= $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    $stmt= $connection->prepare($sql);
    $stmt->execute();

    $message = "Xóa dữ liệu thành công";
        header("location: list_admin.php?message=".$message);
    exit();