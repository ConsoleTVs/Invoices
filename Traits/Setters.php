<?php

namespace ConsoleTVs\Invoices\Traits;

use Carbon\Carbon;
use Illuminate\Support\Collection;

trait Setters
{
    /**
     * Set the invoice name.
     *
     * @method name
     * @param  string $name
     * @return self
     */
    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the invoice number.
     *
     * @method number
     * @param  integer $number
     * @return self
     */
    public function number($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Set the invoice decimal precision.
     *
     * @method decimals
     * @param  integer $decimals
     * @return self
     */
    public function decimals($decimals)
    {
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Set the invoice tax.
     *
     * @method tax
     * @param  float $tax
     * @return self
     */
    public function tax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Set the invoice tax type.
     *
     * @method taxType
     * @param  string $tax_type
     * @return self
     */
    public function taxType($tax_type)
    {
        $this->tax_type = $tax_type;

        return $this;
    }

    /**
     * Set the invoice logo URL.
     *
     * @method logo
     * @param  string $logo
     * @return self
     */
    public function logo($logo_url)
    {
        $this->logo = $logo_url;

        return $this;
    }

    /**
     * Set the invoice date.
     *
     * @method date
     * @param  Carbon $date
     * @return self
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the invoice notes.
     *
     * @method notes
     * @param  string $notes
     * @return self
     */
    public function notes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Set the invoice business details.
     *
     * @method business
     * @param  array   $details
     * @return self
     */
    public function business($details)
    {
        $this->business_details = Collection::make($details);

        return $this;
    }

    /**
     * Set the invoice customer details.
     *
     * @method customer
     * @param  array   $details
     * @return self
     */
    public function customer($details)
    {
        $this->customer_details = Collection::make($details);

        return $this;
    }

    /**
     * Set the invoice footnote.
     *
     * @method footnote
     * @param  string   $footnote
     * @return self
     */
    public function footnote($footnote)
    {
        $this->footnote = $footnote;

        return $this;
    }
}
