<?php

function renderCalculatorHtml($content){
  if(is_page(TMC_PAGE_NAME)){
    ob_start();
    ?>

    <div>
      <b>HElloooasdoasdqwe</b>
    </div>

    <?php
      $out = ob_get_contents();
      ob_end_clean();
      return $out;
  }
}

add_filter('the_content', 'renderCalculatorHtml');
