<?php

$koneksi = mysqli_connect("localhost", "root", "", "myshop");


$users = $koneksi->query("SELECT id, name, email FROM users");
 ?>
<h1>Soal 4 bagian a</h1>
<table border="1">
   <thead>
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
      </tr>
   </thead>
   <tbody>
   <?php while($value = $users->fetch_assoc()): ?>
      <tr>
         <td><?= $value['id'] ?></td>
         <td><?= $value['name'] ?></td>
         <td><?= $value['email'] ?></td>
      </tr>
   <?php endwhile; ?>
   </tbody>
</table>

<hr>
<h1>Soal 4 bagian b</h1>
<?php
$mahal = $koneksi->query("SELECT a.id, a.name, a.description, a.price, a.stock, b.name kategori FROM items a LEFT JOIN categories b ON a.category_id = b.id WHERE price > 1000000");
$like = $koneksi->query("SELECT a.id, a.name, a.description, a.price, a.stock, b.name kategori FROM items a LEFT JOIN categories b ON a.category_id = b.id WHERE a.name LIKE '%uniklo%'");

?>
<p>Harga > 1 Juta</p>
<table border="1">
   <thead>
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Kategori</th>
         <th>Deskripsi</th>
         <th>Harga</th>
         <th>Stok</th>
      </tr>
   </thead>
   <tbody>
      <?php while($value = $mahal->fetch_assoc()): ?>
         <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['kategori'] ?></td>
            <td><?= $value['description'] ?></td>
            <td>Rp. <?= number_format($value['price']) ?></td>
            <td><?= $value['stock'] ?></td>
         </tr>
      <?php endwhile; ?>
   </tbody>
</table>

<p>Nama Mirip "unilok"</p>
<table border="1">
   <thead>
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Kategori</th>
         <th>Deskripsi</th>
         <th>Harga</th>
         <th>Stok</th>
      </tr>
   </thead>
   <tbody>
      <?php while($value = $like->fetch_assoc()): ?>
         <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['kategori'] ?></td>
            <td><?= $value['description'] ?></td>
            <td>Rp. <?= number_format($value['price']) ?></td>
            <td><?= $value['stock'] ?></td>
         </tr>
      <?php endwhile; ?>
   </tbody>
</table>
<hr>
<h1>Soal 4 bagian c</h1>
<?php
$join = $koneksi->query("SELECT a.id, a.name, a.description, a.price, a.stock, b.id kategori_id, b.name kategori FROM items a LEFT JOIN categories b ON a.category_id = b.id");
?>
<table border="1">
   <thead>
      <tr>
         <th>ID Item</th>
         <th>Nama</th>
         <th>Deskripsi</th>
         <th>Harga</th>
         <th>Stok</th>
         <th>ID Kategori</th>
         <th>Kategori</th>
      </tr>
   </thead>
   <tbody>
      <?php while($value = $join->fetch_assoc()): ?>
         <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['description'] ?></td>
            <td>Rp. <?= number_format($value['price']) ?></td>
            <td><?= $value['stock'] ?></td>
            <td><?= $value['kategori'] ?></td>
            <td><?= $value['kategori_id'] ?></td>
         </tr>
      <?php endwhile; ?>
   </tbody>
</table>
<hr>
<h1>Soal 5</h1>
<?php

$update = $koneksi->query("UPDATE items SET price = 2500000 WHERE NAME LIKE '%sumsang%'");

if($update) {
   echo "<p>Update Berhasil</p>";
}
