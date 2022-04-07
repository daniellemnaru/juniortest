<?php

class viewProducts extends products{
    public function showAllProducts(){
        $datas = $this->getAllProducts();
        foreach($datas as $data){
            echo '<div class="prod"><p>';
            echo $data['SKU'] . '<br/>';
            echo $data['Name'] . '<br/>';
            echo $data['Price'] . ' $<br/>';
            if($data['Size']!=0){
                echo 'Size: ' . $data['Size'] . ' MB';
            }elseif($data['Height']!=0){
                echo 'Height: ' . $data['Height'] . 'x' . $data['Width'] . 'x' . $data['Length'];
            }elseif($data['Weight']!=0){
                echo 'Weight: ' . $data['Weight'] . 'KG';
            }else{
                echo '';
            }
            echo '</p></div>';
        }
    }
}

?>