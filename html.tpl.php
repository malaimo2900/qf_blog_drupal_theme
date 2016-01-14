<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?= $head_title; ?></title>

<?php

var_dump($language->language, $rdf_namespaces, $grddl_profile, $css, $head, $styles, $scripts);

?>

</head>
<body>
<?= $page_top; ?>
<?= $page; ?>
<?= $page_bottom; ?>
</body>
</html>