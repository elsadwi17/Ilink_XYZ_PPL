$('document').ready(function(){
    $('#register-button').click(function(){
        if($('#email').val() == '' || $('#username').val() == '' || $('#password').val() == ''){
            if($('.register-form').children().hasClass('alert') != true){
                $('.register-form').prepend('<div class="alert alert-danger">Form tidak boleh kosong!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
            else{
                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Form tidak boleh kosong!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
        }
        else if($('#password').val().length < 8){
            if($('.register-form').children().hasClass('alert') != true){
                $('.register-form').prepend('<div class="alert alert-danger">Password minimal 8 karakter!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
            else{
                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Password minimal 8 karakter!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
        }
        else if($('#password').val().length > 20){
            if($('.register-form').children().hasClass('alert') != true){
                $('.register-form').prepend('<div class="alert alert-danger">Password maksimal 20 karakter!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
            else{
                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Password maksimal 20 karakter!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
        }
        else if($('#password').val() != $('#repeat-password').val()){
            if($('.register-form').children().hasClass('alert') != true){
                $('.register-form').prepend('<div class="alert alert-danger">Password tidak sama!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
            else{
                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Password tidak sama!</div>');
                $('#password').val('');
                $('#repeat-password').val('');
            }
        }
        else{
            $.ajax({
                type: 'post',
                url: 'register.php',
                data:{
                    register: 'register',
                    email: $('#email').val(),
                    username: $('#username').val(),
                    password: $('#password').val()
                },
                beforeSend: function(){
                    $('#register-button').html('<img src="../../assets/img/load.gif" alt="">');
                },
                success: function(response){
                    $('#register-button').html('Daftar');
                    if(response == 'success'){
                        window.location.href = '/iLink/account/login';
                    }
                    else{
                        if(response == 'email'){
                            if($('.register-form').children().hasClass('alert') != true){
                                $('.register-form').prepend('<div class="alert alert-danger">Email sudah ada!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                            else{
                                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Email sudah ada!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                        }
                        else if(response == 'username'){
                            if($('.register-form').children().hasClass('alert') != true){
                                $('.register-form').prepend('<div class="alert alert-danger">Username sudah ada!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                            else{
                                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Username sudah ada!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                        }
                        else{
                            if($('.register-form').children().hasClass('alert') != true){
                                $('.register-form').prepend('<div class="alert alert-danger">Format input salah!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                            else{
                                $('.register-form>.alert').replaceWith('<div class="alert alert-danger">Format input salah!</div>');
                                $('#password').val('');
                                $('#repeat-password').val('');
                            }
                        }
                    }
                }
            });
        }
    });
});