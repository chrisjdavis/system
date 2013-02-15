<?php 
namespace Habari;
if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); }
?>

	<div class="container">
		<p>
			<label for="<?php echo $id; ?>" class="incontent <?php echo $class; ?>"><?php echo $caption; ?></label>
			<input type="password" name="<?php echo $field; ?>" id="<?php echo $id; ?>" class="styledformelement text <?php echo $class; ?>" value="<?php echo Utils::htmlspecialchars($value); ?>" <?php echo isset($tabindex) ? ' tabindex="' . $tabindex . '"' : ''?>>
		</p>
	<?php $control->errors_out('<li>%s</li>', '<ul class="error">%s</ul>'); ?>
	</div>
