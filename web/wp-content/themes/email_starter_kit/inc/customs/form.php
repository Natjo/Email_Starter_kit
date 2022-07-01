<?php


function formulaire_contact()
{
    $result = null;
    $infos = array(
        "Une collectivité territoriale",
        "Un centre de tri",
        "Une entreprise",
        "Autre"
    );

    if (isset($_POST['contact_nonce'])) {
        $result = [
            'error' => false,
            'msg' => "<p>Message envoyé avec succés</p>"
        ];

        if (!wp_verify_nonce($_POST['contact_nonce'], 'contact')) {
            $result['error'] = true;
            $result['msg'] = 'Il y a eu un probleme merci de réessayer';
        } else {
            $inputs = array(
                'infos' => !empty($_POST['contact-infos']) ? $_POST['contact-infos'] : '',
                'gender' => !empty($_POST['contact-gender']) ? $_POST['contact-gender'] : '',
                'firstname' => !empty($_POST['contact-firstname']) ? $_POST['contact-firstname'] : '',
                'lastname' => !empty($_POST['contact-lastname']) ? $_POST['contact-lastname'] : '',
                'email' => !empty($_POST['contact-email']) ? $_POST['contact-email'] : '',
                'address' => !empty($_POST['contact-address']) ? $_POST['contact-address'] : '',
                'postcode' => !empty($_POST['contact-postcode']) ? $_POST['contact-postcode'] : '',
                'town' => !empty($_POST['contact-town']) ? $_POST['contact-town'] : '',
                'msg' => !empty($_POST['contact-msg']) ? $_POST['contact-msg'] : '',
            );

            $errors = array();

            // champs requis
            foreach ($inputs as $key => $input) {
                if (empty($input)) {
                    $result['error'] = true;
                    array_push($errors, "Le champ <b>" . $key . "</b> est obligatoire.");
                }
            }

            // email
            if (!filter_var($inputs['email'], FILTER_VALIDATE_EMAIL)) {
                $result['error'] =  true;
                array_push($errors, "L'<b>email</b> n'est pas au bon format.");
            }

            // consentement
            if (empty($_POST['contact-consent'])) {
                $result['error'] = true;
                array_push($errors, "Vous devez accepter la politique de confidentialité.");
            }


            // msg erreurs
            if ($result['error']) {
                $result['msg'] = "<h3>Il y a des erreurs:</h3>";
                $result['msg'] .= "<ul>";
                foreach ($errors as $error) {
                    $result['msg'] .= "<li>" . $error . "</li>";
                }
                $result['msg'] .= "</ul>";
            } else {
                //$to = 'j.martin@lonsdale.fr';
                $to = 'c.allard@lonsdale.fr';
                $subject = 'Valorplast Message du formulaire de contact';
                $body = '<h1>Vous avez une nouvelle demande à traiter :</h1>';
                $body .= '<ul>';
                $body .= '<li><b>Vous êtes:</b><br>' . $infos[$_POST['contact-infos']] . '</li>';
                $body .= '<li><b>Civilité:</b><br>' . $_POST['contact-gender'] . '</li>';
                $body .= '<li><b>Nom:</b><br>' . $_POST['contact-firstname'] . '</li>';
                $body .= '<li><b>Prénom:</b><br>' . $_POST['contact-lastname'] . '</li>';
                $body .= '<li><b>Email:</b><br>' . $_POST['contact-email'] . '</li>';
                $body .= '<li><b>Adresse:</b><br>' . $_POST['contact-address'] . '</li>';
                $body .= '<li><b>Code postal:</b><br>' . $_POST['contact-postcode'] . '</li>';
                $body .= '<li><b>Ville:</b><br>' . $_POST['contact-town'] . '</li>';
                $body .= '<li><b>Message:</b><br>' . $_POST['contact-msg'] . '</li>';
                $body .= '</ul>';

                $headers = array('Content-Type: text/html; charset=UTF-8');
                wp_mail($to, $subject, $body, $headers);

                if (!empty($_POST['contact-newsletter'])) {
                    mailJetAddContact($_POST['contact-firstname'] . ' ' . $_POST['contact-lastname'], $_POST['contact-email']);
                }
            }
        }
    }

    return $result;
}
