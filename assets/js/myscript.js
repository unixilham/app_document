const flashData = $('.flash-data').data('flash');

const judul = $('.judul').text();


console.log(flashData);
if (flashData) {
  Swal.fire({
    title: 'Data ' + judul,
    text: 'Berhasil di' + flashData,
    icon: 'success'
  });
}



$('.tombol-hapus').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data akan dihapus!",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus data!'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  })

});

$(document).ready(function () {
  $('#dataTabel').DataTable({
    lengthMenu: [5, 15, 20, 25, 50 ],
    language: {
      search: "Filter Data:",
     
    },
   
  });
});

$(document).ready(function () {
  $('#dataTabel1').DataTable({
    scrollY:        "300px",
    scrollX:        true,
    scrollCollapse: true,
    paging:         false,
    fixedColumns:   {
        right: 1
    },
    columnDefs: [
      { "width": "10px", "targets": 0 },
      { "width": "40px", "targets": 1 },
      { "width": "100px", "targets": 2 },
      { "width": "70px", "targets": 3 },
      { "width": "70px", "targets": 4 },
      { "width": "70px", "targets": 5 }
    ],
});
});





