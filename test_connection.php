<?php
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3307;dbname=devpostalhome;charset=utf8mb4',
        'dev',
        'uf13jazrfcyrpu2k',
        [
            PDO::ATTR_TIMEOUT => 5,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
    echo "Connexion PDO réussie !\n";
    
    $result = $pdo->query('SELECT 1 as test');
    echo "Requête réussie !\n";
    print_r($result->fetch());
    
} catch (Exception $e) {
    echo "Erreur PDO : " . $e->getMessage() . "\n";
}
?>