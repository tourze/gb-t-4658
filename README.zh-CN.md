# GB/T 4658-2006 学历代码

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-4658/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-4658)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-4658.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-4658)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)

GB/T 4658-2006 学历代码标准的 PHP 8.1+ 枚举实现。此包提供了完整的中国教育体系学历代码映射，适用于各级各类教育机构、人事管理、信息处理与数据交换等场景。

## 功能特性

- **完全符合标准**：完整实现 GB/T 4658-2006 标准规范
- **类型安全**：基于 PHP 8.1+ 枚举实现，确保类型安全
- **功能丰富**：提供标签、选项数组、下拉框选项等多种功能
- **教育覆盖面广**：涵盖从小学到博士研究生的全部学历层次
- **易于集成**：简洁的 API 设计，便于无缝集成
- **可扩展**：通过 trait 实现支持自定义标签和选项

## 安装说明

### 系统要求

- PHP 8.1 及以上版本
- `tourze/enum-extra` 扩展包

### 通过 Composer 安装

```bash
composer require tourze/gb-t-4658
```

## 快速开始

```php
<?php

use Tourze\GBT4658\FormalSchooling;

// 获取中文标签
echo FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel(); // "大学本科毕业"

// 获取代码值
echo FormalSchooling::UNDERGRADUATE_GRADUATE->value; // "21"

// 获取所有选项数组
$items = FormalSchooling::items(); // 返回所有带标签的选项数组

// 获取表单下拉框选项
$options = FormalSchooling::select(); // 返回下拉框选项数组

// 转换为数组
$array = FormalSchooling::MASTERS_GRADUATE->toArray();
// 结果：['value' => '14', 'label' => '硕士研究生毕业']

// 从代码值解析
$schooling = FormalSchooling::from('21'); // 返回 UNDERGRADUATE_GRADUATE
$schooling = FormalSchooling::tryFrom('99'); // 无效代码返回 null
```

## 可用代码

本包包含 GB/T 4658-2006 中定义的所有代码：

- **研究生教育 (10-19)**：博士、硕士、研究生班
- **大学本科教育 (20-28)**：大学本科各个层次
- **大学专科教育 (30-39)**：大学专科/高职层次
- **中等职业教育 (40-49)**：技工学校、职业高中
- **高中教育 (60-69)**：普通高级中学层次
- **初中教育 (70-79)**：初级中学层次
- **小学教育 (80-89)**：小学层次
- **其他 (90)**：其他教育背景

## API 参考

### 实例方法

- `getLabel()`：获取学历层次的中文标签
- `toArray()`：转换为包含值和标签的数组
- `toSelectItem()`：转换为包含额外字段的选择项
- `from(string $value)`：从代码值解析枚举（无效时抛出异常）
- `tryFrom(string $value)`：从代码值解析枚举（无效时返回 null）

### 静态方法

- `items()`：获取所有项目数组
- `select()`：获取所有项目的选择选项
- `genOptions()`：生成表单元素选项
- `cases()`：获取所有枚举情况

## 贡献指南

我们欢迎贡献！请遵循以下准则：

- Fork 仓库并创建特性分支
- 遵循 PSR-12 代码风格标准
- 为新功能编写全面的测试
- 提交 PR 前确保所有测试通过
- 根据需要更新文档

## 开源协议

本包采用 MIT 许可证。详情请参阅 [LICENSE](LICENSE) 文件。

## 更新日志

有关最近更改的信息，请参阅 [CHANGELOG](CHANGELOG.md) 文件。

## 技术支持

- **问题反馈**：通过 [GitHub Issues](https://github.com/tourze/gb-t-4658/issues) 报告错误和请求功能
- **文档**：完整的 API 文档请访问 [GitHub 仓库](https://github.com/tourze/gb-t-4658)
- **标准参考**：[GB/T 4658-2006 官方标准](https://std.samr.gov.cn/gb/search/gbDetailed?id=71F772D7C819D3A7E05397BE0A0AB82A)
