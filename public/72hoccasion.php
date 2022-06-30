<?php
    
    else {
    $first_name =   $_POST['nom'];
    $last_name  =   $_POST['prenom'];
    $email          =   $_POST['email'];
}
    if (isset($_POST['interest'])){          /* This builds an array from all those checkboxes. */
      $interests = implode(';', $_POST['interest']);  /* This line break will put each item on a new line in the email. */
    }

    if (($first_name=="")||($last_name=="")||($email==""))
        {
        echo 'Champs obligatoires, merci de bien vouloir compléter le formulaire à nouveau.</a>';
}

    else{
        $from       =   "De: $last_name $first_name<$email>\r\n Return-path: $email";
        $from_noreply   = "cclevede@gemy.fr";
        $suject =   "72 heures de l'occasion";
        $courtesy   =   "Merci d'avoir compléter le formulaire, à bientôt lors de nos 72 h de l'occasion.";
}
        mail("cclevede@gemy.fr", $subject, $message, $from);  // This one goes to ME.
        mail($from, $subject, $courtesy_message, $from_noreply);    // This one goes to the guest.
        echo '

<div class="alert alert-success" role="alert">
<h2>Merci!</h2> <p>Your message has been sent to our office and we will reply as soon as possible."</p>
</div>
        }
    }
?>
