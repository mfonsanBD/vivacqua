url_site = window.location.href;

$("#addCaracteristicas").on("submit", function(e){
	e.preventDefault();
	var nome = $("#nomeCaracteristica").val();

	if (nome == "") {
		swal({
			title: "Aviso!", 
			text: "O campo NOME DA CARACTERÍSTICA é obrigatório.", 
			icon: "warning",
			buttons: {
				confirm: {
				    text: "Ok",
				    value: true,
				    visible: true,
				    className: "bg-warning",
				    closeModal: true
				}
			}
		});
	}else{
		$.ajax({
			url: url_site+'addCaracteristica/',
			type: 'POST',
			data: {nome:nome},
			success: function(dados){
				if (dados == 1) {
					swal({
						title: "Parabéns!", 
						text: "Característica adicionada com sucesso!", 
						icon: "success",
						buttons: {
							confirm: {
							    text: "Ok",
							    value: true,
							    visible: true,
							    className: "bg-success",
							    closeModal: true
							}
						}
					})
					.then((resposta) => {
						window.location.reload();
					});
				}
				else{
					swal({
						title: "Erro!", 
						text: "A característica não pôde ser adicionada.", 
						icon: "error",
						buttons: {
							confirm: {
							    text: "Ok",
							    value: true,
							    visible: true,
							    className: "bg-danger",
							    closeModal: true
							}
						}
					});
				}
			}
		});
	}
});
$('#modalExCaracteristica').on('show.bs.modal', function(event){
	var button = $(event.relatedTarget);
	var id = button.data('id');
	var nome = button.data('nome');
	var modal = $(this);

	modal.find('.modal-title').text('Excluir Característica!');
	modal.find('.texto-confirmacao').html("Tem certeza que deseja excluir a característica: <span class=text-danger>"+nome+"</span>?");

	$("#excluirCaracteristica").on("click", function(){
		$.ajax({
			url: url_site+'excluiCaracteristica/',
			type: 'POST',
			data: {id:id},
			success: function(dados){
				if(dados == 1){
					swal({
						title: "Parabéns!", 
						text: "Característica excluída com sucesso!", 
						icon: "success",
						buttons: {
							confirm: {
							    text: "Ok",
							    value: true,
							    visible: true,
							    className: "bg-success",
							    closeModal: true
							}
						}
					})
					.then((resposta) => {
						window.location.reload();
					});
				}else{
					swal({
						title: "Erro!", 
						text: "A característica não pôde ser excluída.", 
						icon: "error",
						buttons: {
							confirm: {
							    text: "Ok",
							    value: true,
							    visible: true,
							    className: "bg-danger",
							    closeModal: true
							}
						}
					});
				}
			}
		});
	});
});