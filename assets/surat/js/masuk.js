$(document).ready(function(){
    //jquery dropdown
    $(".dropdown-button").dropdown({ hover: false });

    //jquery sidenav on mobile
    $('.button-collapse').sideNav({
    	menuWidth: 240,
    	edge: 'left',
    	closeOnClick: true
    });

    //jquery datepicker
    $('#tgl_surat,#batas_waktu,#dari_tanggal,#sampai_tanggal').pickadate({
    	selectMonths: true,
    	selectYears: 10,
    	format: "yyyy-mm-dd"
    });

    //jquery teaxtarea
    $('#isi_ringkas').val('');
    $('#isi_ringkas').trigger('autoresize');

    //jquery dropdown select dan tooltip
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 10});

    //jquery autocomplete
    $( "#kode" ).autocomplete({
        serviceUrl: "kode.php",   // Kode php untuk prosesing data.
        dataType: "JSON",           // Tipe data JSON.
        onSelect: function (suggestion) {
        	$( "#kode" ).val(suggestion.kode);
        }
    });

    //jquery untuk menampilkan pemberitahuan
    $("#alert-message").alert().delay(5000).fadeOut('slow');

    //jquery modal
    $('.modal-trigger').leanModal();
});
