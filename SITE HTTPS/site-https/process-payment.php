<?php
header('Content-type: text/plain; charset=utf-8');
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer le numéro de carte de crédit
    $creditCardNumber = $_POST["creditCardNumber"];
    
    // Traiter les données de la carte de crédit
    // Ici, vous pouvez effectuer des opérations de traitement ou de validation
    
    // Exemple de réponse
    $response = [
        "success" => true,
        "message" => "Le paiement a été traité avec succès."
    ];
    
    // Retourner la réponse au format JSON
    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}
?>