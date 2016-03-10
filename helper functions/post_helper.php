<?php

function show_no_posts($message)
{
  $result = 
    "<div class=\"post\" style=\"margin-bottom: 50px;\">" .
      "<div class=\"container\">" .
        "<div class=\"row-fluid\" style=\"margin-top: 50px;\">" .
          "<div class=\"col-md-12\">" .
            "<p style=\"text-align: center;\">".$message."</h1>" .
          "</div>" .
        "</div>" .
      "</div>" .
    "</div>";

  echo $result;
}

?>