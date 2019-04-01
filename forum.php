<?php
require('config.php');

$categories = $instance->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $instance->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom'); 

require('forum-logged.view.php');