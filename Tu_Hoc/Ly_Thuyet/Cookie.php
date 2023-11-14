<?php
// Session và cookie dùng để lưu trữ dữ liệu nhỏ do ng code tạo ra 
// Sesion lưu trên server. Cookie lưu trên trình duyệt máy client

// 1) cookie
    // + đã bao h b để ý d đang nhập fb 1 lần rồi các lần sau truy cập vào b ko phải đăng nhập lại k
    //     --> cookie dùng để lưu trữ dữ liệu và dữ liệu đó đc đặt ở phía client 
    // + khi b vào bất kỳ 1 trang web hay thao tác trên trang web nào đó 
    //     --> dửi 1 REQUEST lên webserver, và mỗi REQUEST đc gửi lên gồm 1 cookie đi kèm
    // + cú pháp tạo thàm cho cookies: Set-Cookie: name=value; expires=date_time; path=/path
    //     --> setcookie(name, value, expire, path, domain, secure, httponly);
    // + ko nên lưu quá nhiều vào cookie vì sẽ làm đơ trình duyệt

    setcookie("khoi",23321);
    var_dump($_COOKIE);
    // tạo cookie

    setcookie("khoi","",time()-3600);
    // Xóa một cookie
    // hiểu đơn giản là ghi đè lên cookie muốn xóa


    setcookie("khoi","",time()-3600,"/");// cần nghiên cứu vì dòng này chạy k được
    // "/" là đại diện cho toàn bộ trang trên miền 
    // khi b tạo cookie thì nó sẽ có hiệu lức ở 1 phạm vi nhất định
    // giả sử b muốn xóa cookie trong 1 phạm vi thì b chỉ ra phạm vi đó
        // ví dụ "/admin"


// CHẠY RIÊNG TỪNG LỆNH TRÊN SẼ HIỂU RÕ TỪNG CÁI