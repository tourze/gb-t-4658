# GB/T 4658

[English](#english) | [中文](#中文)

## English

GB/T 4658-2006 Codes for record of formal schooling implementation in PHP.

### Installation

```bash
composer require tourze/gb-t-4658
```

### Usage

```php
use Tourze\GBT4658\FormalSchooling;

// Get label
echo FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel(); // "大学本科毕业"

// Get value
echo FormalSchooling::UNDERGRADUATE_GRADUATE->value; // "21"

// Get all items
$items = FormalSchooling::items(); // Returns array of all items with labels

// Get select options
$options = FormalSchooling::select(); // Returns array of options for select element
```

### Features

- Full implementation of GB/T 4658-2006 standard
- PHP 8.1+ enum implementation
- Support for labels, items, and select options
- Type-safe usage

## 中文

GB/T 4658-2006 学历代码的 PHP 实现。

### 安装

```bash
composer require tourze/gb-t-4658
```

### 使用方法

```php
use Tourze\GBT4658\FormalSchooling;

// 获取标签
echo FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel(); // "大学本科毕业"

// 获取代码值
echo FormalSchooling::UNDERGRADUATE_GRADUATE->value; // "21"

// 获取所有选项
$items = FormalSchooling::items(); // 返回所有带标签的选项数组

// 获取下拉框选项
$options = FormalSchooling::select(); // 返回下拉框选项数组
```

### 特性

- 完整实现 GB/T 4658-2006 标准
- 基于 PHP 8.1+ 枚举实现
- 支持标签、选项和下拉框数据
- 类型安全使用

### 标准说明

本标准规定了学历代码，适用于各级各类教育机构、人事管理、信息处理与交换等。
