<?php
require_once __DIR__ . '/composer/vendor/autoload.php';

//Functions
/**
 * Copy a file, or recursively copy a folder and its contents
 * @author	  Aidan Lister <aidan@php.net>
 * @version	 1.0.1
 * @link		http://aidanlister.com/2004/04/recursively-copying-directories-in-php/
 * @param	   string   $source	Source path
 * @param	   string   $dest	  Destination path
 * @param	   string   $permissions New folder creation permissions
 * @return	  bool	 Returns true on success, false on failure
 */
function xcopy($source, $dest, $permissions = 0755)
{
	// Check for symlinks
	if (is_link($source)) {
		return symlink(readlink($source), $dest);
	}

	// Simple copy for a file
	if (is_file($source)) {
		return copy($source, $dest);
	}

	// Make destination directory
	if (!is_dir($dest)) {
		mkdir($dest, $permissions);
	}

	// Loop through the folder
	$dir = dir($source);
	while (false !== $entry = $dir->read()) {
		// Skip pointers
		if ($entry == '.' || $entry == '..') {
			continue;
		}

		// Deep copy directories
		xcopy("$source/$entry", "$dest/$entry", $permissions);
	}

	// Clean up
	$dir->close();
	return true;
}


//Config of Pages
$PAGES = [
	'INDEX' => ["TWIG" => "index.twig"],
];


if (php_sapi_name() == "cli") { //Command line mode, this will bundle
	echo "\n\n\t\t\t\tJAMES BITHELL\n\t\t\t\tTWIG BUNDLER\n\n";
	if (!isset($argv[1])) die("You must set a version number \n\nEXAMPLE: php index.php " . '"1.0"' . "\n\n\n");
} else {
	if (!isset($PAGES[reset(array_keys($_GET))])) $PAGE = $PAGES['INDEX'];
	else $PAGE = $PAGES[reset(array_keys($_GET))];
}
?>

BUNDLER
