Twig language for GeSHi
=======================

Language package for GeSHi that enables Twig syntax recognition. It includes
two language files: "twig" and "twightml". The first one only recognizes the
Twig syntax, the second one also recognizes HTML.

Installation
------------

Copy and mix the "geshi" folder with your own geshi installation.

Usage
-----

A tipical use can be::

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

Issues
------

http://github.com/keyvanakbary/geshi-twig/issues

