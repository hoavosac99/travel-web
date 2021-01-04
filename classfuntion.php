<?php
    // Thư Viện Xử Lý Database
class classfuntion
{
    // Biến lưu trữ kết nối
    private $__conn;
     
    // Hàm Kết Nối
    function connect()
    {
        // Nếu chưa kết nối thì thực hiện kết nối
        if (!$this->__conn){
            // Kết nối
            $this->__conn = mysqli_connect('localhost', 'root', '', 'webdulich') or die ('Lỗi kết nối');
 
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }
 
    // Hàm Ngắt Kết Nối
    function dis_connect(){
        // Nếu đang kết nối thì ngắt
        if ($this->__conn){
            mysqli_close($this->__conn);
        }
    }
 
    // Hàm Insert
    function insert($table, $data)
{
    // Kết nối
    $this->connect();
 
    // Lưu trữ danh sách field
    $field_list = '';
    // Lưu trữ danh sách giá trị tương ứng với field
    $value_list = '';
 
    // Lặp qua data
    foreach ($data as $key => $value){
        $field_list .= ",$key";
        $value_list .= ",'".$value."'";
    }
 
    // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
    $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
     $run = mysqli_query($this->__conn, $sql);
     if($run){
        echo "<script>alert('them thanh cong')</script>";
     }
     else{
        echo "<script>alert('them thất bại')</script>";
     }
}
 
    // Hàm Update
    function update($table, $data, $where)
    {
        // Kết nối
        $this->connect();
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value){
            $sql .= "$key = '".$value."',";
        }
 
        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm delete
    function remove($table, $where){
        // Kết nối
        $this->connect();
         
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm lấy danh sách
    function get_list($sql)
{
    // Kết nối
    $this->connect();
 
    $result = mysqli_query($this->__conn, $sql);
 
    if (!$result){
        die ('Câu truy vấn bị sai');
    }
 
    $return = array();
 
    // Lặp qua kết quả để đưa vào mảng
    while ($row = mysqli_fetch_assoc($result)){
        $return[] = $row;
    }
 
    // Xóa kết quả khỏi bộ nhớ
    mysqli_free_result($result);
 
    return $return;
}
 
    // hàm trả về mysqli_fetch_array
    function get_row($sql)
    {
        // Kết nối
        $this->connect();
         
        $run = mysqli_query($this->__conn, $sql);
 
        if (!$run){
            die ('Câu truy vấn bị sai');
        }
 
        return mysqli_fetch_array($run);
    }
    //hàm kiểm tra có dòng ko
    function check_row($sql){
        $this->connect();
        $run = mysqli_query($this->__conn,$sql);
        return mysqli_num_rows($run);
    }
}
    //ví dụ insert
    // $DB->insert('tour', array(
    //     'ma_tour' => $matour,
    //     'ten_tour' => 'hay',
    //     'ngaybd' => '2020-10-10',
    //     'ngaykt' => '2020-19-10',
    //     'gia' => $giave,
    //     'ma_hdv' =>'ha'
    //    ));
    //ví dụ update
    // $DB->update('customer', array(
    //     'name' => 'TheHalfHeart'
    // ), 'id = 1');
     
    // // ví dụ DELETE
    // $DB->remove('customer', 'id = 1');
?>
