$(document).ready(function () {
    $("#sendData").on("submit", function (e) {
        var html = "";
        var erro = document.querySelector("#erro");
        e.preventDefault();
        var form = $('#sendData')[0];
        var nome = form.nome_profissional.value;
        if (nome == "") {
            html = "<div class='alert alert-danger' role='alert'>CAMPO NOME REQUERIDO</div>";
            erro.innerHTML = html;
            return false;
        }
        var formData = new FormData(form);
        formData.set('nome_profissional', nome);
        $.ajax({
            url: "post.php",
            processData: false,
            dataTypeIn: 'plain',
            contentType: false,
            type: 'POST',
            data: formData
        }).done(function (data) {
            if (data === "true") {
                location.reload();
            } else {
                html += "<div class='alert alert-danger' role='alert'>ERRO AO CADASTRAR PROFISSIONAL</div>";
                erro.innerHTML = html;
            }
        });
    });
});

