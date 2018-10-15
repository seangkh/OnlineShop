// The translation function.
<?php
function t($key) {
  global $language;
  $texts = array(
      'page' => array(
          'de' => 'Seite',          
          'en' => 'Page'
      ),
      'content' => array(
          'de' => 'Willkommen auf der Seite ',
          'fr' => 'Bienvenue sur la page ',
          'en' => 'Welcome to page '),
      'my_products' => array(
              'de' => 'Meine Produchte ',
              'fr' => 'Bienvenue sur la page ',
              'en' => 'Welcome to page ')
  );
  if (isset($texts[$key][$language])) {
    return $texts[$key][$language];
  } else {
    return "[$key]";
  }
}
 ?>
