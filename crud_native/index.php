<html>
    <head>
        <title> </title>
    </head>

    <body>
<a href="grade.php">Tambah Data Peserta</a>
            <table border="1"> 
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Nilai</th>
                <th>Hobi</th>
                <th>Menu</th>
            </tr>
            <?php
                require("koneksi.php");
                require("nilai.php");
                $peserta = mysqli_query($koneksi, "select * from peserta join hobi on 
                                                    peserta.id=hobi.peserta join nilai on nilai.peserta=peserta.id");
                if(mysqli_num_rows($peserta)!=0){

                
                $no=1;
                foreach ($peserta as $key => $value) {
                    $data_peserta[$value['id']]= array(
                        'id'        => $value['id'],
                        'nama'      => $value['nama'],
                        'gender'    => $value['gender'],
                        'alamat'    => $value['alamat'],
                        'nohp'      => $value['nohp'],
                        'email'     => $value['email'],
                        'nilai'     => $value['nilai']
                    );
                    $data_hobi[$value['id']][] = $value['hobi'];
                }
                foreach ($data_peserta as $value) {
                    $hobi = implode(", ",$data_hobi[$value['id']]);
                    if($value['nilai']==0){
                        $nl="BELUM MASUK";
                    }
                    else{
                        $nl=nilai($value['nilai']);
                    }
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['gender'] ?></td>
                    <td><?= $value['alamat'] ?></td>
                    <td><?= $value['nohp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $nl ?></td>
                    <td><?= $hobi ?></td>
                    <td>
                        <a href="formnilai.php?id=<?php echo $value['id']?>">Nilai</a>
                        <a href="edit.php?id=<?php echo $value['id']?>">Edit</a>
                        <a href="delete.php?id=<?php echo $value['id']?>">Hapus</a>
                        
                    </td>
                </tr>
                <?php
                    $no++;
                    
                }
            }
            else{
                echo '<tr>
                <td colspan="9" align="center">Data Tidak Ada</td>
                </tr>';
            }
                ?>
        </table>
    </body>
</html>