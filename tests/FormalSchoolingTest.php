<?php

declare(strict_types=1);

namespace Tourze\GBT4658\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\GBT4658\FormalSchooling;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * @internal
 */
#[CoversClass(FormalSchooling::class)]
final class FormalSchoolingTest extends AbstractEnumTestCase
{
    /**
     * 测试学历代码值是否符合规范
     */
    public function testValues(): void
    {
        $this->assertSame('10', FormalSchooling::POSTGRADUATE_EDUCATION->value);
        $this->assertSame('11', FormalSchooling::DOCTORAL_GRADUATE->value);
        $this->assertSame('12', FormalSchooling::DOCTORAL_COMPLETION->value);
        $this->assertSame('13', FormalSchooling::DOCTORAL_INCOMPLETE->value);
        $this->assertSame('14', FormalSchooling::MASTERS_GRADUATE->value);
        $this->assertSame('80', FormalSchooling::PRIMARY_SCHOOL_EDUCATION->value);
        $this->assertSame('90', FormalSchooling::OTHER->value);
    }

    /**
     * 测试从值解析枚举
     */
    public function testFrom(): void
    {
        $this->assertSame(FormalSchooling::DOCTORAL_GRADUATE, FormalSchooling::from('11'));
        $this->assertSame(FormalSchooling::UNDERGRADUATE_GRADUATE, FormalSchooling::from('21'));
        $this->assertSame(FormalSchooling::PRIMARY_SCHOOL_GRADUATE, FormalSchooling::from('81'));
    }

    /**
     * 测试无效值解析异常
     */
    public function testInvalidFrom(): void
    {
        $this->expectException(\ValueError::class);
        FormalSchooling::from('99');
    }

    /**
     * 测试尝试获取不存在的值
     */
    public function testTryFrom(): void
    {
        $this->assertSame(FormalSchooling::DOCTORAL_GRADUATE, FormalSchooling::tryFrom('11'));
        $this->assertNull(FormalSchooling::tryFrom('99'));
        $this->assertNull(FormalSchooling::tryFrom(''));
    }

    /**
     * 测试标签获取
     */
    public function testGetLabel(): void
    {
        $this->assertSame('研究生教育', FormalSchooling::POSTGRADUATE_EDUCATION->getLabel());
        $this->assertSame('博士研究生毕业', FormalSchooling::DOCTORAL_GRADUATE->getLabel());
        $this->assertSame('硕士研究生毕业', FormalSchooling::MASTERS_GRADUATE->getLabel());
        $this->assertSame('大学本科毕业', FormalSchooling::UNDERGRADUATE_GRADUATE->getLabel());
        $this->assertSame('小学教育', FormalSchooling::PRIMARY_SCHOOL_EDUCATION->getLabel());
        $this->assertSame('其他', FormalSchooling::OTHER->getLabel());
    }

    /**
     * 测试实现的接口
     */
    public function testInterfaces(): void
    {
        $instance = FormalSchooling::DOCTORAL_GRADUATE;

        $this->assertInstanceOf(Labelable::class, $instance);
        $this->assertInstanceOf(Itemable::class, $instance);
        $this->assertInstanceOf(Selectable::class, $instance);
    }

    /**
     * 测试 toArray 方法（来自 ItemTrait）
     */
    public function testToArray(): void
    {
        $instance = FormalSchooling::DOCTORAL_GRADUATE;

        $array = $instance->toArray();
        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);
        $this->assertSame('11', $array['value']);
        $this->assertSame('博士研究生毕业', $array['label']);
    }

    /**
     * 测试 toArray 和 toSelectItem 方法（来自 ItemTrait）
     */
    public function testItemMethods(): void
    {
        $instance = FormalSchooling::DOCTORAL_GRADUATE;

        // 测试 toArray 方法
        $array = $instance->toArray();
        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);
        $this->assertSame('11', $array['value']);
        $this->assertSame('博士研究生毕业', $array['label']);

        // 测试 toSelectItem 方法
        $item = $instance->toSelectItem();
        $this->assertArrayHasKey('value', $item);
        $this->assertArrayHasKey('label', $item);
        $this->assertArrayHasKey('text', $item);
        $this->assertArrayHasKey('name', $item);
        $this->assertSame('11', $item['value']);
        $this->assertSame('博士研究生毕业', $item['label']);
        $this->assertSame('博士研究生毕业', $item['text']);
    }

    /**
     * 测试 genOptions 方法（来自 SelectTrait）
     */
    public function testGenOptions(): void
    {
        $options = FormalSchooling::genOptions();

        $this->assertCount(count(FormalSchooling::cases()), $options);

        // 测试几个关键项是否存在
        $found10 = false;
        $found11 = false;
        foreach ($options as $option) {
            if ('10' === $option['value']) {
                $found10 = true;
                $this->assertSame('研究生教育', $option['label']);
            }
            if ('11' === $option['value']) {
                $found11 = true;
                $this->assertSame('博士研究生毕业', $option['label']);
            }
        }

        $this->assertTrue($found10, '未找到值为 10 的选项');
        $this->assertTrue($found11, '未找到值为 11 的选项');
    }

    /**
     * 测试 cases 方法
     */
    public function testCases(): void
    {
        $cases = FormalSchooling::cases();

        $this->assertGreaterThan(0, count($cases));
        $this->assertSame(FormalSchooling::DOCTORAL_GRADUATE, $cases[1]);
    }

    /**
     * 测试枚举的序列化和反序列化
     */
    public function testSerializeAndUnserialize(): void
    {
        $enum = FormalSchooling::DOCTORAL_GRADUATE;

        // 枚举可以被序列化
        $serialized = serialize($enum);
        $this->assertNotEmpty($serialized);

        // 反序列化后应该是同一个实例（枚举是单例）
        $unserialized = unserialize($serialized);
        $this->assertSame($enum, $unserialized);
        $this->assertSame('11', $unserialized->value);
        $this->assertSame('博士研究生毕业', $unserialized->getLabel());
    }

    /**
     * 测试所有枚举值是否都有对应的标签实现
     */
    public function testAllCasesHaveLabels(): void
    {
        foreach (FormalSchooling::cases() as $case) {
            // 调用 getLabel 方法不应抛出异常
            try {
                $label = $case->getLabel();
                $this->assertNotEmpty($label);
            } catch (\Throwable $e) {
                self::fail(sprintf('枚举值 %s 的 getLabel 方法抛出了异常: %s', $case->name, $e->getMessage()));
            }
        }
    }
}
