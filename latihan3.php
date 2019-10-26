<!DOCTYPE html>
<html>

<head>
    <title>Faktorial</title>
</head>

<body>
    <form name="form" method="post">
        <table>
            <tr>
                <td>Angka</td>
                <td>
                    <input type="text" name="txtAngka" size="10" />
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <input type="submit" name="submit" value="Hasil" />
                </td>
            </tr>
        </table>
        <?php
error_reporting(0);
if($_POST['submit']!=''){
            $angka=$_POST['txtAngka'];

            function faktorial($angka){
            if($angka<=1){
                $hasil=1;
                return $hasil; 
            }elseif($angka>1){
                for($i=1; $i<=$angka; $i++){
                    $hasil=$angka * faktorial($angka-1);
                    }
                return $hasil;
                }
            }
    echo "<br>";
    echo "Hasil dari "."".$angka.""."! ="." ".faktorial($angka);
}
?>
</form>
</body>
</html>