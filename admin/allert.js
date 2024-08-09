function showAlert1() {
    // Check if an alert is already present
    if (document.querySelector('.alert')) {
        return;
    }

    // Create alert div
    const alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-success alert-dismissible fade show';
    alertDiv.role = 'alert';

    // Create alert content
    alertDiv.innerHTML = `
        <h4 class="alert-heading">Pengumpulan Sampah</h4>
        <ul>
            <li style="list-style-type: none;"><strong>Pengumpulan Terjadwal :</strong></li>
            <li style="list-style-type: none;">Kami mengatur jadwal rutin untuk pengumpulan sampah dari rumah, kantor, dan tempat usaha Anda.</li><br>
            <li style="list-style-type: none;"><strong>Pengumpulan On-Demand:</strong></li>
            <li style="list-style-type: none;">Layanan pengumpulan sampah sesuai permintaan untuk kebutuhan mendesak atau volume sampah yang besar.</li><br>
            <li style="list-style-type: none;"><strong>Fasilitas Drop-Off:</strong></li>
            <li style="list-style-type: none;">Lokasi-lokasi drop-off strategis dimana Anda bisa langsung mengantarkan sampah yang dapat didaur ulang.</li>
        </ul>
        <hr>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert(this)">
            <span aria-hidden="true">&times;</span>
        </button>
    `;

    // Append alert to body or a specific container
    document.getElementById('alert-container').appendChild(alertDiv);
}

function showAlert2() {
    // Check if an alert is already present
    if (document.querySelector('.alert')) {
        return;
    }

    // Create alert div
    const alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-success alert-dismissible fade show';
    alertDiv.role = 'alert';

    // Create alert content
    alertDiv.innerHTML = `
        <h4 class="alert-heading">Daur Ulang</h4>
        <ul>
            <li style="list-style-type: none;"><strong>Pemilahan dan Pengolahan:</strong></li>
            <li style="list-style-type: none;">Sampah yang terkumpul akan disortir berdasarkan jenisnya (plastik, kertas, kaca, logam, dll.) dan kemudian diolah menggunakan teknologi canggih untuk memastikan kualitas daur ulang yang tinggi.</li><br>
            <li style="list-style-type: none;"><strong>Pembuatan Produk Baru:</strong></li>
            <li style="list-style-type: none;">Hasil daur ulang diolah menjadi berbagai produk baru seperti bahan bangunan, barang-barang konsumsi, dan produk kreatif lainnya..</li><br>
            <li style="list-style-type: none;"><strong>Pengelolaan Limbah Berbahaya:</strong></li>
            <li style="list-style-type: none;">Penanganan limbah berbahaya dengan metode yang aman dan sesuai regulasi untuk mengurangi dampak negatif terhadap lingkungan.</li>
        </ul>
        <hr>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert(this)">
            <span aria-hidden="true">&times;</span>
        </button>
    `;

    // Append alert to body or a specific container
    document.getElementById('alert-container').appendChild(alertDiv);
}

function showAlert3() {
    // Check if an alert is already present
    if (document.querySelector('.alert')) {
        return;
    }

    // Create alert div
    const alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-success alert-dismissible fade show';
    alertDiv.role = 'alert';

    // Create alert content
    alertDiv.innerHTML = `
        <h4 class="alert-heading">Edukasi dan Kesadaran Lingkungan</h4>
        <ul>
            <li style="list-style-type: none;"><strong>Workshop dan Seminar:</strong></li>
            <li style="list-style-type: none;">Mengadakan berbagai workshop dan seminar untuk sekolah, komunitas, dan perusahaan mengenai cara mendaur ulang dengan benar dan manfaatnya bagi lingkungan.</li><br>
            <li style="list-style-type: none;"><strong>Kampanye Kesadaran:</strong></li>
            <li style="list-style-type: none;">Kampanye dan kegiatan komunitas yang bertujuan untuk mempromosikan praktik ramah lingkungan dan pentingnya daur ulang.</li><br>
            <li style="list-style-type: none;"><strong>Sumber Daya Edukatif:</strong></li>
            <li style="list-style-type: none;">Penyediaan materi edukatif seperti buku panduan, video, dan artikel yang dapat diakses oleh publik untuk mempelajari lebih lanjut tentang daur ulang.</li>
        </ul>
        <hr>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert(this)">
            <span aria-hidden="true">&times;</span>
        </button>
    `;

    // Append alert to body or a specific container
    document.getElementById('alert-container').appendChild(alertDiv);
}

function closeAlert(button) {
    // Remove the alert div from DOM
    const alertDiv = button.parentElement;
    alertDiv.parentElement.removeChild(alertDiv);
}

