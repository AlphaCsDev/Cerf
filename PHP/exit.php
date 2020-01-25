<?php
require 'includes/Connection.php';
unset($_SESSION['user']);
header('Location: /');
