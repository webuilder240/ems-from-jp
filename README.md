# Ems From Japan Price Table Library
[![Code Coverage](https://scrutinizer-ci.com/g/webuilder240/ems-from-jp/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/webuilder240/ems-from-jp/?branch=master) [![Build Status](https://travis-ci.org/webuilder240/ems-from-jp.svg?branch=master)] (https://travis-ci.org/webuilder240/ems-from-jp) [![Latest Stable Version](https://poser.pugx.org/webuilder240/ems-from-jp/v/stable)](https://packagist.org/packages/webuilder240/ems-from-jp) [![License](https://poser.pugx.org/webuilder240/ems-from-jp/license)](https://packagist.org/packages/webuilder240/ems-from-jp)

## Install

``` bash
composer require webuilder240/ems-from-jp
```

## About This Library

日本郵便が提供しているEMS(国際郵便)サービスの料金を重量・エリアに応じて返してくれるモジュールです。
現在対応している貨幣については日本円(JPY)のみ、重さの単位はグラム単位(1000g -> 1kg)で入力となっています。

料金のルールについては下記サイトの料金表を参考にして返しています。

https://www.post.japanpost.jp/int/charge/list/ems_all.html

## Usage

``` php
<?php
require 'vendor/autoload.php'

use EmsFormJp/EmsFromJp;

echo EmsFromJp::returnFeeToAsia(300); //900
echo EmsFromJp::returnFeeToOceania(300); //1200 
echo EmsFromJp::returnFeeToEuropa(500); //1800
echo EmsFromJp::returnFeeToAfrica(30000); //69400
```
