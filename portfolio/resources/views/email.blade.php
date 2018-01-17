<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Nouveau message reçu depuis le portfolio</h2>
    <ul>
      <li><strong>Sujet</strong> : {{$contact->subject}}</li>
      <li><strong>De</strong> : {{$contact->name}} &#8594; {{$contact->email}}</li>
      <li><strong>Message</strong> : {{$contact->message}}</li>
    </ul>
  </body>
</html>