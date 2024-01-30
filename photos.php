<?php

define('Path', 'Path'); 
define('Width', 'Width'); 
define('Height', 'Height'); 
define('Groupname', 'Groupname');
define('Groupfiles', 'Groupfiles');
$pics = array(
            array(
			        Groupname => "team",
					Groupfiles =>
					array(
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
						)
					)
			),
			
			array(
			        Groupname => "spezialaufträge",
					Groupfiles =>
					array(
						array(
						Path => "img_1148",
						Width => 0,
						Height => 0
						),
						array(
						Path => "img_1153",
						Width => 0,
						Height => 0
						)
					)
			),
			
			array(
			        Groupname => "vorher/nacher",
					Groupfiles =>
					array(
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
					)
			)
		);
	

	
$groupsCount = count($pics);
	


/**/
for ($g = 0; $g<$groupsCount; $g++){
	   
	   $picsCount = count($pics[$g]['Groupfiles']);
	   
		for ($p = 0; $p<$picsCount; $p++){
			
			$filename = 'img/pictures/'.$pics[$g]['Groupfiles'][$p]['Path'].'.jpg';
			 $imgdata = getimagesize($filename);
			$pics[$g]['Groupfiles'][$p]['Width'] = $imgdata[0];
			$pics[$g]['Groupfiles'][$p]['Height'] = $imgdata[1];
			
		}

}





?> 
<div class="contentBlock">

        <?php 
		$gp = 0;
		for ($g = 0; $g<$groupsCount; $g++){
			
		
		?>
		<div class="groupBlock">
		   
		   <div class="groupDescription"><?php echo($pics[$g]['Groupname']); ?></div>
		   
		<?php
			  $picsCount = count($pics[$g]['Groupfiles']);
			  for ($p = 0; $p<$picsCount; $p++){
				  
				  
			?>
			<img style="display:none;" src="<?php echo('img/pictures/'.$pics[$g]['Groupfiles'][$p]['Path'].'.jpg'); ?>" ></img>
					<div class="imageHolder"><img class="galleryImg" src="<?php echo('img/pictures/'.$pics[$g]['Groupfiles'][$p]['Path'].'_thumb.jpg'); ?>" width="260" height="260" id="<?php echo($gp); ?>"></img></div>	  
			<?php 
			
			   $gp++;
			  }
		  ?>
		  </div>
		  <?php
		  }
		?>
</div>

<script type="text/javascript">	

var imageData = {};
var imgId = 0;
<?php 

for ($g = 0; $g<$groupsCount; $g++){
	
		$picsCount = count($pics[$g]['Groupfiles']);
		for($p=0; $p < $picsCount; $p++){
			
			$pic = $pics[$g]['Groupfiles'][$p];
			$width = $pic['Width'];
			$height = $pic['Height'];
			$url = $pic['Path'];
			?>
			imageData[imgId] = {width:<?php echo($width); ?>, height:<?php echo($height); ?>, src:'<?php echo($url); ?>'}
			imgId++;
			<?php
		}
}
?>

var maxPix = imgId;
</script>