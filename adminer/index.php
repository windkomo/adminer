<?php
/** Adminer - Compact MySQL management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/

include "./include/bootstrap.inc.php";

$enum_length = '\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';
$inout = array("IN", "OUT", "INOUT");

if (isset($_GET["download"])) {
	include "./download.inc.php";
} elseif (isset($_GET["table"])) {
	include "./table.inc.php";
} elseif (isset($_GET["schema"])) {
	include "./schema.inc.php";
} elseif (isset($_GET["dump"])) {
	include "./dump.inc.php";
} elseif (isset($_GET["privileges"])) {
	include "./privileges.inc.php";
} else {
	if (isset($_GET["select"]) && ($_POST["edit"] || $_POST["clone"]) && !$_POST["save"]) {
		$_GET["edit"] = $_GET["select"];
	}
	if (isset($_GET["callf"])) {
		$_GET["call"] = $_GET["callf"];
	}
	if (isset($_GET["function"])) {
		$_GET["procedure"] = $_GET["function"];
	}
	if (isset($_GET["sql"])) {
		include "./sql.inc.php";
	} elseif (isset($_GET["edit"])) {
		include "./edit.inc.php";
	} elseif (isset($_GET["create"])) {
		include "./create.inc.php";
	} elseif (isset($_GET["indexes"])) {
		include "./indexes.inc.php";
	} elseif (isset($_GET["database"])) {
		include "./database.inc.php";
	} elseif (isset($_GET["call"])) {
		include "./call.inc.php";
	} elseif (isset($_GET["foreign"])) {
		include "./foreign.inc.php";
	} elseif (isset($_GET["view"])) {
		include "./view.inc.php";
	} elseif (isset($_GET["event"])) {
		include "./event.inc.php";
	} elseif (isset($_GET["procedure"])) {
		include "./procedure.inc.php";
	} elseif (isset($_GET["trigger"])) {
		include "./trigger.inc.php";
	} elseif (isset($_GET["user"])) {
		include "./user.inc.php";
	} elseif (isset($_GET["processlist"])) {
		include "./processlist.inc.php";
	} elseif (isset($_GET["select"])) {
		include "./select.inc.php";
	} elseif (isset($_GET["variables"])) {
		include "./variables.inc.php";
	} else {
		include "./db.inc.php";
	}
}

// each page calls its own page_header(), if the footer should not be called then the page exits
page_footer();
