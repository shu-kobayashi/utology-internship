$DBSERVER = "localhost";
$DBNAME = "test";
$DBUSER = "shu";
$DBPASSWD = "";
$dsn = "mysql:host={$DBSERVER};dbname={$DBSERVER};charset=utf8";

$pdo = new \PDO($dsn, $DBUSER, $DBPASSWD, array(\PDO::ATTR_EMULATE_PREPARES => false));
