<?php
$installer = $this;

$installer->startSetup();
$installer->run("
INSERT INTO `core_config_data` (scope, scope_id, path, value)
VALUES
('default', 0, 'general/store_information/email',NULL),
('default', 0, 'general/store_information/mailto',0),
('default', 0, 'general/store_information/tel',0),
('default', 0, 'general/store_information/show',0);
");

$installer->endSetup();

?>