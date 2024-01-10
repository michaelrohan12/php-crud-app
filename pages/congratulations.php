<?php

$availableLanguages = [
    'en' => 'English',
    'ger' => 'German',
    'de' => 'Deutsch',
];

// Default language: en
$defaultLanguage = 'en';

$selectedLanguage = $defaultLanguage;

if (isset($_GET['language'])) {
    // If the user selected a language, use it
    $selectedLanguage = $_GET['language'];
} elseif (isset($_COOKIE['language'])) {
    // If the language is stored as a cookie, use it
    $selectedLanguage = $_COOKIE['language'];
}

// If the language doesn't actually exist, use the default language
if (!isset($availableLanguages[$selectedLanguage])) {
    $selectedLanguage = $defaultLanguage;
}

setcookie('language', $selectedLanguage);

$messages = [
    'en' => 'Congratulations!',
    'ger' => 'Gratuliere!',
    'de' => 'Gefeliciteerd!',
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
</head>
<body>
    <form method="get">
        <div>
            <p>
                <label for="language">
                    Language:
                </label>
            </p>
            <select name="language" id="language">
            <?php
foreach ($availableLanguages as $key => $value) {?>
                <option value="<?php echo htmlspecialchars($key, ENT_QUOTES); ?>"
                    <?php if ($selectedLanguage === $key) {?> selected <?php }?>>
                    <?php echo htmlspecialchars($value, ENT_QUOTES); ?>
                </option>
                <?php
}
?>
            </select>
        </div>
        <div>
            <br><button type="submit">Submit</button>
        </div>
    </form>
    <p class="message"> <?php
echo $messages[$selectedLanguage];
?>
</body>
</html>