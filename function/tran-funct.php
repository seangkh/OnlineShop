
<?php
$GLOBALS['xml'] = simplexml_load_file("language/en.xml") or die("Error: Cannot create object");
function getString($lang_key) {
  foreach ($GLOBALS['xml']->children() as $entry) {
    if (strcmp($entry['key'], $lang_key) === 0) {
      return $entry;
    }
  }
  return $lang_key;
}
 ?>
