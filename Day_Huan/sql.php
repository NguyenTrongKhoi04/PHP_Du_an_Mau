Select * FROM (tên bảng) // in ra toàn bộ dữ liệu của bảng

select ID from (tên bảng)// in ra 1 cột của bảng 

select * from (tên bảng) where ten='khoi' //in ra toàn bộ thông tin của 'khoi'

delete  from (tên bảng) where ID=...;

create table (tên bảng) (
    Id int auto_create not null
    ten varchar(500)
)