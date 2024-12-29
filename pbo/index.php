<!DOCTYPE html>
<html>
<head>
  <h3>Pertemuan Ke 2</h3>
  <h4>Membuat halaman Web Sederhana</h4>
  <title>Pemrograman Berorientasi Objek</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: #0000;
    }
    h1, h2 {
      color: #545554;
    }
    h3, h4 {
      color: #0033FF;
    }
    h5 {
      color: #FF0000;
    }
    table {
      border-collapse: collapse;
      width: 30%;
    }
    th, td {
      border: 1px solid #7a7a7a;
      padding: 8px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #a0f0f5;
    }
  </style>
</head>
<body>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method.</p>

  <center><h2>Bahasa Pemrograman Yang Mendukung PBO</h2></center>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <center>
    <h1>Tabel Kategori Produk</h1>  
    <table>
      <tr>
        <th>No</th>
        <th>Kategori Produk</th>
        <th>Nama Produk</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Bumbu Dapur</td>
        <td>Garam</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Bumbu Dapur</td>
        <td>Cabe</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bumbu Dapur</td>
        <td>Lengkuas</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bumbu Dapur</td>
        <td>Terasi</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Sembako</td>
        <td>Beras</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Sembako</td>
        <td>Minyak Goreng</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Sembako</td>
        <td>Gula Pasir</td>
      </tr>
    </table>

    <h1>Tabel Produk</h1>
    <table>
      <tr>
        <th>No</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
        <td>35000</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Beras</td>
        <td>10</td>
        <td>13000</td>
      </tr>
    </table>

    <img src="gambar/zidan.jpg" width="100" height="180">
    <h2>Dibuat Oleh M RIFQI </h2>
    <p>mahasiswa informatika semester 3</p>
    <p>Universitas Peradaban</p>
    <h1>Pemrograman Berorientasi Objek</h1>
  </center>
<h3>Pertemuan Ke 3</h3>
<h4>membuat kelas 'Buah' dengan Property 'nama' dan 'Warna'</h4>
  <?php
  class Buah {
      public $warna;
      function set_name($nama) {
      $this->nama = $nama;
  }
      function get_name() { return $this->nama;
  }
  }
        $apel = new Buah();
        $pisang = new Buah(); $apel->set_name('Apel');
        $pisang->set_name('Pisang');
        echo $apel->get_name();
        echo "<br>";
        echo $pisang->get_name();
  ?>

  <h4>membuat kelas 'Mobil' dengan Object 'Toyota' property 'Warna'dan 'Tahun'</h4>
  <?php
  class Mobil {
      public $merek;
      public $warna;
      public $tahun;

      public function __construct($merek, $warna, $tahun) {
          $this->merek = $merek;
          $this->warna = $warna;
          $this->tahun = $tahun;
      }

      public function info() {
          return "Mobil: $this->merek, Warna: $this->warna, Tahun: $this->tahun";
      }
  }
  $toyota = new Mobil("Toyota", "Biru Metalik", 2023);
  echo "<p>" . $toyota->info() . "</p>";
  ?>
<h3>Pertemuan Ke 4</h3>
<h4>Konstruktor dan Dekstruktor</h4>
  <?php
  class Orang{
      public $nama;
      public $tinggi;
      public $warna;

    public function __construct($nama, $tinggi, $warna) {
      $this->nama = $nama;
      $this->tinggi = $tinggi;
      $this->warna = $warna;
}

  public function __destruct() {
      echo "mahasiswa tersebut bernama {$this->nama} Tinggi badan {$this->tinggi} dan berwarna {$this->warna}";
      echo "<br>";
      }
}
$zidan = new Orang("Zidan", 169, "Sawo Matang");
$yoga  = new Orang("Yoga", 169, "Putih");
$vian = new Orang("Vian", 165, "Sawo Matang");
?>

<h3>Pertemuan Ke 5</h3>
<h4>Konstanta dan Abstrak</h4>
<li>Konstanta</li>
<?php
  class komputer {
    const DOLLAR = '12000';
}
    echo "Harga dollar saat ini = Rp. ".komputer::DOLLAR;
?>

<li>Abstrak</li>
<?php
abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name, $separator = " ", $greet = "Dear") {
        $prefix = "";

        if ($name == "Ahmad Sulistiyo") {
            $prefix = "Mr";
        } elseif ($name == "Siti Aisyah") {
            $prefix = "Miss";
        }

        return "{$greet}{$separator}{$prefix}{$separator}{$name}";
    }
}
$class = new ChildClass;

