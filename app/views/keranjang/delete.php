<?php
$row = $data['keranjang'];
?>

<h2>HAPUS KERANJANG</h2>

<form action="../Proses" method="post">
<input type="hidden" name="ker_id" value="<?php echo $row['ker_id']; ?>">
    <table>
    <tr>
            <td>ID USER</td>
            <td><input type="text" name="ker_id_user" value="<?php echo $row['ker_id_user']; ?>"></td>
        </tr>
        <tr>
            <td>ID PRODUK</td>
            <td><input type="text" name="ker_id_produk" value="<?php echo $row['ker_id_produk']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="ker_harga" value="<?php echo $row['ker_harga']; ?>"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="ker_jml" value="<?php echo $row['ker_jml']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_delete" value="HAPUS"></td>
        </tr>
    </table>
</form>