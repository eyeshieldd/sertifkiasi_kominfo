<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <title>SERTIFIKASI</title>
<body>

<form method="POST" action="detail.php">
<h3 align="center" border="1">APLIKASI PENGITUNGAN BIAYA KAMAR</h3>
    <table align="center">
        <tr>
            <td>Nama Penyewa </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat Asal </td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Periode </td>
            <td>
                    <input type="radio" class="periode" name="periode" id="0" value="0">Tahunan
                    <input type="radio" class="periode" name="periode" id="1" value="1">Bulanan
            </td>
        </tr>
        <tr>
            <td>Cicilan </td>
            <td>    
                <select  name="cicilan" class="cicilan" id="cicilan">
                    <option>--Pilihan--</option>
                    <div class="cicilan"></div>
                </select>
            </td>
        </tr>
        <tr>
            <td>Fasilitas </td>
            <td>
                    <input type="checkbox" name="fasilitas[]" value="Dispenser">Dispenser
                    <input type="checkbox" name="fasilitas[]" value="Kipas Angin">Kipas Angin
                    <input type="checkbox" name="fasilitas[]" value="Televisi">Televisi <br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" onclick="" value="Hitung Biaya"></td><br>
        </tr>
    </table>
    </form>

    
   
    <script>
        $('.periode').on('click', function(){
            var id      = this.id;
            console.log(id);
            var html    = '';

            var content1 = '<option value="3">3 Bulan</option><option value="6">6 Bulan</option><option value="1">1 Tahun</option>';
            var content2 = '<option value="mingguan">Mingguan</option><option value="bulanan">Bulanan</option>';

            if(id==0){
                html = content1;
            }
            else if (id==1){
                html = content2;
            }
            $('.cicilan').html(html);
        });
    </script>
</body>
</html>