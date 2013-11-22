<head>
    <link rel="stylesheet" href="src/css/textext.core.css" type="text/css">
    <link rel="stylesheet" href="src/css/textext.plugin.arrow.css"text/css">
    <link rel="stylesheet" href="src/css/textext.plugin.autocomplete.css">
    <link rel="stylesheet" href="src/css/textext.plugin.clear.css" type="text/css">
    <link rel="stylesheet" href="src/css/textext.plugin.focus.css" type="text/css">
    <link rel="stylesheet" href="src/css/textext.plugin.prompt.css" type="text/css">
    <link rel="stylesheet" href="src/css/textext.plugin.tags.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kaushan+Script" type="text/css" />
</head>
<html>
Tags with Custom Data Objects
</html>
<textarea id="textarea" rows="1"></textarea>
<script src="../jquery-1.10.2.js"></script>
<script src="src/js/textext.core.js"></script>
<script src="src/js/textext.plugin.ajax.js"></script>
<script src="src/js/textext.plugin.arrow.js"></script>
<script src="src/js/textext.plugin.autocomplete.js"></script>
<script src="src/js/textext.plugin.clear.js"></script>
<script src="src/js/textext.plugin.filter.js"></script>
<script src="src/js/textext.plugin.focus.js"></script>
<script src="src/js/textext.plugin.prompt.js"></script>
<script src="src/js/textext.plugin.suggestions.js"></script>
<script src="src/js/textext.plugin.tags.js"></script>
<script type="text/javascript">
    $('#textarea').textext({
        plugins: 'tags autocomplete suggestions ajax',
        ajax: {
            url: '../test3.php',
            type: 'POST',
            dataType: 'json',
            cacheResults: true
        }
    });
</script>
