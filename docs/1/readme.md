## Installation

```
composer require consoletvs/invoices
```


Example Usage:

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
```





![Sample Invoice](https://camo.githubusercontent.com/a179f76efacbe1db1d6e06a36878558f90070697/68747470733a2f2f692e6779617a6f2e636f6d2f37363866356235393739313136326534333266396364666131356630313762632e706e67)








ConsoleTVs\Invoices\InvoicesServiceProvider
===============

This is the InvoicesServiceProvider class.




* Class name: InvoicesServiceProvider
* Namespace: ConsoleTVs\Invoices
* Parent class: Illuminate\Support\ServiceProvider







Methods
-------


### boot

    void ConsoleTVs\Invoices\InvoicesServiceProvider::boot()

Bootstrap any application services.



* Visibility: **public**




### register

    void ConsoleTVs\Invoices\InvoicesServiceProvider::register()

Register any application services.



* Visibility: **public**




























ConsoleTVs\Invoices\Classes\PDF
===============

This is the PDF class.




* Class name: PDF
* Namespace: ConsoleTVs\Invoices\Classes







Methods
-------


### generate

    \Dompdf\Dompdf\Dompdf ConsoleTVs\Invoices\Classes\PDF::generate(\ConsoleTVs\Invoices\Classes\ConsoleTVs\Invoices\Classes\Invoice $invoice, string $template)

Generate the PDF.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $invoice **ConsoleTVs\Invoices\Classes\ConsoleTVs\Invoices\Classes\Invoice**
* $template **string**






































ConsoleTVs\Invoices\Classes\Invoice
===============

This is the Invoice class.




* Class name: Invoice
* Namespace: ConsoleTVs\Invoices\Classes





Properties
----------


### $name

    public string $name

Invoice name.



* Visibility: **public**


### $items

    public \ConsoleTVs\Invoices\Classes\Illuminate\Support\Collection $items

Invoice item collection.



* Visibility: **public**


### $currency

    public string $currency

Invoice currency.



* Visibility: **public**


### $tax

    public integer $tax

Invoice tax.



* Visibility: **public**


### $tax_type

    public string $tax_type

Invoice tax type.



* Visibility: **public**


### $number

    public integer $number = null

Invoice number.



* Visibility: **public**


### $decimals

    public integer $decimals

Invoice decimal precision.



* Visibility: **public**


### $logo

    public string $logo

Invoice logo.



* Visibility: **public**


### $logo_height

    public integer $logo_height

Invoice Logo Height.



* Visibility: **public**


### $date

    public \Carbon\Carbon\Carbon $date

Invoice Date.



* Visibility: **public**


### $notes

    public string $notes

Invoice Notes.



* Visibility: **public**


### $business_details

    public array $business_details

Invoice Business Details.



* Visibility: **public**


### $customer_details

    public array $customer_details

Invoice Customer Details.



* Visibility: **public**


### $footnote

    public array $footnote

Invoice Footnote.



* Visibility: **public**


### $pdf

    private \ConsoleTVs\Invoices\Classes\Dompdf\Dompdf $pdf

Stores the PDF object.



* Visibility: **private**


Methods
-------


### __construct

    mixed ConsoleTVs\Invoices\Classes\Invoice::__construct(string $name)

Create a new invoice instance.



* Visibility: **public**


#### Arguments
* $name **string**



### make

    \ConsoleTVs\Invoices\Classes\ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::make(string $name)

Return a new instance of Invoice.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $name **string**



### addItem

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::addItem(string $name, integer $price, integer $ammount, string $id)

Adds an item to the invoice.



* Visibility: **public**


#### Arguments
* $name **string**
* $price **integer**
* $ammount **integer**
* $id **string**



### popItem

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::popItem()

Pop the last invoice item.



* Visibility: **public**




### formatCurrency

    \ConsoleTVs\Invoices\Classes\stdClass ConsoleTVs\Invoices\Classes\Invoice::formatCurrency()

Return the currency object.



* Visibility: **public**




### subTotalPrice

    integer ConsoleTVs\Invoices\Classes\Invoice::subTotalPrice()

Return the subtotal invoice price.



* Visibility: **public**




### totalPrice

    integer ConsoleTVs\Invoices\Classes\Invoice::totalPrice()

Return the total invoce price after aplying the tax.



* Visibility: **public**




### taxPrice

    float ConsoleTVs\Invoices\Classes\Invoice::taxPrice()

taxPrice.



* Visibility: **public**




### generate

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::generate()

Generate the PDF.



* Visibility: **private**




### download

    \ConsoleTVs\Invoices\Classes\response ConsoleTVs\Invoices\Classes\Invoice::download(string $name)

Downloads the generated PDF.



* Visibility: **public**


#### Arguments
* $name **string**



### show

    \ConsoleTVs\Invoices\Classes\response ConsoleTVs\Invoices\Classes\Invoice::show(string $name)

Show the PDF in the browser.



* Visibility: **public**


#### Arguments
* $name **string**



### name

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::name(string $name)

Set the invoice name.



* Visibility: **public**


#### Arguments
* $name **string**



### number

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::number(integer $number)

Set the invoice number.



* Visibility: **public**


#### Arguments
* $number **integer**



### decimals

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::decimals(integer $decimals)

Set the invoice decimal precision.



* Visibility: **public**


#### Arguments
* $decimals **integer**



### tax

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::tax(float $tax)

Set the invoice tax.



* Visibility: **public**


#### Arguments
* $tax **float**



### taxType

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::taxType(string $tax_type)

Set the invoice tax type.



* Visibility: **public**


#### Arguments
* $tax_type **string**



### logo

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::logo(string $logo_url)

Set the invoice logo URL.



* Visibility: **public**


#### Arguments
* $logo_url **string**



### date

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::date(\Carbon\Carbon $date)

Set the invoice date.



* Visibility: **public**


#### Arguments
* $date **Carbon\Carbon**



### notes

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::notes(string $notes)

Set the invoice notes.



* Visibility: **public**


#### Arguments
* $notes **string**



### business

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::business(array $details)

Set the invoice business details.



* Visibility: **public**


#### Arguments
* $details **array**



### customer

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::customer(array $details)

Set the invoice customer details.



* Visibility: **public**


#### Arguments
* $details **array**



### footnote

    \ConsoleTVs\Invoices\Classes\Invoice ConsoleTVs\Invoices\Classes\Invoice::footnote(string $footnote)

Set the invoice footnote.



* Visibility: **public**


#### Arguments
* $footnote **string**


