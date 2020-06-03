url_site = window.location.href;

$("#addCidades").on("submit", function(e){
	e.preventDefault();
	var nome = $("#nomeCidade").val();
	
	function string_to_slug (nome) {
	    nome = nome.replace('/^\s+|\s+$/g', ''); // trim
	    nome = nome.toLowerCase();
	  
	    // remove accents, swap ñ for n, etc
	    var from = "ãàáäâèéëêìíïîòóöôùúüûñç·/_,:;";
	    var to   = "aaaaaeeeeiiiioooouuuunc------";
	    for (var i=0, l=from.length ; i<l ; i++) {
	        nome = nome.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	    }

	    nome = nome.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
	        .replace(/\s+/g, '-') // collapse whitespace and replace by -
	        .replace(/-+/g, '-'); // collapse dashes

	    return nome;
	}

	var slug = string_to_slug(nome);

	if (nome == "") {
		swal({
			title: "Aviso!", 
			text: "O campo NOME DA CIDADE é obrigatório.", 
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
			url: url_site+'verificaSlugCidade/',
			type: 'POST',
			data: {slug:slug},
			success: function(dados){
				if (dados != 0) {
					slug = slug+'-'+dados;
				}
				$.ajax({
					url: url_site+'addCidade/',
					type: 'POST',
					data: {nome:nome, slug:slug},
					success: function(dados){
						if (dados == 1) {
							swal({
								title: "Parabéns!", 
								text: "Cidade adicionada com sucesso!", 
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
								text: "A cidade não pôde ser adicionada.", 
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
	}
});

$('#modalExCidade').on('show.bs.modal', function(event){
	var button = $(event.relatedTarget);
	var id = button.data('id');
	var nome = button.data('nome');
	var modal = $(this);

	modal.find('.modal-title').text('Excluir Cidade!');
	modal.find('.texto-confirmacao').html("Tem certeza que deseja excluir a cidade: <span class=text-danger>"+nome+"</span>?<br>Todos os dados dela serão apagados.");

	$("#excluirCidade").on("click", function(){
		$.ajax({
			url: url_site+'excluiCidade/',
			type: 'POST',
			data: {id:id},
			success: function(dados){
				if(dados == 1){
					swal({
						title: "Parabéns!", 
						text: "Cidade excluída com sucesso!", 
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
						text: "A cidade não pôde ser excluída.", 
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

$('#modalEdCidade').on('show.bs.modal', function(event){
	var button = $(event.relatedTarget);
	var id = button.data('id');
	var nome = button.data('nome');
	var modal = $(this);

	$(".close").on('click', function(){
		window.location.reload();
	});
	modal.find('.modal-title').text('Adicionar Imagem de '+nome);

	var image_crop = $('#image_demo').croppie({
		enableExif: true,
		viewport:{
			width: 500,
			height: 500,
			type: 'square'
		},
		boundary:{
			width: 600,
			height: 600
		}
	});
	$('#fotoCidade').on('change', function(){
		var reader = new FileReader();
		reader.onload = function(event){
			image_crop.croppie('bind', {
				url: event.target.result
			});
		}
		reader.readAsDataURL(this.files[0]);
		$('#modalCorteImagem').modal('show');
	});
	$('#cortarImagem').click(function(event){
		image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(resposta){
			$.ajax({
				url: url_site+'alteraImagem/',
				type: 'POST',
				data: {foto:resposta, id:id},
				success: function(dados){
					$('#modalCorteImagem').modal('hide');
					if(dados == "1"){
						swal({
							title: "Parabéns!", 
							text: "Imagem adicionada com sucesso.", 
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
						.then((ok) => {
							window.location.reload();
						});
					}else if(dados == "2"){
						swal({
							title: "Parabéns!", 
							text: "Imagem alterada com sucesso.", 
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
						.then((ok) => {
							window.location.reload();
						});
					}else{
						swal({
							title: "Erro!", 
							text: "A imagem não pôde ser alterada.", 
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
		})
	});
});