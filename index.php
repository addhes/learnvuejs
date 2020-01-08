<?php
// untuk mencegah error akibat CORS
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

echo "SIMULASI KIRIM DATA FORM <hr>";

// menampilkan data yang dikirimkan dengan method post
print_r($_POST);

if( this.errors.length === 0 ){
    //alert('Terima kasih telah mengisi data dengan benar!')

    // persiapkan data
    let formBook = this.$refs.formBook
    formData = new FormData(formBook);

    // kirim data ke server
    let xhttp = new XMLHttpRequest() // create objek XMLHttp

    // definisikan fungsi ketika terjadi perubahan state
    xhttp.onreadystatechange = function() {
        // state ini menunjukkan data terkirim dan diterima server dengan baik
        if (this.readyState == 4 && this.status == 200) {
            // respon text dari server
            console.log(this.responseText)
        }
    }
    // sesuaikan dengan lokasi file index.php di lokasi komputer kamu
    xhttp.open("POST", "http://localhost/index.php", true)

    // bisa juga langsung nama filenya jika berada dalam satu folder yang sama
    // xhttp.open("POST", "index.php", true)

    // kirim objek formData
    xhttp.send(formData)
}
