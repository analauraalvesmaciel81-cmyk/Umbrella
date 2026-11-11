$(document).ready(function () {

    $('#entrar').click(function () {
        Swal.fire({
            title: 'Entrando...',
            text: 'Aguarde enquanto processamos seu login.',
            icon: 'info',
            showConfirmButton: false,
            allowOutsideClick: false,
        });
        if ($('#email').val() === '' || $('#senha').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Por favor, preencha todos os campos.',
                cofirmButtonText: 'OK',
                confirmButtonColor: '#E40520',
                alertcolor: '#e405bb',
            });
            return;
        }

        var letras = $('#senha').val().length;
        console.log(letras);
        if (letras < 8) {
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'A senha deve ter pelo menos 8 caracteres.',
            });
            return;
        }

        var email = $('#email').val();
        console.log(email);
        if (!email.includes('@') || !email.includes('.')) {
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Por favor, insira um e-mail válido.',
            });
            return;
        }

        $.ajax({
            url: '../api/login_professor',
            type: 'POST',
            data: {
                email: $('#email').val(),
                senha: $('#senha').val()
            },

            success: function (response) {
                if (response.erro == 'n') {
                    alert(response.token);
                    $.cookie('token', response.token, { expires: 7 });
                    $.cookie('professor_id', response.professor_id, { expires: 7 });

                    setTimeout(function () {
                        window.location.href = '../home';
                    }, 2000);


                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'E-mail ou senha incorretos. Por favor, tente novamente.'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Ocorreu um erro ao processar seu login. Por favor, tente novamente mais tarde.'
                });
            }
        })

        $.ajax({
            url: '../api/login_aluno',
            type: 'POST',
            data: {
                email: $('#email').val(),
                senha: $('#senha').val()
            },
            success: function (response) {
                if (response.erro == 'n') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Token gerado com sucesso!',
                        text: response.token
                        
                    });
                }
            },
        })

        $.ajax({
            url: '../api/login_professor',
            type: 'POST',
            data: {
                email: $('#email').val(),
                senha: $('#senha').val()
            },
            success: function (response) {
                if (response.erro == 'n') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Token gerado com sucesso!',
                        text: response.token
                    });

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Ocorreu um erro ao processar sua solicitação. Por favor, tente novamente mais tarde.'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Ocorreu um erro ao processar sua solicitação. Por favor, tente novamente mais tarde.'
                });
            }
        })

    });
});  