<?php
require "person.php";
require "english.php";
require "german.php";
require "french.php";
$english=new English();
$german=new German();
$frinch=new French();
$english->greet();
$frinch->greet();
$german->greet();