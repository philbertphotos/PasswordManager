<?php
namespace tpl;

require_once('centerContent.tpl.php');
require_once('textField.tpl.php');
require_once('newPasswordFields.tpl.php');

function changePasswordPage($minLength, $maxLength, $minEntropy) {
    $title = 'Change Password';

    $userField = textField("Username", "username");
    $passField = textField("Current password", "password", "", "password");

    $newPassFields = newPasswordFields($minLength, $maxLength, $minEntropy);
    
    $centerContent = <<<ENDTPL
    
    <form method="POST" autocomplete="off">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                {$userField}
                {$passField}
                
                <a href="?page=ForgotPassword">Forgot your password?</a>
            </div>
        </div>
        
        <br /><br />
        
        {$newPassFields}
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
ENDTPL;

    return centerContent($title, $centerContent);
}
