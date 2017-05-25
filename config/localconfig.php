<?php
/*
 * Configuration of the user-feedback database backend.
 * Copy or rename this file to localconfig.php and adjust the below settings
 * according to your database setup.
 */

/* Database driver: sqlite, mysql or pgsql */
// $USERFEEDBACK_DB_DRIVER = 'sqlite';
$USERFEEDBACK_DB_DRIVER = 'mysql';
// $USERFEEDBACK_DB_DRIVER = 'pgsql';

/* Database server host (ignored for sqlite) */
$USERFEEDBACK_DB_HOST = getenv("MYSQL_HOST");

/* Database server port (ignored for sqlite). */
$USERFEEDBACK_DB_PORT = getenv("MYSQL_PORT");
// $USERFEEDBACK_DB_PORT = 5432;

/* Datbase name (filename for sqlite). */
// $USERFEEDBACK_DB_NAME =  __DIR__ . '/../data/db.sqlite';
$USERFEEDBACK_DB_NAME = getenv("MYSQL_DATABASE");

/* Database user name (ignored for sqlite). */
$USERFEEDBACK_DB_USERNAME = getenv("MYSQL_USER");

/* Database password (ignored for sqlite). */
$USERFEEDBACK_DB_PASSWORD = getenv("MYSQL_PASSWORD");
?>
