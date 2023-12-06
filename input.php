<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Penjualan Merindu Cafe</title>
</head>
<body>
    <form action="proses.php" method="post">
    <table> 
        <h1>Faktur Penjualan</h1>
        <tr>
            <td><label for="np">Nama Pelanggan</label></td>
            <td>:</td>
            <td><input type="text" name="np"></td>
        </tr>
        <tr>
            <td><label for="jps">Jenis Pesanan</label></td>
            <td>:</td>
            <td>
                <select name="jps">
                    <option value="Caramel Latte">Caramel Latte</option>
                    <option value="Vanilla Latte">Vanilla Latte</option>
                    <option value="Americano">Americano</option>
                    <option value="Cappucino">Cappucino</option>
                    <option value="Kopi Susu">Kopi Susu</option>
                </select>
            </td>
        </tr>
        <tr>   
            <td><label for="tp">Tipe Pesanan</label></td>
            <td>:</td>
            <td>
                <input type="radio" name="tp" value="Panas">Panas
                <input type="radio" name="tp" value="Dingin">Dingin
            </td>
        </tr>
        <tr>
            <td><label for="jp">Jumlah Pesanan</label></td>
            <td>:</td>
            <td><input type="number" name="jp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Proses"></td>
            <td></td>
        </tr>
    </table>
    </form>
    <br><br>
    <h2>Ketentuan Faktur</h2>
    <table>
        <tr>
            <td width="50%">
            <p>Masing-masing harga Jenis Pesanan sesuai dengan tabel disamping. Setiap pembelian tipe pesanan panas akan dikenakan biaya tambahan 5000 dan dingin akan dikenakan biaya tambahan 7000 per sajiannya.</p>
            <p>Total belanja akan dikenakan biaya tambahan 10%, apabila jumlah pesanan >10 maka akan diberi potongan sebesar 20000</p>
            </td>
            <td width="50%">
                <table border="1">
                    <tr>
                        <th>Jenis Pesanan</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td>Caramel Latte</td>
                        <td>15000</td>
                    </tr>
                    <tr>
                        <td>Vanilla Latte</td>
                        <td>20000</td>
                    </tr>
                    <tr>
                        <td>Americano</td>
                        <td>13000</td>
                    </tr>
                    <tr>
                        <td>Cappucino</td>
                        <td>20000</td>
                    </tr>
                    <tr>
                        <td>Kopi Susu</td>
                        <td>23000</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>