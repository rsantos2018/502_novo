<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Front Alunos</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

<h1>Alunos</h1>

<form id="inserirAluno">
	<input type="text" id="nome">
	<input type="text" id="email">
	<button>Salvar</button>
</form>

<table id="listaAluno">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Email</th>
	</tr>
</table>

</body>

<script type="text/javascript">
	$(document).ready(function () {
		var endpoint = 'http://localhost/502/aula07/alunoAPI/';
         $.get(endpoint, function (data) {
                var tableContent = '<tr><th>#</th><th>Nome</th><th>Email</th></tr>';
                $.each(data.data, function (index, val) {
                    tableContent += '<tr>';
                    tableContent += '<td>' + val.id + '</td>';
                    tableContent += '<td>' + val.nome + '</td>';
                    tableContent += '<td>' + val.email + '</td>';
                    tableContent += '</tr>';
                });
                $('#listaAluno').html(tableContent);
            });
         $('#inserirAluno').on('submit',function(event){
         	event.preventDefault();
         	var nome = $('#nome').val();
            var email = $('#email').val();
            
            var aluno = {nome: nome , email: email };
            
            $.post(endpoint,JSON.stringify(aluno),function(result){
            	alert(result.message);
            	window.location.reload(true);
            });
         });
    });
</script>
</html>