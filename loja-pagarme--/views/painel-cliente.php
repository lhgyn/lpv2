<?php
require_once("../controllers/Cripty/MyCripty.class.php");
$mc = new MyCripty();
$mc -> chave = 97;
$mc -> add_text = md5(sha1("LifHeal*123"));
$id = $mc -> dec($_GET['p']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Painel Cliente - Biodryne</title>
		<script src="../app/ajaxGetPost.js"></script>
	</head>

	<body>
		
		<table id="clienteTableTr">
			<tr>				
				<td>Nome</td>
				<td>Produto</td>
				<td>Valor</td>	
				<td>Forma de Pagamento</td>
				<td>Status do Pagamento</td>
				<td>&nbsp;</td>
			</tr> 
		</table>
		
		<script src="../js/vendor/jquery-1.11.2.min.js"></script>
	    <!--<script src="../app/infocompracliente.js"></script>-->
		<script language="javascript">
			jQuery(document).ready(function($) {
				var id = "<?php echo $id; ?>";
				var url = '../controllers/proxy/infoCompraCliente/'+id;
				
				$.ajax({
					type: "GET",
					dataType: "json",
					url: url,
				}).done(function (data) {
					//console.log(data);
					//alert(data.token);
					$('#token').val(data.token);
					$('#nomecompleto').val(data.nomecompleto);
					$('#produto').val(data.produto);
					$('#valor').val(data.valor);
					$('#formapagamento').val(data.formapagamento);
					$('#statuspagamento').val(data.statuspagamento);
					
					if(data.formapagamento == "BoletoBancario") {
						var cont = "<tr><td>"+data.nomecompleto+"</td><td>"+data.produto+"</td><td>"+data.valor+"</td><td>"+data.formapagamento+"</td><td>"+data.statuspagamento+"</td><td class='action'><a href='https://desenvolvedor.moip.com.br/sandbox/Instrucao.do?token="+data.token+"' target='_blank' >Imprimir Boleto</a></td></tr>";
					$(cont).appendTo("#clienteTableTr");
					}else{
						var cont = "<tr><td>"+data.nomecompleto+"</td><td>"+data.produto+"</td><td>"+data.valor+"</td><td>"+data.formapagamento+"</td><td>"+data.statuspagamento+"</td><td>&nbsp;</td></tr>";
					$(cont).appendTo("#clienteTableTr");
					}
					
				});
				
			});
		</script>
		<!-- -->
		
	</body>
</html>

