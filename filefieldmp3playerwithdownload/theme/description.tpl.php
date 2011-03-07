<?php
// $Id: description.tpl.php,v 1.1.2.2 2009/10/12 22:36:23 starnox Exp $

/**
 * @file
 * This template outputs the description field.
 *
 * Variables:
 * - $title
 * - $artist
 * - $album
 * - $year
 * - $track
 * - $genre
 */
?>
<?php print $title .' '. t('by') .' '. $artist; ?>