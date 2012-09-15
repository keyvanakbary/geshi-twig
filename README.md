Twig language for GeSHi
=======================
[GeSHi] language pack for [Twig] syntax recognition. Two files included: "twig" and "twightml". First one only recognizes Twig syntax, second one recognizes HTML too.

Installation
------------
Copy and mix the "geshi" folder with your own geshi installation.

Usage
-----
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

Issues
------
If you have any problems or suggestions feel free to [open an issue].

  [GeSHi]: http://qbnz.com/highlighter/
  [Twig]: http://twig.sensiolabs.org/
  [open an issue]:http://github.com/keyvanakbary/geshi-twig/issues
