<?php
/**
 * This file contains some utility functions.
 */

// Joins the strings into a new combined URL. For example:
// path_join("/path/to/directory/", "/contents/file.txt") =>
//     "/path/to/directory/contents/file.txt".
function path_join($first, $second) {
  return rtrim($first, '/') . '/' . ltrim($second, '/');
}

?>
