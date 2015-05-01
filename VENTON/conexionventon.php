<?php
$link =mysql_connect ("localhost", "root", "")or die ("Error al conectar");;
if ($link) {
	mysql_select_db("venton", $link);

}