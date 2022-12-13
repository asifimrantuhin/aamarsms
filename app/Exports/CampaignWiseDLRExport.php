<?php

namespace App\Exports;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CampaignWiseDLRExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    public $campId;
    public function __construct($campaignId)
    {
        $this->campId = $campaignId;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $list = DB::table('sms_transactions')
            // ->select('sms_transactions.*', 'campaigns.text_body', 'campaigns.sender')
            ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
            ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
            ->where('sms_transactions.campaign_id', $this->campId)
            ->where('sms_transactions.user_id', Auth::user()->id)
            ->get();

        return $list;
    }

    public function headings(): array
    {
        return [
            'Mobile Number',
            'Date',
            'Operator',
            'Price',
            'Message'
        ];
    }
}
