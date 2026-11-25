$(document).ready(function(){

});

function deletar_professor(id_reservaprofessor){
    let reservaprofessor_id = $.cookie('reservaprofessor_id');
    let token = $.cookie('token');

    $.ajax({
        type: "DELETE",
        url: "/api/deletar_professor",
        data: {
            id_reservaprofessor: id_reservaprofessor,
            bibliotecaria_id: bibliotecaria_id,
            token: token
        },
        dataType: "json",
        success: function(response){
            if(response.erro == 'n'){
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Reserva deletada'
                }). then(() => {
                    location.reload();
                });
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Ocorreu um erro'
                });
            }
            
        }
    });

}