<?php

class products extends dbh{
  protected function getAllProducts(){
    $sql = 'SELECT * FROM products';
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if ($numRows > 0){
      while ($row = $result->fetch_assoc()){
        $data[] = $row;
      }
      return $data;
    }
  }
}

?>