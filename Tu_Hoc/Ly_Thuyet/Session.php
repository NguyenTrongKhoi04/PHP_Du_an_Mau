<?php
    // Session lưu trữ dữ liệu trên webserver
    // cơ chế hoạt động như sau: 
    //     + khi truy cập hay f5, thao tác với trang web --> gửi REQUEST lên máy chủ 
    //     + ở trên máy chủ, mỗi 1 REQUEST sẽ sinh ra 1 PHP Session ID riêng và mỗi PHP ID sẽ là duy nhất cho phiên làm việc hiện tại
    //     + Sau khi sinh ra PHP ID cho từng REQUEST --> máy chủ trả về dưới dạng cookie trong phần phản hồi HTTP
    //     + Sau khi trình duyệt nhận được cookie chứa PHP Session ID 
    //     + khi gửi tiếp REQUEST tới máy chủ, cookie chứa PHP ID sẽ được tự động gửi lại
    //     + lúc này máy chủ sẽ xem cookie chứa PHP ID để từ đấy xác định dược phiên làm việc tương ứng với phiên làm việc lúc đầu gửi lên SERVER
    //     + từ đó máy chủ có thể truy cập và lưu trữ dữ liệu trong phiên và thể duy trì trạng thái người dùng 

            // TRẠNG THÁI NGƯỜI DÙNG 
                // trạng thái người dùng (user state) chỉ tắt trong các TH sau
                //     1) đăng xuất tài khoản
                //     2) ngừng phiên làm việc (Sesstion timeout): phiên làm việc bị giới hạn time và sau time giới hạn đó, trạng thái ng dùng sẽ bị xóa và hủy toàn bộ
                //     3) Đóng trình duyệt hoặc xóa web
                //     4) Xóa cookie hoặc lưu trữ trên máy khách 
                //     5) bị xóa, cập nhật từ phía máy chủ hoặc cơ sở dữ liệu 

                
    session_start(); //BẮT BUỘC Ở TRÊN ĐẦU TIÊN
    $_SESSION["thu"] = 3;// TẠO 
    unset($_SESSION["thu"]);// XÓA 1 cái session
    session_destroy();//Xóa toàn bộ
    var_dump($_SESSION);
