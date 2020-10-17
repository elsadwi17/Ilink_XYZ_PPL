$('document').ready(function(){
    $('#login-button').click(function(){
        if($('#email').val() == '' || $('#password').val() == ''){
            if($('.login-form').children().hasClass('alert') != true){
                $('.login-form').prepend('<div class="alert alert-danger">Form kosong!</div>');
                $('#password').val('');
            }
            else{
                $('.login-form>.alert').replaceWith('<div class="alert alert-danger">kosong!</div>');
                $('#password').val('');
            }
        }
        else{
            $.ajax({
                type: 'post',
                url: 'login.php',
                data:{
                    login: 'login',
                    email: $('#email').val(),
                    password: $('#password').val()
                },
                beforeSend: function(){
                },
                success: function(response){
                    $('#login-button').html('Masuk');
                    if(response == 'success'){
                        window.location.href = '/iLink/';
                    }
                    else{
                        if($('.login-form').children().hasClass('alert') != true){
                            $('.login-form').prepend('<div class="alert alert-danger">email atau password salah!</div>');
                            $('#password').val('');
                        }
                        else{
                            $('.login-form>.alert').replaceWith('<div class="alert alert-danger">email atau password salah!</div>');
                            $('#password').val('');
                        }
                    }
                }
            });
        }
    });
});