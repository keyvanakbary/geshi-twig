<?php
/*************************************************************************************
 * twig.php
 * ----------
 * Author: Keyvan Akbary (keyvan@kiwwito.com)
 * Copyright: (c) 2011 Keyvan Akbary (http://www.kiwwito.com/)
 * Release Version: 1.0.0
 * Date Started: 2011/12/05
 *
 * Twig template language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/12/05 (1.0.0)
 *   -  Initial Release
 *
 * TODO
 * ----
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array(
    'LANG_NAME' => 'Twig',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('{#' => '#}'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        //TWIG
        //Tags
        1 => array(
            'autoescape', 'endautoescape', 'block', 'endblock', 'extends',
            'filter', 'endfilter', 'for', 'endfor', 'from', 'if', 'endif',
            'import', 'include', 'macro', 'endmacro', 'raw', 'endraw', 'set',
            'spaceless', 'endspaceless', 'use'
        ),
        //Filters
        2 => array(
            'capitalize', 'convert_encoding', 'date', 'default', 'escape',
            'format', 'join', 'json_encode', 'keys', 'length', 'lower', 'merge',
            'raw', 'replace', 'reverse', 'sort', 'striptags', 'title', 'upper',
            'url_encode'
        ),
        //Functions
        3 => array(
            'attribute', 'block', 'constant', 'cycle', 'parent', 'range'
        ),
        //Tests
        4 => array(
            'constant', 'defined', 'divisibleby', 'empty', 'even', 'null',
            'odd', 'sameas'
        ),
        //Operators
        5 => array(
            'in', 'is', 'and', 'or', 'not'
        )
    ),
    'SYMBOLS' => array(
        '+', '-', '/', '%', '/', '*', '**', //Math operators
        '==', '!=', '<', '>', '>=', '<=', '===', //Logic operators
        '..', '|', '~', '[', ']', '.', '?', ':', '(', ')', //Other
        '=' //HTML (attributes)
    ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        //Twig
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF;', //Tags
            2 => 'color: #008000;', //Filters
            3 => 'color: #0600FF;', //Functions
            4 => 'color: #804040;', //Tests
            5 => 'color: #008000;' //Operators
        ),
        'COMMENTS' => array(
            'MULTI' => 'color: #008080; font-style: italic;'
        ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
        ),
        'BRACKETS' => array(
            0 => 'color: #D36900;'
        ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
        ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
        ),
        'METHODS' => array(
            1 => 'color: #006600;'
        ),
        'SYMBOLS' => array(
            0 => 'color: #D36900;'
        ),
        'SCRIPT' => array(
            0 => '',
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #009000;'
        ),
        'REGEXPS' => array(
            0 => 'color: #00aaff;'
        )
    ),
    'URLS' => array(
        1 => 'http://twig.sensiolabs.org/doc/tags/{FNAMEL}.html',
        2 => 'http://twig.sensiolabs.org/doc/filters/{FNAMEL}.html',
        3 => 'http://twig.sensiolabs.org/doc/functions/{FNAMEL}.html',
        4 => 'http://twig.sensiolabs.org/doc/tests/{FNAMEL}.html',
        5 => '',
    ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '{{' => '}}',
            '{' => '}'
        ),
        1 => array(
            '<!--' => '-->',
        ),
        2 => array(
            '<' => '>'
        )
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => false,
        2 => false
    ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
        )
    )
);

?>
