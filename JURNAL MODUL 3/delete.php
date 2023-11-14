<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    $connect = mysqli_connect ("localhost:8081", "root", " ", "showroom_mobil")  ;
    include("form_create_mobil.php");


// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET["id"];
   


    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    mysqli_query ($connect, "DELETE from jurnal_modul_3 WHERE id=$id");


    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($query) {
        
          echo "Data Berhasil dihapus";
        
    }
    else {
       
          echo "Data Gagal ditambahkan";
          mysqli_error($connect);
  
      }

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);
?>
?>