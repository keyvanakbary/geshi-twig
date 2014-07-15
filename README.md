# Geshi Twig

[Geshi](http://qbnz.com/highlighter/) language pack for [Twig](http://twig.sensiolabs.org/) syntax recognition. Two flavors: `twig` and `twightml`. While `twig` recognizes just Twig syntax, `twightml` recognizes HTML too!

## Usage
```php
include_once 'geshi.php';

$source = <<<SOURCE
{% if users|length > 0 %}
    <ul>
        {% for user in users %}
            <li>{{ user.username|e }}</li>
        {% endfor %}
    </ul>
{% endif %}
SOURCE;

$geshi = new GeSHi($source, 'twig');

echo $geshi->parse_code();
```
