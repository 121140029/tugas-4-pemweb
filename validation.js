function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const fileInput = document.getElementById("fileUpload");
    const file = fileInput.files[0];

    // Name validation
    if (name.length < 3) {
        alert("Nama harus memiliki minimal 3 karakter.");
        return false;
    }

    // Phone validation
    if (!/^\d+$/.test(phone) || phone.length < 10) {
        alert("Nomor telepon harus berupa angka dan minimal 10 digit.");
        return false;
    }

    // File validation
    if (file) {
        const maxSize = 2 * 1024 * 1024; // 2MB
        if (file.size > maxSize) {
            alert("Ukuran file tidak boleh lebih dari 2MB.");
            return false;
        }

        const allowedTypes = ["text/plain"];
        if (!allowedTypes.includes(file.type)) {
            alert("Tipe file harus berupa teks (.txt).");
            return false;
        }
    } else {
        alert("Silakan unggah file teks.");
        return false;
    }

    return true;
}
