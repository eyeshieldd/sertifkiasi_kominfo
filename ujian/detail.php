<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include("properti.php");
    
     $hrgtfas=$hm=$jcicil=$tt=$cil=0;
     $nama=$alamat="";
        if(@$_POST){
            $nama=@$_POST['nama'];
            $alamat=@$_POST['alamat'];
            $periode=@$_POST['periode'];
            $cicilan=@$_POST['cicilan'];
            $fasilitas=@$_POST['fasilitas'];
            
           
           
            if($fasilitas!=""){
                foreach ($fasilitas as $h) { 
                    $hrgtfas=$hrgtfas+hitung($h,$periode);
                    }
             }

                    if($periode==1){
                        $hm=800000;
                        if($cicilan=="mingguan"){
                            $cil=$hm/3;
                            $jcicil=3;
                        }
                        if($cicilan=="bulanan"){
                            $jcicil=1;
                            $cil=$hm;
                        }
                    }
                    elseif ($periode==0){
                        $hm=6500000;
                        if($cicilan==3){
                            $cil=$hm/4;
                            $jcicil=4;
                        }
                        if($cicilan==6){
                            $cil=$hm/2;
                            $jcicil=2;
                        }
                        if($cicilan==1){
                            $jcicil=1;
                            $cil=$hm;
                        }
                    }
                    else{
                        $hm=0;
                    }
            
            $tt=$cil+$hrgtfas;
        }
        
        echo '<h1>Jumlah Biaya </h1>'.'<br>';
        echo 'Nama Penyewa : '.$nama.'<br>';
        echo 'Alamat Asal : '.$alamat.'<br>';
        echo 'Total Bayar '.$jcicil.' x '.$hm.'<br>';
        echo 'Jumlah Cicil  '.$jcicil.'<br>';
        echo 'Jumlah Pengeluaran :'.$tt;'</table>'
    ?>
</body>
</html>
