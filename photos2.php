<?php

define('Path', 'Path'); 
define('Width', 'Width'); 
define('Height', 'Height'); 
$pics = array(
			array(
			Path => "IMGP0014",
			Width => 0,
			Height => 0
			),
			array(
			Path => "IMGP0021",
			Width => 0,
			Height => 0
			),
			array(
			Path => "IMGP0023",
			Width => 0,
			Height => 0
			),
			array(
			Path => "img_1148",
			Width => 0,
			Height => 0
			),
			array(
			Path => "img_1153",
			Width => 0,
			Height => 0
			),
			array(
			Path => "vn_heizung",
			Width => 0,
			Height => 0
			),
			array(
			Path => "vn_muelleimer",
			Width => 0,
			Height => 0
			),
			array(
			Path => "vn_ofen",
			Width => 0,
			Height => 0
			),
			array(
			Path => "vn_ofen_aussen",
			Width => 0,
			Height => 0
			)
		);
	

$picsCount = count($pics);

/**/
for ($p = 0; $p<$picsCount; $p++){
	
	$filename = 'img/pictures/'.$pics[$p]['Path'].'.jpg';
	$imgdata = getimagesize($filename);
	$pics[$p]['Width'] = $imgdata[0];
	$pics[$p]['Height'] = $imgdata[1];
	
}






?> 
<div class="contentBlock">

        <?php 
		  for ($p = 0; $p<$picsCount; $p++){
		?>
		<img style="display:none;" src="<?php echo('img/pictures/'.$pics[$p]['Path'].'.jpg'); ?>" ></img>
				<div class="imageHolder"><img class="galleryImg" src="<?php echo('img/pictures/'.$pics[$p]['Path'].'_thumb.jpg'); ?>" width="260" height="260" id="<?php echo($p); ?>"></img></div>	  
		<?php 
		  }
		?>
</div>

<script type="text/javascript">	

var imageData = {};
var imgId = 0;
<?php 
for($p=0; $p < $picsCount; $p++){
	
	$pic = $pics[$p];
	$width = $pic['Width'];
	$height = $pic['Height'];
	$url = $pic['Path'];
	?>
	imageData[imgId] = {width:<?php echo($width); ?>, height:<?php echo($height); ?>, src:'<?php echo($url); ?>'}
	imgId++;
	<?php
}
?>

var maxPix = imgId;
</script>