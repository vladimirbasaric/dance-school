<?php
  // DB parametri
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'blog');
  
  // App Root
  // C:\xampp\htdocs\MVC\app\config\config.php
  // echo __FILE__; 
  // magicne konstante: https://www.php.net/manual/en/language.constants.predefined.php
  // da bismo dobili:  C:\xampp\htdocs\MVC\app  moramo da uradimo sledece:
  // echo dirname(dirname(__FILE__));
  // i na kraju ga ubacujemo u konstantu pomocu define f-je
  define('APPROOT', dirname(dirname(__FILE__)));
  // echo APPROOT;    C:\xampp\htdocs\MVC\app
  // URL Root
  define('URLROOT', 'http://localhost/MVC');
  // echo URLROOT;

  // Ime Sajta
  define('SITENAME', 'UMD');


   