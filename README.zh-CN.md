# GB/T 4658-2006 学历代码

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-4658/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-4658)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-4658.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-4658)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-4658.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-4658)

GB/T 4658-2006 学历代码的 PHP 实现，基于 PHP 8.1+ 枚举，适用于各级各类教育机构、人事管理、信息处理与交换等场景。

## 功能特性

- 完整实现 GB/T 4658-2006 标准
- 基于 PHP 8.1+ 枚举实现，类型安全
- 支持标签、选项数组、下拉框选项生成
- 简洁 API，易于集成

## 安装说明

- 依赖 PHP 8.1 及以上版本
- 依赖 `tourze/enum-extra` 扩展包

```bash
composer require tourze/gb-t-4658
```

## 快速开始

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

## 详细文档

- [API 文档](https://github.com/tourze/gb-t-4658)
- 所有学历代码及对应标签可通过 `FormalSchooling` 枚举获取
- 支持扩展自定义标签与选项

## 贡献指南

- 欢迎提交 Issue 与 PR
- 遵循 PSR-12 代码规范
- 提交 PR 前请确保通过所有测试

## 版权和许可

- 开源协议：MIT
- 作者：tourze

## 更新日志

详见 [CHANGELOG](CHANGELOG.md)
