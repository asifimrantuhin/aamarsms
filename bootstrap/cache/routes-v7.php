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
            '_route' => 'generated::IzJzHDnNwGpu04zZ',
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
            '_route' => 'generated::2HounVPAw8ZfBS8X',
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
            '_route' => 'generated::RSQzawnMqQRoi9Cc',
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
            '_route' => 'generated::OnJ5erlMbswaQMtx',
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
            '_route' => 'generated::ChcvaUrB32yPK4qz',
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
            '_route' => 'generated::N7zAyfaAgLQQV8Am',
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
            '_route' => 'generated::mFyxCzkgPx4oN6OY',
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
            '_route' => 'generated::zDCrmct0z7zlrvSA',
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
            '_route' => 'generated::0I6oW5Z5YMcpEy3W',
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
            '_route' => 'generated::6JSoccduGiewFehT',
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
            '_route' => 'generated::KScZhql4eDwAAiWm',
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
            '_route' => 'generated::pka6drTIjbdjaCfj',
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
            '_route' => 'generated::IKWa3yGoIm0ZdFPZ',
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
            '_route' => 'generated::8fEtU0B2BFfl2XRh',
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
            '_route' => 'generated::QozvmOIDP2qDP4oc',
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
            '_route' => 'generated::QShWGMr7IxKCvvfi',
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
            '_route' => 'generated::LrMbUgMNgXy6WWIs',
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
            '_route' => 'generated::kn7fOwsKMbCmNMDD',
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
            '_route' => 'generated::kRxPlogmq2kRSTyY',
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
            '_route' => 'generated::tB7ehKfke8n9ifqZ',
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
            '_route' => 'generated::XFmn83AQPLahEyaT',
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
            '_route' => 'generated::q85xoOa4iyLOI63K',
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
            '_route' => 'generated::nwROSVUTzYtbl4j9',
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
            '_route' => 'generated::odOvSajdDODjjVzZ',
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
            '_route' => 'generated::iGEpvD7JMycRNps1',
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
            '_route' => 'generated::MO79e7DYqVOQBctN',
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
            '_route' => 'generated::rV8UmwweS26whSU7',
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
            '_route' => 'generated::17E01Jt0AzCACRoU',
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
            '_route' => 'generated::MDEUTUstiM7s0EYK',
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
            '_route' => 'generated::qNeiO484ih0iLD5x',
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
            '_route' => 'generated::r3XIdFXP89mLKFcD',
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
            '_route' => 'generated::CB2WapYSJAVkKviH',
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
            '_route' => 'generated::HhaFP5wrwcXwyBbj',
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
            '_route' => 'generated::ugv0tWiERf5Mw1xE',
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
            '_route' => 'generated::htuTboVjbn9R2UbQ',
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
            '_route' => 'generated::7asHPxzxcfHCoZsz',
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
            '_route' => 'generated::HP4NN140VyRiCwQ9',
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
            '_route' => 'generated::ZxAzRUccEY98xPva',
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
            '_route' => 'generated::nCL2opLlA80KWRCH',
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
            '_route' => 'generated::oDZAEiTmbXrnHe1z',
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
            '_route' => 'generated::q5LWJz0TgKVuJsfm',
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
            '_route' => 'generated::Wp3IY7v7EvynesCw',
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
            '_route' => 'generated::pU3Ul6z1fNqTOTQQ',
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
            '_route' => 'generated::luolASQfld4nIysH',
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
            '_route' => 'generated::jDscUK6CZ7S871fw',
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
            '_route' => 'generated::jGWqpmDf9UBp5qw7',
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
            '_route' => 'generated::VdTsL3H34Q9JubgS',
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
            '_route' => 'generated::2jBkVKhv1J5DuSno',
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
            '_route' => 'generated::ofklArin22V1qT1K',
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
            '_route' => 'generated::b1MHe8CsJ2txMC6e',
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
            '_route' => 'generated::DcB6Zszc7kHDSXSm',
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
            '_route' => 'generated::gTrJFQrUp1rKwtQf',
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
            '_route' => 'generated::rGUifggmajmymBf0',
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
            '_route' => 'generated::OGzEMMakjrK4xVVM',
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
            '_route' => 'generated::k4yvxl94EfSfm7qj',
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
            '_route' => 'generated::RGRhj4ENqyJGErYg',
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
            '_route' => 'generated::6SeOTsuwIIsBGkFf',
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
            '_route' => 'generated::YBtSnaLDYOhWPVjt',
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
            '_route' => 'generated::U0Def1dyuOs4g2SB',
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
            '_route' => 'generated::Oisp4XUlAYSUstTe',
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
            '_route' => 'generated::Hx97aUhBLkC0mcYQ',
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
            '_route' => 'generated::TSjmQY2mjbHUv6OF',
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
            '_route' => 'generated::oC63ufSoM3lktnkw',
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
            '_route' => 'generated::w15KwcQIbQqSvRdx',
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
            '_route' => 'generated::0Sh4pXMriBohsJlp',
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
            '_route' => 'generated::9Idpb3PbyWJHan1r',
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
            '_route' => 'generated::H3xRHhKkeucrC1IX',
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
            '_route' => 'generated::rK8G9cLxM72cMUg8',
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
            '_route' => 'generated::UqTjU36HnSoAZ0RL',
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
            '_route' => 'generated::JX8I8IoqzQVONfXx',
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
            '_route' => 'generated::kKYQVCEdGQlDqh7A',
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
            '_route' => 'generated::r29LdwxkjcZVOMxY',
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
            '_route' => 'generated::IIIKnAbOHhEwiDdo',
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
            '_route' => 'generated::Rs9PhqowIJj5WTYR',
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
            '_route' => 'generated::AWUSvEYBKeiXCynZ',
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
            '_route' => 'generated::xeL3MTWDmLPUaS88',
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
            '_route' => 'generated::oOwaZh8k1pcLMWBZ',
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
            '_route' => 'generated::xFXiOcNtN7jBNFLJ',
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
            '_route' => 'generated::4KzY93OsjHf2UtwL',
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
            '_route' => 'generated::xpFtIdkdchmA6mVU',
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
            '_route' => 'generated::hl2yfyYryhIz8Fsc',
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
            '_route' => 'generated::ESuslF8b3uN5WyWg',
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
            '_route' => 'generated::PQcyanYC5yZqRrG8',
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
            '_route' => 'generated::aH6n28UJVRIDzfSb',
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
            '_route' => 'generated::eEvB3YhQwFvhA9nc',
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
            '_route' => 'generated::GWdutr4X2A548Wq8',
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
            '_route' => 'generated::fZ2FPaPP6MuemMMe',
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
            '_route' => 'generated::TG2VagzGu9jcXvUL',
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
            '_route' => 'generated::znCr2AoAjRRZqsX9',
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
            '_route' => 'generated::bnWqrq49p0mUd66h',
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
            '_route' => 'generated::zx2ItkavGMLaVm52',
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
            '_route' => 'generated::PHh6MfjslWFnw5xO',
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
            '_route' => 'generated::7sIfacDsNt0VSMJn',
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
            '_route' => 'generated::P90Cqmi4afTkB6xk',
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
            '_route' => 'generated::L8q5FUoBlmmHdaD0',
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
            '_route' => 'generated::LVDbYNUitxopT24Z',
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
            '_route' => 'generated::CWd0ykYVwthYtLbb',
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
            '_route' => 'generated::UG8X6x6ORJLRwUkM',
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
            '_route' => 'generated::l8NQHW3W6UfDzTBf',
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
            '_route' => 'generated::TErdJIbJx2rv83Uz',
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
            '_route' => 'generated::9PhjTxokHxhRM5Aw',
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
            '_route' => 'generated::UEEE3lwz0DIJq8Z8',
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
            '_route' => 'generated::ih6GMz90aovLNrUj',
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
            '_route' => 'generated::Ny6JhJ0T7xb7kn27',
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
            '_route' => 'generated::tfVqYTAfvObs3EiL',
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
            '_route' => 'generated::aMBmCo5yUEnNcRYb',
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
            '_route' => 'generated::PAocdj92npM0ydhM',
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
            '_route' => 'generated::WqfRcPCSXiidnU0j',
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
            '_route' => 'generated::PB1qoy80R0yvDMLC',
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
            '_route' => 'generated::h8p7o4LH0o2OVSG8',
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
            '_route' => 'generated::T3358oMK37xOP4rk',
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
            '_route' => 'generated::tSQ4TGrGvgrScwny',
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
            '_route' => 'generated::BrVgB3ZI96A8hblv',
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
            '_route' => 'generated::M5B631m1FcQFwjQl',
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
            '_route' => 'generated::BnKSa4mIo4NFEFDT',
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
            '_route' => 'generated::9Q2E4XUudxnB7ziU',
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
            '_route' => 'generated::wOYoeWT2COZRxIFS',
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
            '_route' => 'generated::SzUBxHUeTZcBHso3',
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
            '_route' => 'generated::QSBGQk3JkvUKNn7q',
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
            '_route' => 'generated::KyGBXFq5wm6Xqq2V',
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
            '_route' => 'generated::eFeegdMGxhpbDhI4',
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
            '_route' => 'generated::gTwEeMxq4ogsRWuJ',
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
            '_route' => 'generated::R7hf6zH6BN7VuETg',
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
            '_route' => 'generated::H2k3zqnyK5DWvKd6',
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
            '_route' => 'generated::Nx41VeTvD6DLgXvS',
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
            '_route' => 'generated::knz6tc1eKcZFaxgC',
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
            '_route' => 'generated::ALOanl4sYy4yYnaa',
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
            '_route' => 'generated::bxdm0m06j1WE4aej',
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
            '_route' => 'generated::pV02FwH9RJG8uNGW',
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
            '_route' => 'generated::WssNBElo7PhnOTcv',
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
            '_route' => 'generated::ABtTr4mWgFu0QFPU',
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
            '_route' => 'generated::ZJC1ffGd1JtMebqf',
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
            '_route' => 'generated::vjLNeHetufC5HhAM',
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
            '_route' => 'generated::vHiC2XPU8CKK2k62',
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
            '_route' => 'generated::84jrblnmgoc7q6vP',
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
            '_route' => 'generated::e2BddUGwkYjkAJDg',
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
            '_route' => 'generated::N1MvCjHrStnaiD0m',
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
            '_route' => 'generated::EFrizCWu5CLua60w',
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
            '_route' => 'generated::j6TOVJuXadrXlQI3',
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
            '_route' => 'generated::dDO3kt73ChdebY1y',
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
            '_route' => 'generated::CdvvPAzWYMwt5v2z',
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
            '_route' => 'generated::4PrZC2ZYwQHwCH8i',
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
            '_route' => 'generated::yRcZWnwm0Y1b7b9F',
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
            '_route' => 'generated::IvimjjECpBbKC1qx',
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
            '_route' => 'generated::hJec2EFhMvgCrAvJ',
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
            '_route' => 'generated::y7GfdrXy3pNTWYIo',
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
            '_route' => 'generated::KBRAlwGN6u8IDREW',
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
            '_route' => 'generated::upPTQ9kCRhR1BvkF',
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
            '_route' => 'generated::utZ505qGJgbUek1V',
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
            '_route' => 'generated::uhFbgTIsale9eZlG',
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
            '_route' => 'generated::PjDoeGBHaCYx33Yk',
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
            '_route' => 'generated::ae041pdEyv0Flc9D',
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
            '_route' => 'generated::pIUsjfNGXADCZkzh',
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
            '_route' => 'generated::OPdYufR7IhdJnQyS',
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
            '_route' => 'generated::uMjU40Fc4wzTg7vU',
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
            '_route' => 'generated::xiiM0AkuTl3YL70D',
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
            '_route' => 'generated::3ddfMQIk1t1lLTdU',
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
            '_route' => 'generated::nBh8ToMBdRvtL3KA',
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
            '_route' => 'generated::rznmtC7u6pgB7aHh',
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
            '_route' => 'generated::C4Y1QzbMsneKKsOC',
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
            '_route' => 'generated::18PcKBkgewfwxS8F',
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
            '_route' => 'generated::2g9EX1Ltn6PEKkza',
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
            '_route' => 'generated::deHl2OdgiDc9Kxiw',
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
            '_route' => 'generated::XJjFpCSlpHdUuJ4y',
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
            '_route' => 'generated::s6Gtfrkb6LNBnRvy',
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
            '_route' => 'generated::OYkDXV9lHXgIwZIX',
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
            '_route' => 'generated::vkHIIvtA5GbmsNjr',
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
            '_route' => 'generated::MkuNeLOlxLUlP2yp',
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
            '_route' => 'generated::b7eJlWQNsHz00lzA',
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
            '_route' => 'generated::veHGOVU6xK1g3RtG',
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
            '_route' => 'generated::SettaBckNbsjJY4u',
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
            '_route' => 'generated::RDxC9KSejvnkgQBo',
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
            '_route' => 'generated::6mDSgsAQy1SaU9rJ',
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
            '_route' => 'generated::zStRO9iutXt5p1T7',
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
            '_route' => 'generated::cuCJkqTjSdqyDyjr',
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
            '_route' => 'generated::vfs6RRGNwhrMj9Ds',
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
            '_route' => 'generated::TaEhDzOfh7vfygOW',
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
            '_route' => 'generated::j7MAZfg98qpWufc5',
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
            '_route' => 'generated::ZwaUaWh1HadE9vKW',
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
            '_route' => 'generated::yvgGNGKjTqoqwHlk',
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
            '_route' => 'generated::UjLmX8XYCHzMkaTf',
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
            '_route' => 'generated::97ecw43r2kbay0j7',
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
            '_route' => 'generated::7BJi6MZLT50NJr5w',
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
            '_route' => 'generated::Tr0tcLy2UaZqPFwd',
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
            '_route' => 'generated::mS61aHjShYQl0Ii1',
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
            '_route' => 'generated::muzTNo7CZN3NYQLT',
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
            '_route' => 'generated::51mTzXWyQhOAOTku',
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
            '_route' => 'generated::lezWB2f90aNpV42m',
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
            '_route' => 'generated::epvZhKpSmxqkmEOj',
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
            '_route' => 'generated::OWyuHNDlrt43Tfds',
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
            '_route' => 'generated::CtzPSq3fNJ25TD9w',
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
            '_route' => 'generated::QvDW4NQi9y7zAkb2',
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
            '_route' => 'generated::aHSvdqQLAMDrD0cc',
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
            '_route' => 'generated::ngDq3rnch3H8G096',
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
            '_route' => 'generated::VYfdV4LnjwsKC00I',
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
            '_route' => 'generated::P6hVv5rNP0mQ8lnZ',
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
            '_route' => 'generated::VeU8Cec0LimBK0VS',
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
            '_route' => 'generated::AcKwvsUj3VJSqkJI',
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
            '_route' => 'generated::TMKG5VXEZQp34PmQ',
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
            '_route' => 'generated::4LRvWGVcpKSpQXrI',
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
            '_route' => 'generated::b7hHkZDorZGI9Yxu',
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
            '_route' => 'generated::bjcQs18VDqzKRv4z',
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
            '_route' => 'generated::NTXR0irXbVKKZHxz',
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
            '_route' => 'generated::vv1UsqmPlfpMArx3',
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
      0 => '{^(?|/password/reset/([^/]++)(*:31)|/a(?|pi\\-sms\\-send/([^/]++)(*:65)|dmin/(?|view(?|notify/([^/]++)(*:102)|template/([^/]++)(*:127)|user/([^/]++)(*:148)|mask/([^/]++)(*:169)|group/([^/]++)(*:191)|recharge/([^/]++)(*:216))|d(?|elete(?|_(?|notify/([^/]++)(*:256)|campaign/([^/]++)(*:281)|template/([^/]++)(*:306)|user/([^/]++)(*:327)|mask/([^/]++)(*:348))|group/([^/]++)(*:371))|ownload(?|/([^/]++)/([^/]++)(*:408)|_contacts/([^/]++)/([^/]++)(*:443))|lr/(?|campaignwise/([^/]++)(*:479)|userwise/([^/]++)(*:504)))|notify/(?|edit/([^/]++)(*:537)|update/([^/]++)(*:560))|edit(?|_(?|campaign/([^/]++)(*:597)|template/([^/]++)(*:622)|user/([^/]++)(*:643)|payment/([^/]++)(*:667))|C(?|ustomer/([^/]++)(*:696)|oneyance/([^/]++)(*:721))|sales/([^/]++)(*:744)|group/([^/]++)(*:766))|u(?|pdate(?|_(?|campaign/([^/]++)(*:808)|template/([^/]++)(*:833)|sales/([^/]++)(*:855)|user/([^/]++)(*:876)|payment/([^/]++)(*:900))|C(?|ustomer/([^/]++)(*:929)|oneyance/([^/]++)(*:954)))|ser(?|_doc/([^/]++)(*:983)|rechargehistory/([^/]++)(*:1015)))|s(?|uccessdownload/([^/]++)/([^/]++)(*:1062)|tatus/([^/]++)/([^/]++)(*:1094))|re(?|se(?|nd_campaign/([^/]++)(*:1134)|t/([^/]++)/([^/]++)(*:1162))|work/([^/]++)(*:1185))|ces/([^/]++)/([^/]++)(*:1216)|a(?|pproval/([^/]++)(*:1245)|ddcontactingroup/([^/]++)(*:1279))|tr(?|ade_rework/([^/]++)(*:1313)|x_status/([^/]++)/([^/]++)(*:1348))|mask_status/([^/]++)/([^/]++)(*:1387)))|/reseller/(?|edit(?|_(?|campaign/([^/]++)(*:1439)|template/([^/]++)(*:1465)|user/([^/]++)(*:1487))|group/([^/]++)(*:1511))|update_(?|campaign/([^/]++)(*:1548)|template/([^/]++)(*:1574)|user/([^/]++)(*:1596))|d(?|elete(?|_(?|campaign/([^/]++)(*:1639)|template/([^/]++)(*:1665)|user/([^/]++)(*:1687))|group/([^/]++)(*:1711))|ownload_contacts/([^/]++)/([^/]++)(*:1755)|lr/(?|campaignwise/([^/]++)(*:1791)|userwise/([^/]++)(*:1817)))|view(?|template/([^/]++)(*:1852)|group/([^/]++)(*:1875)|user/([^/]++)(*:1897))|addcontactingroup/([^/]++)(*:1933)|status/([^/]++)/([^/]++)(*:1966))|/user/(?|edit(?|_(?|campaign/([^/]++)(*:2013)|template/([^/]++)(*:2039))|group/([^/]++)(*:2063))|update_(?|campaign/([^/]++)(*:2100)|template/([^/]++)(*:2126))|d(?|elete(?|_(?|campaign/([^/]++)(*:2169)|template/([^/]++)(*:2195))|group/([^/]++)(*:2219))|ownload_contacts/([^/]++)/([^/]++)(*:2263)|lr/(?|campaignwise/(?|([^/]++)(*:2302)|dlr_export/([^/]++)(*:2330))|userwise/([^/]++)(*:2357)))|resend_campaign/([^/]++)(*:2392)|view(?|group/([^/]++)(*:2422)|template/([^/]++)(*:2448))|addcontactingroup/([^/]++)(*:2484))|/sales/(?|edit(?|customer/([^/]++)(*:2528)|_payment/([^/]++)(*:2554))|update(?|customer/([^/]++)(*:2590)|_payment/([^/]++)(*:2616)))|/manager/(?|editcustomer/([^/]++)(*:2660)|updatecustomer/([^/]++)(*:2692)))/?$}sDu',
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
            '_route' => 'generated::AFAgIM0IFAuKdDW4',
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
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kudoQq02Ix7LbQtk',
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
            '_route' => 'generated::3aQ8Iv0kfzanXsLh',
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
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xHr8j8a3YzMPNNMi',
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
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MY9ogk8vIcfHfyli',
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
      191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H0PPFAKqutimhVM1',
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
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QmRRQbqEDNd2pGV6',
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
      256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::io50gbUkaGhbMlQe',
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
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jjvGy9sJzNN6VEx',
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
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDEIE4wRiiGrBWQN',
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
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LsPyyJUZO7jtjzsi',
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
      348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iSemGXuvzIwRkMQT',
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
      371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lj4TWTzfesKz6JSu',
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
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::io84ApPxXprcRec5',
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
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1jo5XA2q8Zl6xPSZ',
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
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1iRbKmLxs1DU2EgC',
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
      504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gCjePuUie0dnD9wX',
          ),
          1 => 
          array (
            0 => 'userid',
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
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U8BLzZxBHMwGr6qq',
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
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B57vuv0RVE8v0ZI4',
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
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dzJu0p4HAX3AGNFn',
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
      622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JtFwTZ2MCcn0qfdC',
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
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7qSxtS402s0rlPfm',
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
      667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oGD9ZzltOlBFKGjk',
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
      696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ROq5aQ0uChIve9AL',
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
      721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UAtRVmov7cBCZOTn',
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
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8RW06A7aGlVqLwI2',
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
      766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1itolcJLtxW51ZoE',
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
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D4elz0cdrMA5Rp97',
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
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QP28kf0KeuKWI2Qo',
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
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kwtg5ZpKtMElRHhY',
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
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ygMh9Ipn8VPQnof9',
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
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XLEEQCs7vMuzlf4Q',
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
            '_route' => 'generated::tVCK3HqH6oTPEiHR',
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
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K8MjEM66JORzI6ie',
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
      983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L7HLCWQwep6Ldhpy',
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
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6xi8XsZmUq06djQ',
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
      1062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tSpyUZH3xY4h5PJi',
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
      1094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEAhPH1z8A92x83y',
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
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AHYBiT0QEWi8gLcC',
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
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuLbWRsXJC5xXLjC',
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
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MTheQRWJnRydotWj',
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
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ik2qylaSbOI3uXcO',
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
      1245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E7unYnQgmfsZP0IX',
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
      1279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::94a0AupzeikJWmCQ',
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
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M3wW21HK8gPKyJhr',
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
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wZISFWQOK2qswGJJ',
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
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PtXTYuRZKKDRpri5',
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
      1439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3Tobg2S8FNDrT4N',
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
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aKHswyGMdjeNKOap',
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
      1487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kIkHYGPCLrjMRCNT',
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
      1511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4GySZ1Myp9GCfHpA',
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
      1548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LK2cIYZ6RgYKVV5p',
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
      1574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uLGx7b69iONoi7kp',
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
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WbE1RIV1vYBj6tLk',
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
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y9tIzUczm5LQh5MX',
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
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wtRM6FrAw93ROURl',
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
      1687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1cP1dXhgW2vgQKXv',
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
      1711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xxnjSMYJf2kpRNlq',
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
      1755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3xKIat4JbyZHgAlV',
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
      1791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xloPs1YGWUvARIqC',
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
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eRqYZ1JvoSAcxoqp',
          ),
          1 => 
          array (
            0 => 'userid',
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
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FhyQnV73EgcTgx0a',
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
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QKQ0geU7F4I1VlsP',
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
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zaUoe9DLkTdY03fM',
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
      1933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HvrWzHIn1YwGiKgY',
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
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7G2os4nRgfnst2tL',
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
      2013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xzSQTLLdOgzgLsb',
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
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HZzYpyYMuGk8R9Gz',
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
      2063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8eGjli3EY0VTTYe',
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
      2100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tEAcPtP9Jx0VuqxW',
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
      2126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RrtrClMA34IL8mat',
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
      2169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E2yfOYPAss46GiMM',
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
      2195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lCxtskrePSYsGtUO',
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
      2219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ENlpF3skFY0K7Tn',
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
      2263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NIodA1RUSZ6TsbAq',
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
      2302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OooTGAG7fB2XUlo8',
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
      2330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SBx9Xva87obkw9y0',
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
      2357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E0uVg2dAPtgZqzaR',
          ),
          1 => 
          array (
            0 => 'userid',
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
      2392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vDy6sI9i70bz3HbY',
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
      2422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gPSNl1KsYGYSRYzX',
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
      2448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nZFmrVle2wc8fjpx',
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
      2484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jhsa20r4H82embFV',
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
      2528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o7S5eJEcfh1LAlKd',
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
      2554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mFsjA8vTuvgMipcf',
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
      2590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kT29rzQ4g3JKpUA0',
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
      2616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iPlZurIrIHpup8fY',
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
      2660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y3BhR3YZZVVfuadK',
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
      2692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cUxpYhgTxLc0wj6x',
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
    'generated::IzJzHDnNwGpu04zZ' => 
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
        'as' => 'generated::IzJzHDnNwGpu04zZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HounVPAw8ZfBS8X' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000029b80b140000000027d66788";}";s:4:"hash";s:44:"suXEPhA6XnzVmQE1SanXQNddlYYsOg1CW+1kramZBEA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2HounVPAw8ZfBS8X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSQzawnMqQRoi9Cc' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {return \\redirect(\'/login\');}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000029b80b1a0000000027d66788";}";s:4:"hash";s:44:"4BEQ0ubyiQM7MGroTx8g3wxxhqjuMel6OXSimiYUmF8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RSQzawnMqQRoi9Cc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OnJ5erlMbswaQMtx' => 
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
        'as' => 'generated::OnJ5erlMbswaQMtx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ChcvaUrB32yPK4qz' => 
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
        'as' => 'generated::ChcvaUrB32yPK4qz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::mFyxCzkgPx4oN6OY' => 
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
        'as' => 'generated::mFyxCzkgPx4oN6OY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::zDCrmct0z7zlrvSA' => 
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
        'as' => 'generated::zDCrmct0z7zlrvSA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7zAyfaAgLQQV8Am' => 
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
        'as' => 'generated::N7zAyfaAgLQQV8Am',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0I6oW5Z5YMcpEy3W' => 
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
        'as' => 'generated::0I6oW5Z5YMcpEy3W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::6JSoccduGiewFehT' => 
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
        'as' => 'generated::6JSoccduGiewFehT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KScZhql4eDwAAiWm' => 
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
        'as' => 'generated::KScZhql4eDwAAiWm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pka6drTIjbdjaCfj' => 
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
        'as' => 'generated::pka6drTIjbdjaCfj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IKWa3yGoIm0ZdFPZ' => 
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
        'as' => 'generated::IKWa3yGoIm0ZdFPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8fEtU0B2BFfl2XRh' => 
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
        'as' => 'generated::8fEtU0B2BFfl2XRh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QozvmOIDP2qDP4oc' => 
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
        'as' => 'generated::QozvmOIDP2qDP4oc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QShWGMr7IxKCvvfi' => 
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
        'as' => 'generated::QShWGMr7IxKCvvfi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LrMbUgMNgXy6WWIs' => 
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
        'as' => 'generated::LrMbUgMNgXy6WWIs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kn7fOwsKMbCmNMDD' => 
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
        'as' => 'generated::kn7fOwsKMbCmNMDD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kRxPlogmq2kRSTyY' => 
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
        'as' => 'generated::kRxPlogmq2kRSTyY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tB7ehKfke8n9ifqZ' => 
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
        'as' => 'generated::tB7ehKfke8n9ifqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XFmn83AQPLahEyaT' => 
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
        'as' => 'generated::XFmn83AQPLahEyaT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q85xoOa4iyLOI63K' => 
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
        'as' => 'generated::q85xoOa4iyLOI63K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwROSVUTzYtbl4j9' => 
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
        'as' => 'generated::nwROSVUTzYtbl4j9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AFAgIM0IFAuKdDW4' => 
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
        'as' => 'generated::AFAgIM0IFAuKdDW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::odOvSajdDODjjVzZ' => 
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
        'as' => 'generated::odOvSajdDODjjVzZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iGEpvD7JMycRNps1' => 
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
        'as' => 'generated::iGEpvD7JMycRNps1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MO79e7DYqVOQBctN' => 
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
        'as' => 'generated::MO79e7DYqVOQBctN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rV8UmwweS26whSU7' => 
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
        'as' => 'generated::rV8UmwweS26whSU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::17E01Jt0AzCACRoU' => 
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
        'as' => 'generated::17E01Jt0AzCACRoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MDEUTUstiM7s0EYK' => 
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
        'as' => 'generated::MDEUTUstiM7s0EYK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qNeiO484ih0iLD5x' => 
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
        'as' => 'generated::qNeiO484ih0iLD5x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r3XIdFXP89mLKFcD' => 
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
        'as' => 'generated::r3XIdFXP89mLKFcD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CB2WapYSJAVkKviH' => 
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
        'as' => 'generated::CB2WapYSJAVkKviH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HhaFP5wrwcXwyBbj' => 
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
        'as' => 'generated::HhaFP5wrwcXwyBbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ugv0tWiERf5Mw1xE' => 
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
        'as' => 'generated::ugv0tWiERf5Mw1xE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::htuTboVjbn9R2UbQ' => 
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
        'as' => 'generated::htuTboVjbn9R2UbQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::7asHPxzxcfHCoZsz' => 
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
        'as' => 'generated::7asHPxzxcfHCoZsz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HP4NN140VyRiCwQ9' => 
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
        'as' => 'generated::HP4NN140VyRiCwQ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZxAzRUccEY98xPva' => 
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
        'as' => 'generated::ZxAzRUccEY98xPva',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nCL2opLlA80KWRCH' => 
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
        'as' => 'generated::nCL2opLlA80KWRCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oDZAEiTmbXrnHe1z' => 
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
        'as' => 'generated::oDZAEiTmbXrnHe1z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kudoQq02Ix7LbQtk' => 
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
        'as' => 'generated::kudoQq02Ix7LbQtk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::io50gbUkaGhbMlQe' => 
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
        'as' => 'generated::io50gbUkaGhbMlQe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U8BLzZxBHMwGr6qq' => 
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
        'as' => 'generated::U8BLzZxBHMwGr6qq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B57vuv0RVE8v0ZI4' => 
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
        'as' => 'generated::B57vuv0RVE8v0ZI4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q5LWJz0TgKVuJsfm' => 
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
        'as' => 'generated::q5LWJz0TgKVuJsfm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wp3IY7v7EvynesCw' => 
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
        'as' => 'generated::Wp3IY7v7EvynesCw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pU3Ul6z1fNqTOTQQ' => 
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
        'as' => 'generated::pU3Ul6z1fNqTOTQQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::luolASQfld4nIysH' => 
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
        'as' => 'generated::luolASQfld4nIysH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jDscUK6CZ7S871fw' => 
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
        'as' => 'generated::jDscUK6CZ7S871fw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jGWqpmDf9UBp5qw7' => 
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
        'as' => 'generated::jGWqpmDf9UBp5qw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VdTsL3H34Q9JubgS' => 
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
        'as' => 'generated::VdTsL3H34Q9JubgS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2jBkVKhv1J5DuSno' => 
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
        'as' => 'generated::2jBkVKhv1J5DuSno',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dzJu0p4HAX3AGNFn' => 
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
        'as' => 'generated::dzJu0p4HAX3AGNFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D4elz0cdrMA5Rp97' => 
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
        'as' => 'generated::D4elz0cdrMA5Rp97',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jjvGy9sJzNN6VEx' => 
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
        'as' => 'generated::4jjvGy9sJzNN6VEx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::io84ApPxXprcRec5' => 
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
        'as' => 'generated::io84ApPxXprcRec5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tSpyUZH3xY4h5PJi' => 
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
        'as' => 'generated::tSpyUZH3xY4h5PJi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AHYBiT0QEWi8gLcC' => 
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
        'as' => 'generated::AHYBiT0QEWi8gLcC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ofklArin22V1qT1K' => 
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
        'as' => 'generated::ofklArin22V1qT1K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b1MHe8CsJ2txMC6e' => 
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
        'as' => 'generated::b1MHe8CsJ2txMC6e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3aQ8Iv0kfzanXsLh' => 
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
        'as' => 'generated::3aQ8Iv0kfzanXsLh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JtFwTZ2MCcn0qfdC' => 
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
        'as' => 'generated::JtFwTZ2MCcn0qfdC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QP28kf0KeuKWI2Qo' => 
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
        'as' => 'generated::QP28kf0KeuKWI2Qo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NDEIE4wRiiGrBWQN' => 
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
        'as' => 'generated::NDEIE4wRiiGrBWQN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DcB6Zszc7kHDSXSm' => 
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
        'as' => 'generated::DcB6Zszc7kHDSXSm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gTrJFQrUp1rKwtQf' => 
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
        'as' => 'generated::gTrJFQrUp1rKwtQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rGUifggmajmymBf0' => 
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
        'as' => 'generated::rGUifggmajmymBf0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OGzEMMakjrK4xVVM' => 
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
        'as' => 'generated::OGzEMMakjrK4xVVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k4yvxl94EfSfm7qj' => 
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
        'as' => 'generated::k4yvxl94EfSfm7qj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ROq5aQ0uChIve9AL' => 
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
        'as' => 'generated::ROq5aQ0uChIve9AL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tVCK3HqH6oTPEiHR' => 
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
        'as' => 'generated::tVCK3HqH6oTPEiHR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UAtRVmov7cBCZOTn' => 
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
        'as' => 'generated::UAtRVmov7cBCZOTn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8MjEM66JORzI6ie' => 
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
        'as' => 'generated::K8MjEM66JORzI6ie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RGRhj4ENqyJGErYg' => 
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
        'as' => 'generated::RGRhj4ENqyJGErYg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6SeOTsuwIIsBGkFf' => 
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
        'as' => 'generated::6SeOTsuwIIsBGkFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YBtSnaLDYOhWPVjt' => 
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
        'as' => 'generated::YBtSnaLDYOhWPVjt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0Def1dyuOs4g2SB' => 
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
        'as' => 'generated::U0Def1dyuOs4g2SB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oisp4XUlAYSUstTe' => 
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
        'as' => 'generated::Oisp4XUlAYSUstTe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hx97aUhBLkC0mcYQ' => 
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
        'as' => 'generated::Hx97aUhBLkC0mcYQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TSjmQY2mjbHUv6OF' => 
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
        'as' => 'generated::TSjmQY2mjbHUv6OF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oC63ufSoM3lktnkw' => 
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
        'as' => 'generated::oC63ufSoM3lktnkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w15KwcQIbQqSvRdx' => 
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
        'as' => 'generated::w15KwcQIbQqSvRdx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ik2qylaSbOI3uXcO' => 
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
        'as' => 'generated::ik2qylaSbOI3uXcO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8RW06A7aGlVqLwI2' => 
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
        'as' => 'generated::8RW06A7aGlVqLwI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kwtg5ZpKtMElRHhY' => 
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
        'as' => 'generated::kwtg5ZpKtMElRHhY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Sh4pXMriBohsJlp' => 
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
        'as' => 'generated::0Sh4pXMriBohsJlp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Idpb3PbyWJHan1r' => 
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
        'as' => 'generated::9Idpb3PbyWJHan1r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H3xRHhKkeucrC1IX' => 
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
        'as' => 'generated::H3xRHhKkeucrC1IX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xHr8j8a3YzMPNNMi' => 
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
        'as' => 'generated::xHr8j8a3YzMPNNMi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7qSxtS402s0rlPfm' => 
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
        'as' => 'generated::7qSxtS402s0rlPfm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L7HLCWQwep6Ldhpy' => 
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
        'as' => 'generated::L7HLCWQwep6Ldhpy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ygMh9Ipn8VPQnof9' => 
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
        'as' => 'generated::ygMh9Ipn8VPQnof9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LsPyyJUZO7jtjzsi' => 
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
        'as' => 'generated::LsPyyJUZO7jtjzsi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEAhPH1z8A92x83y' => 
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
        'as' => 'generated::MEAhPH1z8A92x83y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuLbWRsXJC5xXLjC' => 
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
        'as' => 'generated::DuLbWRsXJC5xXLjC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rK8G9cLxM72cMUg8' => 
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
        'as' => 'generated::rK8G9cLxM72cMUg8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UqTjU36HnSoAZ0RL' => 
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
        'as' => 'generated::UqTjU36HnSoAZ0RL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E7unYnQgmfsZP0IX' => 
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
        'as' => 'generated::E7unYnQgmfsZP0IX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MTheQRWJnRydotWj' => 
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
        'as' => 'generated::MTheQRWJnRydotWj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M3wW21HK8gPKyJhr' => 
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
        'as' => 'generated::M3wW21HK8gPKyJhr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JX8I8IoqzQVONfXx' => 
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
        'as' => 'generated::JX8I8IoqzQVONfXx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kKYQVCEdGQlDqh7A' => 
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
        'as' => 'generated::kKYQVCEdGQlDqh7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MY9ogk8vIcfHfyli' => 
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
        'as' => 'generated::MY9ogk8vIcfHfyli',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iSemGXuvzIwRkMQT' => 
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
        'as' => 'generated::iSemGXuvzIwRkMQT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PtXTYuRZKKDRpri5' => 
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
        'as' => 'generated::PtXTYuRZKKDRpri5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r29LdwxkjcZVOMxY' => 
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
        'as' => 'generated::r29LdwxkjcZVOMxY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IIIKnAbOHhEwiDdo' => 
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
        'as' => 'generated::IIIKnAbOHhEwiDdo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rs9PhqowIJj5WTYR' => 
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
        'as' => 'generated::Rs9PhqowIJj5WTYR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0PPFAKqutimhVM1' => 
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
        'as' => 'generated::H0PPFAKqutimhVM1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1itolcJLtxW51ZoE' => 
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
        'as' => 'generated::1itolcJLtxW51ZoE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lj4TWTzfesKz6JSu' => 
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
        'as' => 'generated::lj4TWTzfesKz6JSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AWUSvEYBKeiXCynZ' => 
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
        'as' => 'generated::AWUSvEYBKeiXCynZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1jo5XA2q8Zl6xPSZ' => 
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
        'as' => 'generated::1jo5XA2q8Zl6xPSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xeL3MTWDmLPUaS88' => 
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
        'as' => 'generated::xeL3MTWDmLPUaS88',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::94a0AupzeikJWmCQ' => 
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
        'as' => 'generated::94a0AupzeikJWmCQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOwaZh8k1pcLMWBZ' => 
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
        'as' => 'generated::oOwaZh8k1pcLMWBZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xFXiOcNtN7jBNFLJ' => 
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
        'as' => 'generated::xFXiOcNtN7jBNFLJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4KzY93OsjHf2UtwL' => 
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
        'as' => 'generated::4KzY93OsjHf2UtwL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xpFtIdkdchmA6mVU' => 
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
        'as' => 'generated::xpFtIdkdchmA6mVU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wZISFWQOK2qswGJJ' => 
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
        'as' => 'generated::wZISFWQOK2qswGJJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hl2yfyYryhIz8Fsc' => 
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
        'as' => 'generated::hl2yfyYryhIz8Fsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ESuslF8b3uN5WyWg' => 
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
        'as' => 'generated::ESuslF8b3uN5WyWg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6xi8XsZmUq06djQ' => 
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
        'as' => 'generated::x6xi8XsZmUq06djQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PQcyanYC5yZqRrG8' => 
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
        'as' => 'generated::PQcyanYC5yZqRrG8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aH6n28UJVRIDzfSb' => 
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
        'as' => 'generated::aH6n28UJVRIDzfSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eEvB3YhQwFvhA9nc' => 
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
        'as' => 'generated::eEvB3YhQwFvhA9nc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GWdutr4X2A548Wq8' => 
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
        'as' => 'generated::GWdutr4X2A548Wq8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fZ2FPaPP6MuemMMe' => 
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
        'as' => 'generated::fZ2FPaPP6MuemMMe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TG2VagzGu9jcXvUL' => 
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
        'as' => 'generated::TG2VagzGu9jcXvUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::znCr2AoAjRRZqsX9' => 
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
        'as' => 'generated::znCr2AoAjRRZqsX9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bnWqrq49p0mUd66h' => 
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
        'as' => 'generated::bnWqrq49p0mUd66h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zx2ItkavGMLaVm52' => 
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
        'as' => 'generated::zx2ItkavGMLaVm52',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PHh6MfjslWFnw5xO' => 
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
        'as' => 'generated::PHh6MfjslWFnw5xO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QmRRQbqEDNd2pGV6' => 
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
        'as' => 'generated::QmRRQbqEDNd2pGV6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7sIfacDsNt0VSMJn' => 
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
        'as' => 'generated::7sIfacDsNt0VSMJn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oGD9ZzltOlBFKGjk' => 
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
        'as' => 'generated::oGD9ZzltOlBFKGjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XLEEQCs7vMuzlf4Q' => 
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
        'as' => 'generated::XLEEQCs7vMuzlf4Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::P90Cqmi4afTkB6xk' => 
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
        'as' => 'generated::P90Cqmi4afTkB6xk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L8q5FUoBlmmHdaD0' => 
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
        'as' => 'generated::L8q5FUoBlmmHdaD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LVDbYNUitxopT24Z' => 
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
        'as' => 'generated::LVDbYNUitxopT24Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CWd0ykYVwthYtLbb' => 
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
        'as' => 'generated::CWd0ykYVwthYtLbb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UG8X6x6ORJLRwUkM' => 
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
        'as' => 'generated::UG8X6x6ORJLRwUkM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l8NQHW3W6UfDzTBf' => 
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
        'as' => 'generated::l8NQHW3W6UfDzTBf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TErdJIbJx2rv83Uz' => 
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
        'as' => 'generated::TErdJIbJx2rv83Uz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9PhjTxokHxhRM5Aw' => 
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
        'as' => 'generated::9PhjTxokHxhRM5Aw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UEEE3lwz0DIJq8Z8' => 
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
        'as' => 'generated::UEEE3lwz0DIJq8Z8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ih6GMz90aovLNrUj' => 
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
        'as' => 'generated::ih6GMz90aovLNrUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ny6JhJ0T7xb7kn27' => 
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
        'as' => 'generated::Ny6JhJ0T7xb7kn27',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tfVqYTAfvObs3EiL' => 
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
        'as' => 'generated::tfVqYTAfvObs3EiL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3Tobg2S8FNDrT4N' => 
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
        'as' => 'generated::Z3Tobg2S8FNDrT4N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LK2cIYZ6RgYKVV5p' => 
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
        'as' => 'generated::LK2cIYZ6RgYKVV5p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y9tIzUczm5LQh5MX' => 
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
        'as' => 'generated::y9tIzUczm5LQh5MX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aMBmCo5yUEnNcRYb' => 
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
        'as' => 'generated::aMBmCo5yUEnNcRYb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PAocdj92npM0ydhM' => 
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
        'as' => 'generated::PAocdj92npM0ydhM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FhyQnV73EgcTgx0a' => 
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
        'as' => 'generated::FhyQnV73EgcTgx0a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aKHswyGMdjeNKOap' => 
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
        'as' => 'generated::aKHswyGMdjeNKOap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uLGx7b69iONoi7kp' => 
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
        'as' => 'generated::uLGx7b69iONoi7kp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wtRM6FrAw93ROURl' => 
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
        'as' => 'generated::wtRM6FrAw93ROURl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WqfRcPCSXiidnU0j' => 
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
        'as' => 'generated::WqfRcPCSXiidnU0j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PB1qoy80R0yvDMLC' => 
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
        'as' => 'generated::PB1qoy80R0yvDMLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h8p7o4LH0o2OVSG8' => 
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
        'as' => 'generated::h8p7o4LH0o2OVSG8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T3358oMK37xOP4rk' => 
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
        'as' => 'generated::T3358oMK37xOP4rk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tSQ4TGrGvgrScwny' => 
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
        'as' => 'generated::tSQ4TGrGvgrScwny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BrVgB3ZI96A8hblv' => 
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
        'as' => 'generated::BrVgB3ZI96A8hblv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M5B631m1FcQFwjQl' => 
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
        'as' => 'generated::M5B631m1FcQFwjQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BnKSa4mIo4NFEFDT' => 
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
        'as' => 'generated::BnKSa4mIo4NFEFDT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Q2E4XUudxnB7ziU' => 
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
        'as' => 'generated::9Q2E4XUudxnB7ziU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wOYoeWT2COZRxIFS' => 
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
        'as' => 'generated::wOYoeWT2COZRxIFS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SzUBxHUeTZcBHso3' => 
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
        'as' => 'generated::SzUBxHUeTZcBHso3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QKQ0geU7F4I1VlsP' => 
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
        'as' => 'generated::QKQ0geU7F4I1VlsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4GySZ1Myp9GCfHpA' => 
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
        'as' => 'generated::4GySZ1Myp9GCfHpA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xxnjSMYJf2kpRNlq' => 
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
        'as' => 'generated::xxnjSMYJf2kpRNlq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSBGQk3JkvUKNn7q' => 
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
        'as' => 'generated::QSBGQk3JkvUKNn7q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3xKIat4JbyZHgAlV' => 
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
        'as' => 'generated::3xKIat4JbyZHgAlV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KyGBXFq5wm6Xqq2V' => 
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
        'as' => 'generated::KyGBXFq5wm6Xqq2V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HvrWzHIn1YwGiKgY' => 
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
        'as' => 'generated::HvrWzHIn1YwGiKgY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eFeegdMGxhpbDhI4' => 
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
        'as' => 'generated::eFeegdMGxhpbDhI4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gTwEeMxq4ogsRWuJ' => 
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
        'as' => 'generated::gTwEeMxq4ogsRWuJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R7hf6zH6BN7VuETg' => 
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
        'as' => 'generated::R7hf6zH6BN7VuETg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zaUoe9DLkTdY03fM' => 
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
        'as' => 'generated::zaUoe9DLkTdY03fM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kIkHYGPCLrjMRCNT' => 
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
        'as' => 'generated::kIkHYGPCLrjMRCNT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WbE1RIV1vYBj6tLk' => 
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
        'as' => 'generated::WbE1RIV1vYBj6tLk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1cP1dXhgW2vgQKXv' => 
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
        'as' => 'generated::1cP1dXhgW2vgQKXv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7G2os4nRgfnst2tL' => 
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
        'as' => 'generated::7G2os4nRgfnst2tL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H2k3zqnyK5DWvKd6' => 
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
        'as' => 'generated::H2k3zqnyK5DWvKd6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nx41VeTvD6DLgXvS' => 
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
        'as' => 'generated::Nx41VeTvD6DLgXvS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::knz6tc1eKcZFaxgC' => 
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
        'as' => 'generated::knz6tc1eKcZFaxgC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALOanl4sYy4yYnaa' => 
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
        'as' => 'generated::ALOanl4sYy4yYnaa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bxdm0m06j1WE4aej' => 
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
        'as' => 'generated::bxdm0m06j1WE4aej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pV02FwH9RJG8uNGW' => 
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
        'as' => 'generated::pV02FwH9RJG8uNGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WssNBElo7PhnOTcv' => 
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
        'as' => 'generated::WssNBElo7PhnOTcv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ABtTr4mWgFu0QFPU' => 
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
        'as' => 'generated::ABtTr4mWgFu0QFPU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZJC1ffGd1JtMebqf' => 
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
        'as' => 'generated::ZJC1ffGd1JtMebqf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::vjLNeHetufC5HhAM' => 
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
        'as' => 'generated::vjLNeHetufC5HhAM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vHiC2XPU8CKK2k62' => 
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
        'as' => 'generated::vHiC2XPU8CKK2k62',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::84jrblnmgoc7q6vP' => 
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
        'as' => 'generated::84jrblnmgoc7q6vP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e2BddUGwkYjkAJDg' => 
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
        'as' => 'generated::e2BddUGwkYjkAJDg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N1MvCjHrStnaiD0m' => 
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
        'as' => 'generated::N1MvCjHrStnaiD0m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EFrizCWu5CLua60w' => 
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
        'as' => 'generated::EFrizCWu5CLua60w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j6TOVJuXadrXlQI3' => 
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
        'as' => 'generated::j6TOVJuXadrXlQI3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dDO3kt73ChdebY1y' => 
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
        'as' => 'generated::dDO3kt73ChdebY1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xzSQTLLdOgzgLsb' => 
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
        'as' => 'generated::5xzSQTLLdOgzgLsb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tEAcPtP9Jx0VuqxW' => 
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
        'as' => 'generated::tEAcPtP9Jx0VuqxW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E2yfOYPAss46GiMM' => 
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
        'as' => 'generated::E2yfOYPAss46GiMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vDy6sI9i70bz3HbY' => 
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
        'as' => 'generated::vDy6sI9i70bz3HbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CdvvPAzWYMwt5v2z' => 
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
        'as' => 'generated::CdvvPAzWYMwt5v2z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4PrZC2ZYwQHwCH8i' => 
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
        'as' => 'generated::4PrZC2ZYwQHwCH8i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yRcZWnwm0Y1b7b9F' => 
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
        'as' => 'generated::yRcZWnwm0Y1b7b9F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvimjjECpBbKC1qx' => 
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
        'as' => 'generated::IvimjjECpBbKC1qx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJec2EFhMvgCrAvJ' => 
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
        'as' => 'generated::hJec2EFhMvgCrAvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y7GfdrXy3pNTWYIo' => 
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
        'as' => 'generated::y7GfdrXy3pNTWYIo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KBRAlwGN6u8IDREW' => 
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
        'as' => 'generated::KBRAlwGN6u8IDREW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::upPTQ9kCRhR1BvkF' => 
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
        'as' => 'generated::upPTQ9kCRhR1BvkF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gPSNl1KsYGYSRYzX' => 
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
        'as' => 'generated::gPSNl1KsYGYSRYzX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V8eGjli3EY0VTTYe' => 
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
        'as' => 'generated::V8eGjli3EY0VTTYe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ENlpF3skFY0K7Tn' => 
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
        'as' => 'generated::2ENlpF3skFY0K7Tn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::utZ505qGJgbUek1V' => 
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
        'as' => 'generated::utZ505qGJgbUek1V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NIodA1RUSZ6TsbAq' => 
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
        'as' => 'generated::NIodA1RUSZ6TsbAq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uhFbgTIsale9eZlG' => 
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
        'as' => 'generated::uhFbgTIsale9eZlG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jhsa20r4H82embFV' => 
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
        'as' => 'generated::Jhsa20r4H82embFV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PjDoeGBHaCYx33Yk' => 
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
        'as' => 'generated::PjDoeGBHaCYx33Yk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ae041pdEyv0Flc9D' => 
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
        'as' => 'generated::ae041pdEyv0Flc9D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pIUsjfNGXADCZkzh' => 
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
        'as' => 'generated::pIUsjfNGXADCZkzh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OPdYufR7IhdJnQyS' => 
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
        'as' => 'generated::OPdYufR7IhdJnQyS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMjU40Fc4wzTg7vU' => 
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
        'as' => 'generated::uMjU40Fc4wzTg7vU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xiiM0AkuTl3YL70D' => 
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
        'as' => 'generated::xiiM0AkuTl3YL70D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nZFmrVle2wc8fjpx' => 
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
        'as' => 'generated::nZFmrVle2wc8fjpx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZzYpyYMuGk8R9Gz' => 
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
        'as' => 'generated::HZzYpyYMuGk8R9Gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RrtrClMA34IL8mat' => 
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
        'as' => 'generated::RrtrClMA34IL8mat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lCxtskrePSYsGtUO' => 
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
        'as' => 'generated::lCxtskrePSYsGtUO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ddfMQIk1t1lLTdU' => 
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
        'as' => 'generated::3ddfMQIk1t1lLTdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBh8ToMBdRvtL3KA' => 
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
        'as' => 'generated::nBh8ToMBdRvtL3KA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rznmtC7u6pgB7aHh' => 
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
        'as' => 'generated::rznmtC7u6pgB7aHh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C4Y1QzbMsneKKsOC' => 
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
        'as' => 'generated::C4Y1QzbMsneKKsOC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::18PcKBkgewfwxS8F' => 
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
        'as' => 'generated::18PcKBkgewfwxS8F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2g9EX1Ltn6PEKkza' => 
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
        'as' => 'generated::2g9EX1Ltn6PEKkza',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::deHl2OdgiDc9Kxiw' => 
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
        'as' => 'generated::deHl2OdgiDc9Kxiw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::XJjFpCSlpHdUuJ4y' => 
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
        'as' => 'generated::XJjFpCSlpHdUuJ4y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6Gtfrkb6LNBnRvy' => 
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
        'as' => 'generated::s6Gtfrkb6LNBnRvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OYkDXV9lHXgIwZIX' => 
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
        'as' => 'generated::OYkDXV9lHXgIwZIX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vkHIIvtA5GbmsNjr' => 
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
        'as' => 'generated::vkHIIvtA5GbmsNjr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MkuNeLOlxLUlP2yp' => 
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
        'as' => 'generated::MkuNeLOlxLUlP2yp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7eJlWQNsHz00lzA' => 
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
        'as' => 'generated::b7eJlWQNsHz00lzA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::veHGOVU6xK1g3RtG' => 
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
        'as' => 'generated::veHGOVU6xK1g3RtG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SettaBckNbsjJY4u' => 
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
        'as' => 'generated::SettaBckNbsjJY4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RDxC9KSejvnkgQBo' => 
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
        'as' => 'generated::RDxC9KSejvnkgQBo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6mDSgsAQy1SaU9rJ' => 
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
        'as' => 'generated::6mDSgsAQy1SaU9rJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zStRO9iutXt5p1T7' => 
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
        'as' => 'generated::zStRO9iutXt5p1T7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cuCJkqTjSdqyDyjr' => 
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
        'as' => 'generated::cuCJkqTjSdqyDyjr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vfs6RRGNwhrMj9Ds' => 
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
        'as' => 'generated::vfs6RRGNwhrMj9Ds',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TaEhDzOfh7vfygOW' => 
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
        'as' => 'generated::TaEhDzOfh7vfygOW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o7S5eJEcfh1LAlKd' => 
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
        'as' => 'generated::o7S5eJEcfh1LAlKd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kT29rzQ4g3JKpUA0' => 
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
        'as' => 'generated::kT29rzQ4g3JKpUA0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j7MAZfg98qpWufc5' => 
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
        'as' => 'generated::j7MAZfg98qpWufc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZwaUaWh1HadE9vKW' => 
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
        'as' => 'generated::ZwaUaWh1HadE9vKW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yvgGNGKjTqoqwHlk' => 
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
        'as' => 'generated::yvgGNGKjTqoqwHlk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UjLmX8XYCHzMkaTf' => 
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
        'as' => 'generated::UjLmX8XYCHzMkaTf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::97ecw43r2kbay0j7' => 
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
        'as' => 'generated::97ecw43r2kbay0j7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7BJi6MZLT50NJr5w' => 
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
        'as' => 'generated::7BJi6MZLT50NJr5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tr0tcLy2UaZqPFwd' => 
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
        'as' => 'generated::Tr0tcLy2UaZqPFwd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mS61aHjShYQl0Ii1' => 
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
        'as' => 'generated::mS61aHjShYQl0Ii1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mFsjA8vTuvgMipcf' => 
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
        'as' => 'generated::mFsjA8vTuvgMipcf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iPlZurIrIHpup8fY' => 
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
        'as' => 'generated::iPlZurIrIHpup8fY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::muzTNo7CZN3NYQLT' => 
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
        'as' => 'generated::muzTNo7CZN3NYQLT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::51mTzXWyQhOAOTku' => 
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
        'as' => 'generated::51mTzXWyQhOAOTku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lezWB2f90aNpV42m' => 
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
        'as' => 'generated::lezWB2f90aNpV42m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::epvZhKpSmxqkmEOj' => 
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
        'as' => 'generated::epvZhKpSmxqkmEOj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OWyuHNDlrt43Tfds' => 
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
        'as' => 'generated::OWyuHNDlrt43Tfds',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CtzPSq3fNJ25TD9w' => 
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
        'as' => 'generated::CtzPSq3fNJ25TD9w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvDW4NQi9y7zAkb2' => 
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
        'as' => 'generated::QvDW4NQi9y7zAkb2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aHSvdqQLAMDrD0cc' => 
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
        'as' => 'generated::aHSvdqQLAMDrD0cc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngDq3rnch3H8G096' => 
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
        'as' => 'generated::ngDq3rnch3H8G096',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VYfdV4LnjwsKC00I' => 
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
        'as' => 'generated::VYfdV4LnjwsKC00I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P6hVv5rNP0mQ8lnZ' => 
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
        'as' => 'generated::P6hVv5rNP0mQ8lnZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VeU8Cec0LimBK0VS' => 
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
        'as' => 'generated::VeU8Cec0LimBK0VS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AcKwvsUj3VJSqkJI' => 
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
        'as' => 'generated::AcKwvsUj3VJSqkJI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMKG5VXEZQp34PmQ' => 
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
        'as' => 'generated::TMKG5VXEZQp34PmQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3BhR3YZZVVfuadK' => 
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
        'as' => 'generated::Y3BhR3YZZVVfuadK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cUxpYhgTxLc0wj6x' => 
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
        'as' => 'generated::cUxpYhgTxLc0wj6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4LRvWGVcpKSpQXrI' => 
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
        'as' => 'generated::4LRvWGVcpKSpQXrI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7hHkZDorZGI9Yxu' => 
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
        'as' => 'generated::b7hHkZDorZGI9Yxu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1iRbKmLxs1DU2EgC' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::1iRbKmLxs1DU2EgC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bjcQs18VDqzKRv4z' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::bjcQs18VDqzKRv4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gCjePuUie0dnD9wX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dlr/userwise/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::gCjePuUie0dnD9wX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xloPs1YGWUvARIqC' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::xloPs1YGWUvARIqC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NTXR0irXbVKKZHxz' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::NTXR0irXbVKKZHxz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eRqYZ1JvoSAcxoqp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/userwise/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::eRqYZ1JvoSAcxoqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OooTGAG7fB2XUlo8' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignwise_dlr',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::OooTGAG7fB2XUlo8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SBx9Xva87obkw9y0' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::SBx9Xva87obkw9y0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vv1UsqmPlfpMArx3' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::vv1UsqmPlfpMArx3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E0uVg2dAPtgZqzaR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dlr/userwise/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@userwise_dlr',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::E0uVg2dAPtgZqzaR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