echo $class->prefixName("Ahmad Sulistiyo") . "<br>";
echo $class->prefixName("Siti Aisyah") . "<br>";
?>
<h3>Pertemuan Ke 7</h3>
<h4>Penjelasan CRUD</h4>
<center><img src="gambar\add.png" width="600" height="450"></center>
<li>Fungsi Utama: Script ini memungkinkan pengguna untuk menambah data barang (nama, stok, harga beli, dan harga jual) ke dalam database menggunakan form input dan PHP.
Keamanan: Script ini memiliki kelemahan dalam hal SQL Injection karena input data dimasukkan langsung ke dalam query SQL. Untuk meningkatkan keamanan, sangat disarankan untuk menggunakan prepared statements atau fungsi sanitasi data sebelum memasukkan data ke dalam query SQL.
</li>

<center><img src="gambar\data base.png" width="600" height="450"></center>
<li>Tujuan Script:

Script ini digunakan untuk membuka koneksi ke database MySQL dengan menggunakan kredensial (username, password, database) yang diberikan.
Jika koneksi berhasil, Anda dapat menggunakan objek $conn untuk menjalankan query SQL terhadap database db_zidan.
Keamanan dan Penggunaan:

Jika script ini digunakan dalam aplikasi produksi, sebaiknya Anda tidak meninggalkan password kosong seperti pada contoh di atas. Anda harus menggunakan password yang kuat dan lebih aman.
Untuk meningkatkan keamanan dan fleksibilitas, bisa juga mempertimbangkan menggunakan file konfigurasi eksternal yang tidak dimasukkan langsung dalam kode PHP.
Error Handling:

Script ini memeriksa apakah ada kesalahan koneksi dan menampilkan pesan kesalahan jika koneksi gagal. Ini membantu untuk mengetahui penyebab masalah saat koneksi ke database.</li>

<center><img src="gambar\delete.png" width="600" height="450"></center>
<li>Script PHP ini berfungsi untuk menghapus data barang dari tabel tbl_barang di database MySQL berdasarkan ID barang yang diterima melalui URL. Berikut adalah alur eksekusi dari script ini:

Mendapatkan ID Barang: ID barang yang akan dihapus diterima melalui URL ($_GET['id']).
Membuat Query SQL: Query SQL dibangun untuk menghapus data dengan id_barang yang sesuai.
Menjalankan Query: Script mengeksekusi query dengan menggunakan objek koneksi $conn.
Redirect atau Tampilkan Error:
Jika query berhasil, pengguna akan diarahkan kembali ke halaman index.php.
Jika terjadi error, pesan kesalahan ditampilkan di layar.</li>

<center><img src="gambar\edit.png" width="600" height="450"></center>
<li>Menampilkan Data Barang: Script pertama-tama mengambil data barang yang sudah ada berdasarkan ID yang diberikan di URL. Data tersebut ditampilkan dalam form untuk diedit.
Mengupdate Data: Setelah pengguna mengubah data dan mengirimkan form (POST), script akan menjalankan query UPDATE untuk menyimpan perubahan ke dalam database.
Redirect: Jika update berhasil, pengguna akan diarahkan kembali ke halaman index.php. Jika terjadi kesalahan, pesan error ditampilkan.</li>

<center><img src="gambar\index.png" width="600" height="450"></center>
<li>Halaman ini adalah tampilan sederhana namun penting dalam aplikasi berbasis web. Fungsinya hanya untuk menyapa pengguna dan memberikan mereka akses ke fitur lain aplikasi (dalam hal ini, melihat data barang). Halaman ini biasanya digunakan sebagai halaman pertama yang dilihat oleh pengguna saat mengunjungi aplikasi.</li>
<center><img src="gambar\view.png" width="600" height="450"></center>
<li>Halaman ini adalah bagian dari aplikasi manajemen barang yang berfungsi untuk menampilkan daftar barang yang ada di database, serta menyediakan fitur untuk mengedit dan menghapus data barang, serta menambah data barang baru. Script ini menggabungkan PHP untuk pengambilan data dari database dengan HTML untuk tampilan antarmuka pengguna</li>
</body>
</html>