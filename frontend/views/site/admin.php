<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Informasi Admin';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/admin.css', ['depends' => [yii\bootstrap5\BootstrapAsset::class]]);

?>

<div class="admin-info container py-5">
    <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>

    <!-- Tentang Admin -->
    <div class="row mb-5">
        <div class="col-lg-6">
            <h2 class="text-uppercase text-primary">Tentang Admin</h2>
            <p>Admin kami bertugas untuk mengelola dan memastikan pengalaman penyewa lapangan gor badminton berjalan dengan baik. Dengan pengalaman yang memadai, admin siap membantu Anda dalam segala hal terkait sewa lapangan.</p>
        </div>
        <div class="col-lg-6 text-center">
            <img src="<?= Yii::getAlias('@web/template/img/Ketua Pengelola GOR.jpeg') ?>" class="img-fluid rounded shadow" alt="Admin" style="max-width: 300px; height: auto;">
        </div>
    </div>

    <!-- Visi dan Misi GOR -->
    <div class="vision-mission mb-5">
        <h2 class="text-uppercase text-success">Visi dan Misi GOR</h2>
        <h3 class="mt-4">Visi:</h3>
        <p>Menjadi pusat olahraga badminton terbaik di daerah ini, yang menyediakan fasilitas dan layanan berkualitas untuk semua kalangan.</p>

        <h3 class="mt-3">Misi:</h3>
        <ul class="list-unstyled">
            <li><i class="bi bi-check-circle-fill text-warning"></i> Menyediakan lapangan yang bersih dan nyaman untuk berolahraga.</li>
            <li><i class="bi bi-check-circle-fill text-warning"></i> Mengembangkan program pelatihan dan acara kompetisi untuk meningkatkan kualitas pemain.</li>
            <li><i class="bi bi-check-circle-fill text-warning"></i> Menyediakan layanan pelanggan yang ramah dan responsif.</li>
        </ul>
    </div>

    <!-- Lokasi GOR -->
    <div class="gor-location mb-5">
        <h2 class="text-uppercase text-info">Lokasi GOR</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>GOR terletak di Jl. Tulang Bawang Sel. No.26, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136. Kami mudah diakses dengan transportasi umum dan memiliki parkir yang cukup untuk pengunjung.</p>
            </div>
            <div class="col-lg-6">
                <!-- Masukkan peta atau gambar lokasi -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.375035558972!2d110.81359007500232!3d-7.534011492479236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16aef3f5fd25%3A0x901de3bca01ebcf4!2sITS%20PKU%20Muhammadiyah%20Surakarta!5e0!3m2!1sid!2sid!4v1728373886601!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Kontak Admin -->
    <div class="contact-admin">
        <h2 class="text-uppercase text-danger">Kontak Admin</h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, silakan hubungi kami melalui:</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-envelope-fill text-white"></i> Email: indraprasetya415@gmail.com</li>
            <li><i class="bi bi-telephone-fill text-white"></i> Telepon: 0895-7043-11012</li>
            <li><i class="bi bi-whatsapp text-white"></i> WhatsApp: 0895704311012</li>
        </ul>
    </div>
</div>
