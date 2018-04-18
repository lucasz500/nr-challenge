<html>
<head>
<meta charset="UTF-8"/>
<title>Document</title>
<link href="https://www.compras.df.gov.br/publico/css/style.css" rel="stylesheet" type="text/css">
<script>
function Valida_Busca(){

	if((document.busca.codigo.value == "" ) && (document.busca.objEdital.value == "" ) && (document.busca.itemEdital.value == "") && (document.busca.modalidade.value == "")){
		alert("Informe um critério para a busca.")
		document.busca.codigo.focus()
		return false
	}
	busca.submit() 
}
</script>
</head>
<body>


<table width="30%" border="0" cellpadding="0" cellspacing="0">
<tr> 
	<td width="2">&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr> 
	<td width="10">&nbsp;</td>
	<td class="borda-verde">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr> 
			<td height="15" class="tribuchet-13-verde-claro" style="padding-left:2"> Localizar </td>
		</tr>
		<tr> 
			<td height="2" background="library/imagem/bg_separacao_horizontal.gif"><img src="library/imagem/space.gif" width="1" height="1"></td>
		</tr>
		<tr> 
			<td>
				<table width="502px" border="0" cellpadding="0" cellspacing="0">
				<form action="nr-challenge.php" method="post" name="busca" id="busca">
				<tr bgcolor="#e5e5e5">
					<td class="tribuchet-11-escuro" style="padding-left:3">
						Número/Ano(99): <br>	
						<input type"text" name="codigo" id="txtCampo1" value="" class="form" size="22" style="height:15;width:200" maxlength="30" 
						onKeyUp="TrocaAspa(codigo);limpaCampos(2,3,4)" onKeyPress="acionaEnter(event.keyCode)">
					</td>
					<td class="tribuchet-11-escuro">
						Objeto do Edital: <br>	
						<input type"text" name="objEdital" id="txtCampo2" value="" class="form" style="height:15;width:200" size="22" maxlength="50" 
						onkeyup="TrocaAspa(objEdital);limpaCampos(1,3,4)" onKeyPress="acionaEnter(event.keyCode)">
					</td>
					<td align="center" class="tribuchet-11-escuro" rowspan="4">
						<input name="Botao" type="button" class="form" value="Buscar" style="height:40;width:50" onClick="javascript:Valida_Busca();">
					</td>
				</tr>	
				<tr bgcolor="#e5e5e5">	
					<td class="tribuchet-11-escuro" style="padding-left:3;height:35px">
						Item do Edital: <br>	
						<input type"text" name="itemEdital" id="txtCampo3" value="" class="form" style="height:15;width:200" size="22" maxlength="30" 
						onkeyup="TrocaAspa(objEdital);limpaCampos(1,2,4)" onKeyPress="acionaEnter(event.keyCode)">
					</td>
					<td class="tribuchet-11-escuro">
						<span id="modality">
						Modalidade:  <br>
						<select name="modalidade" size="1" id="txtCampo4" class="form" style="height:15;width:200" 
						onChange="limpaCampos(1,2,3);">
							<option value="">Selecionar</option>
														<option value="6">Concorrência</option>
							<option value="3" selected>Convite Material</option>
							<option value="4">Convite Serviço</option>
							<option value="21">Dispensa de Licitação</option>
							<option value="22">Inexigibilidade</option>
							<option value="2">Pregão Eletrônico</option>
							<option value="43">Pregão Eletrônico CAESB</option>
							<option value="23">Pregão Eletrônico METRO</option>
							<option value="1">Pregão Presencial</option>
							<option value="5">Tomada de Preços</option>

						</select>
						</span>
					</td>
				</tr>						  
				
				</form>
				</table>
			</td>
		</tr>
		<tr> 
			<td height="2" background="library/imagem/bg_separacao_horizontal.gif"><img src="library/imagem/space.gif" width="1" height="1"></td>
		</tr>
		<tr> 
			<td height="2" background="library/imagem/bg_separacao_horizontal.gif"><img src="library/imagem/space.gif" width="1" height="1"></td>
		</tr>
		<tr> 
	        <td height="10" bgcolor="#7E8A6C" class="tribuchet-13-verde-claro"><img src="library/imagem/space.gif" width="1" height="1"></td>
	  	</tr>
		</table>
	</td>
</tr>
</table>


</body></html>