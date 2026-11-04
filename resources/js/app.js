
import './bootstrap';

import * as bootstrap from 'bootstrap';
import $ from 'jquery';

window.bootstrap = bootstrap;
window.$ = window.jQuery = $;

// Fitur cek ketersediaan kursus menggunakan Ajax
$(document).ready(function () {

    $('#courseSelect').on('change', function () {

        const courseId = $(this).find(':selected').data('course-id');
        const availability = $('#availability');

        // Jika belum memilih kursus
        if (!courseId) {
            availability
                .removeClass('text-danger text-success')
                .addClass('text-primary')
                .text('Silakan pilih kursus untuk melihat sisa kursi.');
            return;
        }

        availability
            .removeClass('text-danger text-success')
            .addClass('text-primary')
            .text('Sedang memeriksa ketersediaan kursi...');

        // Mengambil data dari Laravel
        $.ajax({
            url: `/courses/${courseId}/availability`,
            method: 'GET',
            dataType: 'json',

            success: function (data) {
                availability
                    .removeClass('text-primary text-danger')
                    .addClass('text-success')
                    .text(`${data.course}: ${data.remaining} kursi tersisa.`);
            },

            error: function () {
                availability
                    .removeClass('text-primary text-success')
                    .addClass('text-danger')
                    .text('Gagal memuat data ketersediaan kursi.');
            }
        });

    });

    // Memeriksa kursus yang sudah terpilih
    $('#courseSelect').trigger('change');

});
