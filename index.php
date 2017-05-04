<?php
/**
 * This is the main index file responsible for generating all content.
 */

// Global includes:
require_once("./util/util.php");

// Global configuration variables:
$SERVER_URL = 'http://' . $_SERVER[HTTP_HOST];
$ROOT_URL = path_join($SERVER_URL, $_SERVER[REQUEST_URI]);

require_once("./config/configuration.php");
?>

<!doctype html>
<html>

<head>
</head>

<body>

<?php
echo $CONTENTS;

require_once("./header.php");
require_once("./footer.php");

?>

</body>

</html>
