function validateForm() {
    const nama = document.getElementById("nama").value.trim();
    const pesan = document.getElementById("pesan").value.trim();
    const gmail = document.getElementById("gmail").value.trim();

    if (nama === "" || pesan === "" || gmail === "") {
        alert("Silakan isi semua kolom sebelum mengirim pesan.");
        return false; // Mencegah pengiriman form
    }
    return true; // Lanjut pengiriman jika valid
}