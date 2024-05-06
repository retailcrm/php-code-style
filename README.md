# PHP Code Style

Дефолтные настройки для PhpCsFixer.

## Установка

1. Выполняем `composer require --dev retailcrm/php-code-style ^1.0`
2. Используем в `.php_cs.dist`

    ```php
    <?php
    
    $finder = PhpCsFixer\Finder::create()
        ->in(__DIR__ . '/src')
        // ... и другие папки, за которыми должен следить PhpCsFixer
    ;
    
    return Retailcrm\PhpCsFixer\Defaults::rules()
        ->setFinder($finder)
        // ->setCacheFile(__DIR__ . '/var/.php_cs.cache');
    ```

## PHPStorm

1. Если вы используете плагин Php Inspections (EA Extended). Измените настройки инспекции:
   
   * ***Static methods invocation via '->'*** - установите флаг ***Except PHPUnit assertions***
