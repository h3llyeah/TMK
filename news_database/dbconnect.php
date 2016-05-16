<?php

  @mysql_connect("localhost", "root", "student") OR
  die("andmebaasi server kättesaamatu");

  @mysql_select_db("kursus1102") OR
  die("andmebaas kättesaamatu");

?>