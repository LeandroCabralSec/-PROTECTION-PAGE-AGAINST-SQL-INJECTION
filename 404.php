Os ataques de injeção ocorrem quando as entradas criadas com códigos maliciosos são enviadas por um invasor, fazendo com que um aplicativo execute uma ação não 
intencional. A injeção de SQL é um dos tipos mais comuns de ataque na Internet. Com essa página no seu tema, qualquer código colocado na URL do seu site, retornará 
para HOME, impedindo de alterações na sua URL.

Injection attacks occur when entries created with malicious code are sent by an attacker, causing an application to perform an unintended action. 
SQL injection is one of the most common types of attacks on the Internet. With this page in your theme, any code placed in your website's URL will 
return to HOME, preventing changes to your URL.


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
