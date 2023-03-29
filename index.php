
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Test Penalaran</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>

  <body>

  <?php 
    $article = "Dalam kehidupan suatu negara, pendidikan memegang peranan yang amat penting untuk menjamin kelangsungan hidup negara dan bangsa, karena pendidikan merupakan wahana untuk meningkatkan dan mengembangkan kualitas sumber daya manusia. Seiring dengan perkembangan teknologi komputer dan teknologi informasi, sekolah-sekolah di Indonesia sudah waktunya mengembangkan Sistem Informasi manajemennya agar mampu mengikuti perubahan jaman. SISKO mampu memberikan kemudahan pihak pengelola menjalankan kegiatannya dan meningkatkan kredibilitas dan akuntabilitas sekolah dimata siswa, orang tua siswa, dan masyakat umumnya.Penerapan teknologi informasi untuk menunjang proses pendidikan telah menjadi kebutuhan bagi lembaga pendidikan di Indonesia. Pemanfaatan teknologi informasi ini sangat dibutuhkan untuk meningkatkan efisiensi dan produktivitas bagi manajemen pendidikan. Keberhasilan dalam peningkatan efisiensi dan produktivitas bagi manajemen pendidikan akan ikut menentukan kelangsungan hidup lembaga pendidikan itu sendiri. Dengan kata lain menunda penerapan teknologi informasi dalam lembaga pendidikan berarti menunda kelancaran pendidikan dalam menghadapi persaingan global. Pemanfaatan teknologi informasi diperuntukkan bagi peningkatan kinerja lembaga pendidikan dalam upayanya meningkatkan kualitas Sumber Daya Manusia Indonesia. Guru dan pengurus sekolah tidak lagi disibukkan oleh pekerjaan-pekerjaan operasional, yang sesungguhnya dapat digantikan oleh komputer. Dengan demikian dapat memberikan keuntungan dalam efisien waktu dan tenaga. Penghematan waktu dan kecepatan penyajian informasi akibat penerapan teknologi informasi tersebut akan memberikan kesempatan kepada guru dan pengurus sekolah untuk meningkatkan kualitas komunikasi dan pembinaan kepada siswa. Dengan demikian siswa akan merasa lebih dimanusiakan dalam upaya mengembangkan kepribadian dan pengetahuannya. Sebagai contoh yang paling utama adalah sistem penjadwalan yang harus dilakukan setiap awal semester. Biasanya membutuhkan waktu lama untuk menyusun penjadwalan, Dengan SISKO dapat selesai dalam waktu singkat. Untuk mempermudah bagian administrasi kurikulum sekolah, SISKO menyediakan fasilitas istimewa yang merupakan inti dari sistem kurikulum sekolah yaitu membantu dalam pembuatan penjadwalan mata pelajaran sekolah yang dapat diproses tidak lebih lama dari 10 menit. Administrator hanya akan memasukkan kondisi dari masing-masing guru yang akan mengajar baik itu dalam 1 minggu seorang guru dapat mengajar berapa jam, selain itu dapat juga melakukan pemesanan tempat dan penempatan hari libur masing-masing guru dalam 1 minggu masa mengajar. Setelah semua kondisi dimasukkan, sistem akan memproses semua data tersebut sehingga menghasilkan jadwal yang optimal dan dapat langsung dipakai karena sistem akan mendeteksi sehingga tidak akan ada jadwal yang bertumpukan satu dengan yang lainnya. Setelah semua kondisi dimasukkan, sistem akan memproses semua data tersebut sehingga menghasilkan jadwal yang optimal dan dapat langsung dipakai karena sistem akan mendeteksi sehingga tidak akan ada jadwal yang bertumpukan satu dengan yang lainnya. Setelah permasalahan penjadwalan dapat ditangani dengan baik, hal yang tidak kalah pentingnya adalah memasukkan data siswa. Program SISKO telah menyediakan fasilitas untuk penanganan penilaian siswa yang secara langsung memasukkan nilai ke dalam raport dan siap dicetak. Untuk sistem penilaian siswa, yang dapat melakukan pengisian hanya Guru yang mengajar mata pelajaran. Sistem penilaian telah disesuaikan dengan KBK sehingga masing masing guru dapat memasukkan deskripsi narasi dari mata pelajaran. Untuk menampilkan data penilaian dapat disesuaikan kembali dengan kebijaksanaan dari masing-masing lembaga pendidikan apakah ingin menampilkan data nilai akhir siswa maupun menampilkan data nilai siswa setiap kali mengadakan test ataupun tugas tertentu. Selain Modul untuk penjadwalan dan Modul Penilaian siswa, SISKO juga memberikan fasilitas untuk bagian administrasi keuangan sekolah dalam hal pembayaran SPP siswa. Bagian administrasi dapat langsung mengecek siapa siswa yang mempunyai tunggakan SPP dan untuk detail histori pembayaran SPP dari masing-masing siswa dapat dicetak seperti mencetak buku tabungan di bank sehingga mempermudah pekerjaan pihak administrasi keuangan. Administrasi keuangan dapat langsung melakukan pengaturan data pembayaran masing-masing siswa sesuai dengan kebutuhan dan dapat diubah sewaktu-waktu apabila ada kenaikan pembayaran SPP. Apabila siswa tersebut akan melakukan pembayaran, petugas dapat langsung memasukkan data. Hal sama juga dapat dilakukan untuk Data pembayaran Sumbangan Sukarela dan Tabungan Karyawisata";
  ?>

  
  <div class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Test Penalaran</h6>
        <div class="media text-muted pt-3">
          
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Artikel</strong>
               <?php echo $article; ?>
          </p>
        </div>


        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Kalimat yang ditemukan</strong>
            <?php 

                $searchWord = "pendidikan";
                $wordCount = substr_count(strtolower($article), strtolower($searchWord));
                echo "Kata \"" . $searchWord . "\" ditemukan sebanyak " . $wordCount . " kali dalam artikel.\n\n";
            ?>
          </p>
        </div>

        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Pengantian kata :</strong>
                <?php 
                
                    $replaceWord = "ialah";
                    $replacedArticle = str_ireplace("adalah", $replaceWord, $article);
                    echo "Artikel yang sudah diganti: \n" . $replacedArticle . "\n\n";
                
                ?>
          </p>
        </div>

        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Pengurutan kata berdasar abjad : </strong>
                <?php 
                
                $words = preg_split("/[\s,\.]+/", $replacedArticle); // memisahkan kata dalam artikel
                sort($words); // mengurutkan kata berdasarkan abjad
                echo "Kata-kata dalam artikel yang sudah diurutkan: \n" . implode(", ", $words) . "\n";
                
                ?>
          </p>
        </div>
       
      </div>
  </div>
    
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
