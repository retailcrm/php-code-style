<?php

namespace Retailcrm\PhpCsFixer;

use PhpCsFixer\Config;

final class Defaults
{
    const DEFAULT_RULES = [
        '@Symfony' => true,
        '@Symfony:risky' => true,

        // exceptions
        'single_line_throw' => false,

        // php file
        'concat_space' => ['spacing' => 'one'],

        // namespace and imports
        'global_namespace_import' => [
            'import_classes' => false,
            'import_constants' => false,
            'import_functions' => false,
        ],

        // standard functions and operators
        'native_constant_invocation' => false,
        'native_function_invocation' => false,

        // functions, methods
        'void_return' => true,

        // operators
        // multiline operators must always be at the beginning of the line
        'operator_linebreak' => [
            'only_booleans' => true,
            'position' => 'beginning',
        ],
        // Use null coalescing operator ?? where possible
        'ternary_to_null_coalescing' => true,
        'list_syntax' => ['syntax' => 'short'],

        // phpdoc
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_summary' => false,

        // phpunit
        'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],

        // semicolon
        // move the semicolon to the new line for chained calls
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
    ];

    public static function rules(array $overrides = []): Config
    {
        $rules = array_merge(self::DEFAULT_RULES, $overrides);

        return (new Config())
            ->setRiskyAllowed(true)
            ->setRules($rules)
        ;
    }

    private function __construct()
    {
    }
}
