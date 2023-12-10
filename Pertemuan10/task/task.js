/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - nama filr yang didownload
 */
function showDownload(result) {
  console.log("Download selesai");
  console.log("Hasil Download: " + result);
}

/**
 * Fungsi untuk download file
 * @param {string} callback - Function callback show
 */
function download(callShowDownload) {
  setTimeout(function () {
    const result = "windows-11.exe";
    callShowDownload(result);
  }, 3000);
}

download(showDownload);
