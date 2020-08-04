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

listEvents = [];
function initCalendar(data_peminjaman){
    var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid', 'timeGrid', 'list'],

          
          eventAfterRender: function(event, element) {
              $(element).tooltip({
                  title: event.title,
                  container: "body",
                  trigger: 'hover',
                  placement: 'top'
              });
          },
          timeZone: 'UTC',
          header: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          weekNumbers: true,
          eventLimit: true, // allow "more" link when too many events
          events: getListEvents(data_peminjaman)
        });

        calendar.render();
}

function getListEvents(data_peminjaman){
    for(i = 0; i < data_peminjaman.length; i++){
      if(data_peminjaman[i].status_peminjaman == "dipesan"){
          color = '#28a745';
      }else{
          color = '#ffc107';
      }
      var data2 = {
          title          : data_peminjaman[i].nama_pengaju,
          start          : data_peminjaman[i].tanggal_peminjaman,
          end            : data_peminjaman[i].tanggal_kembali,
          description    : 'description for All Day Event',
          backgroundColor: color, //yellow
          borderColor    : color //yellow
      }
      listEvents.push(data2);
    }
    return listEvents;
  }