<?php
/* Controllers */
require_once "controllers/template.controller.php";
require_once "controllers/product.controller.php";
require_once "controllers/slide.controller.php";
require_once "controllers/user.controller.php";

/* Models */
require_once "models/product.model.php";
require_once "models/slide.model.php";
require_once "models/user.model.php";

/* Routes */
require_once "models/routes.php";

/* Vendor */
require_once "extensions/vendor/autoload.php";

$template = new TemplateController();
$template->template();

