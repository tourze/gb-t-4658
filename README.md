# GB/T 4658-2006 Codes for Record of Formal Schooling

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-4658/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-4658)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-4658.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-4658)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)

A PHP 8.1+ enum implementation of GB/T 4658-2006 Codes for Record of Formal Schooling. Suitable for education institutions, HR management, information processing, and data exchange scenarios.

## Features

- Complete implementation of the GB/T 4658-2006 standard
- Type-safe PHP 8.1+ enum
- Provides labels, item arrays, and select options
- Simple API, easy integration

## Installation

- Requires PHP 8.1 or above
- Requires `tourze/enum-extra` package

```bash
composer require tourze/gb-t-4658
```

## Quick Start

```php
use Tourze\GBT4658\FormalSchooling;

// Get label
echo FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel(); // "大学本科毕业"

// Get code value
echo FormalSchooling::UNDERGRADUATE_GRADUATE->value; // "21"

// Get all items
$items = FormalSchooling::items(); // Returns array of all items with labels

// Get select options
$options = FormalSchooling::select(); // Returns array of options for select element
```

## Documentation

- [API Docs](https://github.com/tourze/gb-t-4658)
- All schooling codes and labels are available via the `FormalSchooling` enum
- Supports extension for custom labels and options

## Contributing

- Issues and PRs are welcome
- Follows PSR-12 code style
- Please ensure all tests pass before submitting PRs

## License

- MIT License
- Author: tourze

## Changelog

See [CHANGELOG](CHANGELOG.md)
