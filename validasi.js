function validateForm() {
    const judul = document.forms["filmForm"]["judul"].value.trim();
    const genre = document.forms["filmForm"]["genre"].value.trim();
    const sutradara = document.forms["filmForm"]["sutradara"].value.trim();
    const tahun = document.forms["filmForm"]["tahun"].value;
    const gmail = document.forms["filmForm"]["gmail"].value.trim();

    if (!judul || !genre || !sutradara || !tahun || !gmail) {
        alert("Semua field harus diisi!");
        return false;
    }

    const currentYear = new Date().getFullYear();
    if (isNaN(tahun) || tahun < 1900 || tahun > currentYear) {
        alert("Tahun tidak valid!");
        return false;
    }

    if (!gmail.includes("@") || !gmail.endsWith("@gmail.com")) {
        alert("Email harus format Gmail dan mengandung '@gmail.com'");
        return false;
    }

    return true;
}
