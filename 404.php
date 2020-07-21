/** PÁGINA DE PROTEÇÃO CONTRA SQL INJECTION, CRIADA NO TEMA RAÍZ */
/ ** PROTECTION PAGE AGAINST SQL INJECTION, CREATED IN THE ROOT THEME * /

<?php

//Desabilita injection na url

if( in_array( get_query_var( 'pagename' ), $pages ) ) {
  die();

} else {
  header( 'Location: ' . home_url() );
  die();
}
