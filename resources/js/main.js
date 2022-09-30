$('#form_reg').on('submit',function(e){
    e.preventDefault();

    let name = $('#InputName').val();
    let email = $('#InputEmail').val();
    let phone = $('#InputPhone').val();
    let address = $('#InputAdress').val();

    var data = new FormData(this)
    $.ajax({
      url: "/validateForm",
      type:"POST",
      data:data,
      processData: false,
      contentType: false,
      dataType: 'json',

      beforeSend:	function() {
        $(document).find('span.error-text').text('');
    },
    success:function(response){        
        $('#successMsg').show();
        
        $(document).find('input').val('');
        $(document).find('textarea').val('');

        setTimeout(function(){
            
            window.location.href = '/';
        }, 3000);

        //alert(response.msg);
      },
      error: function(response) {
        $('.name_error').text(response.responseJSON.errors.name);
        $('.email_error').text(response.responseJSON.errors.email);
        $('.phone_error').text(response.responseJSON.errors.phone);
        $('.address_error').text(response.responseJSON.errors.address);
      
      },
      });
    });