<?php

require_once __DIR__.'/bootstrap.php';
$data_product = file_get_contents("product.json");

// Create a product list
// 
$content['products'] = json_decode($data_product, true);

$data['phone'] = "0274-2885822";
$content['modul_one'] = ['IcePHP', 'apc', 'apcu','apm','ares','bcmath','bcompiler','big_int','bitset','bloomy','bz2_filter','clamav','coin_acceptor','crack','dba'];
$content['modul_two'] = ['http', 'huffman', 'idn','igbinary','imagick','imap','inclued','inotify','interbase','intl','ioncube_loader','ioncube_loader_4','jsmin','json','idap'];
$content['modul_three'] = ['nd_pdo_mysql', 'oauth', 'oci8','odbc','opcache','pdf','pdo','pdo_dblib','pdo_firebid','pdo_mysql','pdo_odbc','pdo_pgsql','pdo_sqlite','pgsql','phalcon'];
$content['modul_four'] = ['stats', 'stem', 'stomp','suhosin','sybase_ct','sysvmsg','sysvsem','sysvshm','tidy','timezonedb','trader','translit','uploadprogress','uri_template','uuid'];

// Render our view
echo $twig->render('index.html', ['content' => $content, 'setting' => $data] );
