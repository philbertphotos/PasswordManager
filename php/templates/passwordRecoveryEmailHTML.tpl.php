<?php
namespace tpl;

require_once('emailHTMLBase.tpl.php');

function passwordRecoveryEmailHTML($siteName, $username, $recoveryURL) {
    $baseContent = <<<ENDTPL
    
    <p>Hello,</p>
    
    <p>
        A password recovery request was submitted on behalf of your user ${username}.
        Follow the link below to reset your password:
        <a href="{$recoveryURL}">{$recoveryURL}</a>
    </p>
    
    <p>
        If you did not submit this request, please ignore this email.
        Unless you follow the above link and set a new password, your current password will not be changed.
    </p>
    
    <p>
        Kind Regards,
        {$siteName}
    </p>
    
ENDTPL;

    return emailHTMLBase($baseContent);
}
