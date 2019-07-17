<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2'                   => true,
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline'
        ],
        'array_indentation' => true,
        'array_syntax'      => [
            'syntax' => 'short'
        ],
        'binary_operator_spaces' => [
            'align_double_arrow' => true
        ],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement'  => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'die',
                'do',
                'exit',
                'for',
                'foreach',
                'if',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'try',
                'while',
                'yield'
            ]
        ],
        'cast_spaces' => [
            'space' => 'single'
        ],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'concat_space'               => [
            'spacing' => 'one'
        ],
        'hash_to_slash_comment'       => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax'                 => [
            'syntax' => 'short'
        ],
        'method_chaining_indentation'           => true,
        'multiline_comment_opening_closing'     => true,
        'no_alternative_syntax'                 => true,
        'no_blank_lines_after_phpdoc'           => true,
        'no_empty_comment'                      => true,
        'no_empty_phpdoc'                       => true,
        'no_empty_statement'                    => true,
        'no_superfluous_elseif'                 => true,
        'no_trailing_comma_in_list_call'        => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unused_imports'                     => true,
        'no_useless_else'                       => true,
        'no_useless_return'                     => true,
        'no_whitespace_before_comma_in_array'   => [
            'after_heredoc' => true
        ],
        'no_whitespace_in_blank_line'        => true,
        'not_operator_with_successor_space'  => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements'             => [
            'order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public_static',
                'property_protected_static',
                'property_private_static',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'phpunit',
                'method_public_static',
                'method_protected_static',
                'method_private_static',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sortAlgorithm' => 'none'
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'alpha'
        ],
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => false
        ],
        'phpdoc_align' => [
            'align' => 'vertical'
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent'                 => true,
        'phpdoc_no_empty_return'        => true,
        'phpdoc_no_package'             => true,
        'phpdoc_no_useless_inheritdoc'  => true,
        'phpdoc_scalar'                 => [
            'types' => [
                'boolean',
                'callback',
                'double',
                'integer',
                'real',
                'str'
            ]
        ],
        'phpdoc_separation'                             => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'short_scalar_cast'                             => true,
        'single_line_comment_style'                     => [
            'comment_types' => [
                'asterisk',
                'hash'
            ]
        ],
        'single_quote' => [
            'strings_containing_single_quote_chars' => false
        ],
        'ternary_to_null_coalescing' => true,
        'visibility_required'        => [
            'elements' => [
                'property',
                'method',
                'const'
            ]
        ]
    ])
    ->setFinder($finder);
