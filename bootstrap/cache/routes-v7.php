<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6JEh8RtmWuTkKK5V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5vWS991gh69gYIfN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XaDG3NlHRsfzFzxz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2gm3KxvosI1zwnKT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U1vJRV4pOFcwXjrn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LtZYxwDLt4f0ZfRT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gvpIMLcYcVFa2gHu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pwEauXBN7j5oCuib',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZANlYJLGQ3bV3ISi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms/sendsms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.sms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifySMS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KdhCazeENapGgy4G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RuKyZzlUb7AdL4t3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifyotp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2FNQbzMV6wVHrxPd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms-sender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U3VzrTxZt2f9sWHf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms-sending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JZvP9Ypth715wFUx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulk-sms-sending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R58DJM7z3fbWEQRW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MCDejXFENJ0TiZU3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback_response_push' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ctXOXNrPSpXgP1pw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/op_balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mgerulRRq8X6oQmA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fYu8kn8m21mAt1gG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::64K14yKghmbgtEhO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RHSSaA23wG2vZFqy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/smsstatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::boOoY101pSVJlCY5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/otp-with-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::213Yc5yinnx5C79p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gPM3frTMH046Hy7H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IhdCUoib2CWXttUG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::povEoljfsplxTFtf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller_pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D0y1P9CDwbJCImHS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay-via-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h40ehiHFKlE9vE2S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HspXfqerdgXqylGF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3c2AytZYHshYS55C',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gvhuzNYJ0XQCGtGN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZGwZR9YB2lefd4A3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9KMROp1TMsAmTbJL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/AccessLog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uT8Bse9AG7SN2qUT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vl92rcVEjO804FV4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fSBg8F1JVmDJ8vAc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WoHaq0Vyv4Ym4pXU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U0jkDZu1xnO8RrNt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GbcSEDy1pwERBmT0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notify/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xhXLW19ByH6CiZXZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uKmw665Y6cAFfAYU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GCTsmRhpP3iUrb3L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/preview_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bacS9s9wHXG0wTQ7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/campaign_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ene75caOZroESest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEtkY3Wbl7YDVhgB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fail_campaign_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NohXWmLkXd2sLUdw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8jQLw6XcfFlZ7Ov',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sms_ratio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7a84M0SiRgS3OCIr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kvhGGqntv3t1sxw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8IIrvcO45oW2pkQl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rateplan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T9egcE2HDLwRrqnk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rateplan/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vNVkjsHvlw0Xqjx6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/managecus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ipuiyssjRmf7YmGs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9AGAWjUkbge8JGhr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/conveyance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z0FvPJHCpGfaE8R2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/download_field/xlsx' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hiX1oz9yX7A2Colp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/attendence_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ae6j6I4fUxYIfCQF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dLdGkZvyPBwwihWc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/download_attendence/xlsx' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::knhfjZl2C8RZea5J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/comissionlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DyNoO9lfsPYycKrF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yqVp6Dw53E4q0WUL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saleslist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZpdg6b7Y0WPwj7b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gnSflvKZGVbuwEtJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/executive_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I1JW4ftAa6R94PRK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7WeVkU8omyXbri2M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::McLwXEby9LeqiCr3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/new_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V0dbx5Awe5b6lISU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UEA8mnDkdIiRF4RD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/download_user/xlsx' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VH0VgetDCUQz7ZK9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7pQgO9XC9ouVv2PP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mask/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h39Ty3D8ojA3i4G5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/nonmask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1upDwN7sIRSmGlS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/nonmask/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9vJmRtgfPEB7YySx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DnmxGaSIdm7d7meN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j2VwS4tBEsRLESUp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Z6dC4XzZyppiWAm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savegroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZY33QJ7M6G1BhPTH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/samplefile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::irEtHpvzq3AQda1A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/recharge/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lLkGwcN3ABi8iGfH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WRr67u68tYM5qeYV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oFuO5Pxo5G6PhDV6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transaction_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b2hL4LhM2DB0yGco',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-recharge-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dED7CUEjKZEX805y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-refund-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gtwRVwOcFrRKucyT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0gko0WVlsBrrVrx3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/uploadapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lHWx7YBZNsETETRE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LoWDYoEkwzozsjsl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveconfiguration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QBqHV61XEqncvJWU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vendor_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zPJx4ZFtqG4bWBTb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mDdRn27slY9dEGJN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sms_transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oDRcqJUAKWy4FPEo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/revenue_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZEUyrtU4jEvO40M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/operator_balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U6tMu9oMi2hvAHQj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer_credit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IjB8M6AGBHadZRj6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/approve_recharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3FPxgBQCclo4G5J2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reseller.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ntkKYoRwKPcrvy0B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D5QqAIiY3JSzzInH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zb7TJMCdxFa9VePO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/updatecompany' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XizipMjtVdx89BLx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/ssl_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::69OSEU0flUvbRnbr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::df44oMl0YbzDsfzb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/create_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F0b06ka0KDZFaBdw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/preview_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::evW42nilnreZoXCi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/campaign_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MwHdxrd2B4pnK330',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5poR0vIgZLT2zgpi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/cost_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Gzvh7eCjjnl8xdW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfs7eI1GokNZtzYv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sldYa9JD7OP3oijv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/template/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S7BkXWNKZAVVJkYp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/recharge/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dwChmq8gR6K5fOoR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/user_recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o6gLsOj8b5Rs1hRn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PqxFHQV2ozzjRFS5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/reseller_recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ObPqapmBwWDf8LGv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WPbnDvDncIzgU1cz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/balance_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XS2oS5xqdXCrQai8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/user-sms-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VS3zUGQLPLGo3klW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/mydaily-sms-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rehq6WrJ0x7SFWsf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/user_daily_sms_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qkJXKkIfLo7OBKw7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/contact_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RWgbenWGChw6lGEG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/create_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jKP4NlMhGAoumFpq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/savegroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2CuBtIs2t8HT64I1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/samplefile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3gxrOB7yb1CnESY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/userlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I0v102DWff0ZA1QC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y9iJU75TfIwFVuY9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/new_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d7mhyoJ6sZyd5tQE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/rateplan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9KfivTAmNacIiQsi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/myplan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XXvYRUlUAVtWEx21',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/rateplan/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kZg7bqrrK7hFYGnr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/My_smsReport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y7xzkA7SzDwnjR9O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nk5uwnbCtjKBBvbg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/userReport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k3g58UAtLt5zOCgr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9WU73e391uykoEvL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/user_smsReport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aqy7GMwI3SZDuqYu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5kS7HsLOv7BjPTe9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nVZC0cibCcGBGyl3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::47w9CPn8tyidkYHv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/create_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iIIlaTUSSSuuOKLA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/preview_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ep2vzyHB7UiH99QC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/campaign_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PQwOoxzSf4sUUsku',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9orLwRN7o3NrjBL2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/cost_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ga8y78RrxkUyhRe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T3I4ZtihrBvGw6eB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dynamic_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ekHNSI0O19We7T5A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dynamic_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8zB3yIkcSaftJPx7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dynamic_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Whatzsrqy6Kd1BWB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/store_dynamic_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jSDmxw45knc8Mwu6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dynamicfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QQsA9BomrFyEcPgz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dynamicsms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y1wxzlxs60OdNaQM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/contact_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::po81GLnVeTjkkfBO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/create_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQzLzeSGZ1fS3Z6G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/savegroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bGh9RVzAwvU9ZyGK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/samplefile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B4mB2aKdREkYRLBD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0G9CSVYCHM8kFrsY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VmzFBy4Jfq9Se9tu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iDR6E6IYxzAWJywp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/myplan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fiRyNyWn62kmEgRq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZ039F5Ey0VlcIqA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/template/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zRHXoh0yXka03ax3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/transaction_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMpyecMXbu8A8EHI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fhg5EJn83YGnF7Fz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account_summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DdkhdbHeIlIiZygV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account_summary_graph' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cvhS40yZItBJgoO5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/ssl_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qiknLpNTB2t09Lu0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LjFHunaL0Dy5n20Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/nid_submission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GumaeeraRETthnmc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X3HWT8fEJbitAzjL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxabxnPBrkcNp37x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/mycommission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W9g3rOYLZQt9KAWE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/attendence' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FfpMpivVKJrjtK4p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/attendence_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ny91TiAM79kbFAjE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uf4UhF8il1su5JXs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/leave_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CowQXEFuu9d3Mw1T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JT9eqLe2tgUTvXWc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/application' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fucyDtt4xBaPnZZg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/store_application' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BcNWwqkw4QWkw3Jq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKzNSmwv5at2K8oP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zTXO2UqqJPjiqDXq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/customer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::feF8yRdk5XqCtv8Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7C54rKepgGV3ttN7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/conveyance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DmjL3whAdgGg8yom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sIYU5KfjlfCJlPKw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/userlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QubdDViHiTm8DMY6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQIGQqWYrrEinugn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/sys_recharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jn9A6SZ7PqnBNmMZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/customers_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V0fF3yT8Cu1wMMQS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/customer_credit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::53aQSWzEMY2R7a3b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/recharge_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HqQ0s72EyiySoaeb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manager.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zi55fLWcl08EiZfB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yHyzdoWkniNCbn72',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/cus_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L08CjOHTcZfkDHot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TckPDXDxogSHYuqk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/download_field/xlsx' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6SdoCSOVohwYPr2G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/exec_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tiiqeh9yABMNIri8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7qvxaGVuP5oR973G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/com_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2hYSmVnimkeIy3h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/attendence' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzsGmbbbOiLY4QmX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/attendence_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6CiObVVaJHg6I4Qj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vlxuKzNlm5Hifefw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vsTBZFtoX42U2owI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/cus_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9y1ikRrc8efzZah7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L4b6FrOBtLPxRvc8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manager/conveyance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JiAkI63f8AUAmMY1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gWZcPmVZOXkDVW5W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dlr/campaignlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNkuakMjq6NaLGmo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dlr/deliverylog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::298fZTrOWVFZgfhS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dlr/usercampaignlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::quIrfYHrFS5jnwOZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dlr/userdeliverylog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UUyywg63Ljg85hqI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/campaignlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZKJNK4ECQfgGaw2C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/deliverylog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::73INcVCGvyXBDl1L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/usercampaignlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Z0c8s1ZmJhkh2mn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/userdeliverylog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ok9Htw4suAQhn4qL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dlr/campaignlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2ghdfK9tfOmMN90',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dlr/deliverylog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pkb19pAVE4gbTOjm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/password/reset/([^/]++)(*:31)|/a(?|pi\\-sms\\-send/([^/]++)(*:65)|dmin/(?|view(?|no(?|tify/([^/]++)(*:105)|nmask/([^/]++)(*:127))|template/([^/]++)(*:153)|user/([^/]++)(*:174)|mask/([^/]++)(*:195)|group/([^/]++)(*:217)|recharge/([^/]++)(*:242))|d(?|elete(?|_(?|no(?|tify/([^/]++)(*:285)|nmask/([^/]++)(*:307))|campaign/([^/]++)(*:333)|template/([^/]++)(*:358)|user/([^/]++)(*:379)|mask/([^/]++)(*:400))|group/([^/]++)(*:423))|ownload(?|/([^/]++)/([^/]++)(*:460)|_contacts/([^/]++)/([^/]++)(*:495))|lr/campaignwise/(?|([^/]++)(*:531)|dlr_export/([^/]++)(*:558)))|no(?|tify/(?|edit/([^/]++)(*:594)|update/([^/]++)(*:617))|nmask_status/([^/]++)/([^/]++)(*:656))|edit(?|_(?|campaign/([^/]++)(*:693)|template/([^/]++)(*:718)|user/([^/]++)(*:739)|payment/([^/]++)(*:763))|C(?|ustomer/([^/]++)(*:792)|oneyance/([^/]++)(*:817))|sales/([^/]++)(*:840)|group/([^/]++)(*:862))|u(?|pdate(?|_(?|campaign/([^/]++)(*:904)|template/([^/]++)(*:929)|sales/([^/]++)(*:951)|user/([^/]++)(*:972)|payment/([^/]++)(*:996))|C(?|ustomer/([^/]++)(*:1025)|oneyance/([^/]++)(*:1051)))|ser(?|_doc/([^/]++)(*:1081)|rechargehistory/([^/]++)(*:1114)))|s(?|uccessdownload/([^/]++)/([^/]++)(*:1161)|tatus/([^/]++)/([^/]++)(*:1193))|re(?|se(?|nd_campaign/([^/]++)(*:1233)|t/([^/]++)/([^/]++)(*:1261))|work/([^/]++)(*:1284))|ces/([^/]++)/([^/]++)(*:1315)|a(?|pproval/([^/]++)(*:1344)|ddcontactingroup/([^/]++)(*:1378))|tr(?|ade_rework/([^/]++)(*:1412)|x_status/([^/]++)/([^/]++)(*:1447))|mask_status/([^/]++)/([^/]++)(*:1486)))|/reseller/(?|edit(?|_(?|campaign/([^/]++)(*:1538)|template/([^/]++)(*:1564)|user/([^/]++)(*:1586))|group/([^/]++)(*:1610))|update_(?|campaign/([^/]++)(*:1647)|template/([^/]++)(*:1673)|user/([^/]++)(*:1695))|d(?|elete(?|_(?|campaign/([^/]++)(*:1738)|template/([^/]++)(*:1764)|user/([^/]++)(*:1786))|group/([^/]++)(*:1810))|ownload_contacts/([^/]++)/([^/]++)(*:1854)|lr/campaignwise/(?|([^/]++)(*:1890)|dlr_export/([^/]++)(*:1918)))|view(?|template/([^/]++)(*:1953)|group/([^/]++)(*:1976)|user/([^/]++)(*:1998))|addcontactingroup/([^/]++)(*:2034)|status/([^/]++)/([^/]++)(*:2067))|/user/(?|edit(?|_(?|campaign/([^/]++)(*:2114)|template/([^/]++)(*:2140))|group/([^/]++)(*:2164))|update_(?|campaign/([^/]++)(*:2201)|template/([^/]++)(*:2227))|d(?|elete(?|_(?|campaign/([^/]++)(*:2270)|template/([^/]++)(*:2296))|group/([^/]++)(*:2320))|ownload_contacts/([^/]++)/([^/]++)(*:2364)|lr/campaignwise/(?|([^/]++)(*:2400)|dlr_export/([^/]++)(*:2428)))|resend_campaign/([^/]++)(*:2463)|view(?|group/([^/]++)(*:2493)|template/([^/]++)(*:2519))|addcontactingroup/([^/]++)(*:2555))|/sales/(?|edit(?|customer/([^/]++)(*:2599)|_payment/([^/]++)(*:2625))|update(?|customer/([^/]++)(*:2661)|_payment/([^/]++)(*:2687)))|/manager/(?|editcustomer/([^/]++)(*:2731)|updatecustomer/([^/]++)(*:2763)))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FpEmMM7CPo2xG6aj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sxgGS5ER9NZ0iVbG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GIaKk8n8UWZDi13w',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I9N3AS5ub7DmZXcS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OF7wBI0nzhqfQKf8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xqwhc6Aky833IlCO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jU4sNWtyu7miIXyQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zfGCTZQANdCkWqxf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MRxGXV5GaARkNEhh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xPvRnT6WgLPsLoIl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kZwPJt9SEFMhRsFU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WLkkbGu1xyxFDspM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::culXxPokyOWSYAIw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RTYVncanxlgc7Y5j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OQwYJ8tt2RKLDvHj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Si3EJJIBgptSClBX',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sqqxNG4t5YGIepJ3',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FWcwLpDsjqzxAkYI',
          ),
          1 => 
          array (
            0 => 'campaignid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7WPcmO389ZxHux9p',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::en5HQvnL6OAia2Nl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMMYF8QhpqAaKNfp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::muVrRBYxBAax6Prs',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mYV6MgVTfQWBvIQa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ltcxdy62m0VMf4NY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFqC19eVw3USH9fH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxR2e8VNyHTasHVs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BK9GgB7WHdQsZ5ko',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6jREpz4Es0Rzjb8E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jCuso8ktR5SQ30JT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfmbxtanMZg8thKS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LzKSa50vDeN5vDF2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tUBNUe24kUtesok2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6HgLaFLkcNR8TQl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ikFjbE1ji6uVRP2s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0tbvUN9196MNJA1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::47gZjycsHBBXcy9u',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8hvOaRcKExe3mVtm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G9gbgcHuSId0he9U',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m5w0JgCSMPzJgUou',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6zgzTZqHDok6remZ',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DXPvxKL6x8v4efcu',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ApQDtOBNTsfwWYzd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dYfHorj26JCHoCzq',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'pass',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LH9M30TgEUFHYSsl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1XORL1omCP0ibrny',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EO1r6WMQeOTqTzHY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EphJMHUm5h9aNG4A',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ddFl51O1ClQZfmbu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rP1MObMmYRmhhnwT',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TXW0oAFXbqn4zoEE',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9aCXNISQQvm0PVPG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbQjNKF83v40NoZ4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9exd8h5zwqua6N7y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aT5PXK4dWTGCsnbK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9g1p0TU4t9Q7uq6M',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CXvMmNUko7XRMhaM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r0vKRSdNRHYEnLlm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bmx0Vn5yakwHMEzK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ctkpI2auGaDNpiMD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g0zCzkXvyqdd3hA5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A2D3OhGzck3iFld9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2RnJudulxfDDpZj',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wI84ZsiPTht32taO',
          ),
          1 => 
          array (
            0 => 'campaignid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cPZFzJ0lnq87x7Z8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uioPUyGsunK3LpXQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3gf9GdEJEG3Yc82r',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJTcFQd2y2VwBVfG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jjL0UH94PXDGtVXs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcuNuctwJQe54lR7',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GJZEOH62AxYOW3Ea',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lHtnuGfA6ZcFMi4v',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1RDeCtuLSzAj0NL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zO4nQ5azFwvz9Yq4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SXNcOiwJXhkxDFJ2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQHYViWI9RIdNUKv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W5Sh7x4acXSNugRq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iflU58zn0sR5LIV1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DQOuUC7MmrATIy4S',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K8QbzeFfOMkX4BLw',
          ),
          1 => 
          array (
            0 => 'campaignid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::snxFKuxUqS00Gaok',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcJSHKmO1KpgRbzH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yob67O09fS0n0i92',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5GLcXTJ1qW1p4Wa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::78VT4JuispiYMg5F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cLOS42vUomWkYw2o',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zkyt2RaPNlVxeF0g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqtnjNKCdygBX45l',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k8ss1j8oGXMQAEPb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5zaxspYv3DO3kQKW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KhcYxeQ0qH5G9O9a',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::6JEh8RtmWuTkKK5V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::6JEh8RtmWuTkKK5V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5vWS991gh69gYIfN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006060000000000000000";}";s:4:"hash";s:44:"3BjbcGkWLHEPrAoDNgyONxrYNTmSf7AX9KASYxdH1s0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5vWS991gh69gYIfN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XaDG3NlHRsfzFzxz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {return \\redirect(\'/login\');}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006080000000000000000";}";s:4:"hash";s:44:"YFs2Hb65PqggHNEYnTECifJ+GCKyy3swncm/7spHufI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XaDG3NlHRsfzFzxz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gm3KxvosI1zwnKT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@Onlinelanding',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@Onlinelanding',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2gm3KxvosI1zwnKT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U1vJRV4pOFcwXjrn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U1vJRV4pOFcwXjrn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvpIMLcYcVFa2gHu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gvpIMLcYcVFa2gHu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pwEauXBN7j5oCuib' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pwEauXBN7j5oCuib',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LtZYxwDLt4f0ZfRT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LtZYxwDLt4f0ZfRT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZANlYJLGQ3bV3ISi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@ForgetSMS',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@ForgetSMS',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZANlYJLGQ3bV3ISi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.sms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sms/sendsms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@SendSMS',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@SendSMS',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.sms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KdhCazeENapGgy4G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verifySMS',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@SetPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@SetPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KdhCazeENapGgy4G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RuKyZzlUb7AdL4t3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@UpdatePassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@UpdatePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RuKyZzlUb7AdL4t3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2FNQbzMV6wVHrxPd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verifyotp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\RegisterController@otp',
        'controller' => '\\App\\Http\\Controllers\\Auth\\RegisterController@otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2FNQbzMV6wVHrxPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U3VzrTxZt2f9sWHf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms-sender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@smsSender',
        'controller' => 'App\\Http\\Controllers\\HomeController@smsSender',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U3VzrTxZt2f9sWHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JZvP9Ypth715wFUx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms-sending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@smsSending',
        'controller' => 'App\\Http\\Controllers\\HomeController@smsSending',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JZvP9Ypth715wFUx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R58DJM7z3fbWEQRW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulk-sms-sending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@smsSending',
        'controller' => 'App\\Http\\Controllers\\HomeController@smsSending',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::R58DJM7z3fbWEQRW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MCDejXFENJ0TiZU3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@priceSync',
        'controller' => 'App\\Http\\Controllers\\HomeController@priceSync',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MCDejXFENJ0TiZU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ctXOXNrPSpXgP1pw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback_response_push',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@callback_response_push',
        'controller' => 'App\\Http\\Controllers\\HomeController@callback_response_push',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ctXOXNrPSpXgP1pw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgerulRRq8X6oQmA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'op_balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@OperatorBalance',
        'controller' => 'App\\Http\\Controllers\\HomeController@OperatorBalance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mgerulRRq8X6oQmA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fYu8kn8m21mAt1gG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@api',
        'controller' => 'App\\Http\\Controllers\\ApiController@api',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fYu8kn8m21mAt1gG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64K14yKghmbgtEhO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@otp',
        'controller' => 'App\\Http\\Controllers\\ApiController@otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::64K14yKghmbgtEhO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RHSSaA23wG2vZFqy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@balance',
        'controller' => 'App\\Http\\Controllers\\ApiController@balance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RHSSaA23wG2vZFqy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::boOoY101pSVJlCY5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'smsstatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@smsstatus',
        'controller' => 'App\\Http\\Controllers\\ApiController@smsstatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::boOoY101pSVJlCY5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::213Yc5yinnx5C79p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'otp-with-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@otpWithCallback',
        'controller' => 'App\\Http\\Controllers\\ApiController@otpWithCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::213Yc5yinnx5C79p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FpEmMM7CPo2xG6aj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api-sms-send/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@apiSMSsend',
        'controller' => 'App\\Http\\Controllers\\ApiController@apiSMSsend',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FpEmMM7CPo2xG6aj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gPM3frTMH046Hy7H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleEasyCheckout',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleEasyCheckout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gPM3frTMH046Hy7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IhdCUoib2CWXttUG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleHostedCheckout',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleHostedCheckout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IhdCUoib2CWXttUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::povEoljfsplxTFtf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::povEoljfsplxTFtf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D0y1P9CDwbJCImHS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller_pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ResellerPay',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ResellerPay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D0y1P9CDwbJCImHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h40ehiHFKlE9vE2S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pay-via-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@payViaAjax',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@payViaAjax',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::h40ehiHFKlE9vE2S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HspXfqerdgXqylGF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@success',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HspXfqerdgXqylGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3c2AytZYHshYS55C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@fail',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@fail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3c2AytZYHshYS55C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvhuzNYJ0XQCGtGN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@cancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gvhuzNYJ0XQCGtGN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZGwZR9YB2lefd4A3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ipn',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ipn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZGwZR9YB2lefd4A3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9KMROp1TMsAmTbJL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'downloadapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@download',
        'controller' => 'App\\Http\\Controllers\\HomeController@download',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9KMROp1TMsAmTbJL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uT8Bse9AG7SN2qUT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/AccessLog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@AccessLog',
        'controller' => 'App\\Http\\Controllers\\AdminController@AccessLog',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uT8Bse9AG7SN2qUT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vl92rcVEjO804FV4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/AccessLog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@AccessLog',
        'controller' => 'App\\Http\\Controllers\\AdminController@AccessLog',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vl92rcVEjO804FV4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fSBg8F1JVmDJ8vAc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@profile',
        'controller' => 'App\\Http\\Controllers\\AdminController@profile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fSBg8F1JVmDJ8vAc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WoHaq0Vyv4Ym4pXU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\AdminController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WoHaq0Vyv4Ym4pXU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0jkDZu1xnO8RrNt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@ChangeNotification',
        'controller' => 'App\\Http\\Controllers\\AdminController@ChangeNotification',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::U0jkDZu1xnO8RrNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GbcSEDy1pwERBmT0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@Notification',
        'controller' => 'App\\Http\\Controllers\\AdminController@Notification',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GbcSEDy1pwERBmT0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xhXLW19ByH6CiZXZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notify/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@NotificationStore',
        'controller' => 'App\\Http\\Controllers\\AdminController@NotificationStore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xhXLW19ByH6CiZXZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sxgGS5ER9NZ0iVbG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewnotify/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@viewnotify',
        'controller' => 'App\\Http\\Controllers\\AdminController@viewnotify',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sxgGS5ER9NZ0iVbG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MRxGXV5GaARkNEhh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_notify/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@Destroynotify',
        'controller' => 'App\\Http\\Controllers\\AdminController@Destroynotify',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MRxGXV5GaARkNEhh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::en5HQvnL6OAia2Nl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notify/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@NotificationEdit',
        'controller' => 'App\\Http\\Controllers\\AdminController@NotificationEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::en5HQvnL6OAia2Nl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pMMYF8QhpqAaKNfp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notify/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@NotificationUpdate',
        'controller' => 'App\\Http\\Controllers\\AdminController@NotificationUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pMMYF8QhpqAaKNfp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uKmw665Y6cAFfAYU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uKmw665Y6cAFfAYU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GCTsmRhpP3iUrb3L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/create_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@createCampaign',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@createCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GCTsmRhpP3iUrb3L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bacS9s9wHXG0wTQ7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/preview_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@previewCampaign',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@previewCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bacS9s9wHXG0wTQ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ene75caOZroESest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@campaigndetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@campaigndetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ene75caOZroESest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DEtkY3Wbl7YDVhgB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@campaigndetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@campaigndetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DEtkY3Wbl7YDVhgB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NohXWmLkXd2sLUdw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fail_campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@FailedCampaign',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@FailedCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NohXWmLkXd2sLUdw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8jQLw6XcfFlZ7Ov' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/fail_campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@FailedCampaign',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@FailedCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Q8jQLw6XcfFlZ7Ov',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7a84M0SiRgS3OCIr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms_ratio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@SMSRatio',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@SMSRatio',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7a84M0SiRgS3OCIr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mYV6MgVTfQWBvIQa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@editCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@editCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mYV6MgVTfQWBvIQa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LzKSa50vDeN5vDF2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@updateCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@updateCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LzKSa50vDeN5vDF2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZwPJt9SEFMhRsFU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@deleteCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@deleteCampaign',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kZwPJt9SEFMhRsFU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Si3EJJIBgptSClBX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@downloadFile',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@downloadFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Si3EJJIBgptSClBX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6zgzTZqHDok6remZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/successdownload/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@SuccessFile',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@SuccessFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6zgzTZqHDok6remZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApQDtOBNTsfwWYzd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resend_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CampaignController@Retry',
        'controller' => 'App\\Http\\Controllers\\Admin\\CampaignController@Retry',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ApQDtOBNTsfwWYzd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kvhGGqntv3t1sxw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8kvhGGqntv3t1sxw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8IIrvcO45oW2pkQl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8IIrvcO45oW2pkQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I9N3AS5ub7DmZXcS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewtemplate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@viewtemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@viewtemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::I9N3AS5ub7DmZXcS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ltcxdy62m0VMf4NY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ltcxdy62m0VMf4NY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tUBNUe24kUtesok2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tUBNUe24kUtesok2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WLkkbGu1xyxFDspM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TemplateController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WLkkbGu1xyxFDspM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T9egcE2HDLwRrqnk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rateplan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatePlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatePlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T9egcE2HDLwRrqnk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vNVkjsHvlw0Xqjx6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/rateplan/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatePlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatePlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vNVkjsHvlw0Xqjx6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ipuiyssjRmf7YmGs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/managecus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerData',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ipuiyssjRmf7YmGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9AGAWjUkbge8JGhr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/managecus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerData',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9AGAWjUkbge8JGhr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z0FvPJHCpGfaE8R2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/conveyance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerConveyance',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@FieldCustomerConveyance',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Z0FvPJHCpGfaE8R2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BK9GgB7WHdQsZ5ko' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editCustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editCustomer',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editCustomer',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BK9GgB7WHdQsZ5ko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::47gZjycsHBBXcy9u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updateCustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@updateCustomer',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@updateCustomer',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::47gZjycsHBBXcy9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6jREpz4Es0Rzjb8E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editConeyance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editConeyance',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editConeyance',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6jREpz4Es0Rzjb8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8hvOaRcKExe3mVtm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updateConeyance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@updateConveyance',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@updateConveyance',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8hvOaRcKExe3mVtm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hiX1oz9yX7A2Colp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download_field/xlsx',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadField',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadField',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hiX1oz9yX7A2Colp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ae6j6I4fUxYIfCQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attendence_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@AttendenceList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@AttendenceList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ae6j6I4fUxYIfCQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dLdGkZvyPBwwihWc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/attendence_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@AttendenceList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@AttendenceList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dLdGkZvyPBwwihWc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::knhfjZl2C8RZea5J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download_attendence/xlsx',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadAttendence',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadAttendence',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::knhfjZl2C8RZea5J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DyNoO9lfsPYycKrF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comissionlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ComissionList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ComissionList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DyNoO9lfsPYycKrF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yqVp6Dw53E4q0WUL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comissionlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ComissionList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ComissionList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yqVp6Dw53E4q0WUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZpdg6b7Y0WPwj7b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/saleslist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@salesList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@salesList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tZpdg6b7Y0WPwj7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gnSflvKZGVbuwEtJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saleslist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@salesList',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@salesList',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gnSflvKZGVbuwEtJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I1JW4ftAa6R94PRK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/executive_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ExecutiveStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ExecutiveStore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::I1JW4ftAa6R94PRK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1XORL1omCP0ibrny' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ces/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ChangeExecutiveStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ChangeExecutiveStatus',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1XORL1omCP0ibrny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jCuso8ktR5SQ30JT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editsales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editSales',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@editSales',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jCuso8ktR5SQ30JT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6HgLaFLkcNR8TQl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_sales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@UpdateSales',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@UpdateSales',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::R6HgLaFLkcNR8TQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7WeVkU8omyXbri2M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7WeVkU8omyXbri2M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::McLwXEby9LeqiCr3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::McLwXEby9LeqiCr3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V0dbx5Awe5b6lISU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/new_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::V0dbx5Awe5b6lISU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OF7wBI0nzhqfQKf8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewuser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@viewuser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@viewuser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OF7wBI0nzhqfQKf8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFqC19eVw3USH9fH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rFqC19eVw3USH9fH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G9gbgcHuSId0he9U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_doc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@Document',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@Document',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::G9gbgcHuSId0he9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ikFjbE1ji6uVRP2s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ikFjbE1ji6uVRP2s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::culXxPokyOWSYAIw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::culXxPokyOWSYAIw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DXPvxKL6x8v4efcu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@Status',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@Status',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DXPvxKL6x8v4efcu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dYfHorj26JCHoCzq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset/{id}/{pass}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@reset',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@reset',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dYfHorj26JCHoCzq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UEA8mnDkdIiRF4RD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@UserBalance',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@UserBalance',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UEA8mnDkdIiRF4RD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VH0VgetDCUQz7ZK9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download_user/xlsx',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@DownloadUser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VH0VgetDCUQz7ZK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EO1r6WMQeOTqTzHY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/approval/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ApproveUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ApproveUser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EO1r6WMQeOTqTzHY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LH9M30TgEUFHYSsl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rework/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ReworkDocument',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ReworkDocument',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LH9M30TgEUFHYSsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ddFl51O1ClQZfmbu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trade_rework/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ReworkTrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserManagementController@ReworkTrade',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ddFl51O1ClQZfmbu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7pQgO9XC9ouVv2PP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7pQgO9XC9ouVv2PP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h39Ty3D8ojA3i4G5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mask/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::h39Ty3D8ojA3i4G5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xqwhc6Aky833IlCO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewmask/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@view',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Xqwhc6Aky833IlCO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RTYVncanxlgc7Y5j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_mask/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RTYVncanxlgc7Y5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TXW0oAFXbqn4zoEE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mask_status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@Status',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@Status',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TXW0oAFXbqn4zoEE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1upDwN7sIRSmGlS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/nonmask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@manage_nonmask',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@manage_nonmask',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::i1upDwN7sIRSmGlS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9vJmRtgfPEB7YySx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/nonmask/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9vJmRtgfPEB7YySx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GIaKk8n8UWZDi13w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewnonmask/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_view',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_view',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GIaKk8n8UWZDi13w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xPvRnT6WgLPsLoIl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete_nonmask/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xPvRnT6WgLPsLoIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::muVrRBYxBAax6Prs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/nonmask_status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_status',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaskController@nonmask_status',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::muVrRBYxBAax6Prs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnmxGaSIdm7d7meN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DnmxGaSIdm7d7meN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j2VwS4tBEsRLESUp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contact_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::j2VwS4tBEsRLESUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Z6dC4XzZyppiWAm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@createGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@createGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9Z6dC4XzZyppiWAm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jU4sNWtyu7miIXyQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@viewGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@viewGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jU4sNWtyu7miIXyQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfmbxtanMZg8thKS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/editgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@updateGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lfmbxtanMZg8thKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OQwYJ8tt2RKLDvHj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletegroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OQwYJ8tt2RKLDvHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZY33QJ7M6G1BhPTH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savegroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@saveGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@saveGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZY33QJ7M6G1BhPTH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sqqxNG4t5YGIepJ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download_contacts/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@downloadGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@downloadGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sqqxNG4t5YGIepJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::irEtHpvzq3AQda1A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/samplefile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'controller' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::irEtHpvzq3AQda1A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EphJMHUm5h9aNG4A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addcontactingroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GroupController@addContactOnGroup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GroupController@addContactOnGroup',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EphJMHUm5h9aNG4A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLkGwcN3ABi8iGfH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/recharge/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lLkGwcN3ABi8iGfH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WRr67u68tYM5qeYV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@History',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@History',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WRr67u68tYM5qeYV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oFuO5Pxo5G6PhDV6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@History',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@History',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oFuO5Pxo5G6PhDV6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2hL4LhM2DB0yGco' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@TransactionHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@TransactionHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b2hL4LhM2DB0yGco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rP1MObMmYRmhhnwT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trx_status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@AdminTransaction',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@AdminTransaction',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rP1MObMmYRmhhnwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dED7CUEjKZEX805y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-recharge-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'Reseller\\RechargeController@userRechargeHistory',
        'controller' => 'Reseller\\RechargeController@userRechargeHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dED7CUEjKZEX805y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gtwRVwOcFrRKucyT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-refund-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'Reseller\\RechargeController@userRefundHistory',
        'controller' => 'Reseller\\RechargeController@userRefundHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gtwRVwOcFrRKucyT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m5w0JgCSMPzJgUou' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userrechargehistory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'Reseller\\RechargeController@getUserRechargeHistory',
        'controller' => 'Reseller\\RechargeController@getUserRechargeHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::m5w0JgCSMPzJgUou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0gko0WVlsBrrVrx3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@Api',
        'controller' => 'App\\Http\\Controllers\\AdminController@Api',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0gko0WVlsBrrVrx3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lHWx7YBZNsETETRE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/uploadapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@upload',
        'controller' => 'App\\Http\\Controllers\\AdminController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lHWx7YBZNsETETRE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LoWDYoEkwzozsjsl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@settings',
        'controller' => 'App\\Http\\Controllers\\AdminController@settings',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LoWDYoEkwzozsjsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QBqHV61XEqncvJWU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveconfiguration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@Configuration',
        'controller' => 'App\\Http\\Controllers\\AdminController@Configuration',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QBqHV61XEqncvJWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zPJx4ZFtqG4bWBTb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vendor_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@VendorTransactionsHistory',
        'controller' => 'App\\Http\\Controllers\\AdminController@VendorTransactionsHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zPJx4ZFtqG4bWBTb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mDdRn27slY9dEGJN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@UserSMSReport',
        'controller' => 'App\\Http\\Controllers\\AdminController@UserSMSReport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mDdRn27slY9dEGJN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oDRcqJUAKWy4FPEo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms_transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@SMSTransactions',
        'controller' => 'App\\Http\\Controllers\\AdminController@SMSTransactions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oDRcqJUAKWy4FPEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oZEUyrtU4jEvO40M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/revenue_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@RevenueReport',
        'controller' => 'App\\Http\\Controllers\\AdminController@RevenueReport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oZEUyrtU4jEvO40M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6tMu9oMi2hvAHQj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/operator_balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@DailyOperatorBalance',
        'controller' => 'App\\Http\\Controllers\\AdminController@DailyOperatorBalance',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::U6tMu9oMi2hvAHQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IjB8M6AGBHadZRj6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer_credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@requestlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@requestlist',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IjB8M6AGBHadZRj6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zfGCTZQANdCkWqxf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewrecharge/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@viewRecharge',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@viewRecharge',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zfGCTZQANdCkWqxf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FPxgBQCclo4G5J2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/approve_recharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@RechargeApprove',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@RechargeApprove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3FPxgBQCclo4G5J2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qxR2e8VNyHTasHVs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@EditPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@EditPayment',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qxR2e8VNyHTasHVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0tbvUN9196MNJA1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@UpdatePayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@UpdatePayment',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::W0tbvUN9196MNJA1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reseller.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@index',
        'controller' => 'App\\Http\\Controllers\\ResellerController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'reseller.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ntkKYoRwKPcrvy0B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@profile',
        'controller' => 'App\\Http\\Controllers\\ResellerController@profile',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::ntkKYoRwKPcrvy0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D5QqAIiY3JSzzInH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::D5QqAIiY3JSzzInH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zb7TJMCdxFa9VePO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@company',
        'controller' => 'App\\Http\\Controllers\\ResellerController@company',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::Zb7TJMCdxFa9VePO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XizipMjtVdx89BLx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/updatecompany',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UpdateCompany',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UpdateCompany',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::XizipMjtVdx89BLx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::69OSEU0flUvbRnbr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/ssl_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@SslRecharge',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@SslRecharge',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::69OSEU0flUvbRnbr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::df44oMl0YbzDsfzb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::df44oMl0YbzDsfzb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F0b06ka0KDZFaBdw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/create_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@createCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@createCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::F0b06ka0KDZFaBdw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::evW42nilnreZoXCi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/preview_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@previewCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@previewCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::evW42nilnreZoXCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MwHdxrd2B4pnK330' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CampaignList',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CampaignList',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::MwHdxrd2B4pnK330',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5poR0vIgZLT2zgpi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CampaignList',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CampaignList',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::5poR0vIgZLT2zgpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Gzvh7eCjjnl8xdW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/cost_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CostReport',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CostReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::6Gzvh7eCjjnl8xdW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfs7eI1GokNZtzYv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/cost_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CostReport',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@CostReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::cfs7eI1GokNZtzYv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9aCXNISQQvm0PVPG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/edit_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@editCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@editCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::9aCXNISQQvm0PVPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9g1p0TU4t9Q7uq6M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/update_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@updateCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@updateCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::9g1p0TU4t9Q7uq6M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bmx0Vn5yakwHMEzK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/delete_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\CampaignController@deleteCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\CampaignController@deleteCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::Bmx0Vn5yakwHMEzK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sldYa9JD7OP3oijv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::sldYa9JD7OP3oijv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7BkXWNKZAVVJkYp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/template/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@store',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::S7BkXWNKZAVVJkYp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uioPUyGsunK3LpXQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/viewtemplate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@viewtemplate',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@viewtemplate',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::uioPUyGsunK3LpXQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fbQjNKF83v40NoZ4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/edit_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@edit',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::fbQjNKF83v40NoZ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CXvMmNUko7XRMhaM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/update_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@update',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::CXvMmNUko7XRMhaM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ctkpI2auGaDNpiMD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/delete_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\TemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Reseller\\TemplateController@destroy',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::ctkpI2auGaDNpiMD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dwChmq8gR6K5fOoR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/recharge/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@store',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@store',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::dwChmq8gR6K5fOoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o6gLsOj8b5Rs1hRn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/user_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@History',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@History',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::o6gLsOj8b5Rs1hRn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PqxFHQV2ozzjRFS5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/user_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@History',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@History',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::PqxFHQV2ozzjRFS5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ObPqapmBwWDf8LGv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/reseller_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@MyRecharge',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@MyRecharge',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::ObPqapmBwWDf8LGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WPbnDvDncIzgU1cz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/reseller_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@MyRecharge',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@MyRecharge',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::WPbnDvDncIzgU1cz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XS2oS5xqdXCrQai8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/balance_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@balanceHistory',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@balanceHistory',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::XS2oS5xqdXCrQai8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VS3zUGQLPLGo3klW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/user-sms-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'Reseller\\ReportController@userSMSReport',
        'controller' => 'Reseller\\ReportController@userSMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::VS3zUGQLPLGo3klW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rehq6WrJ0x7SFWsf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/mydaily-sms-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\ReportController@MydailySMSReport',
        'controller' => 'App\\Http\\Controllers\\Reseller\\ReportController@MydailySMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::Rehq6WrJ0x7SFWsf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qkJXKkIfLo7OBKw7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/user_daily_sms_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\ReportController@UserdailySMSReport',
        'controller' => 'App\\Http\\Controllers\\Reseller\\ReportController@UserdailySMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::qkJXKkIfLo7OBKw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RWgbenWGChw6lGEG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/contact_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::RWgbenWGChw6lGEG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jKP4NlMhGAoumFpq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/create_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@createGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@createGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::jKP4NlMhGAoumFpq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3gf9GdEJEG3Yc82r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/viewgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@viewGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@viewGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::3gf9GdEJEG3Yc82r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aT5PXK4dWTGCsnbK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/editgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@updateGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::aT5PXK4dWTGCsnbK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A2D3OhGzck3iFld9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/deletegroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::A2D3OhGzck3iFld9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2CuBtIs2t8HT64I1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/savegroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@saveGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@saveGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::2CuBtIs2t8HT64I1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2RnJudulxfDDpZj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/download_contacts/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@downloadGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@downloadGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::v2RnJudulxfDDpZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f3gxrOB7yb1CnESY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/samplefile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'controller' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::f3gxrOB7yb1CnESY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jjL0UH94PXDGtVXs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/addcontactingroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\GroupController@addContactOnGroup',
        'controller' => 'App\\Http\\Controllers\\Reseller\\GroupController@addContactOnGroup',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::jjL0UH94PXDGtVXs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0v102DWff0ZA1QC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::I0v102DWff0ZA1QC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y9iJU75TfIwFVuY9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::Y9iJU75TfIwFVuY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d7mhyoJ6sZyd5tQE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/new_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@store',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@store',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::d7mhyoJ6sZyd5tQE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJTcFQd2y2VwBVfG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/viewuser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@viewuser',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@viewuser',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::cJTcFQd2y2VwBVfG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9exd8h5zwqua6N7y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/edit_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@edit',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@edit',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::9exd8h5zwqua6N7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r0vKRSdNRHYEnLlm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/update_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@update',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@update',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::r0vKRSdNRHYEnLlm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g0zCzkXvyqdd3hA5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/delete_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@destroy',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::g0zCzkXvyqdd3hA5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcuNuctwJQe54lR7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/status/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@Status',
        'controller' => 'App\\Http\\Controllers\\Reseller\\UserManagementController@Status',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::JcuNuctwJQe54lR7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9KfivTAmNacIiQsi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/rateplan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@index',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@index',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::9KfivTAmNacIiQsi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XXvYRUlUAVtWEx21' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/myplan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@myPlan',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@myPlan',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::XXvYRUlUAVtWEx21',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZg7bqrrK7hFYGnr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/rateplan/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@store',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RatePlanController@store',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::kZg7bqrrK7hFYGnr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y7xzkA7SzDwnjR9O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/My_smsReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::Y7xzkA7SzDwnjR9O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nk5uwnbCtjKBBvbg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/My_smsReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::nk5uwnbCtjKBBvbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k3g58UAtLt5zOCgr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/userReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::k3g58UAtLt5zOCgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9WU73e391uykoEvL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/userReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::9WU73e391uykoEvL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aqy7GMwI3SZDuqYu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/user_smsReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UserSMSReport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::aqy7GMwI3SZDuqYu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5kS7HsLOv7BjPTe9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@Api',
        'controller' => 'App\\Http\\Controllers\\ResellerController@Api',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::5kS7HsLOv7BjPTe9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVZC0cibCcGBGyl3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@Document',
        'controller' => 'App\\Http\\Controllers\\UserController@Document',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nVZC0cibCcGBGyl3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::47w9CPn8tyidkYHv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::47w9CPn8tyidkYHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iIIlaTUSSSuuOKLA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/create_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@createCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@createCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iIIlaTUSSSuuOKLA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ep2vzyHB7UiH99QC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/preview_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@previewCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@previewCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Ep2vzyHB7UiH99QC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PQwOoxzSf4sUUsku' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@campaigndetails',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@campaigndetails',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::PQwOoxzSf4sUUsku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9orLwRN7o3NrjBL2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/campaign_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@campaigndetails',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@campaigndetails',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9orLwRN7o3NrjBL2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ga8y78RrxkUyhRe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/cost_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@CostReport',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@CostReport',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5ga8y78RrxkUyhRe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T3I4ZtihrBvGw6eB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/cost_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@CostReport',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@CostReport',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::T3I4ZtihrBvGw6eB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GJZEOH62AxYOW3Ea' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@editCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@editCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GJZEOH62AxYOW3Ea',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zO4nQ5azFwvz9Yq4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@updateCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@updateCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::zO4nQ5azFwvz9Yq4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQHYViWI9RIdNUKv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/delete_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@deleteCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@deleteCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oQHYViWI9RIdNUKv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcJSHKmO1KpgRbzH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/resend_campaign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CampaignController@Retry',
        'controller' => 'App\\Http\\Controllers\\User\\CampaignController@Retry',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JcJSHKmO1KpgRbzH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ekHNSI0O19We7T5A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dynamic_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicCampaign',
        'controller' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicCampaign',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ekHNSI0O19We7T5A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8zB3yIkcSaftJPx7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dynamic_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicCampaignList',
        'controller' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicCampaignList',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8zB3yIkcSaftJPx7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Whatzsrqy6Kd1BWB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dynamic_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DynamicSmsController@CampaignStore',
        'controller' => 'App\\Http\\Controllers\\User\\DynamicSmsController@CampaignStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Whatzsrqy6Kd1BWB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jSDmxw45knc8Mwu6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/store_dynamic_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicStore',
        'controller' => 'App\\Http\\Controllers\\User\\DynamicSmsController@DynamicStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jSDmxw45knc8Mwu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QQsA9BomrFyEcPgz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dynamicfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@DynamicFile',
        'controller' => 'App\\Http\\Controllers\\HomeController@DynamicFile',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::QQsA9BomrFyEcPgz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y1wxzlxs60OdNaQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dynamicsms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@DynamicSMSTemplate',
        'controller' => 'App\\Http\\Controllers\\HomeController@DynamicSMSTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Y1wxzlxs60OdNaQM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::po81GLnVeTjkkfBO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/contact_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@index',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::po81GLnVeTjkkfBO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wQzLzeSGZ1fS3Z6G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/create_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@createGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@createGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wQzLzeSGZ1fS3Z6G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yob67O09fS0n0i92' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/viewgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@viewGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@viewGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Yob67O09fS0n0i92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w1RDeCtuLSzAj0NL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/editgroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@updateGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::w1RDeCtuLSzAj0NL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iflU58zn0sR5LIV1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/deletegroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iflU58zn0sR5LIV1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGh9RVzAwvU9ZyGK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/savegroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@saveGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@saveGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bGh9RVzAwvU9ZyGK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DQOuUC7MmrATIy4S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/download_contacts/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@downloadGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@downloadGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DQOuUC7MmrATIy4S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B4mB2aKdREkYRLBD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/samplefile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'controller' => 'App\\Http\\Controllers\\HomeController@SampleFile',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::B4mB2aKdREkYRLBD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::78VT4JuispiYMg5F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/addcontactingroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GroupController@addContactOnGroup',
        'controller' => 'App\\Http\\Controllers\\User\\GroupController@addContactOnGroup',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::78VT4JuispiYMg5F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0G9CSVYCHM8kFrsY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\UserController@profile',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0G9CSVYCHM8kFrsY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VmzFBy4Jfq9Se9tu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VmzFBy4Jfq9Se9tu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iDR6E6IYxzAWJywp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@Api',
        'controller' => 'App\\Http\\Controllers\\UserController@Api',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iDR6E6IYxzAWJywp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fiRyNyWn62kmEgRq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/myplan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RatePlanController@myPlan',
        'controller' => 'App\\Http\\Controllers\\User\\RatePlanController@myPlan',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fiRyNyWn62kmEgRq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZ039F5Ey0VlcIqA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CZ039F5Ey0VlcIqA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zRHXoh0yXka03ax3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/template/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@store',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::zRHXoh0yXka03ax3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r5GLcXTJ1qW1p4Wa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/viewtemplate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewtemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewtemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::r5GLcXTJ1qW1p4Wa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lHtnuGfA6ZcFMi4v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::lHtnuGfA6ZcFMi4v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SXNcOiwJXhkxDFJ2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@update',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SXNcOiwJXhkxDFJ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5Sh7x4acXSNugRq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/delete_template/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::W5Sh7x4acXSNugRq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMpyecMXbu8A8EHI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/transaction_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@TransactionHistory',
        'controller' => 'App\\Http\\Controllers\\UserController@TransactionHistory',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uMpyecMXbu8A8EHI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fhg5EJn83YGnF7Fz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@RechargeHistory',
        'controller' => 'App\\Http\\Controllers\\UserController@RechargeHistory',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fhg5EJn83YGnF7Fz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DdkhdbHeIlIiZygV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/account_summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@Summery',
        'controller' => 'App\\Http\\Controllers\\UserController@Summery',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DdkhdbHeIlIiZygV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cvhS40yZItBJgoO5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/account_summary_graph',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@Graph',
        'controller' => 'App\\Http\\Controllers\\UserController@Graph',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cvhS40yZItBJgoO5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qiknLpNTB2t09Lu0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/ssl_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@payment',
        'controller' => 'App\\Http\\Controllers\\UserController@payment',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qiknLpNTB2t09Lu0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjFHunaL0Dy5n20Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@Support',
        'controller' => 'App\\Http\\Controllers\\UserController@Support',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::LjFHunaL0Dy5n20Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GumaeeraRETthnmc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/nid_submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'user',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@NidPost',
        'controller' => 'App\\Http\\Controllers\\UserController@NidPost',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GumaeeraRETthnmc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@index',
        'controller' => 'App\\Http\\Controllers\\SalesController@index',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'sales.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3HWT8fEJbitAzjL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@profile',
        'controller' => 'App\\Http\\Controllers\\SalesController@profile',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::X3HWT8fEJbitAzjL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qxabxnPBrkcNp37x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\SalesController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::qxabxnPBrkcNp37x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W9g3rOYLZQt9KAWE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/mycommission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@MyCommission',
        'controller' => 'App\\Http\\Controllers\\SalesController@MyCommission',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::W9g3rOYLZQt9KAWE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FfpMpivVKJrjtK4p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/attendence',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@Attendence',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@Attendence',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::FfpMpivVKJrjtK4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ny91TiAM79kbFAjE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/attendence_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@AttendenceList',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@AttendenceList',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::ny91TiAM79kbFAjE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uf4UhF8il1su5JXs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/attendence_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@AttendenceList',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@AttendenceList',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::uf4UhF8il1su5JXs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CowQXEFuu9d3Mw1T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/leave_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveList',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveList',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::CowQXEFuu9d3Mw1T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JT9eqLe2tgUTvXWc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/leave_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveList',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveList',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::JT9eqLe2tgUTvXWc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fucyDtt4xBaPnZZg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/application',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@Application',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@Application',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::fucyDtt4xBaPnZZg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BcNWwqkw4QWkw3Jq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/store_application',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveStore',
        'controller' => 'App\\Http\\Controllers\\Sales\\AttendenceController@LeaveStore',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::BcNWwqkw4QWkw3Jq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NKzNSmwv5at2K8oP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::NKzNSmwv5at2K8oP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zTXO2UqqJPjiqDXq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::zTXO2UqqJPjiqDXq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::feF8yRdk5XqCtv8Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/customer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::feF8yRdk5XqCtv8Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7C54rKepgGV3ttN7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::7C54rKepgGV3ttN7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cLOS42vUomWkYw2o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/editcustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::cLOS42vUomWkYw2o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iqtnjNKCdygBX45l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/updatecustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::iqtnjNKCdygBX45l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DmjL3whAdgGg8yom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/conveyance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@Conveyance',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@Conveyance',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::DmjL3whAdgGg8yom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sIYU5KfjlfCJlPKw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/conveyance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@Conveyance',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@Conveyance',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::sIYU5KfjlfCJlPKw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QubdDViHiTm8DMY6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@AssignedCustomer',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@AssignedCustomer',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::QubdDViHiTm8DMY6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sQIGQqWYrrEinugn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/userlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@AssignedCustomer',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@AssignedCustomer',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::sQIGQqWYrrEinugn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jn9A6SZ7PqnBNmMZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/sys_recharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@RechargeHistory',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@RechargeHistory',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::Jn9A6SZ7PqnBNmMZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V0fF3yT8Cu1wMMQS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/customers_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@CustomerCampaign',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@CustomerCampaign',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::V0fF3yT8Cu1wMMQS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::53aQSWzEMY2R7a3b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/customer_credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@requestlist',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@requestlist',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::53aQSWzEMY2R7a3b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HqQ0s72EyiySoaeb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/recharge_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@rechargeRequest',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@rechargeRequest',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::HqQ0s72EyiySoaeb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zkyt2RaPNlVxeF0g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/edit_payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@EditPayment',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@EditPayment',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::zkyt2RaPNlVxeF0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k8ss1j8oGXMQAEPb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/update_payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'sales',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Sales\\CustomerController@UpdatePayment',
        'controller' => 'App\\Http\\Controllers\\Sales\\CustomerController@UpdatePayment',
        'namespace' => NULL,
        'prefix' => '/sales',
        'where' => 
        array (
        ),
        'as' => 'generated::k8ss1j8oGXMQAEPb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manager.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@index',
        'controller' => 'App\\Http\\Controllers\\ManagerController@index',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'manager.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zi55fLWcl08EiZfB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@profile',
        'controller' => 'App\\Http\\Controllers\\ManagerController@profile',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::Zi55fLWcl08EiZfB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yHyzdoWkniNCbn72' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\ManagerController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::yHyzdoWkniNCbn72',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L08CjOHTcZfkDHot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/cus_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@FieldData',
        'controller' => 'App\\Http\\Controllers\\ManagerController@FieldData',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::L08CjOHTcZfkDHot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TckPDXDxogSHYuqk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/cus_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@FieldData',
        'controller' => 'App\\Http\\Controllers\\ManagerController@FieldData',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::TckPDXDxogSHYuqk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6SdoCSOVohwYPr2G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/download_field/xlsx',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@DownloadData',
        'controller' => 'App\\Http\\Controllers\\ManagerController@DownloadData',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::6SdoCSOVohwYPr2G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tiiqeh9yABMNIri8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/exec_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@ExecutiveList',
        'controller' => 'App\\Http\\Controllers\\ManagerController@ExecutiveList',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::tiiqeh9yABMNIri8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7qvxaGVuP5oR973G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/exec_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@ExecutiveList',
        'controller' => 'App\\Http\\Controllers\\ManagerController@ExecutiveList',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::7qvxaGVuP5oR973G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x2hYSmVnimkeIy3h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/com_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@ComissionList',
        'controller' => 'App\\Http\\Controllers\\ManagerController@ComissionList',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::x2hYSmVnimkeIy3h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tzsGmbbbOiLY4QmX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/attendence',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@Attendence',
        'controller' => 'App\\Http\\Controllers\\ManagerController@Attendence',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::tzsGmbbbOiLY4QmX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6CiObVVaJHg6I4Qj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/attendence_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagerController@AttendenceList',
        'controller' => 'App\\Http\\Controllers\\ManagerController@AttendenceList',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::6CiObVVaJHg6I4Qj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vlxuKzNlm5Hifefw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::vlxuKzNlm5Hifefw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vsTBZFtoX42U2owI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::vsTBZFtoX42U2owI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9y1ikRrc8efzZah7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/cus_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::9y1ikRrc8efzZah7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L4b6FrOBtLPxRvc8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::L4b6FrOBtLPxRvc8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5zaxspYv3DO3kQKW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/editcustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::5zaxspYv3DO3kQKW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KhcYxeQ0qH5G9O9a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/updatecustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::KhcYxeQ0qH5G9O9a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JiAkI63f8AUAmMY1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manager/conveyance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@Conveyance',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@Conveyance',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::JiAkI63f8AUAmMY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gWZcPmVZOXkDVW5W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'manager/conveyance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'manager',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Manager\\CustomerController@Conveyance',
        'controller' => 'App\\Http\\Controllers\\Manager\\CustomerController@Conveyance',
        'namespace' => NULL,
        'prefix' => '/manager',
        'where' => 
        array (
        ),
        'as' => 'generated::gWZcPmVZOXkDVW5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FWcwLpDsjqzxAkYI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/campaignwise/{campaignid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::FWcwLpDsjqzxAkYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7WPcmO389ZxHux9p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/campaignwise/dlr_export/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::7WPcmO389ZxHux9p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CNkuakMjq6NaLGmo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/campaignlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::CNkuakMjq6NaLGmo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::298fZTrOWVFZgfhS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/deliverylog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::298fZTrOWVFZgfhS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::quIrfYHrFS5jnwOZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/usercampaignlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@admin_usercampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@admin_usercampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::quIrfYHrFS5jnwOZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUyywg63Ljg85hqI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/userdeliverylog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@admin_userdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@admin_userdeliverylog',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::UUyywg63Ljg85hqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wI84ZsiPTht32taO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/campaignwise/{campaignid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::wI84ZsiPTht32taO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPZFzJ0lnq87x7Z8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/campaignwise/dlr_export/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::cPZFzJ0lnq87x7Z8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZKJNK4ECQfgGaw2C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/campaignlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::ZKJNK4ECQfgGaw2C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::73INcVCGvyXBDl1L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/deliverylog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::73INcVCGvyXBDl1L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Z0c8s1ZmJhkh2mn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/usercampaignlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::6Z0c8s1ZmJhkh2mn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ok9Htw4suAQhn4qL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/userdeliverylog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::ok9Htw4suAQhn4qL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8QbzeFfOMkX4BLw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dlr/campaignwise/{campaignid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::K8QbzeFfOMkX4BLw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::snxFKuxUqS00Gaok' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dlr/campaignwise/dlr_export/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::snxFKuxUqS00Gaok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2ghdfK9tfOmMN90' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dlr/campaignlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::d2ghdfK9tfOmMN90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pkb19pAVE4gbTOjm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dlr/deliverylog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@deliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@deliverylog',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::pkb19pAVE4gbTOjm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
