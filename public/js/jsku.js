// Fungsi untuk efek mengetik
function typeEffect(text, speed) {
    let i = 0;
    const typingElement = $('#teks');

    // Fungsi rekursif untuk menggabungkan teks satu per satu
    function typeNextChar() {
        if (i < text.length) {
            typingElement.text(typingElement.text() + text.charAt(i));
            i++;
            setTimeout(typeNextChar, speed);
        }
    }

    typeNextChar();
}

// Panggil fungsi efek mengetik saat halaman dimuat
$(document).ready(function () {
    const textToType = 'Mending Ngapa-ngapain dari pada ga ngapa-ngapain';
    const typingSpeed = 100; // Kecepatan mengetik (dalam milidetik)
    typeEffect(textToType, typingSpeed);

    let Hasil = false;
    // Perform animation when the button is clicked
    $('#Button').click(function (event) {
        // Menggunakan toggle() untuk mengganti tampilan antara komponen1 dan komponen2
        $('#header').animate({ 'margin-top': '-100px' }, 500);
        $('#akun').toggle();
        $('#register').toggle();
    });
});
