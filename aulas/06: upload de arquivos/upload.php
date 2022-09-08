<?php
 
 $tmp = $_FILES['utfpr']['tmp_name'];
 $file_name = $_FILES['utfpr']['name'];
 move_uploaded_file($tmp, './uploads/'.$file_name);