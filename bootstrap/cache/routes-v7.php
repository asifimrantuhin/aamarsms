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
            '_route' => 'generated::iYXLAiSiZybKrk1W',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::by4Gdnx4GLlKCEG1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YoTtYwS4Tmeg6rrF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ypKeuNsROufOmlON',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::t1CDNCUqNoAkqjgC',
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
            '_route' => 'generated::xlYE7pfJnFypLscE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2l5fLgfHQOEMskSA',
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
            '_route' => 'generated::jNds34kGGUvtVhUS',
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
            '_route' => 'generated::ajAfghvdZJhrBnZf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lKL1BqXWf2SuGuKZ',
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
            '_route' => 'generated::7rnPnVxgCR24LebS',
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
            '_route' => 'generated::KMzhSzDbJmwhxj43',
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
            '_route' => 'generated::7DbX3H052a2gnkni',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AdHK7nTSOAOVpBmg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DkoUNzsIApAoITs8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9wyZtAa9wo22MprD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3aPQnRzXG2VTET0o',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KSdX5IjCRkAy3n6M',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0OdgWwuLkmRhvSLa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8aDlc40DPR8R7ySC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4o8BNITh25BXx0qf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oUjVR3oYtTedUqx2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::M1IJ7OkyuqhPPcOZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U1eTqjYYjxKKbQiy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lHuwlbCNUbMYb30v',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qbBIFl6kroqmH4xS',
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
            '_route' => 'generated::lou9KLBOPNhyInDZ',
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
            '_route' => 'generated::jyEDzKKC0rjI8w2W',
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
            '_route' => 'generated::ojx7V2YNxWIzmspZ',
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
            '_route' => 'generated::85dqg788wpVEMG3W',
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
            '_route' => 'generated::hRG5MwbM7lQvUGyi',
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
            '_route' => 'generated::d6dLiaPMz3pQtxmG',
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
            '_route' => 'generated::syzQplyM77hySVRW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NcfhrDlN1yNQvMUm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5S3GBlTMahcgK1c5',
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
            '_route' => 'generated::ekRDBjUleJ5nmWXp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hWMyFd6i0XxrGTIn',
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
            '_route' => 'generated::mH3my2LgmBCF8WK4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ib1V2dzOBIHlnezp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KMcUCGP7m89D9x0e',
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
            '_route' => 'generated::3QgNNnKxbQzuvQeu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tOc3T6VdyhTdrY7W',
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
            '_route' => 'generated::rSQE0GR5ypn6JMcP',
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
            '_route' => 'generated::iFzKlFzZSjy4Y976',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wOGUjSn5wpvDSUvr',
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
            '_route' => 'generated::Zd1hHuNdS28O3jEd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VafyyGHUTHab7S8a',
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
            '_route' => 'generated::dBnZcQTp2bMvBNba',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RYSCHNGSJc16S6VX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uOjGMFro8oQ6Gol8',
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
            '_route' => 'generated::yuZbVRCqdYnkcdML',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u46SyFj1F8xMqbA3',
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
            '_route' => 'generated::7Q2JgJBYJ4u73PDm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::R6UndH2drF4lNH0J',
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
            '_route' => 'generated::DtLD2v4XlRAzv6Sq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nnNytFQIkjDdnbO6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DyJkGMBo04WWQ4kN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ROppG1PPzYjMNNnq',
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
            '_route' => 'generated::u1fwWD9prHnkBeEY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BHl2rXb1dMqr1Gln',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2KbRRhD5IHVCMZ2L',
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
            '_route' => 'generated::QcarcT1L7zySJSMw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z7sETEfvWwQjvIVp',
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
            '_route' => 'generated::H4Z7xXVlTxe10wTi',
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
            '_route' => 'generated::tqSbQl6eXcoXtS3V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7DowvqPxjiGAvymx',
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
            '_route' => 'generated::GowLfnf2FxLE6e0B',
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
            '_route' => 'generated::HTxaBhhGVswuTav6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::imi0Dr8z8c4er27F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9d5vgtDi3SIObeHe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9AiKT0oOrO2UF918',
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
            '_route' => 'generated::JWN2VxU38BfLSKPX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::O4aEEELhR0gRd9op',
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
            '_route' => 'generated::qctCVLl4uM4klUeW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EFVPjnEk2LctSAjy',
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
            '_route' => 'generated::vfkGhHDLVeWPdN4H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PkGCkrNJHxIB6DJE',
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
            '_route' => 'generated::qcHY3z0g21BhPCVN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RxK3mAsWrUtUqelu',
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
            '_route' => 'generated::vB21idTuJwYaOv53',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::g4bCPhOcZrSjas1i',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IUVWY4owiGKkI4pa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Yb6EQTUxcRzlsi6I',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MufCPAAmvHjiaNQQ',
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
            '_route' => 'generated::q49OTbImmajgbwaS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kNAZ9Cmjy6OVv8yC',
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
            '_route' => 'generated::k7rnQrEEpqNTatlN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::za5piHNCaisvYIpj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::is9GNJnv87ThoTIb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dJz39SbeCcCrRZOG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1y1pQODS3AnSzVgz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FOS9ffyOeigUjKJp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rsTIN5YJ9V3tARMm',
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
            '_route' => 'generated::pdWLqFhTzFWyDTJa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h5F1iHjIUbGSSGM2',
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
            '_route' => 'generated::bGmiqKnFIbijazkb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::outr9hX7clo8psaa',
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
            '_route' => 'generated::Qk1pypQeAXi9Wvcb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s2nWNeMeuYRMBpgd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wbQRrQBvbInV4LIW',
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
            '_route' => 'generated::L2WUyRtqZz6j0r6a',
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
            '_route' => 'generated::XqlnOm563fOAJtH2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7f3dpp7IvGwFF4O9',
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
            '_route' => 'generated::yEzKlDRdAHCwrlCq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4C6cGXSpQffBlRAP',
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
            '_route' => 'generated::f1AbMhMDe6e09nb4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dzzf1sjd9lThMeVP',
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
            '_route' => 'generated::L6kKU2f65KzDUdTw',
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
            '_route' => 'generated::enU7uY0GDQtNTgNO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3JRzsWJgV06Xm0gD',
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
            '_route' => 'generated::hFk61fIQch9j5RjV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZdSB5eK9shUwjYHd',
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
            '_route' => 'generated::93LVAprrGWNYDl2u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RqT966rtAeaBpOa7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::L3CDiHN58mXtmijC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5ZkRZZTSza77KqU6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SCO3g4ak91SDiIR1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HZzng7g4cwcYU6BA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QSJSs2ob5k7uCez5',
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
            '_route' => 'generated::ijlhYItccv2X2jb3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AjdtorCMAWxKJwi4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vdO8RZcgZtewh9nq',
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
            '_route' => 'generated::npTZVMfFztaI68x0',
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
            '_route' => 'generated::f7lrgTvo1rJzqbXu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JqQT3UN9OMVBhcz6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0J0VibgjC0inL6gp',
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
            '_route' => 'generated::3l0j97zFeQu93SiX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dVAhwa09ISq5S1WB',
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
            '_route' => 'generated::6AVBAwGZoICWWtL5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4CCK64uG7HwDQPnk',
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
            '_route' => 'generated::lQTh9DqBhoQEEtjY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lGInYxXHbGrxwODO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cwyUc4itRMnxIWSt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OwendbjQZtRRGneM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rYxVM9lcBqZFc98I',
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
            '_route' => 'generated::M8pHym3SiY4o7InX',
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
            '_route' => 'generated::zpIBv7EYEI0AY2ze',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SxT0C7sUgq8yZbFr',
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
            '_route' => 'generated::RThNGyzj9Ka9kWAr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zjAKDR7Jq6R6mDCt',
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
            '_route' => 'generated::WoBaadgmeK6FlWoH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zhMdZcHmbmmOMbXk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V4DN7zHRwz7pneye',
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
            '_route' => 'generated::xbGZW9l0LrWRu4r8',
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
            '_route' => 'generated::Rn42siWj7rBCQ8El',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Hlu2EXle2PuA9pYf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aDwJVN4ZD9qZ0LK3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2FTwrg2pdISOVPc6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2HnjK75w7czWIcNc',
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
            '_route' => 'generated::daElExRfUHxcOCCX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JDTYfubiigfICZ8U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bdstD7U5aJRGnNVT',
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
            '_route' => 'generated::zhXmUT2VGVRyrTRo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9oV0EcikFMuHcwz1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YeuBbBugtFVFrkPw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AQmgpQlFgNWviCmb',
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
            '_route' => 'generated::MJpnEeeCHiTpgGlj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tsFiOs8TvwOCgkON',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MaDwnxhBouaqSfd3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YkyAKlRKuasxfOfX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CsESzNjAFhhWZ7hH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pyx9ICip3a6lL4mG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UUetGoSOnW2glHui',
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
            '_route' => 'generated::qi67rQEn9eN3x5qt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::osG4EFydeTUHEdJr',
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
            '_route' => 'generated::l3JHyNtTfdizD7DW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SqO4qRLLu5LjUZCt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bTnZ7zpkfYooTOOE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DIoHQstJmZZGOPgh',
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
            '_route' => 'generated::4U8crcUcHiumgrqp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OOssXwHY08iZqK7w',
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
            '_route' => 'generated::QUXJdDUPRo0Xjw4H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZsUoSBf5ant8MWik',
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
            '_route' => 'generated::3Bt9pSkzoriqidBp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OusLgNEznoMNmlPe',
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
            '_route' => 'generated::elLMEsC5T0BcG72m',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zn2g3h9Y3nDRQxrl',
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
            '_route' => 'generated::JB3zvU2w8m7F11oV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5hR9NlnkWVe0BKrr',
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
            '_route' => 'generated::418OI2XIEZZjYcpl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DUkYjkTUESsNlQOS',
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
            '_route' => 'generated::JihHoPY0k4X2py3m',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wupa5gTGhiAdWVCy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0VS8ToJiUkjtEowi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1MehVfOFyFSzyBcV',
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
            '_route' => 'generated::ZWKBRwXgLItAyWKY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Fzjn2xxeYdJKsDhi',
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
            '_route' => 'generated::3gol4bgXWrTTocBP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CUoKiXDGOcpEKCdq',
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
            '_route' => 'generated::2dS4kSgbVxQhuHjY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ott1MIC9woYTIhOz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KnIVFTc90ToirFO0',
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
            '_route' => 'generated::Na0EXBoLlKAs6ig8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::B9MkM003rJEpa2GS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TMiZ51RyfbQJlmNy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8Co4CWpZBiIYBToO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::k4WcGChS8fOfm21r',
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
            '_route' => 'generated::5e6OB8OGKecY3cWA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::n6LSxZ32oYwUJmOy',
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
            '_route' => 'generated::xOQECYhkeCzWKEA6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TvvMuzmiV3DBSXRr',
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
            '_route' => 'generated::qYA2163cCazQrcFm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ch5ujiVBD8dOZs8r',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XXhClrURhxcjCjK0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RC3FfodSbf59qJNG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::INSOgTAVhygQUWha',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WPAMGod0NUc8migx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cDzA4o8cepD42MN8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2jGzR1kRpenUKEOv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SCC5T0EqexKWNgWk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8tJXMNw0nm0TikSV',
          ),
          1 => NULL,
          2 => 
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
      0 => '{^(?|/password/reset/([^/]++)(*:31)|/a(?|pi\\-sms\\-send/([^/]++)(*:65)|dmin/(?|view(?|notify/([^/]++)(*:102)|template/([^/]++)(*:127)|user/([^/]++)(*:148)|mask/([^/]++)(*:169)|group/([^/]++)(*:191)|recharge/([^/]++)(*:216))|d(?|elete(?|_(?|notify/([^/]++)(*:256)|campaign/([^/]++)(*:281)|template/([^/]++)(*:306)|user/([^/]++)(*:327)|mask/([^/]++)(*:348))|group/([^/]++)(*:371))|ownload(?|/([^/]++)/([^/]++)(*:408)|_contacts/([^/]++)/([^/]++)(*:443))|lr/campaignwise/(?|([^/]++)(*:479)|dlr_export/([^/]++)(*:506)))|notify/(?|edit/([^/]++)(*:539)|update/([^/]++)(*:562))|edit(?|_(?|campaign/([^/]++)(*:599)|template/([^/]++)(*:624)|user/([^/]++)(*:645)|payment/([^/]++)(*:669))|C(?|ustomer/([^/]++)(*:698)|oneyance/([^/]++)(*:723))|sales/([^/]++)(*:746)|group/([^/]++)(*:768))|u(?|pdate(?|_(?|campaign/([^/]++)(*:810)|template/([^/]++)(*:835)|sales/([^/]++)(*:857)|user/([^/]++)(*:878)|payment/([^/]++)(*:902))|C(?|ustomer/([^/]++)(*:931)|oneyance/([^/]++)(*:956)))|ser(?|_doc/([^/]++)(*:985)|rechargehistory/([^/]++)(*:1017)))|s(?|uccessdownload/([^/]++)/([^/]++)(*:1064)|tatus/([^/]++)/([^/]++)(*:1096))|re(?|se(?|nd_campaign/([^/]++)(*:1136)|t/([^/]++)/([^/]++)(*:1164))|work/([^/]++)(*:1187))|ces/([^/]++)/([^/]++)(*:1218)|a(?|pproval/([^/]++)(*:1247)|ddcontactingroup/([^/]++)(*:1281))|tr(?|ade_rework/([^/]++)(*:1315)|x_status/([^/]++)/([^/]++)(*:1350))|mask_status/([^/]++)/([^/]++)(*:1389)))|/reseller/(?|edit(?|_(?|campaign/([^/]++)(*:1441)|template/([^/]++)(*:1467)|user/([^/]++)(*:1489))|group/([^/]++)(*:1513))|update_(?|campaign/([^/]++)(*:1550)|template/([^/]++)(*:1576)|user/([^/]++)(*:1598))|d(?|elete(?|_(?|campaign/([^/]++)(*:1641)|template/([^/]++)(*:1667)|user/([^/]++)(*:1689))|group/([^/]++)(*:1713))|ownload_contacts/([^/]++)/([^/]++)(*:1757)|lr/campaignwise/(?|([^/]++)(*:1793)|dlr_export/([^/]++)(*:1821)))|view(?|template/([^/]++)(*:1856)|group/([^/]++)(*:1879)|user/([^/]++)(*:1901))|addcontactingroup/([^/]++)(*:1937)|status/([^/]++)/([^/]++)(*:1970))|/user/(?|edit(?|_(?|campaign/([^/]++)(*:2017)|template/([^/]++)(*:2043))|group/([^/]++)(*:2067))|update_(?|campaign/([^/]++)(*:2104)|template/([^/]++)(*:2130))|d(?|elete(?|_(?|campaign/([^/]++)(*:2173)|template/([^/]++)(*:2199))|group/([^/]++)(*:2223))|ownload_contacts/([^/]++)/([^/]++)(*:2267)|lr/campaignwise/(?|([^/]++)(*:2303)|dlr_export/([^/]++)(*:2331)))|resend_campaign/([^/]++)(*:2366)|view(?|group/([^/]++)(*:2396)|template/([^/]++)(*:2422))|addcontactingroup/([^/]++)(*:2458))|/sales/(?|edit(?|customer/([^/]++)(*:2502)|_payment/([^/]++)(*:2528))|update(?|customer/([^/]++)(*:2564)|_payment/([^/]++)(*:2590)))|/manager/(?|editcustomer/([^/]++)(*:2634)|updatecustomer/([^/]++)(*:2666)))/?$}sDu',
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
            '_route' => 'generated::NSKM9Kge7Kf4JAtO',
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
            '_route' => 'generated::1NBXFjfE8goaQC00',
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
            '_route' => 'generated::513QZjGw5FVhy0OE',
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
            '_route' => 'generated::eQRjfo4KLOqOhPQB',
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
            '_route' => 'generated::1AqAvTwshSZeM5qo',
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
            '_route' => 'generated::9yEKFMODbxJUd4dl',
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
            '_route' => 'generated::4EHZlRnhwZZMomoy',
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
            '_route' => 'generated::RxvBIWx8gqTcVv6z',
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
            '_route' => 'generated::QbOohObrpmy66wx6',
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
            '_route' => 'generated::4rhLyK6bE5rJJngD',
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
            '_route' => 'generated::Vffisk76DGSM5Cp8',
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
            '_route' => 'generated::ATf9OCXZaH1CuK98',
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
            '_route' => 'generated::0BUATGRnWazhzfgi',
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
            '_route' => 'generated::xnCbtXXRWw57LJLP',
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
            '_route' => 'generated::q5nwOYOJkctSz9Jz',
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
            '_route' => 'generated::YcAd4YozgSiwzSZR',
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
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::stdfh0zFspgaPueW',
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
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kwea7UeDXqTHMIMH',
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
      562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P0wcDLbFXZ6BZdtN',
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
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzX4EQjRmponspQ4',
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
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::075rHWaAYTwj2yWo',
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
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fns62P9kw9zQegeP',
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
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wtHJLJdXbwGtiopd',
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
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KZPaCHyMIksUJZsl',
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
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eEA9JppgQTW1TP0N',
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
      746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I0GhUHJjRoBdjdx7',
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
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g2yN5WKX4ppqk4S4',
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
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oA2mOahES3eoxQyi',
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
      835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i9SNHn2yyUnMNofW',
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
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IpJShVmvDQN6Csb7',
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
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s1gdBuVRDrFNQOON',
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
      902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j1MGmKzm6VXEka88',
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
      931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NoxkmZroFi37cdtG',
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
      956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rDwAYAIzUmn7uBGo',
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
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LGCXvQYbfGp85vLJ',
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
      1017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qIOLGu0cJWJEJF6P',
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
      1064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ld7UGYAoURBhb4bp',
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
      1096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YTcbwVsNKhewbwXi',
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
      1136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jAlJPhaiIcGKG7uC',
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
      1164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CiRagzZDRlqRArTk',
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
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SrSLe5VGpdKCwGEw',
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
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9uHs2hLd1vC3KXnU',
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
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m5xiAT4vtbL73A9k',
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
      1281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OMPUYMEW5dJ0Iqlx',
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
      1315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xNzNO6gS4rwf5fgr',
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
      1350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZFqWK7OULQDI4UwI',
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
      1389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R9p86G4gRCCrz3RI',
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
      1441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dpFkuDbTuCOqhIwL',
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
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v8tPhiy2ZoNoO0ON',
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
      1489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j0lfwl1uy1xSImbl',
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
      1513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QBlgvWapn3n8kP7b',
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
      1550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5twNuHmJ9AfBNpEA',
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
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FFEajjfS9mjvdkod',
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
      1598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GSn8TK06dA79pg5N',
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
      1641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pBGfJuRm1AbEZran',
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
      1667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cr8uogS878qi7FPD',
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
      1689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TyEzEQWvETxBLamm',
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
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rmr7BsbmznN2COyi',
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
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJTpCcFw8aOuq6BT',
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
      1793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4DY3xEwk7vXKAXc5',
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
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T2px9qjFLS7ENUN3',
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
      1856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ac2IluGWCgdImvrY',
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
      1879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vZa8hwL197Ay9PjA',
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
      1901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FqALXQrM1lH4bKdl',
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
      1937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OQk82O4Tj2dON9mh',
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
      1970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jz7o1UVxM2YHZvee',
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
      2017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V6Y2KzTEMqLY1xM1',
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
      2043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NwUSnSjsauz8js5',
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
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::70XbOQ5H0dBkaHPj',
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
      2104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zqYDRHmHyM35e7cx',
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
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6G5ouXKyWQSdPPtB',
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
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::imDdk677sLmq3Nhi',
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
      2199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::96AvFNgPNEh08AgL',
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
      2223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5SJtWly44sHCBLCd',
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
      2267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7KoFjgNNKrlNr034',
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
      2303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gpRfC6O6EOoy4S3Y',
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
      2331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbeoueRvd7JU3MWZ',
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
      2366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tYAhHnjz8WIz5wEa',
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
      2396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zsGy2chfgQMSMNI2',
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
            '_route' => 'generated::g0eU0n6t7E9PMPVM',
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
      2458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::16Asaq01OCEdaBx0',
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
      2502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uCkQIwOC0ZUtulA9',
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
      2528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S8LarPW4mGT3NKo5',
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
      2564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TWp35tznJrj2fUgP',
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
      2590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwnlzA4nrrfVDCxX',
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
      2634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XlAFJ5mXcbmapJ6i',
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
      2666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zkDNbSDCHz27NOE3',
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
    'generated::iYXLAiSiZybKrk1W' => 
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
        'as' => 'generated::iYXLAiSiZybKrk1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::by4Gdnx4GLlKCEG1' => 
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
        'as' => 'generated::by4Gdnx4GLlKCEG1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YoTtYwS4Tmeg6rrF' => 
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
        'as' => 'generated::YoTtYwS4Tmeg6rrF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ypKeuNsROufOmlON' => 
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
        'as' => 'generated::ypKeuNsROufOmlON',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::t1CDNCUqNoAkqjgC' => 
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
        'as' => 'generated::t1CDNCUqNoAkqjgC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::2l5fLgfHQOEMskSA' => 
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
        'as' => 'generated::2l5fLgfHQOEMskSA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::jNds34kGGUvtVhUS' => 
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
        'as' => 'generated::jNds34kGGUvtVhUS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xlYE7pfJnFypLscE' => 
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
        'as' => 'generated::xlYE7pfJnFypLscE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ajAfghvdZJhrBnZf' => 
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
        'as' => 'generated::ajAfghvdZJhrBnZf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::lKL1BqXWf2SuGuKZ' => 
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
        'as' => 'generated::lKL1BqXWf2SuGuKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7rnPnVxgCR24LebS' => 
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
        'as' => 'generated::7rnPnVxgCR24LebS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KMzhSzDbJmwhxj43' => 
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
        'as' => 'generated::KMzhSzDbJmwhxj43',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7DbX3H052a2gnkni' => 
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
        'as' => 'generated::7DbX3H052a2gnkni',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AdHK7nTSOAOVpBmg' => 
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
        'as' => 'generated::AdHK7nTSOAOVpBmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DkoUNzsIApAoITs8' => 
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
        'as' => 'generated::DkoUNzsIApAoITs8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9wyZtAa9wo22MprD' => 
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
        'as' => 'generated::9wyZtAa9wo22MprD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3aPQnRzXG2VTET0o' => 
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
        'as' => 'generated::3aPQnRzXG2VTET0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KSdX5IjCRkAy3n6M' => 
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
        'as' => 'generated::KSdX5IjCRkAy3n6M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OdgWwuLkmRhvSLa' => 
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
        'as' => 'generated::0OdgWwuLkmRhvSLa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8aDlc40DPR8R7ySC' => 
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
        'as' => 'generated::8aDlc40DPR8R7ySC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4o8BNITh25BXx0qf' => 
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
        'as' => 'generated::4o8BNITh25BXx0qf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oUjVR3oYtTedUqx2' => 
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
        'as' => 'generated::oUjVR3oYtTedUqx2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M1IJ7OkyuqhPPcOZ' => 
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
        'as' => 'generated::M1IJ7OkyuqhPPcOZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NSKM9Kge7Kf4JAtO' => 
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
        'as' => 'generated::NSKM9Kge7Kf4JAtO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U1eTqjYYjxKKbQiy' => 
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
        'as' => 'generated::U1eTqjYYjxKKbQiy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lHuwlbCNUbMYb30v' => 
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
        'as' => 'generated::lHuwlbCNUbMYb30v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qbBIFl6kroqmH4xS' => 
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
        'as' => 'generated::qbBIFl6kroqmH4xS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lou9KLBOPNhyInDZ' => 
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
        'as' => 'generated::lou9KLBOPNhyInDZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jyEDzKKC0rjI8w2W' => 
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
        'as' => 'generated::jyEDzKKC0rjI8w2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ojx7V2YNxWIzmspZ' => 
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
        'as' => 'generated::ojx7V2YNxWIzmspZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::85dqg788wpVEMG3W' => 
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
        'as' => 'generated::85dqg788wpVEMG3W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hRG5MwbM7lQvUGyi' => 
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
        'as' => 'generated::hRG5MwbM7lQvUGyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d6dLiaPMz3pQtxmG' => 
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
        'as' => 'generated::d6dLiaPMz3pQtxmG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::syzQplyM77hySVRW' => 
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
        'as' => 'generated::syzQplyM77hySVRW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NcfhrDlN1yNQvMUm' => 
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
        'as' => 'generated::NcfhrDlN1yNQvMUm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5S3GBlTMahcgK1c5' => 
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
        'as' => 'generated::5S3GBlTMahcgK1c5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ekRDBjUleJ5nmWXp' => 
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
        'as' => 'generated::ekRDBjUleJ5nmWXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hWMyFd6i0XxrGTIn' => 
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
        'as' => 'generated::hWMyFd6i0XxrGTIn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mH3my2LgmBCF8WK4' => 
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
        'as' => 'generated::mH3my2LgmBCF8WK4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ib1V2dzOBIHlnezp' => 
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
        'as' => 'generated::Ib1V2dzOBIHlnezp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KMcUCGP7m89D9x0e' => 
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
        'as' => 'generated::KMcUCGP7m89D9x0e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NBXFjfE8goaQC00' => 
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
        'as' => 'generated::1NBXFjfE8goaQC00',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RxvBIWx8gqTcVv6z' => 
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
        'as' => 'generated::RxvBIWx8gqTcVv6z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kwea7UeDXqTHMIMH' => 
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
        'as' => 'generated::kwea7UeDXqTHMIMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P0wcDLbFXZ6BZdtN' => 
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
        'as' => 'generated::P0wcDLbFXZ6BZdtN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3QgNNnKxbQzuvQeu' => 
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
        'as' => 'generated::3QgNNnKxbQzuvQeu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tOc3T6VdyhTdrY7W' => 
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
        'as' => 'generated::tOc3T6VdyhTdrY7W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rSQE0GR5ypn6JMcP' => 
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
        'as' => 'generated::rSQE0GR5ypn6JMcP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iFzKlFzZSjy4Y976' => 
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
        'as' => 'generated::iFzKlFzZSjy4Y976',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wOGUjSn5wpvDSUvr' => 
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
        'as' => 'generated::wOGUjSn5wpvDSUvr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zd1hHuNdS28O3jEd' => 
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
        'as' => 'generated::Zd1hHuNdS28O3jEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VafyyGHUTHab7S8a' => 
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
        'as' => 'generated::VafyyGHUTHab7S8a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dBnZcQTp2bMvBNba' => 
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
        'as' => 'generated::dBnZcQTp2bMvBNba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kzX4EQjRmponspQ4' => 
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
        'as' => 'generated::kzX4EQjRmponspQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oA2mOahES3eoxQyi' => 
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
        'as' => 'generated::oA2mOahES3eoxQyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QbOohObrpmy66wx6' => 
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
        'as' => 'generated::QbOohObrpmy66wx6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xnCbtXXRWw57LJLP' => 
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
        'as' => 'generated::xnCbtXXRWw57LJLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ld7UGYAoURBhb4bp' => 
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
        'as' => 'generated::ld7UGYAoURBhb4bp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jAlJPhaiIcGKG7uC' => 
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
        'as' => 'generated::jAlJPhaiIcGKG7uC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RYSCHNGSJc16S6VX' => 
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
        'as' => 'generated::RYSCHNGSJc16S6VX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uOjGMFro8oQ6Gol8' => 
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
        'as' => 'generated::uOjGMFro8oQ6Gol8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::513QZjGw5FVhy0OE' => 
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
        'as' => 'generated::513QZjGw5FVhy0OE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::075rHWaAYTwj2yWo' => 
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
        'as' => 'generated::075rHWaAYTwj2yWo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i9SNHn2yyUnMNofW' => 
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
        'as' => 'generated::i9SNHn2yyUnMNofW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rhLyK6bE5rJJngD' => 
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
        'as' => 'generated::4rhLyK6bE5rJJngD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuZbVRCqdYnkcdML' => 
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
        'as' => 'generated::yuZbVRCqdYnkcdML',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u46SyFj1F8xMqbA3' => 
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
        'as' => 'generated::u46SyFj1F8xMqbA3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Q2JgJBYJ4u73PDm' => 
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
        'as' => 'generated::7Q2JgJBYJ4u73PDm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6UndH2drF4lNH0J' => 
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
        'as' => 'generated::R6UndH2drF4lNH0J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DtLD2v4XlRAzv6Sq' => 
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
        'as' => 'generated::DtLD2v4XlRAzv6Sq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KZPaCHyMIksUJZsl' => 
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
        'as' => 'generated::KZPaCHyMIksUJZsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NoxkmZroFi37cdtG' => 
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
        'as' => 'generated::NoxkmZroFi37cdtG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eEA9JppgQTW1TP0N' => 
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
        'as' => 'generated::eEA9JppgQTW1TP0N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rDwAYAIzUmn7uBGo' => 
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
        'as' => 'generated::rDwAYAIzUmn7uBGo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nnNytFQIkjDdnbO6' => 
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
        'as' => 'generated::nnNytFQIkjDdnbO6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DyJkGMBo04WWQ4kN' => 
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
        'as' => 'generated::DyJkGMBo04WWQ4kN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ROppG1PPzYjMNNnq' => 
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
        'as' => 'generated::ROppG1PPzYjMNNnq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u1fwWD9prHnkBeEY' => 
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
        'as' => 'generated::u1fwWD9prHnkBeEY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BHl2rXb1dMqr1Gln' => 
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
        'as' => 'generated::BHl2rXb1dMqr1Gln',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KbRRhD5IHVCMZ2L' => 
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
        'as' => 'generated::2KbRRhD5IHVCMZ2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QcarcT1L7zySJSMw' => 
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
        'as' => 'generated::QcarcT1L7zySJSMw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z7sETEfvWwQjvIVp' => 
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
        'as' => 'generated::Z7sETEfvWwQjvIVp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H4Z7xXVlTxe10wTi' => 
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
        'as' => 'generated::H4Z7xXVlTxe10wTi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9uHs2hLd1vC3KXnU' => 
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
        'as' => 'generated::9uHs2hLd1vC3KXnU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0GhUHJjRoBdjdx7' => 
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
        'as' => 'generated::I0GhUHJjRoBdjdx7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IpJShVmvDQN6Csb7' => 
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
        'as' => 'generated::IpJShVmvDQN6Csb7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tqSbQl6eXcoXtS3V' => 
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
        'as' => 'generated::tqSbQl6eXcoXtS3V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7DowvqPxjiGAvymx' => 
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
        'as' => 'generated::7DowvqPxjiGAvymx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GowLfnf2FxLE6e0B' => 
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
        'as' => 'generated::GowLfnf2FxLE6e0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eQRjfo4KLOqOhPQB' => 
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
        'as' => 'generated::eQRjfo4KLOqOhPQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fns62P9kw9zQegeP' => 
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
        'as' => 'generated::Fns62P9kw9zQegeP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LGCXvQYbfGp85vLJ' => 
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
        'as' => 'generated::LGCXvQYbfGp85vLJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s1gdBuVRDrFNQOON' => 
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
        'as' => 'generated::s1gdBuVRDrFNQOON',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vffisk76DGSM5Cp8' => 
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
        'as' => 'generated::Vffisk76DGSM5Cp8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YTcbwVsNKhewbwXi' => 
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
        'as' => 'generated::YTcbwVsNKhewbwXi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CiRagzZDRlqRArTk' => 
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
        'as' => 'generated::CiRagzZDRlqRArTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HTxaBhhGVswuTav6' => 
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
        'as' => 'generated::HTxaBhhGVswuTav6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::imi0Dr8z8c4er27F' => 
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
        'as' => 'generated::imi0Dr8z8c4er27F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m5xiAT4vtbL73A9k' => 
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
        'as' => 'generated::m5xiAT4vtbL73A9k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SrSLe5VGpdKCwGEw' => 
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
        'as' => 'generated::SrSLe5VGpdKCwGEw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xNzNO6gS4rwf5fgr' => 
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
        'as' => 'generated::xNzNO6gS4rwf5fgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9d5vgtDi3SIObeHe' => 
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
        'as' => 'generated::9d5vgtDi3SIObeHe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9AiKT0oOrO2UF918' => 
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
        'as' => 'generated::9AiKT0oOrO2UF918',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1AqAvTwshSZeM5qo' => 
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
        'as' => 'generated::1AqAvTwshSZeM5qo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ATf9OCXZaH1CuK98' => 
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
        'as' => 'generated::ATf9OCXZaH1CuK98',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R9p86G4gRCCrz3RI' => 
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
        'as' => 'generated::R9p86G4gRCCrz3RI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JWN2VxU38BfLSKPX' => 
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
        'as' => 'generated::JWN2VxU38BfLSKPX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4aEEELhR0gRd9op' => 
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
        'as' => 'generated::O4aEEELhR0gRd9op',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qctCVLl4uM4klUeW' => 
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
        'as' => 'generated::qctCVLl4uM4klUeW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9yEKFMODbxJUd4dl' => 
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
        'as' => 'generated::9yEKFMODbxJUd4dl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g2yN5WKX4ppqk4S4' => 
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
        'as' => 'generated::g2yN5WKX4ppqk4S4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0BUATGRnWazhzfgi' => 
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
        'as' => 'generated::0BUATGRnWazhzfgi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EFVPjnEk2LctSAjy' => 
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
        'as' => 'generated::EFVPjnEk2LctSAjy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q5nwOYOJkctSz9Jz' => 
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
        'as' => 'generated::q5nwOYOJkctSz9Jz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vfkGhHDLVeWPdN4H' => 
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
        'as' => 'generated::vfkGhHDLVeWPdN4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OMPUYMEW5dJ0Iqlx' => 
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
        'as' => 'generated::OMPUYMEW5dJ0Iqlx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PkGCkrNJHxIB6DJE' => 
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
        'as' => 'generated::PkGCkrNJHxIB6DJE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qcHY3z0g21BhPCVN' => 
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
        'as' => 'generated::qcHY3z0g21BhPCVN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RxK3mAsWrUtUqelu' => 
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
        'as' => 'generated::RxK3mAsWrUtUqelu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vB21idTuJwYaOv53' => 
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
        'as' => 'generated::vB21idTuJwYaOv53',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZFqWK7OULQDI4UwI' => 
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
        'as' => 'generated::ZFqWK7OULQDI4UwI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g4bCPhOcZrSjas1i' => 
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
        'as' => 'generated::g4bCPhOcZrSjas1i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IUVWY4owiGKkI4pa' => 
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
        'as' => 'generated::IUVWY4owiGKkI4pa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qIOLGu0cJWJEJF6P' => 
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
        'as' => 'generated::qIOLGu0cJWJEJF6P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yb6EQTUxcRzlsi6I' => 
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
        'as' => 'generated::Yb6EQTUxcRzlsi6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MufCPAAmvHjiaNQQ' => 
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
        'as' => 'generated::MufCPAAmvHjiaNQQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q49OTbImmajgbwaS' => 
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
        'as' => 'generated::q49OTbImmajgbwaS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNAZ9Cmjy6OVv8yC' => 
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
        'as' => 'generated::kNAZ9Cmjy6OVv8yC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k7rnQrEEpqNTatlN' => 
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
        'as' => 'generated::k7rnQrEEpqNTatlN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::za5piHNCaisvYIpj' => 
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
        'as' => 'generated::za5piHNCaisvYIpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::is9GNJnv87ThoTIb' => 
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
        'as' => 'generated::is9GNJnv87ThoTIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dJz39SbeCcCrRZOG' => 
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
        'as' => 'generated::dJz39SbeCcCrRZOG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1y1pQODS3AnSzVgz' => 
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
        'as' => 'generated::1y1pQODS3AnSzVgz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FOS9ffyOeigUjKJp' => 
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
        'as' => 'generated::FOS9ffyOeigUjKJp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4EHZlRnhwZZMomoy' => 
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
        'as' => 'generated::4EHZlRnhwZZMomoy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rsTIN5YJ9V3tARMm' => 
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
        'as' => 'generated::rsTIN5YJ9V3tARMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wtHJLJdXbwGtiopd' => 
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
        'as' => 'generated::wtHJLJdXbwGtiopd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j1MGmKzm6VXEka88' => 
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
        'as' => 'generated::j1MGmKzm6VXEka88',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::pdWLqFhTzFWyDTJa' => 
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
        'as' => 'generated::pdWLqFhTzFWyDTJa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h5F1iHjIUbGSSGM2' => 
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
        'as' => 'generated::h5F1iHjIUbGSSGM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGmiqKnFIbijazkb' => 
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
        'as' => 'generated::bGmiqKnFIbijazkb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::outr9hX7clo8psaa' => 
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
        'as' => 'generated::outr9hX7clo8psaa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qk1pypQeAXi9Wvcb' => 
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
        'as' => 'generated::Qk1pypQeAXi9Wvcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s2nWNeMeuYRMBpgd' => 
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
        'as' => 'generated::s2nWNeMeuYRMBpgd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wbQRrQBvbInV4LIW' => 
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
        'as' => 'generated::wbQRrQBvbInV4LIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L2WUyRtqZz6j0r6a' => 
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
        'as' => 'generated::L2WUyRtqZz6j0r6a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XqlnOm563fOAJtH2' => 
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
        'as' => 'generated::XqlnOm563fOAJtH2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7f3dpp7IvGwFF4O9' => 
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
        'as' => 'generated::7f3dpp7IvGwFF4O9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yEzKlDRdAHCwrlCq' => 
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
        'as' => 'generated::yEzKlDRdAHCwrlCq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4C6cGXSpQffBlRAP' => 
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
        'as' => 'generated::4C6cGXSpQffBlRAP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dpFkuDbTuCOqhIwL' => 
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
        'as' => 'generated::dpFkuDbTuCOqhIwL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5twNuHmJ9AfBNpEA' => 
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
        'as' => 'generated::5twNuHmJ9AfBNpEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pBGfJuRm1AbEZran' => 
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
        'as' => 'generated::pBGfJuRm1AbEZran',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f1AbMhMDe6e09nb4' => 
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
        'as' => 'generated::f1AbMhMDe6e09nb4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dzzf1sjd9lThMeVP' => 
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
        'as' => 'generated::dzzf1sjd9lThMeVP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ac2IluGWCgdImvrY' => 
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
        'as' => 'generated::Ac2IluGWCgdImvrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8tPhiy2ZoNoO0ON' => 
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
        'as' => 'generated::v8tPhiy2ZoNoO0ON',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FFEajjfS9mjvdkod' => 
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
        'as' => 'generated::FFEajjfS9mjvdkod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cr8uogS878qi7FPD' => 
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
        'as' => 'generated::Cr8uogS878qi7FPD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L6kKU2f65KzDUdTw' => 
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
        'as' => 'generated::L6kKU2f65KzDUdTw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::enU7uY0GDQtNTgNO' => 
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
        'as' => 'generated::enU7uY0GDQtNTgNO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3JRzsWJgV06Xm0gD' => 
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
        'as' => 'generated::3JRzsWJgV06Xm0gD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hFk61fIQch9j5RjV' => 
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
        'as' => 'generated::hFk61fIQch9j5RjV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZdSB5eK9shUwjYHd' => 
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
        'as' => 'generated::ZdSB5eK9shUwjYHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::93LVAprrGWNYDl2u' => 
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
        'as' => 'generated::93LVAprrGWNYDl2u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RqT966rtAeaBpOa7' => 
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
        'as' => 'generated::RqT966rtAeaBpOa7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L3CDiHN58mXtmijC' => 
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
        'as' => 'generated::L3CDiHN58mXtmijC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ZkRZZTSza77KqU6' => 
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
        'as' => 'generated::5ZkRZZTSza77KqU6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SCO3g4ak91SDiIR1' => 
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
        'as' => 'generated::SCO3g4ak91SDiIR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZzng7g4cwcYU6BA' => 
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
        'as' => 'generated::HZzng7g4cwcYU6BA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vZa8hwL197Ay9PjA' => 
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
        'as' => 'generated::vZa8hwL197Ay9PjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QBlgvWapn3n8kP7b' => 
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
        'as' => 'generated::QBlgvWapn3n8kP7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmr7BsbmznN2COyi' => 
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
        'as' => 'generated::rmr7BsbmznN2COyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSJSs2ob5k7uCez5' => 
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
        'as' => 'generated::QSJSs2ob5k7uCez5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJTpCcFw8aOuq6BT' => 
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
        'as' => 'generated::YJTpCcFw8aOuq6BT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ijlhYItccv2X2jb3' => 
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
        'as' => 'generated::ijlhYItccv2X2jb3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OQk82O4Tj2dON9mh' => 
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
        'as' => 'generated::OQk82O4Tj2dON9mh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AjdtorCMAWxKJwi4' => 
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
        'as' => 'generated::AjdtorCMAWxKJwi4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vdO8RZcgZtewh9nq' => 
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
        'as' => 'generated::vdO8RZcgZtewh9nq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::npTZVMfFztaI68x0' => 
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
        'as' => 'generated::npTZVMfFztaI68x0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FqALXQrM1lH4bKdl' => 
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
        'as' => 'generated::FqALXQrM1lH4bKdl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j0lfwl1uy1xSImbl' => 
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
        'as' => 'generated::j0lfwl1uy1xSImbl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GSn8TK06dA79pg5N' => 
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
        'as' => 'generated::GSn8TK06dA79pg5N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TyEzEQWvETxBLamm' => 
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
        'as' => 'generated::TyEzEQWvETxBLamm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jz7o1UVxM2YHZvee' => 
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
        'as' => 'generated::jz7o1UVxM2YHZvee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f7lrgTvo1rJzqbXu' => 
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
        'as' => 'generated::f7lrgTvo1rJzqbXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JqQT3UN9OMVBhcz6' => 
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
        'as' => 'generated::JqQT3UN9OMVBhcz6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0J0VibgjC0inL6gp' => 
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
        'as' => 'generated::0J0VibgjC0inL6gp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3l0j97zFeQu93SiX' => 
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
        'as' => 'generated::3l0j97zFeQu93SiX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVAhwa09ISq5S1WB' => 
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
        'as' => 'generated::dVAhwa09ISq5S1WB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6AVBAwGZoICWWtL5' => 
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
        'as' => 'generated::6AVBAwGZoICWWtL5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4CCK64uG7HwDQPnk' => 
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
        'as' => 'generated::4CCK64uG7HwDQPnk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lQTh9DqBhoQEEtjY' => 
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
        'as' => 'generated::lQTh9DqBhoQEEtjY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lGInYxXHbGrxwODO' => 
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
        'as' => 'generated::lGInYxXHbGrxwODO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cwyUc4itRMnxIWSt' => 
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
        'as' => 'generated::cwyUc4itRMnxIWSt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OwendbjQZtRRGneM' => 
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
        'as' => 'generated::OwendbjQZtRRGneM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rYxVM9lcBqZFc98I' => 
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
        'as' => 'generated::rYxVM9lcBqZFc98I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M8pHym3SiY4o7InX' => 
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
        'as' => 'generated::M8pHym3SiY4o7InX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpIBv7EYEI0AY2ze' => 
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
        'as' => 'generated::zpIBv7EYEI0AY2ze',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SxT0C7sUgq8yZbFr' => 
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
        'as' => 'generated::SxT0C7sUgq8yZbFr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RThNGyzj9Ka9kWAr' => 
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
        'as' => 'generated::RThNGyzj9Ka9kWAr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zjAKDR7Jq6R6mDCt' => 
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
        'as' => 'generated::zjAKDR7Jq6R6mDCt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V6Y2KzTEMqLY1xM1' => 
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
        'as' => 'generated::V6Y2KzTEMqLY1xM1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zqYDRHmHyM35e7cx' => 
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
        'as' => 'generated::zqYDRHmHyM35e7cx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::imDdk677sLmq3Nhi' => 
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
        'as' => 'generated::imDdk677sLmq3Nhi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tYAhHnjz8WIz5wEa' => 
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
        'as' => 'generated::tYAhHnjz8WIz5wEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WoBaadgmeK6FlWoH' => 
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
        'as' => 'generated::WoBaadgmeK6FlWoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zhMdZcHmbmmOMbXk' => 
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
        'as' => 'generated::zhMdZcHmbmmOMbXk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V4DN7zHRwz7pneye' => 
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
        'as' => 'generated::V4DN7zHRwz7pneye',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xbGZW9l0LrWRu4r8' => 
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
        'as' => 'generated::xbGZW9l0LrWRu4r8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rn42siWj7rBCQ8El' => 
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
        'as' => 'generated::Rn42siWj7rBCQ8El',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hlu2EXle2PuA9pYf' => 
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
        'as' => 'generated::Hlu2EXle2PuA9pYf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aDwJVN4ZD9qZ0LK3' => 
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
        'as' => 'generated::aDwJVN4ZD9qZ0LK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2FTwrg2pdISOVPc6' => 
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
        'as' => 'generated::2FTwrg2pdISOVPc6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zsGy2chfgQMSMNI2' => 
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
        'as' => 'generated::zsGy2chfgQMSMNI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::70XbOQ5H0dBkaHPj' => 
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
        'as' => 'generated::70XbOQ5H0dBkaHPj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5SJtWly44sHCBLCd' => 
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
        'as' => 'generated::5SJtWly44sHCBLCd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HnjK75w7czWIcNc' => 
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
        'as' => 'generated::2HnjK75w7czWIcNc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7KoFjgNNKrlNr034' => 
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
        'as' => 'generated::7KoFjgNNKrlNr034',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::daElExRfUHxcOCCX' => 
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
        'as' => 'generated::daElExRfUHxcOCCX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16Asaq01OCEdaBx0' => 
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
        'as' => 'generated::16Asaq01OCEdaBx0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JDTYfubiigfICZ8U' => 
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
        'as' => 'generated::JDTYfubiigfICZ8U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bdstD7U5aJRGnNVT' => 
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
        'as' => 'generated::bdstD7U5aJRGnNVT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zhXmUT2VGVRyrTRo' => 
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
        'as' => 'generated::zhXmUT2VGVRyrTRo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9oV0EcikFMuHcwz1' => 
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
        'as' => 'generated::9oV0EcikFMuHcwz1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YeuBbBugtFVFrkPw' => 
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
        'as' => 'generated::YeuBbBugtFVFrkPw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AQmgpQlFgNWviCmb' => 
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
        'as' => 'generated::AQmgpQlFgNWviCmb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g0eU0n6t7E9PMPVM' => 
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
        'as' => 'generated::g0eU0n6t7E9PMPVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NwUSnSjsauz8js5' => 
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
        'as' => 'generated::8NwUSnSjsauz8js5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6G5ouXKyWQSdPPtB' => 
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
        'as' => 'generated::6G5ouXKyWQSdPPtB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::96AvFNgPNEh08AgL' => 
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
        'as' => 'generated::96AvFNgPNEh08AgL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MJpnEeeCHiTpgGlj' => 
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
        'as' => 'generated::MJpnEeeCHiTpgGlj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tsFiOs8TvwOCgkON' => 
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
        'as' => 'generated::tsFiOs8TvwOCgkON',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MaDwnxhBouaqSfd3' => 
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
        'as' => 'generated::MaDwnxhBouaqSfd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YkyAKlRKuasxfOfX' => 
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
        'as' => 'generated::YkyAKlRKuasxfOfX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CsESzNjAFhhWZ7hH' => 
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
        'as' => 'generated::CsESzNjAFhhWZ7hH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pyx9ICip3a6lL4mG' => 
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
        'as' => 'generated::pyx9ICip3a6lL4mG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUetGoSOnW2glHui' => 
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
        'as' => 'generated::UUetGoSOnW2glHui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::qi67rQEn9eN3x5qt' => 
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
        'as' => 'generated::qi67rQEn9eN3x5qt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::osG4EFydeTUHEdJr' => 
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
        'as' => 'generated::osG4EFydeTUHEdJr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l3JHyNtTfdizD7DW' => 
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
        'as' => 'generated::l3JHyNtTfdizD7DW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SqO4qRLLu5LjUZCt' => 
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
        'as' => 'generated::SqO4qRLLu5LjUZCt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTnZ7zpkfYooTOOE' => 
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
        'as' => 'generated::bTnZ7zpkfYooTOOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DIoHQstJmZZGOPgh' => 
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
        'as' => 'generated::DIoHQstJmZZGOPgh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4U8crcUcHiumgrqp' => 
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
        'as' => 'generated::4U8crcUcHiumgrqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OOssXwHY08iZqK7w' => 
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
        'as' => 'generated::OOssXwHY08iZqK7w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QUXJdDUPRo0Xjw4H' => 
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
        'as' => 'generated::QUXJdDUPRo0Xjw4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZsUoSBf5ant8MWik' => 
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
        'as' => 'generated::ZsUoSBf5ant8MWik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Bt9pSkzoriqidBp' => 
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
        'as' => 'generated::3Bt9pSkzoriqidBp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OusLgNEznoMNmlPe' => 
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
        'as' => 'generated::OusLgNEznoMNmlPe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::elLMEsC5T0BcG72m' => 
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
        'as' => 'generated::elLMEsC5T0BcG72m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zn2g3h9Y3nDRQxrl' => 
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
        'as' => 'generated::Zn2g3h9Y3nDRQxrl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uCkQIwOC0ZUtulA9' => 
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
        'as' => 'generated::uCkQIwOC0ZUtulA9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TWp35tznJrj2fUgP' => 
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
        'as' => 'generated::TWp35tznJrj2fUgP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JB3zvU2w8m7F11oV' => 
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
        'as' => 'generated::JB3zvU2w8m7F11oV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hR9NlnkWVe0BKrr' => 
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
        'as' => 'generated::5hR9NlnkWVe0BKrr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::418OI2XIEZZjYcpl' => 
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
        'as' => 'generated::418OI2XIEZZjYcpl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DUkYjkTUESsNlQOS' => 
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
        'as' => 'generated::DUkYjkTUESsNlQOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JihHoPY0k4X2py3m' => 
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
        'as' => 'generated::JihHoPY0k4X2py3m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wupa5gTGhiAdWVCy' => 
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
        'as' => 'generated::wupa5gTGhiAdWVCy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0VS8ToJiUkjtEowi' => 
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
        'as' => 'generated::0VS8ToJiUkjtEowi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1MehVfOFyFSzyBcV' => 
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
        'as' => 'generated::1MehVfOFyFSzyBcV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S8LarPW4mGT3NKo5' => 
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
        'as' => 'generated::S8LarPW4mGT3NKo5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwnlzA4nrrfVDCxX' => 
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
        'as' => 'generated::IwnlzA4nrrfVDCxX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ZWKBRwXgLItAyWKY' => 
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
        'as' => 'generated::ZWKBRwXgLItAyWKY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fzjn2xxeYdJKsDhi' => 
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
        'as' => 'generated::Fzjn2xxeYdJKsDhi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3gol4bgXWrTTocBP' => 
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
        'as' => 'generated::3gol4bgXWrTTocBP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CUoKiXDGOcpEKCdq' => 
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
        'as' => 'generated::CUoKiXDGOcpEKCdq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2dS4kSgbVxQhuHjY' => 
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
        'as' => 'generated::2dS4kSgbVxQhuHjY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ott1MIC9woYTIhOz' => 
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
        'as' => 'generated::ott1MIC9woYTIhOz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KnIVFTc90ToirFO0' => 
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
        'as' => 'generated::KnIVFTc90ToirFO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Na0EXBoLlKAs6ig8' => 
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
        'as' => 'generated::Na0EXBoLlKAs6ig8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B9MkM003rJEpa2GS' => 
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
        'as' => 'generated::B9MkM003rJEpa2GS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMiZ51RyfbQJlmNy' => 
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
        'as' => 'generated::TMiZ51RyfbQJlmNy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Co4CWpZBiIYBToO' => 
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
        'as' => 'generated::8Co4CWpZBiIYBToO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k4WcGChS8fOfm21r' => 
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
        'as' => 'generated::k4WcGChS8fOfm21r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5e6OB8OGKecY3cWA' => 
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
        'as' => 'generated::5e6OB8OGKecY3cWA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n6LSxZ32oYwUJmOy' => 
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
        'as' => 'generated::n6LSxZ32oYwUJmOy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XlAFJ5mXcbmapJ6i' => 
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
        'as' => 'generated::XlAFJ5mXcbmapJ6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zkDNbSDCHz27NOE3' => 
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
        'as' => 'generated::zkDNbSDCHz27NOE3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xOQECYhkeCzWKEA6' => 
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
        'as' => 'generated::xOQECYhkeCzWKEA6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvvMuzmiV3DBSXRr' => 
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
        'as' => 'generated::TvvMuzmiV3DBSXRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YcAd4YozgSiwzSZR' => 
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
        'as' => 'generated::YcAd4YozgSiwzSZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::stdfh0zFspgaPueW' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::stdfh0zFspgaPueW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qYA2163cCazQrcFm' => 
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
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::qYA2163cCazQrcFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ch5ujiVBD8dOZs8r' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::ch5ujiVBD8dOZs8r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XXhClrURhxcjCjK0' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::XXhClrURhxcjCjK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RC3FfodSbf59qJNG' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'namespace' => NULL,
        'prefix' => '/admin/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::RC3FfodSbf59qJNG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4DY3xEwk7vXKAXc5' => 
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
        'as' => 'generated::4DY3xEwk7vXKAXc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T2px9qjFLS7ENUN3' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'controller' => 'App\\Http\\Controllers\\DLRController@campaignDlrExport',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::T2px9qjFLS7ENUN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::INSOgTAVhygQUWha' => 
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
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::INSOgTAVhygQUWha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WPAMGod0NUc8migx' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfdeliverylog',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::WPAMGod0NUc8migx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDzA4o8cepD42MN8' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::cDzA4o8cepD42MN8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2jGzR1kRpenUKEOv' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_userdeliverylog',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::2jGzR1kRpenUKEOv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gpRfC6O6EOoy4S3Y' => 
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
        'as' => 'generated::gpRfC6O6EOoy4S3Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbeoueRvd7JU3MWZ' => 
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
        'as' => 'generated::pbeoueRvd7JU3MWZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SCC5T0EqexKWNgWk' => 
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
        'as' => 'generated::SCC5T0EqexKWNgWk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8tJXMNw0nm0TikSV' => 
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
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@deliverylog',
        'controller' => 'App\\Http\\Controllers\\DLRController@deliverylog',
        'namespace' => NULL,
        'prefix' => '/user/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::8tJXMNw0nm0TikSV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
