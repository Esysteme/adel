<?php

use \Glial\I18n\I18n;

echo "<!DOCTYPE html>\n";
echo "<html lang=\"" . I18n::Get() . "\">";
echo "<head>\n";
echo "<meta charset=utf-8 />\n";
echo "<meta name=\"Keywords\" content=\"\" />\n";
echo "<meta name=\"Description\" content=\"\" />\n";
echo "<meta name=\"Author\" content=\"Aurelien LEQUOY\" />\n";
echo "<meta name=\"robots\" content=\"index,follow,all\" />\n";
echo "<meta name=\"generator\" content=\"GLIALE 1.1\" />\n";
echo "<meta name=\"runtime\" content=\"[PAGE_GENERATION]\" />\n";
echo "<link rel=\"shortcut icon\" href=\"".WWW_ROOT."favicon.ico\" />";
echo "<title>" . $GLIALE_TITLE . " - Glial 2.1.2</title>\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . CSS . "default.style.css\" />\n";

?>
</head>
<body>

<div id="all">
<header>
<div id="headline">

<img src="<?php echo IMG; ?>main/Logo_ADEL.jpg" height="30" />

<h1>ADEL</h1>
<nav>
    <ul>
        <li><img src="<?php echo IMG; ?>main/help.gif" height="16" width="16" /> <a href=""><?php echo __("Help") ?></a></li>
        <li><img src="<?php echo IMG; ?>main/change_server.gif" height="16" width="16" /> <a href=""><?php echo __("Change Server") ?></a></li>
        <li><img src="<?php echo IMG; ?>main/wiki.jpg" height="16" width="16" /> <a href=""><?php echo __("Wiki") ?></a></li>
        <li><img src="<?php echo IMG; ?>main/quiter.gif" height="16" width="16" /> <a href=""><?php echo __("Quit") ?></a></li>
    </ul>
    
</nav>
<span class="right">
<img src="<?php echo IMG; ?>main/logo_alstom.gif" height="36" />&nbsp;
</span>
</div>

    
    
    
<menu>
		
		
</menu>
</header>
<div id="main">
<?php
    get_flash();