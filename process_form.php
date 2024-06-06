<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Valider les données
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Destinataire et sujet de l'e-mail
        $to = "jeanpierreamony@gmail.com"; // Remplacez par votre adresse e-mail
        $subject = "Nouveau message de contact de $name";
        
        // Contenu de l'e-mail
        $email_content = "Nom: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // En-têtes de l'e-mail
        $headers = "From: $email";

        // Envoyer l'e-mail
        if (mail($to, $subject, $email_content, $headers)) {
            echo json_encode(["status" => "success", "message" => "Merci! Votre message a été envoyé."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Erreur: Le message n'a pas pu être envoyé."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Veuillez remplir tous les champs et fournir une adresse e-mail valide."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Méthode de requête non valide."]);
}
?>
