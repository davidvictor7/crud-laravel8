$(document).ready(function () {
    
    $(".create").on('click', function (e) { 
        $(".modalCreate").modal('show');
    });
});

function cadastrarPost(){
    let titulo = $("#tituloPost").val();
    let conteudo = $("#conteudoPost").val();
    let token = $("input[name='_token']").val();
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "criarPost",
        data: {
            "titulo": titulo,
            "conteudo": conteudo,
        },
        dataType: "JSON",
        success: function (data) {
            console.log('deu certo');
        },
        error: function (data){
            console.log('deu ruim');
        }
    });
}