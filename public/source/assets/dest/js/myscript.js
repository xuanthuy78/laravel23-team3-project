$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
    console.log('ready');
    $('div.alert').delay(1000).slideUp();
});

