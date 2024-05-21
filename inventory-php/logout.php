<?php
require_once __DIR__ . '/global.php';
session_start();
session_destroy();
header("location: " . base_url());
