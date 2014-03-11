<?php

use \Glial\Synapse\FactoryController;
use \Glial\I18n\I18n;

FactoryController::addNode("Layout", "header",$GLIALE_TITLE);

echo '<div id="page">';

echo "<div id=\"title\">";
//echo "<h2>".$GLIALE_TITLE."<br />";

echo ":: Main Menu :: ";
echo "<span id=\"ariane\"><a href=\"".WWW_ROOT."\">".__("Home")."</a> ".$GLIALE_ARIANE."</span>";
echo "</h2>";
echo "</div>";

//flash

echo '<div id="content">';


?>

<input id="add" type="button" class="button btGreyLite overlayW btMedium" value="Forcast">
<input id="add" type="button" class="button btMenu overlayW btMedium" value="Menu1">
<input id="add" type="button" class="button btGreyLite overlayW btMedium" value="NOPH">
<input id="add" type="button" class="button btGreyLite overlayW btMedium" value="NOPH">
<input id="add" type="button" class="button btGrey overlayW btMedium" value="Selected">
<input id="add" type="button" class="button btGreyLite overlayW btMedium" value="NOPH">
<br /><br />


<div class="alert success">
    <div class="alert-inner">
        <div class="alert-message">
            <div class="title"><strong>Déconnexion!</strong></div>
            <div class="msg">Vous avez été entièrement disconnectionected de votre compte</div>
        </div>
    </div>
    <a class="alert-close" href="#" onclick="$(this).parent().fadeOut(250, function() { $(this).css({opacity:0}).animate({height: 0}, 100, function() { $(this).remove(); }); }); return false;">Fermer</a>
</div>

<div class="alert caution">
    <div class="alert-inner">
        <div class="alert-message">
            <div class="title"><strong>Déconnexion!</strong></div>
            <div class="msg">Vous avez été entièrement disconnectionected de votre compte</div>
        </div>
    </div>
    <a class="alert-close" href="#" onclick="$(this).parent().fadeOut(250, function() { $(this).css({opacity:0}).animate({height: 0}, 100, function() { $(this).remove(); }); }); return false;">Fermer</a>
</div>

<div class="alert error">
    <div class="alert-inner">
        <div class="alert-message">
            <div class="title"><strong>Déconnexion!</strong></div>
            <div class="msg">Vous avez été entièrement disconnectionected de votre compte</div>
        </div>
    </div>
    <a class="alert-close" href="#" onclick="$(this).parent().fadeOut(250, function() { $(this).css({opacity:0}).animate({height: 0}, 100, function() { $(this).remove(); }); }); return false;">Fermer</a>
</div>







<fieldset>
    <legend>Search</legend>

        <div class="item">
            <label for="input_username">Utilisateur : </label>
            <input type="text" name="pma_username" id="input_username" value="" size="24" class="textfield">
        </div>
        <div class="item">
            <label for="input_password">Mot de passe : </label>
            <input type="password" name="pma_password" id="input_password" value="" size="24" class="textfield">
        </div>
        <input type="hidden" name="server" value="1">    </fieldset>
<fieldset class="tblFooters">
        <input value="Display" type="submit" id="input_go">
      </fieldset>


<?php
//get_flash();
echo $GLIALE_CONTENT;
echo '</div>';

echo '</div>';


FactoryController::addNode("Layout", "footer");

