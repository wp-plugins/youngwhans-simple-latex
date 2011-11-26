<?php
if ($_POST['yw_latex_option'] == 'process') {
    update_option('yw_latex_mathtex', $_POST['yw_option_mathtex']);
}
$yw_latex_mathtex = stripslashes(get_option('yw_latex_mathtex'));

?>

<div class="wrap">
    <h2><?php _e('Youngwhan\'s Simple Latex Options', 'yw_latex') ?></h2>
    <form name="form1" method="post" action="<?php echo clean_url( remove_query_arg( 'updated' ) ); ?>">
    <input type="hidden" name="yw_latex_option" value="process" />
    <p> Location of mathtex.cgi </p>
    <p>(For example: http://www.forkosh.com/mathtex.cgi) </p>
        <input type="text" name="yw_option_mathtex" id="yw_option_mathtex" value=<?php echo $yw_latex_mathtex; ?> size="80" />
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Submit', 'yw_latex') ?>" />
        </p>
        </form>
        </div>

