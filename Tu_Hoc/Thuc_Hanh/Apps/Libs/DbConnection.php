<?php
    class Apps_Libs_Dbconnection
    {
       protected $username='root';
       protected $password='';
       protected $host='localhost';
       protected $database='baitapthuchanh';

        protected $queryParams=[];// biến lưu trữ các Param

       protected $tableName;
       protected static $connectInstance = null;

       public function __construct(){
        $this->connect();
       }
       
    // Tạo kết nối đến database
    // return new PDOs  
       public function connect(){
        if(self::$connectInstance===null){
            try{
                self::$connectInstance = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
                self::$connectInstance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo"kết nối thành công";
            }catch(Exception $ex){
                echo "ERROR: ".$ex->getMessage();
                var_dump('sql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
                die();
            }
            return self::$connectInstance;
        }
       }

    // $param có tác dụng phòng chống những phá hoại của ng khác khi nhập lệnh sql
       // ví dụ SELECT * FROM table where id =': id' (để phá hoại =>> dùng những ký tự đặc biệt,...)
       // Lúc này $param dùng để lọc ra những lệnh độc hại kia
            // $q ="SELECT * FROM id = :id";
            // $param = [":id" => 1;] //ví dụ cho nó bằng 1 hoặc vv...
            // $q->execute($param)
       public function query($sql,$param=[]){
        $q = self::$connectInstance->prepare($sql);
        if(is_array($param)&& $param){
            // is_array là kiểm tra xem đó có phải 1 mảng hay không
            $q->execute($param);
        }
        return $q;        
       }

    // Các câu lệnh query thường gặp
       public function select(){
        
       }

       public function selectOne(){

       }
       
       public function insert(){

       }

       public function update(){

       }

       public function delete(){

       }

            // Nếu bạn mà viết thẳng vào các hàm query trên kia thì khi truyền các tham số ($param) vào sẽ rất rối
                // đó là lý do có hàm xây dựng Query này 
       public function buildQueryParams($params){
            $default=[
                "select" => "",
                "where" => "",
                "other" => "",
                "params" => ""
            ];
            $this->queryParams= array_merge($default,$params); 
                // array_merge =>> ghi đè (override) nếu trùng phần tử mảng còn không thì sẽ cho vào phần tử mới trong mảng
                // ví dụ b chỉ sử dụng select và where thôi, nếu ko có array_merge thì bạn bắt buộc phải nhập hết thì chương trình mới chạy

            return $this;
                // $this ở đây chính là "khởi tạo" hoặc "đối tượng" 
                // Hiểu đơn giản $this chính là đốitượng được tạo từ class chứa nó
                    // $a = new Apps_Libs_Dbconnection();
                    // $a->buildQueryParams([ "select" => "*", where => '' ])->select()
                        // giải thích: method buildQueryParams trả lại $this 
                            // $a->buildQueryParams([ "select" => "*", where => '' ])  <=> new Apps_Libs_Dbconnection()
       }
     
    }