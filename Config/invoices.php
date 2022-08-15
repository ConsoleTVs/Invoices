<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This value is the default currency that is going to be used in invoices.
    | You can change it on each invoice individually.
    */

    'currency' => 'EUR',

    /*
    |--------------------------------------------------------------------------
    | Default Decimal Precision
    |--------------------------------------------------------------------------
    |
    | This value is the default decimal precision that is going to be used
    | to perform all the calculations.
    */

   'decimals' => 2,

   
   /*
   |--------------------------------------------------------------------------
   | Default Invoice Logo
   |--------------------------------------------------------------------------
   |
   | This value is the default invoice logo that is going to be used in invoices.
   | You can change it on each invoice individually.
   */

  'logo' => 'http://i.imgur.com/t9G3rFM.png',

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Logo Height
  |--------------------------------------------------------------------------
  |
  | This value is the default invoice logo height that is going to be used in invoices.
  | You can change it on each invoice individually.
  */

 'logo_height' => 60,

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Buissness Details
  |--------------------------------------------------------------------------
  |
  | This value is going to be the default attribute displayed in
  | the customer model.
  */

  'business_details' => [
      'name'        => env('APP_NAME', 'My Company'),
      'id'          => '1234567890',
      'phone'       => '+34 123 456 789',
      'location'    => 'Main Street 1st',
      'zip'         => '08241',
      'city'        => 'Barcelona',
      'country'     => 'Spain',
  ],

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Footnote
  |--------------------------------------------------------------------------
  |
  | This value is going to be at the end of the document, sometimes telling you
  | some copyright message or simple legal terms.
  */

  'footnote' => '',

  /*
  |--------------------------------------------------------------------------
  | Default Tax Rates
  |--------------------------------------------------------------------------
  |
  | This array group multiple tax rates.
  |
  | The tax type accepted values are: 'percentage' and 'fixed'.
  | The percentage type calculates the tax depending on the invoice price, and
  | the fixed type simply adds a fixed amount to the total price.
  | You can't mix percentage and fixed tax rates.
  */
  'tax_rates' => [
    [
        'name'      => '',
        'tax'       => 0,
        'tax_type'  => 'percentage',
    ],
  ],
  
  /*
  | Default Invoice Due Date
  |--------------------------------------------------------------------------
  |
  | This value is the default due date that is going to be used in invoices.
  | You can change it on each invoice individually.
  | You can set it null to remove the due date on all invoices.
  */
  'due_date' => date('M dS ,Y',strtotime('+3 months')),

  /*
  | Default pagination parameter
  |--------------------------------------------------------------------------
  |
  | This value is the default pagination parameter.
  | If true and page count are higher than 1, pagination will show at the bottom.
  */
  'with_pagination' => true,

  /*
  | Duplicate header parameter
  |--------------------------------------------------------------------------
  |
  | This value is the default header parameter.
  | If true header will be duplicated on each page.
  */
  'duplicate_header' => false,

];
