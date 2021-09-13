<?php

# Machine translation (or automatic translation) refers to the translation of a text into another language.
require_once './vendor/autoload.php';
use EdenAI\Translation;

# Get your API key here: https://app.edenai.run/admin/account
$text = new Text("API KEY");

# Available providers and languages here: https://api.edenai.run/v1/redoc/#operation/Automatic%20Translation
$output = $text->automaticTranslation("Your text", ['amazon', 'google'], "en-US", "fr-FR");
echo $output;
?>
