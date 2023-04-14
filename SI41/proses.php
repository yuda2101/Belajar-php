<?php
    $a1 = $_POST["nilai1"];
    $a2 = $_POST["nilai2"];

    echo "Angka 1 adalah = ".$a1;
    echo "<br>";
    echo "Angka 2 adalah = ".$a2;

    if(isset($_POST["attributes"])){
        $a= $_POST["attributes"];
        foreach($a as $tampil){
            echo "<br>".$tampil."<br>";
        }
    }

    class Nilai{
        public $hasil;

        public function setNilai($nilai){
            if($nilai>55){
                $this->hasil="LULUS";
            }else{
                $this->hasil="TIDAK LULUS";
            }
        }
    }

    $objek1 = new Nilai();
    $objek1->setNilai($a1);
    echo $objek1->hasil;

?>