<div class="contentBlock">
   <div class="daten">
	<table width="400" style="table-layout: fixed;">
	<tr><td nowrap >Zelglistrasse 13</td></tr>
	<tr><td nowrap >8618 Oetwil am See</td></tr>
	<tr><td class="blank">&nbsp;</td></tr>
	<tr><td nowrap >E-Mail</td> <td nowrap > <a class="btnDark" href="mailto:info@arso-reinigung.ch">info@arso-reinigung.ch</a></td>
	</tr>
	      <tr><td class="blank">&nbsp;</td></tr>
		  <tr width="100%">
			<td >Arlette</td>
			<td nowrap ><a class="btnDark" href="tel:+41774760184">077 476 01 84</a></td>  
			<td nowrap ></td>  
		  </tr>
		  <tr>
			<td class="small">Sprachen</td>
			<td class="small">DE, FR, EN</td> 
		  </tr>
		  <td class="blank">&nbsp;</td>
		  <tr>
			<td>Sonja</td>
			<td nowrap ><a class="btnDark" href="tel:+41788894744">078 889 47 44<a/></td> 
		  </tr>
		  <tr>
			<td class="small">Sprachen</td>
			<td class="small">DE, IT, PT, ES</td> 
		  </tr>
		  <td class="blank">&nbsp;</td>
		  <!--<tr>
			<td>Daniel</td>
			<td nowrap ><a class="ablue" href="tel:+41774557035">077 455 70 35<a/></td> 
		  </tr>
		  <tr>
			<td class="small"> </td>
			<td class="small" nowrap >Einkauf und Botengänge</td> 
		  </tr>
		  <tr><td class="blank">&nbsp;</td></tr>-->
	</table>
	</div>
	<div id="formTitel">Kontaktformular</div>
	<div style="width:100%" class="wmfg_layout_0">
	<form id="form" name="form" method="POST" action="" >
	<ul class="wmfg_questions">
		<li class="wmfg_q">
			<input type="text" class="wmfg_text" name="name" id="name" value placeholder="Name" />
		</li>
		<li class="wmfg_q">
			<input type="text" class="wmfg_text" name="email" id="email" value placeholder="E-Mail" />
		</li>
		<li class="wmfg_q">
			<input type="text" class="wmfg_text" name="tel" id="tel" value placeholder="Tel." />
		</li>
		<li class="wmfg_q">
			<textarea class="wmfg_textarea" name="message" id="message" value placeholder="Mitteilung"></textarea>
		</li>
	</ul>
	<button id="sendstuff" type="submit" name="submit" style="padding:5px;" ><span>Senden</span></button>
	</form>
	</div>
	<div id="results"></div>
</div>

<script type="text/javascript">	
function nothing(){

}


$(document).ready(function(){
		$("#form").validate({
			debug: false,
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
				message: "required",
			},
			messages: {
				name: "Bitte geben Sie Ihren Namen ein.",
				email: "Bitte geben Sie Ihre korrekte E-Mail Adresse ein.",
				message: "Bitte geben Sie eine Mitteilung ein.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				
				doResize();
				
				$.post('process.php', $("#form").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});

function resizeContent(){

}

function show(){

}
function hide(){

}

</script>