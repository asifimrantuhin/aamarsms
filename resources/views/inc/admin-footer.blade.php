<footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; {{date('Y')}} aamarsms.com. All Rights Reserved.</div>

        </div>
        <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Social Urls':</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/"><i class="fa fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://www.linkedin.com/"><i class="fa fa-linkedin tx-20"></i></a>
        </div>
</footer>

        <script src="{{url('public/templates/lib/raphael/raphael.min.js')}}"></script>

            <script src="{{url('public/templates/lib/morris.js/morris.js')}}"></script>
            <script type="text/javascript">
                  new Morris.Bar({
                    element: 'morrisBar1',
                    data: [
                        <?php if (isset($monthly_success)) {$i = 0;?>
                        @foreach($monthly_success as $m)
                        <?php $failed_monthly = (isset($monthly_failed[$i]) ? $monthly_failed[$i] : '0'); ?>
                        <?php echo "{ y: '$m->year/$m->month', a: $m->sms_sent_this_month, b: $failed_monthly },\n"; ?>
                        <?php $i++;?>
                        @endforeach
                        <?php }?>
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['SMS Sent', 'SMS Failed' ],
                    barColors: [ '#14A0C1', '#dc3545'],
                    gridTextSize: 11,
                    hideHover: 'auto',
                    resize: true
                });



new Morris.Area({
    element: 'morrisArea1',
    data: [
      <?php if (isset($daily_success)) {$i = 0;?>
                        @foreach($daily_success as $d)
                        <?php $failed_daily = (isset($daily_failed[$i]) ? $daily_failed[$i] : '0'); ?>
                        <?php echo "{ y: '$d->created_date', a: $daily_failed[$i] , b: $d->sent_sms },\n"; ?>
                        <?php $i++;?>
                        @endforeach
                        <?php }?>
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Failed SMS', 'Sent SMS'],
    lineColors: ['#dc3545', '#14A0C1'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });
  
  new Morris.Line({
    element: 'morrisLine1',
    data: [
      <?php if (isset($daily_success)) {$i = 0;?>
                        @foreach($daily_success as $d)
                        <?php echo "{ y: '$d->created_date', a: $d->sent_sms , b: $daily_failed[$i]},\n"; ?>
                        <?php $i++;?>
                        @endforeach
                        <?php }?>
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Sent SMS', 'Failed SMS'],
    lineColors: ['#14A0C1', '#dc3545'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });
</script>