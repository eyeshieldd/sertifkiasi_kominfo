
<?php
    function hitung($fasilitas,$lama){
        $hrg=0;
        if($fasilitas=="Dispenser"){
            if($lama==1){
                $hrg=30000;
            }
            if($lama==0){
                $hrg=240000;
            }
        }
        elseif ($fasilitas=="Televisi"){
            $hrg=272000;   
        }
        elseif ($fasilitas=="Kipas Angin"){
            if($lama==1){
                $hrg=5000;
            }
            if ($lama==0){
                    $hrg=15000;
            }
        }
        else{
            return $hrg;
        }
        
        return $hrg;
    }

?>