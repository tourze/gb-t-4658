# GB/T 4658-2006 Codes for Record of Formal Schooling

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-4658/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-4658)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-4658.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-4658)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)

A PHP 8.1+ enum implementation of GB/T 4658-2006 Codes for Record of Formal Schooling standard. This package provides a complete mapping of Chinese education system formal schooling codes, suitable for education institutions, HR management, information processing, and data exchange scenarios.

## Features

- **Complete standard compliance**: Full implementation of GB/T 4658-2006 standard
- **Type-safe**: Built with PHP 8.1+ enums for type safety
- **Rich functionality**: Provides labels, item arrays, and select options
- **Educational coverage**: Covers all levels from primary school to postgraduate education
- **Easy integration**: Simple API design for seamless integration
- **Extensible**: Supports custom labels and options through trait implementation

## Installation

### Requirements

- PHP 8.1 or higher
- `tourze/enum-extra` package

### Install via Composer

```bash
composer require tourze/gb-t-4658
```

## Quick Start

```php
<?php

use Tourze\GBT4658\FormalSchooling;

// Get Chinese label
echo FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel(); // "大学本科毕业"

// Get code value
echo FormalSchooling::UNDERGRADUATE_GRADUATE->value; // "21"

// Get all items as array
$items = FormalSchooling::items(); // Returns array of all items with labels

// Get select options for forms
$options = FormalSchooling::select(); // Returns array of options for select elements

// Convert to array
$array = FormalSchooling::MASTERS_GRADUATE->toArray();
// Result: ['value' => '14', 'label' => '硕士研究生毕业']

// Parse from code value
$schooling = FormalSchooling::from('21'); // Returns UNDERGRADUATE_GRADUATE
$schooling = FormalSchooling::tryFrom('99'); // Returns null for invalid codes
```

## Available Codes

The package includes all codes defined in GB/T 4658-2006:

- **Postgraduate Education (10-19)**: Doctoral, Masters, Graduate class
- **Undergraduate Education (20-28)**: University undergraduate levels
- **College Education (30-39)**: College/Associate degree levels
- **Secondary Vocational Education (40-49)**: Technical schools, vocational high schools
- **High School Education (60-69)**: General high school levels
- **Middle School Education (70-79)**: Junior high school levels
- **Primary Education (80-89)**: Primary school levels
- **Other (90)**: Other educational backgrounds

## API Reference

### Methods

- `getLabel()`: Get Chinese label for the schooling level
- `toArray()`: Convert to array with value and label
- `toSelectItem()`: Convert to select item with additional fields
- `from(string $value)`: Parse enum from code value (throws exception if invalid)
- `tryFrom(string $value)`: Parse enum from code value (returns null if invalid)

### Static Methods

- `items()`: Get all items as array
- `select()`: Get all items as select options
- `genOptions()`: Generate options for form elements
- `cases()`: Get all enum cases

## Contributing

We welcome contributions! Please follow these guidelines:

- Fork the repository and create a feature branch
- Follow PSR-12 code style standards
- Write comprehensive tests for new features
- Ensure all tests pass before submitting a pull request
- Update documentation as needed

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Changelog

For information about recent changes, see the [CHANGELOG](CHANGELOG.md) file.

## Support

- **Issues**: Report bugs and request features via [GitHub Issues](https://github.com/tourze/gb-t-4658/issues)
- **Documentation**: Full API documentation available at [GitHub Repository](https://github.com/tourze/gb-t-4658)
- **Standard Reference**: [GB/T 4658-2006 Official Standard](https://std.samr.gov.cn/gb/search/gbDetailed?id=71F772D7C819D3A7E05397BE0A0AB82A)
