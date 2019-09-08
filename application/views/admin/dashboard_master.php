<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "template/backend/component/header.php";
include "template/backend/component/sidemenu.php";


//=======================Content===================

echo $dashboard_content;

// ==================Footer    ==========================
include "template/backend/component/footer.php";
