$(document).ready(function() {
    $('#tabel').DataTable();
});

function loadFile(event) {
    var fileName = $('#inputFoto').val().split("\\").pop();
    $('#inputFoto').siblings(".custom-file-label").addClass("selected").html(fileName);
};

function setSelectOrganisasi(data_organisasi){

    // set select input
    listSelect = $('.select-organisasi');
    for(i = 0; i < listSelect.length; i++){
        id = listSelect[i].id;
        $('#'+id).val(data_organisasi[id]);
    }
}


function setSideBar(id, parent){
    $('.menuSide').removeClass('active'); //this will remove all active class after page loading
    $('#'+id).addClass('active'); // this will append active class to the current clicked menu
    if(parent != null){
      $('#'+parent).addClass('active');
      $('#li-'+parent).addClass('menu-open');
    }
}

function showError(msg){
      Swal.fire(
        'Gagal!',
        msg,
        'error'
      );
   }
function showSuccess(msg){
  Swal.fire(
    'Berhasil!',
    msg,
    'success'
  );
}

function deleteData(url){
  
  var token =  $("[name='csrf-token']").attr('content');
  
   Swal.fire({
    title: 'Are you sure?',
    text: "Organisasi ini akan dihapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!',
    cancelButtonText: 'Batalkan'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: url,
        headers: {
          'X-CSRF-Token': token 
        },
        type: 'DELETE',
        success: function(response) {
          location.reload();
        }
     });
    }
    return false;
  });
}