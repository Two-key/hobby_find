$(function () {
  let like = $('.like-toggle'); 
  let likeGroupId; 
  like.on('click', function () {
    let $this = $(this); 
    likeGroupId = $this.data('group-id'); 
   
    $.ajax({
      headers: { 
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }, 
      url: '/like', 
      method: 'POST', 
      data: { 
        'group_id': likeGroupId 
      },
    })
    
    .done(function (data) {
      $this.toggleClass('liked'); 
      $this.next('.like-counter').html(data.group_likes_count);
    })
    
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.log('fail');
      console.log("jqXHR          : " + jqXHR.status); 
                    console.log("textStatus     : " + textStatus);
                    console.log("errorThrown    : " + errorThrown.message);
    });
  });
  });
