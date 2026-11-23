$(document).ready(function () {

    $('#entrar').click(function () {
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

        let file = $('imagem')[0].files[0];
        if (file && file.size > 100000000) {
            Swal.fire({
                icon:"warning",
                title:"Imagem muito grande",
                text:"A imagem deve conter no maximo 100 MB"
            })
            return;
        }

        let formData = new FormData();
        if (file) {
            formData.append("imagem", file);
        }

        formData.append("nome", $("#nome").vak=l());
        formData.append("email", $("#email").vak=l());
        formData.append("senha", $("#senha").vak=l());
        formData.append("nif", $("#nif").vak=l());
        formData.append("professor_id", professor_id);
        formData.append("token", token);




        $.ajax({
            type: 'POST',
            url: '../api/login_bibliotecaria',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.erro == 'n') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Token gerado com sucesso!',
                        text: response.token
                    });
                    $.cookie('token', response.token, { expires: 7 });
                    $.cookie('bibliotecaria_id', response.bibliotecaria_id, { expires: 7 });

                    setTimeout(function () {
                        window.location.href = '../home_bibliotecaria';
                    }, 2000);

                    if (response.erro == 's') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro',
                            text: 'E-mail ou senha incorretos. Por favor, tente novamente.'
                        });
                    }
                }
            }
        })

    });
});  