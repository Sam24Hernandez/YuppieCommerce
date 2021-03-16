<?php
/* Controllers */
require_once "controllers/template.controller.php";
require_once "controllers/product.controller.php";

/* Models */
require_once "models/product.model.php";

/* Routes */
require_once "models/routes.php";

$template = new TemplateController();
$template->template();

