<?php

return [

    'login_type' => 'Login-Typ',  // 'Login Type'
    'login_type_instruct' => 'Wenn der Login-Typ auf «Login mit Benutzername eingestellt ist, können sich Benutzer mit der E-Mail oder dem Benutzernamen einloggen. Die Datein verwenen den Benutzernamen als Dateinamen.
                              Wenn der Login-Typ auf «Login mit E-Mail eingestellt ist, können sich Benutzer nur mit der E-Mail einloggen. Die Datein verwenen die E-Mail als Dateinamen.',
                              // 'If set to "Username", users may log in with their username _or_ an email address. Filenames will be the username.
                              // If set to "Email Address", users may only log in with their email, and filenames will use the email.',

    'new_user_roles' => 'Neue Benutzerrolle',  // 'New User Roles'
    'new_user_roles_instruct' => 'Allen neu registrierten Benutzer, die über das Front-End registriert oder von Benutzern ohne Berechtigung zum Ändern von Rollen erstellt werden, werden automatisch diese Standard Rollen zugewiesen.',  // 'Any users that register through the front-end of your site will be assigned these roles.'

    'enable_gravatar' => 'Gravatar aktivieren',
    'enable_gravatar_instruct' => 'Benutze <a href="http://gravatar.com" target="_blank">Gravatar.com</a> als Quelle für automatische Avatare.',
];
