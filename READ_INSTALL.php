https://vdopanel.com/details/103
Recommended System: CentOS 7 or CentOS 8
~~~~~~~~~~~~~~~~~~~~~~~
Pre-Requirement for the cPanel Server

√ Dont make edit or changes on vdopanel cPanel account
√ Make sure NGINX not installed on the cPanel server before
√ php 7.2, 7.3 or 7.4 with ionCube PHP Loader + suphp
√ Make sure (exec, shell_exec and allow_url_fopen) enabled for php
√ Disable PHP-FPM for vdopanel account
√ Set this values for php settings :
    max_execution_time = 180
    max_input_time = 180
    memory_limit = 512M
    post_max_size = 2000M
    upload_max_filesize = 2000M

~~~~~~~~~~~~~~~~~~~~~

Minimum VPS/Dedicated Server Requirement

1 Core CPU, 1 GB RAM & HDD As per your Need.

~~~~~~~~~~~~~

Login to your server via SSH

root login is a requirement, the installation will not function if you are not logged in as root or have sufficient sudo privileges.

Now Run the below command and press Enter :

curl -L https://vdopanel.com/dist/install.bin > install.bin && chmod +x install.bin

Now run the below command and press Enter

./install.bin start

Setup will now guide you through the installation process.

NOTE: After Installation completed Login your Admin Panel and Insert License Key


PHP FROM /BINS/vdopanel.tar.gz
PHP PANEL WAS ENCRYPTED WITH IonCube 10.2 - PHP 7.1
FOR DECODING -> https://easytoyou.eu/decoder/

EXAMPLE DECODED
<?php
/*
 * @ https://EasyToYou.eu - IonCube v10 Decoder Online
 * @ PHP 7.2
 * @ Decoder version: 1.0.4
 * @ Release: 01/09/2021
 */

define("LARAVEL_START", microtime(true));
require __DIR__ . "/../vendor/autoload.php";
$app = (require_once __DIR__ . "/../bootstrap/app.php");
$kernel = $app->make("Illuminate\\Contracts\\Http\\Kernel");
$response = $kernel->handle($request = Illuminate\Http\Request::capture());
$response->send();
$kernel->terminate($request, $response);
?>