<p align="center"><a href="https://erik.cat/projects/Invoices"><img height="250" src="http://i.imgur.com/t9G3rFM.png"></a></p>

<p align="center">
<a href="https://styleci.io/repos/92863426"><img src="https://styleci.io/repos/92863426/shield?branch=master&style=flat" alt="StyleCI Status"></a>
<a href="https://styleci.io/repos/92863426"><img src="https://img.shields.io/badge/Built_for-Laravel-orange.svg" alt="Build For Laravel"></a>
<a href="https://packagist.org/packages/consoletvs/invoices"><img src="https://poser.pugx.org/consoletvs/invoices/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/consoletvs/invoices"><img src="https://poser.pugx.org/consoletvs/invoices/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/consoletvs/invoices"><img src="https://poser.pugx.org/consoletvs/invoices/license.svg" alt="License"></a>
</p>

## What is Invoices?

Invoices is a Laravel library that generates a PDF invoice for your customers. The PDF can be either downloaded or
streamed in the browser. It's highly customizable and you can modify the whole output view as well.

## Sample Invoice

This is a sample invoice generated using this library:

![Sample Invoice](https://i.gyazo.com/768f5b59791162e432f9cdfa15f017bc.png)

```php
$invoice = ConsoleTVs\Invoices\Classes\Invoice::make()
                ->addItem('Test Item', 10.25, 2, 1412)
                ->addItem('Test Item 2', 5, 2, 923)
                ->addItem('Test Item 3', 15.55, 5, 42)
                ->addItem('Test Item 4', 1.25, 1, 923)
                ->addItem('Test Item 5', 3.12, 1, 3142)
                ->addItem('Test Item 6', 6.41, 3, 452)
                ->addItem('Test Item 7', 2.86, 1, 1526)
                ->number(4021)
                ->tax(21)
                ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
                ->customer([
                    'name'      => 'Èrik Campobadal Forés',
                    'id'        => '12345678A',
                    'phone'     => '+34 123 456 789',
                    'location'  => 'C / Unknown Street 1st',
                    'zip'       => '08241',
                    'city'      => 'Manresa',
                    'country'   => 'Spain',
                ])
                ->download('demo');
                //or save it somewhere
                ->save('public/myinvoicename.pdf');
```

## Documentation

<p align="center">
<a href="https://erik.cat/projects/Invoices/docs"><img src="http://i.imgur.com/47WnADd.png"></a>
</p>

## License

```
MIT License

Copyright (c) 2017 Erik Campobadal

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```
