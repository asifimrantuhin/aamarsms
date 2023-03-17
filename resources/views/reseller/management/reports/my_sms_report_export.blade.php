<table class="table mg-b-0 table-bordered">
    <thead>
        <tr>
            <th class="text-center">Date</th>
            <th class="text-center">GP SMS COUNT</th>
            <th class="text-center">BL SMS COUNT</th>
            <th class="text-center">Robi SMS COUNT</th>
            <th class="text-center">Teletalk SMS COUNT</th>
            <th class="text-center">Total SMS COUNT</th>
        </tr>
    </thead>
    <tbody>
        @if(count($data) > 0)

        @php
        $gp = 0;
        $bl = 0;
        $robi = 0;
        $teletalk = 0;
        $total = 0;
        @endphp

        @foreach ($data as $sm)
        @php
        $gp += $sm->gp;
        $bl += $sm->bl;
        $robi += $sm->robi + $sm->airtel;
        $teletalk += $sm->teletalk;
        $total += ($sm->gp + $sm->bl + $sm->robi + $sm->airtel + $sm->teletalk);
        @endphp

        <tr>
            <td class="text-center">{{ date('d-m-Y', strtotime($sm->sent_date)) }}</td>
            <td class="text-right">{{ ($sm->gp?$sm->gp:0) }}</td>
            <td class="text-right">{{ ($sm->bl ?$sm->bl:0)}}</td>
            <td class="text-right">{{ (($sm->robi + $sm->airtel) ?($sm->robi + $sm->airtel) :0)}}</td>
            <td class="text-right">{{ ($sm->teletalk?$sm->teletalk:0) }}</td>
            <td class="text-right">{{ ($sm->gp + $sm->bl + $sm->robi + $sm->airtel + $sm->teletalk)}}</td>
        </tr>
        @endforeach
        <tr>
            <th class="text-center">Total</th>
            <th class="text-right">{{ $gp }}</th>
            <th class="text-right">{{ $bl }}</th>
            <th class="text-right">{{ $robi}}</th>
            <th class="text-right">{{ $teletalk }}</th>
            <th class="text-right">{{ $total }}</th>
        </tr>
        @else
        <tr>
            <td colspan="9">No Records Found</td>
        </tr>
        @endif

    </tbody>
</table>