@extends('layouts.custom')

@section('title', 'Цены на теплоизоляцию трубопроводов и оборудования | ООО Изотермакс')
@section('description', 'Стоимость теплоизоляции трубопроводов и оборудования от компании Изотермакс. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/price')
@section('og:title', 'Цены на теплоизоляцию трубопроводов и оборудования | ООО Изотермакс')
@section('og:description', 'Стоимость теплоизоляции трубопроводов и оборудования от компании Изотермакс. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/price')
@section('twitter:title', 'Цены на теплоизоляцию трубопроводов и оборудования | ООО Изотермакс')
@section('twitter:description', 'Стоимость теплоизоляции трубопроводов и оборудования от компании Изотермакс. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Прайс' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        {{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Цены @endslot
        @slot('activelink') {{ url('/price') }} @endslot



    @endcomponent

<div class="price">
    <div class="container">

        <h1 class="title">Стоимость монтажа промышленной теплоизоляции на 2020 год</h1>

        <div class="price__wrapper">
            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%">
            <colgroup>
                <col>
                <col span="8">
            </colgroup>
            <tbody>
            <tr height="33">
                <td colspan="9" height="33" style="height: 33px; width: 1361px; text-align: center;">
                    <p><strong>Ориентировочная стоимость теплоизоляционных монтажных работ с материалом на 2020 год</strong></p><p><strong>о последних объектах читайте <a href="{{ url('/portfolio') }}">в актуальном разделе выполняемых работ - перейти</a></strong></p>
                    <p><span class="стиль3">красные цены - действуют до 1 октября 2020</span>

                        <!--noindex-->
                    </p>
                    <p style="text-align: center;">ТЕПЛОИЗОЛЯЦИЯ ТРУБОПРОВОДОВ ОБОРУДОВАНИЯ И ЕМКОСТЕЙ</p>
                    <!--/noindex--></td>
            </tr>
            <tr height="63">
                <td height="63" style="height: 63px; width: 124px; text-align: center;">
                    <strong>Диаметр трубопровода</strong></td>
                <td colspan="8" style="width: 1237px; text-align: center;">
                    <strong>Теплоизоляция - Цены и Наименование работ</strong></td>
            </tr>
            <tr height="85">
                <td height="85" style="height: 85px; width: 124px; text-align: center;">
                    <div align="center"><b>Диаметр</b></div></td>
                <td style="width: 155px; text-align: center;">
                    <strong>минераловатная изоляция (50мм) с покрытием из оцинкованного листа (0,5мм)</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>минераловатная изоляция (50мм) с покрытием из алюминиевого листа (0,6мм)</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>минераловатная изоляция (50мм) с покрытием из нержавеющего листа aisi 430 (0,5мм)</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>минераловатная изоляция (50мм) с покрытием из стеклопластика&nbsp;</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>обмазочная изоляция</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>изоляция трубками К-флекс (13мм) с покрытием из оцинкованного листа (0,5мм)</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>изоляция трубками К-флекс (13мм) с покрытием из алюминиевого листа (0,6мм)</strong></td>
                <td style="width: 155px; text-align: center;">
                    <strong>изоляция трубками К-флекс (13мм) с покрытием из нержавеющего листа aisi 430 (0,5мм)</strong></td>
            </tr>
            <tr height="38">
                <td height="38">&nbsp;</td>
                <td colspan="8"><div align="center">Стоимость 1 м.пог. (руб.)</div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>40 мм</strong></div></td>
                <td><div align="center"><s>900</s></div></td>
                <td><div align="center"><s>1050</s></div></td>
                <td><div align="center"><s>1300</s></div></td>
                <td><div align="center"><s>800</s></div></td>
                <td><div align="center"><s>1050</s></div></td>
                <td><div align="center"><s>1250</s></div></td>
                <td><div align="center"><s>1500</s></div></td>
                <td><div align="center"><s>1800</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>850</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>750</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1150</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1700</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>57 мм</strong></div></td>
                <td><div align="center"><s>1000</s></div></td>
                <td><div align="center"><s>1200</s></div></td>
                <td><div align="center"><s>1450</s></div></td>
                <td><div align="center"><s>900</s></div></td>
                <td><div align="center"><s>1200</s></div></td>
                <td><div align="center"><s>1350</s></div></td>
                <td><div align="center"><s>1600</s></div></td>
                <td><div align="center"><s>1900</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>950</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1150</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1350</strong></div></td>
                <td class="стиль1"><div align="center"><strong>850</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1150</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1250</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1800</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>76 мм</strong></div></td>
                <td><div align="center"><s>1100</s></div></td>
                <td><div align="center"><s>1400</s></div></td>
                <td><div align="center"><s>1650</s></div></td>
                <td><div align="center"><s>1000</s></div></td>
                <td><div align="center"><s>1400</s></div></td>
                <td><div align="center"><s>1550</s></div></td>
                <td><div align="center"><s>1850</s></div></td>
                <td><div align="center"><s>2250</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>1000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1550</strong></div></td>
                <td class="стиль1"><div align="center"><strong>950</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2100</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>89 мм</strong></div></td>
                <td><div align="center"><s>1300</s></div></td>
                <td><div align="center"><s>1550</s></div></td>
                <td><div align="center"><s>1850</s></div></td>
                <td><div align="center"><s>1150</s></div></td>
                <td><div align="center"><s>1500</s></div></td>
                <td><div align="center"><s>1750</s></div></td>
                <td><div align="center"><s>2100</s></div></td>
                <td><div align="center"><s>2400</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>1200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1450</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1750</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1050</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1950</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2250</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>108 мм</strong></div></td>
                <td><div align="center"><s>1500</s></div></td>
                <td><div align="center"><s>1700</s></div></td>
                <td><div align="center"><s>1950</s></div></td>
                <td><div align="center"><s>1300</s></div></td>
                <td><div align="center"><s>1800</s></div></td>
                <td><div align="center"><s>1950</s></div></td>
                <td><div align="center"><s>2350</s></div></td>
                <td><div align="center"><s>2750</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>1400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1850</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2600</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>133 мм</strong></div></td>
                <td><div align="center"><s>1650</s></div></td>
                <td><div align="center"><s>1850</s></div></td>
                <td><div align="center"><s>2150</s></div></td>
                <td><div align="center"><s>1450</s></div></td>
                <td><div align="center"><s>1850</s></div></td>
                <td><div align="center"><s>2250</s></div></td>
                <td><div align="center"><s>2650</s></div></td>
                <td><div align="center"><s>3100</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>1550</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1750</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2050</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1350</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1750</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2100</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2950</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>159 мм</strong></div></td>
                <td><div align="center"><s>1800</s></div></td>
                <td><div align="center"><s>2100</s></div></td>
                <td><div align="center"><s>2500</s></div></td>
                <td><div align="center"><s>1500</s></div></td>
                <td><div align="center"><s>2100</s></div></td>
                <td><div align="center"><s>2600</s></div></td>
                <td><div align="center"><s>3000</s></div></td>
                <td><div align="center"><s>3400</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>1700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3200</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>219 мм</strong></div></td>
                <td><div align="center"><s>2100</s></div></td>
                <td><div align="center"><s>2450</s></div></td>
                <td><div align="center"><s>2900</s></div></td>
                <td><div align="center"><s>1800</s></div></td>
                <td><div align="center"><s>2400</s></div></td>
                <td><div align="center"><s>2800</s></div></td>
                <td><div align="center"><s>3400</s></div></td>
                <td><div align="center"><s>4000</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>2000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2350</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>1700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3800</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>273 мм</strong></div></td>
                <td><div align="center"><s>2400</s></div></td>
                <td><div align="center"><s>2800</s></div></td>
                <td><div align="center"><s>3450</s></div></td>
                <td><div align="center"><s>2100</s></div></td>
                <td><div align="center"><s>3000</s></div></td>
                <td><div align="center"><s>3200</s></div></td>
                <td><div align="center"><s>3800</s></div></td>
                <td><div align="center"><s>4400</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>2300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2900</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4200</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>325 мм</strong></div></td>
                <td><div align="center"><s>2800</s></div></td>
                <td><div align="center"><s>3400</s></div></td>
                <td><div align="center"><s>4000</s></div></td>
                <td><div align="center"><s>2400</s></div></td>
                <td><div align="center"><s>3300</s></div></td>
                <td><div align="center"><s>3600</s></div></td>
                <td><div align="center"><s>4300</s></div></td>
                <td><div align="center"><s>5000</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>2700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3850</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4100</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4800</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>377 мм</strong></div></td>
                <td><div align="center"><s>3350</s></div></td>
                <td><div align="center"><s>3900</s></div></td>
                <td><div align="center"><s>4550</s></div></td>
                <td><div align="center"><s>2750</s></div></td>
                <td><div align="center"><s>3650</s></div></td>
                <td><div align="center"><s>4100</s></div></td>
                <td><div align="center"><s>4700</s></div></td>
                <td><div align="center"><s>5500</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>3200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3900</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5300</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>426 мм</strong></div></td>
                <td><div align="center"><s>3850</s></div></td>
                <td><div align="center"><s>4500</s></div></td>
                <td><div align="center"><s>5350</s></div></td>
                <td><div align="center"><s>3050</s></div></td>
                <td><div align="center"><s>4250</s></div></td>
                <td><div align="center"><s>4500</s></div></td>
                <td><div align="center"><s>5200</s></div></td>
                <td><div align="center"><s>6000</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>3700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>2900</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4100</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5800</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>530 мм</strong></div></td>
                <td><div align="center"><s>4350</s></div></td>
                <td><div align="center"><s>5050</s></div></td>
                <td><div align="center"><s>5950</s></div></td>
                <td><div align="center"><s>3850</s></div></td>
                <td><div align="center"><s>4750</s></div></td>
                <td><div align="center"><s>5100</s></div></td>
                <td><div align="center"><s>5800</s></div></td>
                <td><div align="center"><s>6800</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>4200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4900</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>3700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6500</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>630 мм</strong></div></td>
                <td><div align="center"><s>4950</s></div></td>
                <td><div align="center"><s>5850</s></div></td>
                <td><div align="center"><s>6900</s></div></td>
                <td><div align="center"><s>4400</s></div></td>
                <td><div align="center"><s>5700</s></div></td>
                <td><div align="center"><s>5700</s></div></td>
                <td><div align="center"><s>6600</s></div></td>
                <td><div align="center"><s>7800</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>4800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7500</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>720 мм</strong></div></td>
                <td><div align="center"><s>5700</s></div></td>
                <td><div align="center"><s>6750</s></div></td>
                <td><div align="center"><s>7800</s></div></td>
                <td><div align="center"><s>5000</s></div></td>
                <td><div align="center"><s>6500</s></div></td>
                <td><div align="center"><s>6300</s></div></td>
                <td><div align="center"><s>7400</s></div></td>
                <td><div align="center"><s>8600</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>5500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>4800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6000</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7100</strong></div></td>
                <td class="стиль1"><div align="center"><strong>8300</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>820 мм</strong></div></td>
                <td><div align="center"><s>6600</s></div></td>
                <td><div align="center"><s>7800</s></div></td>
                <td><div align="center"><s>9000</s></div></td>
                <td><div align="center"><s>6000</s></div></td>
                <td><div align="center"><s>7500</s></div></td>
                <td><div align="center"><s>7000</s></div></td>
                <td><div align="center"><s>8000</s></div></td>
                <td><div align="center"><s>9100</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>6400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>8800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>5800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7300</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7700</strong></div></td>
                <td class="стиль1"><div align="center"><strong>8800</strong></div></td>
            </tr>
            <tr height="38">
                <td rowspan="2" height="76"><div align="center"><strong>920 мм</strong></div></td>
                <td><div align="center"><s>7400</s></div></td>
                <td><div align="center"><s>9600</s></div></td>
                <td><div align="center"><s>11000</s></div></td>
                <td><div align="center"><s>6800</s></div></td>
                <td><div align="center"><s>8100</s></div></td>
                <td><div align="center"><s>7900</s></div></td>
                <td><div align="center"><s>9000</s></div></td>
                <td><div align="center"><s>10200</s></div></td>
            </tr>
            <tr height="38">
                <td height="38" class="стиль1"><div align="center"><strong>7200</strong></div></td>
                <td class="стиль1"><div align="center"><strong>9400</strong></div></td>
                <td class="стиль1"><div align="center"><strong>10800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>6500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7800</strong></div></td>
                <td class="стиль1"><div align="center"><strong>7500</strong></div></td>
                <td class="стиль1"><div align="center"><strong>8600</strong></div></td>
                <td class="стиль1"><div align="center"><strong>9800</strong></div></td>
            </tr>

            <tr height="35">
                <td height="188" rowspan="4" width="124">
                    <div align="center">
                        <strong>Емкости и оборудование</strong></div>			</td>
                <td colspan="8" height="20" width="1240"><div align="center">Наименование работ</div></td>
            </tr>
            <tr height="102">
                <td height="247" width="1240"><div align="center">минераловатная изоляция (50мм) с покрытием из оцинкованного листа    (0,5мм)</div></td>
                <td width="1240"><div align="center">минераловатная    изоляция (50мм) с покрытием из алюминиевого листа (0,6мм)</div></td>
                <td width="1240"><div align="center">минераловатная    изоляция (50мм) с покрытием из нержавеющего листа aisi 430 (0,5мм)</div></td>
                <td width="1240"><div align="center">минераловатная    изоляция с покрытием из стеклопластика</div></td>
                <td width="1240"><div align="center">обмазочная    изоляция</div></td>
                <td width="1240"><div align="center">изоляция    материалами К-флекс (13мм) с покрытием из оцинкованного листа (0,5мм)</div></td>
                <td width="1240"><div align="center">изоляция    материалами К-флекс (13мм) с покрытием из алюминиевого листа (0,6мм)</div></td>
                <td width="1240"><div align="center">изоляция    материалами К-флекс (13мм) с покрытием из нержавеющего листа aisi 430 (0,5мм)</div></td>
            </tr>
            <tr height="17">
                <td colspan="8" height="20" width="1240">Стоимость 1 м.кв. (руб.)</td>
            </tr>
            <tr height="34">
                <td height="40" width="1240"><div align="center"><s>3600</s> <span class="стиль3">3400 </span></div></td>
                <td width="1240"><div align="center"><s>4100</s> <span class="стиль3">3900</span> </div></td>
                <td width="1240"><div align="center"><s>4700</s> <span class="стиль3">4500</span></div></td>
                <td width="1240"><div align="center"><s>3000</s> <span class="стиль3">2800</span></div></td>
                <td width="1240"><div align="center"><s>4100</s> <span class="стиль3">3900 </span></div></td>
                <td width="1240"><div align="center"><s>4200</s> <span class="стиль3">4000</span></div></td>
                <td width="1240"><div align="center"><s>5000</s> <span class="стиль3">4800</span></div></td>
                <td width="1240"><div align="center"><s>5900</s> <span class="стиль3">5700</span></div></td>
            </tr>
            </tbody>
        </table>

        </div>


    </div>
</div>



@endsection

