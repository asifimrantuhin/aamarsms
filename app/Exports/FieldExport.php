<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FieldExport implements FromCollection, WithHeadings
{
    protected $data;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        return collect($this->data);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return [
            'Visiting Date',
            'ExecutiveId',
            'ExecutiveName',
            'CustomerCode',
            'Company',
            'Address',
            'Representative',
            'Designation',
            'Email',
            'Mobile',
            'Requirement',
            'Priority',
            'FirstFeedBack',
            'SecondFeedBack',
            'Source',
            'Transport',
            'From',
            'To',
            'Cost',
            'PaidDate',
            'Method',
            'TrxID'
        ];
    }
}
   