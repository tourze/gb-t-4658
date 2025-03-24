<?php

namespace Tourze\GBT4658;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 标准号：GB/T 4658-2006
 * 中文标准名称：学历代码
 * 英文标准名称：Codes for record of formal schooling
 *
 * @see https://std.samr.gov.cn/gb/search/gbDetailed?id=71F772D7C819D3A7E05397BE0A0AB82A
 */
enum FormalSchooling: string implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case POSTGRADUATE_EDUCATION = '10';
    case DOCTORAL_GRADUATE = '11';
    case DOCTORAL_COMPLETION = '12';
    case DOCTORAL_INCOMPLETE = '13';
    case MASTERS_GRADUATE = '14';
    case MASTERS_COMPLETION = '15';
    case MASTERS_INCOMPLETE = '16';
    case GRADUATE_CLASS_GRADUATE = '17';
    case GRADUATE_CLASS_COMPLETION = '18';
    case GRADUATE_CLASS_INCOMPLETE = '19';
    case UNDERGRADUATE_EDUCATION = '20';
    case UNDERGRADUATE_GRADUATE = '21';
    case UNDERGRADUATE_COMPLETION = '22';
    case UNDERGRADUATE_INCOMPLETE = '23';
    case UNIVERSITY_REGULAR_CLASS_GRADUATE = '28';
    case COLLEGE_EDUCATION = '30';
    case COLLEGE_GRADUATE = '31';
    case COLLEGE_COMPLETION = '32';
    case COLLEGE_INCOMPLETE = '33';
    case SECONDARY_VOCATIONAL_EDUCATION = '40';
    case SECONDARY_SPECIALIZED_GRADUATE = '41';
    case SECONDARY_SPECIALIZED_COMPLETION = '42';
    case SECONDARY_SPECIALIZED_INCOMPLETE = '43';
    case VOCATIONAL_HIGH_SCHOOL_GRADUATE = '44';
    case VOCATIONAL_HIGH_SCHOOL_COMPLETION = '45';
    case VOCATIONAL_HIGH_SCHOOL_INCOMPLETE = '46';
    case TECHNICAL_SCHOOL_GRADUATE = '47';
    case TECHNICAL_SCHOOL_COMPLETION = '48';
    case TECHNICAL_SCHOOL_INCOMPLETE = '49';
    case GENERAL_HIGH_SCHOOL_EDUCATION = '60';
    case GENERAL_HIGH_SCHOOL_GRADUATE = '61';
    case GENERAL_HIGH_SCHOOL_COMPLETION = '62';
    case GENERAL_HIGH_SCHOOL_INCOMPLETE = '63';
    case JUNIOR_HIGH_SCHOOL_EDUCATION = '70';
    case JUNIOR_HIGH_SCHOOL_GRADUATE = '71';
    case JUNIOR_HIGH_SCHOOL_INCOMPLETE = '73';
    case PRIMARY_SCHOOL_EDUCATION = '80';
    case PRIMARY_SCHOOL_GRADUATE = '81';
    case PRIMARY_SCHOOL_INCOMPLETE = '83';
    case OTHER = '90';

    public function getLabel(): string
    {
        return match ($this) {
            self::POSTGRADUATE_EDUCATION => '研究生教育',
            self::DOCTORAL_GRADUATE => '博士研究生毕业',
            self::DOCTORAL_COMPLETION => '博士研究生结业',
            self::DOCTORAL_INCOMPLETE => '博士研究生肄业',
            self::MASTERS_GRADUATE => '硕士研究生毕业',
            self::MASTERS_COMPLETION => '硕士研究生结业',
            self::MASTERS_INCOMPLETE => '硕士研究生肄业',
            self::GRADUATE_CLASS_GRADUATE => '研究生班毕业',
            self::GRADUATE_CLASS_COMPLETION => '研究生班结业',
            self::GRADUATE_CLASS_INCOMPLETE => '研究生班肄业',

            self::UNDERGRADUATE_EDUCATION => '大学本科教育',
            self::UNDERGRADUATE_GRADUATE => '大学本科毕业',
            self::UNDERGRADUATE_COMPLETION => '大学本科结业',
            self::UNDERGRADUATE_INCOMPLETE => '大学本科肄业',
            self::UNIVERSITY_REGULAR_CLASS_GRADUATE => '大学普通班毕业',

            self::COLLEGE_EDUCATION => '大学专科教育',
            self::COLLEGE_GRADUATE => '大学专科毕业',
            self::COLLEGE_COMPLETION => '大学专科结业',
            self::COLLEGE_INCOMPLETE => '大学专科肄业',

            self::SECONDARY_VOCATIONAL_EDUCATION => '中等职业教育',
            self::SECONDARY_SPECIALIZED_GRADUATE => '中等专科毕业',
            self::SECONDARY_SPECIALIZED_COMPLETION => '中等专科结业',
            self::SECONDARY_SPECIALIZED_INCOMPLETE => '中等专科肄业',
            self::VOCATIONAL_HIGH_SCHOOL_GRADUATE => '职业高中毕业',
            self::VOCATIONAL_HIGH_SCHOOL_COMPLETION => '职业高中结业',
            self::VOCATIONAL_HIGH_SCHOOL_INCOMPLETE => '职业高中肄业',
            self::TECHNICAL_SCHOOL_GRADUATE => '技工学校毕业',
            self::TECHNICAL_SCHOOL_COMPLETION => '技工学校结业',
            self::TECHNICAL_SCHOOL_INCOMPLETE => '技工学校肄业',

            self::GENERAL_HIGH_SCHOOL_EDUCATION => '普通高级中学教育',
            self::GENERAL_HIGH_SCHOOL_GRADUATE => '普通高中毕业',
            self::GENERAL_HIGH_SCHOOL_COMPLETION => '普通高中结业',
            self::GENERAL_HIGH_SCHOOL_INCOMPLETE => '普通高中肄业',

            self::JUNIOR_HIGH_SCHOOL_EDUCATION => '初级中学教育',
            self::JUNIOR_HIGH_SCHOOL_GRADUATE => '初中毕业',
            self::JUNIOR_HIGH_SCHOOL_INCOMPLETE => '初中肄业',

            self::PRIMARY_SCHOOL_EDUCATION => '小学教育',
            self::PRIMARY_SCHOOL_GRADUATE => '小学毕业',
            self::PRIMARY_SCHOOL_INCOMPLETE => '小学肄业',

            self::OTHER => '其他',
        };
    }
}
