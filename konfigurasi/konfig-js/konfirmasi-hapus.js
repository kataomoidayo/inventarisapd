function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); 
    console.log(urlToRedirect); 
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
      })
      .then((result) => {
        if (result.isConfirmed) {
          window.location.href = urlToRedirect;
        }
      })
    }