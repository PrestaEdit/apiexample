<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class ApiExample extends Module
{
    public function __construct()
    {
        $this->name = 'apiexample';
        $this->displayName = 'API Module';
        $this->version = '0.0.1';
        $this->author = 'PrestaShop';
        $this->description = 'Demo module of how to modify the new API';
        $this->need_instance = 0;
        $this->bootstrap = false;
        $this->ps_versions_compliancy = ['min' => '9.0.0', 'max' => _PS_VERSION_];
        parent::__construct();
    }
}
