<?php

/**
 * Fragment de code définissant la version de profileplus
 *
 * @author  Nadine Noël <n.noel@arml-idf.org>
 * @package local/profileplus
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die(); // empêche l'accès direct à ce fichier par le navigateur. https://moodle.org/mod/forum/discuss.php?d=227737
 
$plugin->version  = 2015032500;  // syntaxe requise : AAAAMMJJXX, AAAAMMJJ étant la date de finalisation de la version et XX étant 00, à incrémenter seulement si plusieurs versions sortent le même
$plugin->component = 'local_profileplus'; // syntaxe requise : 'typedeplugin_nomduplugin'
$plugin->requires = 2015111600; // numéro de version de Moodle requise pour l'installation, ici Moodle 3.0. Les numéros de versions sont ici : https://docs.moodle.org/dev/Releases)
$plugin->maturity = MATURITY_ALPHA; // (A MODIFIER) indique si la version est stable ou s'il s'agit d'une version alpha, beta ou rc
$plugin->release = 'v1'; // numéro de version lu par les utilisateurs humains

?>
