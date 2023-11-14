<?php
// đọc kỹ hơn ở đây
    // https://viblo.asia/p/cach-dung-abstract-class-va-interface-trong-php-djeZ1VVGlWz

////////////// Abstract ////////////////////
// "1 lớp trừu tượng (không được khởi tạo đối tượng cho 1 lớp abstract class, ví dụ "$a = new animal" =>> như này sẽ sai)" 
// trong abstract class thì được viết cả method abstract và method thường 
// mỗi lớp con chỉ kế thừa được 1 Abstract (giống như kế thừa lớp thường)
// abstract class có thân nhưng  abstract method thì k có thân
    // thuộc tính trong abstract class được viết giá trị. 
        // về mặt code thì không sai nhưng nhớ rằng class abstract tạo ra để tạo bản thiết kế chung, vì vậy không nên gán giá trị vào thuộc tính
// các lớp con sẽ phải override (ghi đè) lên khi kế thừa lớp cha abstract class        
// =>>>> tóm tắt lại là abstract là 1 BẢN THIẾT KẾ cho CÁC CLASS

// ví dụ abstract
// lop truu tuong Animal
abstract class Animal
{
    protected $name;
    
    abstract function run();  // phuong thuc truu tuong voi khai báo với tu khoa abstract và không có thân hàm
}

// lớp Dog kế thừa từ lớp trừu tượng Animal  
class Dog extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Person kế thừa từ lớp trừu tượng Animal 
class Person extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con người chạy bằng 2 chân";
    }
}

////////////// Interface ////////////////////
// "Interface" cũng giống như abstract nhưng nó chỉ định nghĩa method chứ không định nghĩa thuộc tính
    // 1 số note lưu ý 
        // interface class chỉ được viết method. Vì là lớp trừu tượng nên không thể instance (khởi tạo đói tượng)
        // interface bản chất là bản thiết kế nhưng phạm vi định nghĩa nó bị giới hạn hơn so với abstract 
        // trong interface không có phạm vi của phương thức =>> tát cả đều là public method
        // Một lớp có thể kế thừa từ nhiều interface khác nhau bằng từ khóa implements 
            // ví dụ class Duck implements CanFly, CanSwim 
// interface Move
interface Move 
{
    function run();
}

// lớp Dog kế thừa interface Move 
class Dog implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Car kế thừa interface Move  
class Car implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Xe hơi chạy bằng 4 bánh";
    }
}


////////////// khi nào dùng absract và interface  ////////////////////
// 2 khái niệm này đều là bản thiết kế nhưng khác ở chỗ
    // abstract là bản thiêt kế cho "CLASS", sử dụng cho các class kế thừa thuộc 1 nhóm đối tượng
        // nhìn lại ví dụ ở phần abstract thì 2 class kế thừa 
        // abstract class Animal đều có cùng bản chất là động vật. Chúng có thể sử dụng được biến $name trong abstract class Animal.
    // interface là bản thiết kế cho "METHOD", sử dụng cho các class kế thừa không có cùng bản chất (nhóm đối tượng) nhưng chúng có thể thực hiện các hành động giống nhau.
        // ở ví dụ interface thì 2 class kế thừa từ interface Move không có cùng bản chất. 1 class thuộc động vật và 1 class thuộc phương tiện đi lại. Nhưng chúng có chung hành động là run().  
