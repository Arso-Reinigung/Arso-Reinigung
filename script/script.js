$(document).ready(function(){	

	$('#container A').each(function(){
		var value = $(this).attr("href");
		value = value.replace('feature=player_embedded&','');
		if (value.match('(http(s)?://)?(www.)?youtube|youtu\.be')) 
		{
			if (value.match('embed')) { youtube_id = value.split(/embed\//)[1].split('"')[0]; }
			else { youtube_id = value.split(/v\/|v=|youtu\.be\//)[1].split(/[?&]/)[0]; }
			value = "http://www.youtube.com/v/"+youtube_id;
			var htmlInput = "<object width=\"640\" height=\"390\"><param name=\"movie\" value=\""+value+"\"></param><param name=\"allowScriptAccess\" value=\"always\"></param><embed src=\""+value+"\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" width=\"640\" height=\"390\"></embed></object>";
			$(this).after("<p>"+htmlInput+"</p>");
		}
	});

});
