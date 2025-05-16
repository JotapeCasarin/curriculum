<?php
$pg_host = "pg-jotinha-jotinha-postgres.h.aivencloud.com";
$pg_dbname = "defaultdb";
$pg_user = "avnadmin";
$pg_password = "AVNS_LEZJ1rxcRCDbpoaJ2nr";
$port = "22050";

// Exemplo de conexão PDO
try {
    $ConnPdoPg = new PDO("pgsql:host=$pg_host;port=$port;dbname=$pg_dbname", $pg_user, $pg_password);
    $ConnPdoPg->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>