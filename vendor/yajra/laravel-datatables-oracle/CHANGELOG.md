## Datatables Package for Laravel 4|5

[![Latest Stable Version](https://poser.pugx.org/yajra/laravel-datatables-oracle/v/stable.png)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![Total Downloads](https://poser.pugx.org/yajra/laravel-datatables-oracle/downloads.png)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![Build Status](https://travis-ci.org/yajra/laravel-datatables.png?branch=master)](https://travis-ci.org/yajra/laravel-datatables)
[![Latest Unstable Version](https://poser.pugx.org/yajra/laravel-datatables-oracle/v/unstable.svg)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![License](https://poser.pugx.org/yajra/laravel-datatables-oracle/license.svg)](https://packagist.org/packages/yajra/laravel-datatables-oracle)

## Change Log

### v7.5.0 - 05-22-2017
- Do not use ::class to avoid IDE error when fractal is not installed. #1132
- Add server-side [error handler](https://yajrabox.com/docs/laravel-datatables/7.0/error-handler). #1131

### v7.4.0 - 05-01-2017
- Implement multi-term smart search in collection engine. #1115
- Implement multi-term smart search in QueryBuilderEngine. #1113
- Fix #881, #1109, #998
- Credits to @apreiml.

### v7.3.0 - 02-23-2017
- Add support ordering when search in nested relations #965.
- Credits to @AdrienPoupa and @ethaizone.

### v7.2.1 - 02-16-2017
- Move orchestra/testbench to require-dev.
- Use phpunit 5.7 to match Laravel’s requirement.
- Revert branch alias.

### v7.2.0 - 02-16-2017
- Add support for array data source. [#992](https://github.com/yajra/laravel-datatables/pull/992)
- Minor comment correction [#1002](https://github.com/yajra/laravel-datatables/pull/1002), credits to @lk77.

### v7.1.4 - 02-09-2017
- Fix collection case insensitive ordering.
- Fix [#945](https://github.com/yajra/laravel-datatables/issues/945).

### v7.1.3 - 02-06-2017
- Use stable packages. 
- Fix [#977](https://github.com/yajra/laravel-datatables/issues/977).

### v7.1.2 - 02-06-2017
- Add bindings from relation. [#979](https://github.com/yajra/laravel-datatables/pull/979)
- Fix [#960](https://github.com/yajra/laravel-datatables/issues/960).
- PR [#962](https://github.com/yajra/laravel-datatables/pull/962), credits to @snagytx.

### v7.1.1 - 01-30-2017
- Fix doc block.
- Fix request class usage on collection engine.

### v7.1.0 - 01-30-2017
- Use orchestra testbench to test the package.
- Enhance identification of proper engine to use for a given builder. Fix [#954](https://github.com/yajra/laravel-datatables/issues/954).
- Use Laravel config helper instead of using the facade.
- Enhance Request class to make it testable using phpunit. Address issue [#901](https://github.com/yajra/laravel-datatables/issues/901)

### v7.0.2 - 01-29-2017
- Map all model relations to eloquent engine. Fix #950

### v7.0.1 - 01-27-2017
- Revert getHtmlBuilder method for backward compatibility.
- Add html builder test.
- Rename Test class name.
- Add eloquent engine test.

### v7.0.0 - 01-27-2017
- Support for Laravel 5.4.
- Features are split across packages. #832
    - Buttons service approach extracted to own plugin.
        - Add fluent way to send variables to DataTable class. #845
    - Html builder extracted to own plugin.
- DataTable Engines are now pluggable. #544
- Added option to order by nulls last. #794
- Escape all columns by default for XSS protection. Fix #909
- Add rawColumns method for unescaped columns. https://github.com/yajra/laravel-datatables/commit/81adef8555195795189853f91e326dd056e40bb0

## TODO
- Fix IE compatibility by using POST method when exporting/printing. #826
- Enhance/Fix nested relations support. #789
- Export Selected Rows Datatables Service Provider. #829 #850
