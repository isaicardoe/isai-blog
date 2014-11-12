<?php
 $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
 $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
 //making varbles and saving them in the postand title varibles we created
 echo "<p>Title: $title</p>";
 echo "<p>Post: $post</p>";
 //echoing that it was saved in the varibles we created