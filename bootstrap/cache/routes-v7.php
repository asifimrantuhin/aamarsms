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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JaXrfJKceNGYcy7L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::znlveeTaRbrNeGQf',
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
      '/telescope/telescope-api/exceptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WTQE1ySfkvIJi4nZ',
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
      '/telescope/telescope-api/dumps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7U1w78w8IUxIJtsM',
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
      '/telescope/telescope-api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9wBXubO1gQsqfu7H',
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
      '/telescope/telescope-api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8RyXnXjpArT4GdXY',
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
      '/telescope/telescope-api/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EbKRMmcs1SoOs5hP',
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
      '/telescope/telescope-api/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9P9tXS3dBuepy8iq',
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
      '/telescope/telescope-api/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DJAYgfUponHxWykM',
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
      '/telescope/telescope-api/gates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XsauLnG3XYF0wPh0',
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
      '/telescope/telescope-api/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0KPzxfBa3ezeP4sJ',
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
      '/telescope/telescope-api/queries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7h9mNNGETrUOqAU8',
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
      '/telescope/telescope-api/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NZwtzwmRi2rmawdc',
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
      '/telescope/telescope-api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQdLTtEm4tf87C7d',
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
      '/telescope/telescope-api/views' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OenNA7kOQwYBEplk',
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
      '/telescope/telescope-api/commands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0EUOhptz9x5wtf6T',
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
      '/telescope/telescope-api/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6lOoX3AvkfcRthyu',
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
      '/telescope/telescope-api/redis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9uhGTPglyh4Udz5w',
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
      '/telescope/telescope-api/client-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H4ANapR5oiUg6rnY',
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
      '/telescope/telescope-api/monitored-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTwByuRntCqIxVGO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::X1Y8SqVQbqzBY5rL',
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
      '/telescope/telescope-api/monitored-tags/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QoukoyB5xr8uFO3e',
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
      '/telescope/telescope-api/toggle-recording' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b1d7VLUr2RjYrRhX',
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
      '/telescope/telescope-api/entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NUvRITUIv7bSpSrY',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
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
            '_route' => 'generated::A7J3O4Odm32n35w0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/multi-text-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4E9Q2kF9VhDVwwBQ',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YN9zwREVb9tiv7G1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::eix0gOEtIX3mZ4u0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::H64Apn1rr5sbj7eh',
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
            '_route' => 'generated::VWdIzdr0y8XTAIku',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qRCXn21ow1OGmrY8',
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
            '_route' => 'generated::sfXjr4yOTgKrhGeZ',
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
            '_route' => 'generated::lCKSq3Wk2JMYt6v4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wpQK7bEZ723USjqv',
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
            '_route' => 'generated::pKBCQDI9QlNw0SAi',
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
            '_route' => 'generated::4VG5OcKG1YXKJIod',
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
            '_route' => 'generated::7sP0PBkqtIGEsMQC',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::PBnESXFQFxlzMjBg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms-sending2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tY21XCLVbxIcFPi8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms-sending3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S5XZOgpWn4RtP5Z7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sms-sending4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h5bEdje77PSwzLx4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HtqlHHESZS3B9gSG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-sms-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sE0zmaXyj1zDm9bX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gSJj3Cjlp2uWNOVH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::py4TFrmQW0Bij66o',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KSAiMKGrhI0slNLv',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::87dtjmnuKmTYhDEW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::QfE5y2cAm1uS4BeR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::M4yUaLIzDK6AK02s',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bSbZoYaGwKtYnH0d',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lXDnxSfkwaWo376I',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::v44fcLVbBdJHxZQN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6v1dy8bdxgexq15S',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BxeoRt4lk8gSPISb',
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
            '_route' => 'generated::zsABMeVfMEnuLp9i',
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
            '_route' => 'generated::qFl8cbu2mVoaUGyg',
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
            '_route' => 'generated::wV88N6NHNA4I0qJA',
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
            '_route' => 'generated::UUJ5y7V2P2i7aUs8',
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
            '_route' => 'generated::SOTW57UArBdI9yTd',
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
            '_route' => 'generated::nPDX66tDzLdLcSOY',
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
            '_route' => 'generated::UDZZZFCkmTnJNioQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rankstel-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SO8asv8JOZmKPCHh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3YkQAfLnSgaJRCo7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::L29TiTH7Vw0ZvkDq',
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
            '_route' => 'generated::oMYuDCZ0KWxQtlNR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::5xqizUOtupdhPNet',
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
            '_route' => 'generated::RamifDpjHqQcX9Jx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Wx0k2BNuRR4XtUFK',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::73g1yApgah3RCm93',
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
            '_route' => 'generated::dt0M0BwkJw925UIG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Nq23KdYP2Y59kWOV',
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
            '_route' => 'generated::F8hCxsKEYf2kW2t9',
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
            '_route' => 'generated::0DHC6YLFbfO8CkMx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PKDCXY8V9VQByb7O',
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
            '_route' => 'generated::nF18XjJ5gZOY5g4B',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SzaJIJJF3ugFUWQV',
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
            '_route' => 'generated::vEKI4TfGu2jwDLsw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZrK7qOBLC3PS7Awk',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::I6DbZnQNNbc8i118',
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
            '_route' => 'generated::a5ON7qQNxjm1GpeI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::P4JDE5IIIqcPnELz',
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
            '_route' => 'generated::VkW9oYh1IFL9j0SP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UVnt23Lm1iNPzjs7',
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
            '_route' => 'generated::QoOgOBy4XD2AR3DG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UnI2gQDdc14nXjWy',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Hn1n2WtQxDgJ4ASo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AolawbF8q6JN1r7x',
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
            '_route' => 'generated::oLcLmrIxx2aVYsQI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::oY6BXitXOWASRGHD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rw9tJZ68iCXYZukA',
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
            '_route' => 'generated::L3KCsh1oX7ROi89i',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1nPkwYoySeQkajCa',
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
            '_route' => 'generated::JhsKVIntpYe0ih0j',
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
            '_route' => 'generated::9xPBML3vThZFEJX6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BTqqipFQp6nNwdzw',
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
            '_route' => 'generated::ZaTFqkb6vLeU7hEw',
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
            '_route' => 'generated::yizihwGSsR9Dch7Z',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AZmFZaWRwkQlSkIm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jrJP35TmMhqttFU3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::XaEpC50dWgPHkdE5',
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
            '_route' => 'generated::Ft7AQc3AetQ5ZRje',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::klRHF5FOzk7UmgGi',
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
            '_route' => 'generated::6lsjtutGhv2UyUJc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JM1MWXrKM8euDprg',
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
            '_route' => 'generated::u8le3ILMIYdVlYyc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::WYA19RlrlPUc1CYw',
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
            '_route' => 'generated::xT0kui2eAdifhYwa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/operator_recharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o0jdRRVeS3cXRtvQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/save_operator_recharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1gE5NKIUQqEJV5UJ',
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
      '/admin/recharge/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TqUbz7FQkWvVLNrk',
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
            '_route' => 'generated::vmkSfrbNuK3lXtzB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::J5AVSqXdDfrpGO13',
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
            '_route' => 'generated::BeQFWqKrBvtmpp6g',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lzOCDQzbP4bokfa9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8l2unh5bCfg6YOue',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3kBB0MOSUfKUevdd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Xh7STjnOJaUPeuEb',
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
            '_route' => 'generated::e9ZRiN4dwOhkjGIi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::moSSIsgaT96sx5ZY',
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
      '/admin/sms_transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cNZkAv9AaYsetoOy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
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
            '_route' => 'generated::lQ2X9Ie7NufCVSAD',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iefWbNeevomzGOqu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reseller_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xuvqEHgoDiX6DYQj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/financial_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oW3S38OzbDBwJQOf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zSZqZfNECb8aQmlY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kfefd3kl5aQlZfN2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::h7xm4QwEDmi89iIi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::5RVobsBH5eqIwNJb',
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
            '_route' => 'generated::UkSkJzDlLgaJ4yUB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7HdT5FgCEJpIV6QF',
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
            '_route' => 'generated::ehxiKqaqqwwWnzCi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::z186QQYKhL70C2MG',
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
            '_route' => 'generated::5WR9abzQdvGa25kV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cu2Q8qPU8Q7iRejM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jdi5ORrRr8loof2R',
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
            '_route' => 'generated::fRGk0Ej2dNEKxZPo',
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
            '_route' => 'generated::JXwADxd0A9Bh07d9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uNIStKMbaxPFH6H3',
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
            '_route' => 'generated::SjGS8bp1TsrwRKfr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6XzbZrsANCQq4sLM',
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
            '_route' => 'generated::Vc7bOgZTvdr7kzaw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MSNoxqu3n9wYnROv',
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
            '_route' => 'generated::1ZyRrtWWGvOXuBhN',
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
            '_route' => 'generated::tD4X5cqxIenD2jn2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ozChcaJ3gPERwAUP',
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
            '_route' => 'generated::elr9uvoQkiySiM84',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yE2n8ZPOftwwmB8U',
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
            '_route' => 'generated::lKQMvhFT4l55T6mI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::o0OyOxrMeJG5CfrH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gMBBfyUpjsZItVgl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cGLM71pwjcLdMOd3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lgQcZtJJz3SkeQnQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1qSuQngPFgRfuCCS',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NWXpsVYIoiqbRsvq',
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
            '_route' => 'generated::VBAZFLVVab3nSldq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8TaSVPCHwZhQJsO3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uiHNJZKy9yJzVP5W',
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
            '_route' => 'generated::Z7QpBbTMvX5SFTpQ',
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
            '_route' => 'generated::G3J8vjRryVv0EwR5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wlyvNwYXjJ2EDlo1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::T9QbBeOy20bQiysv',
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
            '_route' => 'generated::o2pZA9THyFWUs6fQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4VE69BCxt045a0ya',
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
            '_route' => 'generated::kNgQlsY7uYu9quTm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::G6R3AjhAGkAt08SG',
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
            '_route' => 'generated::VZQOD6umdPnlgVKi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::z3VpCLoFDCwqQvCN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zMjq19NTNIJ2bQMK',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::U6RXwZwPhN7wI4Pg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MJ5XSAlhghjyfYkI',
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
            '_route' => 'generated::Ok9liCoStdw0XrfH',
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
            '_route' => 'generated::5e95l8fuqoHsG4hd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6A5Gv1zQXARmuD6M',
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
            '_route' => 'generated::JjCm29vFqfldS9KW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hw9iVJfYoGfsMbLU',
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
            '_route' => 'generated::LCCcCQp9sKEph2Ua',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::WRVKYIDVBs0W4rkW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0Rr3fBGjaTrPbNdN',
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
            '_route' => 'generated::mLIDoQmMlT9AgH6V',
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
            '_route' => 'generated::IFr637IQX95pMg7t',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::x7c7r0CP6sPkcmQK',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::JS5Irl4zciKADNEu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1XtbadbBkAiTlsus',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::RLUNH2yIuVjsRvtH',
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
            '_route' => 'generated::WxYadYoos1h0Emju',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AVrsDsiR8KdK7gbD',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yuubIrhrOimBk617',
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
            '_route' => 'generated::yaOnZotUJXqhGT7X',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::uObJMtUEbv9YEOCW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::i1JxvebYKdWs1586',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YG1YqPKODvhTqTNb',
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
            '_route' => 'generated::oVAQZJJrOWJofGQ8',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DaIdJhaqSxjkb8qz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rIp02vcj53UkAB6V',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9CGbfUIpA50vKz3l',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LBr7NKHzM96Uk8ls',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9rilYYfbvA9aWaYa',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GTlP8B5WktjHBaJv',
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
            '_route' => 'generated::p78VafVY9zujqCAg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::03xgLrhtjOJqHBWh',
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
            '_route' => 'generated::VjtPC65RpDd2QWdH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ks9asIkrHnXmC8PW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aCPOWbMZR7CPkO3U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::djesQ1t0TsAQBeKA',
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
            '_route' => 'generated::p0gbJcxvu7jAE4e3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zJS2qw4xqJQDhinE',
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
            '_route' => 'generated::680TZYpUdFhKNeEX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1gSjVSBy1eQxdUq4',
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
            '_route' => 'generated::Pnn4cQ7vJWqvnZBL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iWibGHUazkSMvaW8',
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
            '_route' => 'generated::cZndFxi0Uc8glCwu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nyaUiqaKcT63WZ9X',
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
            '_route' => 'generated::qY80ZUh9ImWWYJHw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vSFtzIfvOcUfLIkH',
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
            '_route' => 'generated::EvKADaXi97tswSjH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oZ4EfWM5PzqPNKxW',
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
            '_route' => 'generated::HqyTRzXG5fF0X12d',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::45nnoRlaOSza2SWy',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::y4DjDJ3BeffwEOaF',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::dGuvXttbkfiat2Q7',
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
            '_route' => 'generated::5ykKTWTUuzPILxRh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::maBwVu0WVZejYKnk',
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
            '_route' => 'generated::xxjIy7zPrDnwjj1Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GVWEI7gwHw2FPY9D',
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
            '_route' => 'generated::zqx8K4ZyI5YBeEnG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ecmp4BYI6zgz9yyG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zFEA5gIMfNVxfudU',
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
            '_route' => 'generated::uTYe9U6wd0SJCSK3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::SdpaEbxdSvrkn8NR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::VXlmBC0R2dFRVHgQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::L7SLj9cSErERkn1n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1gCHaq5FwXqlJ3Tz',
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
            '_route' => 'generated::mEvX6hEHc1d3VJu2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mcZ6sXiMQ6bfGWIJ',
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
            '_route' => 'generated::DjUTIRJ0VgxkSvIp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yuYsRhzSiNwkD2wo',
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
            '_route' => 'generated::EIiw2Wor7qDFmPRD',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BTMtuq1bCcXtIBR0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6VsUuqsa143iKuZM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::pDcNVPRNOwP9ROoB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::EQhyCnpO7cBOS4Ft',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::X69gHsauPmoOGXcM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::x1bbTHRTirqPU0JW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::OyokQJSqc8W9hUaj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0seUaaCyYMQETjKp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fm20YtLpneDTGRRw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W922OYHbzZ7VOIfc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E6YgaSONKVMSaCje',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pEJJoAJyE8Oo7N2l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HZWzAuVVlQC1caEl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::outzokqGghJZRy8T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/config-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nXqW4ZJdOl9qIvow',
          ),
          1 => NULL,
          2 => 
          array (
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
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/telescope(?|/telescope\\-api/(?|m(?|ail/([^/]++)(?|(*:117)|/(?|preview(*:136)|download(*:152)))|odels/([^/]++)(*:176))|e(?|xceptions/([^/]++)(?|(*:210))|vents/([^/]++)(*:233))|logs/([^/]++)(*:255)|notifications/([^/]++)(*:285)|jobs/([^/]++)(*:306)|batches/([^/]++)(*:330)|gates/([^/]++)(*:352)|c(?|ache/([^/]++)(*:377)|ommands/([^/]++)(*:401)|lient\\-requests/([^/]++)(*:433))|queries/([^/]++)(*:458)|re(?|quests/([^/]++)(*:486)|dis/([^/]++)(*:506))|views/([^/]++)(*:529)|schedule/([^/]++)(*:554))|(?:/((?:.*)))?(*:577))|/password/reset/([^/]++)(*:610)|/a(?|pi\\-sms\\-send/([^/]++)(*:645)|dmin/(?|view(?|no(?|tify/([^/]++)(*:686)|nmask/([^/]++)(*:708))|template/([^/]++)(*:734)|user/([^/]++)(*:755)|mask/([^/]++)(*:776)|group/([^/]++)(*:798)|recharge/([^/]++)(*:823))|d(?|elete(?|_(?|no(?|tify/([^/]++)(*:866)|nmask/([^/]++)(*:888))|campaign/([^/]++)(*:914)|template/([^/]++)(*:939)|user/([^/]++)(*:960)|mask/([^/]++)(*:981))|group/([^/]++)(*:1004))|ownload(?|/([^/]++)/([^/]++)(*:1042)|_contacts/([^/]++)/([^/]++)(*:1078))|lr/campaignwise/(?|([^/]++)(*:1115)|dlr_export/([^/]++)(*:1143)))|no(?|tify/(?|edit/([^/]++)(*:1180)|update/([^/]++)(*:1204))|nmask_status/([^/]++)/([^/]++)(*:1244))|edit(?|_(?|campaign/([^/]++)(*:1282)|template/([^/]++)(*:1308)|user/([^/]++)(*:1330)|payment/([^/]++)(*:1355))|C(?|ustomer/([^/]++)(*:1385)|oneyance/([^/]++)(*:1411))|sales/([^/]++)(*:1435)|group/([^/]++)(*:1458))|u(?|pdate(?|_(?|campaign/([^/]++)(*:1501)|template/([^/]++)(*:1527)|sales/([^/]++)(*:1550)|user/([^/]++)(*:1572)|payment/([^/]++)(*:1597))|C(?|ustomer/([^/]++)(*:1627)|oneyance/([^/]++)(*:1653)))|ser(?|_doc/([^/]++)(*:1683)|rechargehistory/([^/]++)(*:1716)))|s(?|uccessdownload/([^/]++)/([^/]++)(*:1763)|tatus/([^/]++)/([^/]++)(*:1795))|re(?|se(?|nd_campaign/([^/]++)(*:1835)|t/([^/]++)/([^/]++)(*:1863))|work/([^/]++)(*:1886))|ces/([^/]++)/([^/]++)(*:1917)|a(?|pproval/([^/]++)(*:1946)|ddcontactingroup/([^/]++)(*:1980))|tr(?|ade_rework/([^/]++)(*:2014)|x_status/([^/]++)/([^/]++)(*:2049))|mask_status/([^/]++)/([^/]++)(*:2088)))|/reseller/(?|edit(?|_(?|campaign/([^/]++)(*:2140)|template/([^/]++)(*:2166)|user/([^/]++)(*:2188))|group/([^/]++)(*:2212))|update_(?|campaign/([^/]++)(*:2249)|template/([^/]++)(*:2275)|user/([^/]++)(*:2297))|d(?|elete(?|_(?|campaign/([^/]++)(*:2340)|template/([^/]++)(*:2366)|user/([^/]++)(*:2388))|group/([^/]++)(*:2412))|ownload_contacts/([^/]++)/([^/]++)(*:2456)|lr/campaignwise/(?|([^/]++)(*:2492)|dlr_export/([^/]++)(*:2520)))|view(?|template/([^/]++)(*:2555)|group/([^/]++)(*:2578)|user/([^/]++)(*:2600))|addcontactingroup/([^/]++)(*:2636)|status/([^/]++)/([^/]++)(*:2669))|/user/(?|edit(?|_(?|campaign/([^/]++)(*:2716)|template/([^/]++)(*:2742))|group/([^/]++)(*:2766))|update_(?|campaign/([^/]++)(*:2803)|template/([^/]++)(*:2829))|d(?|elete(?|_(?|campaign/([^/]++)(*:2872)|template/([^/]++)(*:2898))|group/([^/]++)(*:2922))|ownload_contacts/([^/]++)/([^/]++)(*:2966)|lr/campaignwise/(?|([^/]++)(*:3002)|dlr_export/([^/]++)(*:3030)))|resend_campaign/([^/]++)(*:3065)|view(?|group/([^/]++)(*:3095)|template/([^/]++)(*:3121))|addcontactingroup/([^/]++)(*:3157))|/sales/(?|edit(?|customer/([^/]++)(*:3201)|_payment/([^/]++)(*:3227))|update(?|customer/([^/]++)(*:3263)|_payment/([^/]++)(*:3289)))|/manager/(?|editcustomer/([^/]++)(*:3333)|updatecustomer/([^/]++)(*:3365)))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
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
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
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
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pOUowdZ7aUbwsIb7',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ge15TS0bg5y5PF0G',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IPhJCP8i1M9QeSV0',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ylXkiNsFZxnCdfb3',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XJzc4mbkxLvVyTOh',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hWJYdhhFqOjgZ4DH',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PS3lCGHY2d3SjQwi',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1xBWCqxHTwKn6n0',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
            '_route' => 'generated::6Ik6q9U4DDFAhRB8',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
            '_route' => 'generated::uZQ0zKudmw0oTgEA',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qr2HNsbqTHLL2psv',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oXlB7LGMOGpuRxn8',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qkHSfAbOEIBzKst8',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFHH0BZdKpCh7LUg',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LSFI9UJ3nIvZI62p',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vLucYvhNVhNNhzuV',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhVBuhS4nArd18zq',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
            '_route' => 'generated::nqqPFtWFw62gI4Yy',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rlWD2lBYyei2x2Dw',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L33QrxgGCyRadVIf',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
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
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'telescope',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
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
      610 => 
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
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lDbLqkN6AuByUitq',
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
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MoTxsmlx3JVdkv5h',
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
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FgKJAJz6mqG5rdI1',
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
      734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l1PyiZT6v8WK3GGM',
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
      755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PgEi9Pq7e1AHJQpA',
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
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mNICk2ykUscZG35D',
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
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FvqgTWu8wJPfMBtH',
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
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iM3t15OhaJSCPWEL',
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
      866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CHhkmd8EXgLBNPGy',
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
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJi8UCjlDy2DaElW',
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
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ht5jx2mvElLPbNPC',
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
      939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76pA3aBiBgIyb5jJ',
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
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::11bNY6IM9wZsaWiA',
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
      981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sVfgvsXmYbV0rzMo',
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
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dyNtGTGVyFjRXoO9',
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fmr7XH4hfiUkROGO',
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
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F2XhIKRTDsv9UYkZ',
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
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o0g7Mb48gUDyyR3w',
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
      1143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d7ZKtzbWq1lI1PFN',
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
      1180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VS8VebsG0KT78DUz',
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
      1204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r4NTsEKpPUWbm5EE',
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
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::85UHS2HXOXF0SXEq',
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
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1Gn0arZ91dFsdX7',
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
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LL2QQByPD19U2RSq',
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
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j3zJkuL4Euh8CTQh',
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
      1355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mfQcrzbXM2C9uLE6',
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
      1385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::koWSyoDS9CLdKltV',
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
      1411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oORMDaMEBHSiAWR3',
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
      1435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yMAaCNvZfgofnA7p',
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
      1458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cHnXD7J9gtWdy0qo',
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
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b1zHNHDkTwDCilV0',
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
      1527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jCXCzQl89insRLMa',
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
            '_route' => 'generated::CuPdZmdX3kxUemQh',
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
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y0hzqb121xnqvC9j',
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
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xS0eNBF6hN62TXrj',
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
      1627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::haoFsgk0NjQWqjDb',
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
      1653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ezd9vY0cfaoZwRFa',
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
      1683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j86fa6R1pjYQPFFV',
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
      1716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kf769ocvr5aDHNTu',
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
      1763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ittYOW4N0K4uOUSg',
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
      1795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I8eZVbKuyoomikO1',
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
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ES4H28r7aU2yJNRQ',
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
      1863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bGNFCwOzUtjOliZ5',
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
      1886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::trptXA26U4m5j1qx',
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
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::18zV2Fmipejo5qkP',
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
      1946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GWXEByEocVi4eZfb',
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
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NOWwVNUpqh4vOdK6',
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
      2014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AKEXU4KYnwYAVVTi',
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
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZr81XPw74Xnhg5h',
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
      2088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EevByglMnKwnr0LZ',
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
      2140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XlLtnkw3ZkJrubTD',
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
      2166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j8qOwvHIfFugLaW6',
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
      2188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::48Msg8vutGP80N58',
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
      2212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RvjQggFF1tpMl1cH',
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
      2249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::817P3h3jYx3g6v9Y',
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
      2275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mScV8Qi4CdZmdaOY',
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
      2297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IPmEMOGbnBrU9mwX',
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
      2340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Nbr3ThWFCCOLADC',
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
            '_route' => 'generated::z4NirLMeMP5vPoU3',
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
      2388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yaNq7Fvb0ecPGa7a',
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
      2412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::62F326bWr8NDxLbv',
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
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5YL1D7GDtOGrjMKX',
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
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::japjMCeYo9ROknXj',
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
      2520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JM35AgenOuKhOZac',
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
            '_route' => 'generated::b2r8QG6EjVG4GqOS',
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
      2578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ca5DnDSKKqyVvK4S',
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
      2600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JlegVQ5vWHjl0e9u',
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
      2636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cT6fCbmmV0Mymmmg',
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
      2669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dAafdfaOCyVh5qye',
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
      2716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnFWuQb37HK7ccxG',
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
      2742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R9mYJKAqGzYUEdjv',
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
      2766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTHFamf5viXemt0a',
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
      2803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q8rKRaS8wwcUW8tr',
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
      2829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m7c3js2gex8eNETd',
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
      2872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vKrYjvUfSx7h4gY1',
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
      2898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1DTLHWD39JfKu2me',
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
      2922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m5DyglGGfW0fDVEy',
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
      2966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rpQBUZ6EYh2XcVGv',
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
      3002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CpyTaThxZ0uP6WPz',
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
      3030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FpdKgApkHsgwxUje',
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
      3065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItRnTnsXGESDkgOe',
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
      3095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZaUgKIhnY96k7sOI',
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
      3121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MmmluGhWOmm1Bbc0',
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
      3157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cok9IEj6sBwj1HxS',
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
      3201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0pOXZPSfBn6WrXWK',
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
      3227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aPOTc1RlTCoPyLXu',
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
      3263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p6fu87RNN73QiGWG',
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
      3289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1zk8bd810SGKojO0',
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
      3333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8nSCwI8gG1OO3tW2',
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
      3365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3OfkVJ6ukmkB0KGZ',
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
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JaXrfJKceNGYcy7L' => 
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
        'as' => 'generated::JaXrfJKceNGYcy7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::znlveeTaRbrNeGQf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/mail',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::znlveeTaRbrNeGQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pOUowdZ7aUbwsIb7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::pOUowdZ7aUbwsIb7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ge15TS0bg5y5PF0G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/preview',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::ge15TS0bg5y5PF0G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IPhJCP8i1M9QeSV0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::IPhJCP8i1M9QeSV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WTQE1ySfkvIJi4nZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/exceptions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::WTQE1ySfkvIJi4nZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XJzc4mbkxLvVyTOh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::XJzc4mbkxLvVyTOh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hWJYdhhFqOjgZ4DH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::hWJYdhhFqOjgZ4DH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7U1w78w8IUxIJtsM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/dumps',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::7U1w78w8IUxIJtsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9wBXubO1gQsqfu7H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::9wBXubO1gQsqfu7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w1xBWCqxHTwKn6n0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/logs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::w1xBWCqxHTwKn6n0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8RyXnXjpArT4GdXY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/notifications',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::8RyXnXjpArT4GdXY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Ik6q9U4DDFAhRB8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/notifications/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::6Ik6q9U4DDFAhRB8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EbKRMmcs1SoOs5hP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/jobs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::EbKRMmcs1SoOs5hP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uZQ0zKudmw0oTgEA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/jobs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::uZQ0zKudmw0oTgEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9P9tXS3dBuepy8iq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/batches',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::9P9tXS3dBuepy8iq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qr2HNsbqTHLL2psv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/batches/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::Qr2HNsbqTHLL2psv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DJAYgfUponHxWykM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/events',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::DJAYgfUponHxWykM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PS3lCGHY2d3SjQwi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/events/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::PS3lCGHY2d3SjQwi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XsauLnG3XYF0wPh0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/gates',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::XsauLnG3XYF0wPh0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oXlB7LGMOGpuRxn8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/gates/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::oXlB7LGMOGpuRxn8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0KPzxfBa3ezeP4sJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::0KPzxfBa3ezeP4sJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qkHSfAbOEIBzKst8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/cache/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::qkHSfAbOEIBzKst8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7h9mNNGETrUOqAU8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/queries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::7h9mNNGETrUOqAU8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vLucYvhNVhNNhzuV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/queries/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::vLucYvhNVhNNhzuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NZwtzwmRi2rmawdc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/models',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::NZwtzwmRi2rmawdc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ylXkiNsFZxnCdfb3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/models/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::ylXkiNsFZxnCdfb3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wQdLTtEm4tf87C7d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::wQdLTtEm4tf87C7d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lhVBuhS4nArd18zq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::lhVBuhS4nArd18zq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OenNA7kOQwYBEplk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/views',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::OenNA7kOQwYBEplk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rlWD2lBYyei2x2Dw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/views/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::rlWD2lBYyei2x2Dw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0EUOhptz9x5wtf6T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/commands',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::0EUOhptz9x5wtf6T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFHH0BZdKpCh7LUg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/commands/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::rFHH0BZdKpCh7LUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6lOoX3AvkfcRthyu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/schedule',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::6lOoX3AvkfcRthyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L33QrxgGCyRadVIf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/schedule/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::L33QrxgGCyRadVIf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9uhGTPglyh4Udz5w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/redis',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::9uhGTPglyh4Udz5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nqqPFtWFw62gI4Yy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/redis/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::nqqPFtWFw62gI4Yy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H4ANapR5oiUg6rnY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/client-requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::H4ANapR5oiUg6rnY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LSFI9UJ3nIvZI62p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/client-requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::LSFI9UJ3nIvZI62p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTwByuRntCqIxVGO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::bTwByuRntCqIxVGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1Y8SqVQbqzBY5rL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::X1Y8SqVQbqzBY5rL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QoukoyB5xr8uFO3e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags/delete',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::QoukoyB5xr8uFO3e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b1d7VLUr2RjYrRhX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/toggle-recording',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::b1d7VLUr2RjYrRhX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NUvRITUIv7bSpSrY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'telescope/telescope-api/entries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::NUvRITUIv7bSpSrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'telescope',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A7J3O4Odm32n35w0' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006df0000000000000000";}";s:4:"hash";s:44:"wsxiOLmm5lHZZSujQb2JbZCtPVk35IKzMJPexavYUFQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::A7J3O4Odm32n35w0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4E9Q2kF9VhDVwwBQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/multi-text-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@multitextapi',
        'controller' => 'App\\Http\\Controllers\\ApiController@multitextapi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4E9Q2kF9VhDVwwBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YN9zwREVb9tiv7G1' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {return \\redirect(\'/login\');}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e20000000000000000";}";s:4:"hash";s:44:"cIjOpbw4drvtqeUDMsrKF4876pWOXZHE/J6kZ7J/ObE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YN9zwREVb9tiv7G1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eix0gOEtIX3mZ4u0' => 
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
        'as' => 'generated::eix0gOEtIX3mZ4u0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::H64Apn1rr5sbj7eh' => 
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
        'as' => 'generated::H64Apn1rr5sbj7eh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::qRCXn21ow1OGmrY8' => 
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
        'as' => 'generated::qRCXn21ow1OGmrY8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::sfXjr4yOTgKrhGeZ' => 
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
        'as' => 'generated::sfXjr4yOTgKrhGeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VWdIzdr0y8XTAIku' => 
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
        'as' => 'generated::VWdIzdr0y8XTAIku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lCKSq3Wk2JMYt6v4' => 
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
        'as' => 'generated::lCKSq3Wk2JMYt6v4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::wpQK7bEZ723USjqv' => 
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
        'as' => 'generated::wpQK7bEZ723USjqv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pKBCQDI9QlNw0SAi' => 
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
        'as' => 'generated::pKBCQDI9QlNw0SAi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4VG5OcKG1YXKJIod' => 
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
        'as' => 'generated::4VG5OcKG1YXKJIod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7sP0PBkqtIGEsMQC' => 
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
        'as' => 'generated::7sP0PBkqtIGEsMQC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PBnESXFQFxlzMjBg' => 
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
        'as' => 'generated::PBnESXFQFxlzMjBg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tY21XCLVbxIcFPi8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms-sending2',
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
        'as' => 'generated::tY21XCLVbxIcFPi8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S5XZOgpWn4RtP5Z7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms-sending3',
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
        'as' => 'generated::S5XZOgpWn4RtP5Z7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h5bEdje77PSwzLx4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sms-sending4',
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
        'as' => 'generated::h5bEdje77PSwzLx4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtqlHHESZS3B9gSG' => 
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
        'as' => 'generated::HtqlHHESZS3B9gSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sE0zmaXyj1zDm9bX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-sms-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getUserSMSsummary2',
        'controller' => 'App\\Http\\Controllers\\HomeController@getUserSMSsummary2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sE0zmaXyj1zDm9bX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gSJj3Cjlp2uWNOVH' => 
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
        'as' => 'generated::gSJj3Cjlp2uWNOVH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::py4TFrmQW0Bij66o' => 
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
        'as' => 'generated::py4TFrmQW0Bij66o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KSAiMKGrhI0slNLv' => 
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
        'as' => 'generated::KSAiMKGrhI0slNLv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87dtjmnuKmTYhDEW' => 
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
        'as' => 'generated::87dtjmnuKmTYhDEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QfE5y2cAm1uS4BeR' => 
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
        'as' => 'generated::QfE5y2cAm1uS4BeR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M4yUaLIzDK6AK02s' => 
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
        'as' => 'generated::M4yUaLIzDK6AK02s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSbZoYaGwKtYnH0d' => 
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
        'as' => 'generated::bSbZoYaGwKtYnH0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lXDnxSfkwaWo376I' => 
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
        'as' => 'generated::lXDnxSfkwaWo376I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lDbLqkN6AuByUitq' => 
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
        'as' => 'generated::lDbLqkN6AuByUitq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v44fcLVbBdJHxZQN' => 
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
        'as' => 'generated::v44fcLVbBdJHxZQN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6v1dy8bdxgexq15S' => 
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
        'as' => 'generated::6v1dy8bdxgexq15S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BxeoRt4lk8gSPISb' => 
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
        'as' => 'generated::BxeoRt4lk8gSPISb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zsABMeVfMEnuLp9i' => 
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
        'as' => 'generated::zsABMeVfMEnuLp9i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qFl8cbu2mVoaUGyg' => 
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
        'as' => 'generated::qFl8cbu2mVoaUGyg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wV88N6NHNA4I0qJA' => 
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
        'as' => 'generated::wV88N6NHNA4I0qJA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUJ5y7V2P2i7aUs8' => 
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
        'as' => 'generated::UUJ5y7V2P2i7aUs8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SOTW57UArBdI9yTd' => 
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
        'as' => 'generated::SOTW57UArBdI9yTd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nPDX66tDzLdLcSOY' => 
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
        'as' => 'generated::nPDX66tDzLdLcSOY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UDZZZFCkmTnJNioQ' => 
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
        'as' => 'generated::UDZZZFCkmTnJNioQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SO8asv8JOZmKPCHh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rankstel-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@RanksTelBalance',
        'controller' => 'App\\Http\\Controllers\\HomeController@RanksTelBalance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SO8asv8JOZmKPCHh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3YkQAfLnSgaJRCo7' => 
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
        'as' => 'generated::3YkQAfLnSgaJRCo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L29TiTH7Vw0ZvkDq' => 
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
        'as' => 'generated::L29TiTH7Vw0ZvkDq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::oMYuDCZ0KWxQtlNR' => 
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
        'as' => 'generated::oMYuDCZ0KWxQtlNR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xqizUOtupdhPNet' => 
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
        'as' => 'generated::5xqizUOtupdhPNet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RamifDpjHqQcX9Jx' => 
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
        'as' => 'generated::RamifDpjHqQcX9Jx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wx0k2BNuRR4XtUFK' => 
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
        'as' => 'generated::Wx0k2BNuRR4XtUFK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::73g1yApgah3RCm93' => 
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
        'as' => 'generated::73g1yApgah3RCm93',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MoTxsmlx3JVdkv5h' => 
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
        'as' => 'generated::MoTxsmlx3JVdkv5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CHhkmd8EXgLBNPGy' => 
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
        'as' => 'generated::CHhkmd8EXgLBNPGy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VS8VebsG0KT78DUz' => 
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
        'as' => 'generated::VS8VebsG0KT78DUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r4NTsEKpPUWbm5EE' => 
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
        'as' => 'generated::r4NTsEKpPUWbm5EE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dt0M0BwkJw925UIG' => 
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
        'as' => 'generated::dt0M0BwkJw925UIG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nq23KdYP2Y59kWOV' => 
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
        'as' => 'generated::Nq23KdYP2Y59kWOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F8hCxsKEYf2kW2t9' => 
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
        'as' => 'generated::F8hCxsKEYf2kW2t9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0DHC6YLFbfO8CkMx' => 
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
        'as' => 'generated::0DHC6YLFbfO8CkMx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PKDCXY8V9VQByb7O' => 
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
        'as' => 'generated::PKDCXY8V9VQByb7O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nF18XjJ5gZOY5g4B' => 
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
        'as' => 'generated::nF18XjJ5gZOY5g4B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SzaJIJJF3ugFUWQV' => 
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
        'as' => 'generated::SzaJIJJF3ugFUWQV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vEKI4TfGu2jwDLsw' => 
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
        'as' => 'generated::vEKI4TfGu2jwDLsw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w1Gn0arZ91dFsdX7' => 
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
        'as' => 'generated::w1Gn0arZ91dFsdX7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b1zHNHDkTwDCilV0' => 
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
        'as' => 'generated::b1zHNHDkTwDCilV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ht5jx2mvElLPbNPC' => 
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
        'as' => 'generated::Ht5jx2mvElLPbNPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fmr7XH4hfiUkROGO' => 
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
        'as' => 'generated::fmr7XH4hfiUkROGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ittYOW4N0K4uOUSg' => 
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
        'as' => 'generated::ittYOW4N0K4uOUSg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ES4H28r7aU2yJNRQ' => 
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
        'as' => 'generated::ES4H28r7aU2yJNRQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZrK7qOBLC3PS7Awk' => 
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
        'as' => 'generated::ZrK7qOBLC3PS7Awk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I6DbZnQNNbc8i118' => 
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
        'as' => 'generated::I6DbZnQNNbc8i118',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l1PyiZT6v8WK3GGM' => 
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
        'as' => 'generated::l1PyiZT6v8WK3GGM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LL2QQByPD19U2RSq' => 
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
        'as' => 'generated::LL2QQByPD19U2RSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jCXCzQl89insRLMa' => 
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
        'as' => 'generated::jCXCzQl89insRLMa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76pA3aBiBgIyb5jJ' => 
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
        'as' => 'generated::76pA3aBiBgIyb5jJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a5ON7qQNxjm1GpeI' => 
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
        'as' => 'generated::a5ON7qQNxjm1GpeI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P4JDE5IIIqcPnELz' => 
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
        'as' => 'generated::P4JDE5IIIqcPnELz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VkW9oYh1IFL9j0SP' => 
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
        'as' => 'generated::VkW9oYh1IFL9j0SP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UVnt23Lm1iNPzjs7' => 
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
        'as' => 'generated::UVnt23Lm1iNPzjs7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QoOgOBy4XD2AR3DG' => 
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
        'as' => 'generated::QoOgOBy4XD2AR3DG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::koWSyoDS9CLdKltV' => 
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
        'as' => 'generated::koWSyoDS9CLdKltV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::haoFsgk0NjQWqjDb' => 
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
        'as' => 'generated::haoFsgk0NjQWqjDb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oORMDaMEBHSiAWR3' => 
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
        'as' => 'generated::oORMDaMEBHSiAWR3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ezd9vY0cfaoZwRFa' => 
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
        'as' => 'generated::ezd9vY0cfaoZwRFa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UnI2gQDdc14nXjWy' => 
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
        'as' => 'generated::UnI2gQDdc14nXjWy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hn1n2WtQxDgJ4ASo' => 
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
        'as' => 'generated::Hn1n2WtQxDgJ4ASo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AolawbF8q6JN1r7x' => 
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
        'as' => 'generated::AolawbF8q6JN1r7x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oLcLmrIxx2aVYsQI' => 
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
        'as' => 'generated::oLcLmrIxx2aVYsQI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oY6BXitXOWASRGHD' => 
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
        'as' => 'generated::oY6BXitXOWASRGHD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rw9tJZ68iCXYZukA' => 
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
        'as' => 'generated::Rw9tJZ68iCXYZukA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L3KCsh1oX7ROi89i' => 
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
        'as' => 'generated::L3KCsh1oX7ROi89i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1nPkwYoySeQkajCa' => 
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
        'as' => 'generated::1nPkwYoySeQkajCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhsKVIntpYe0ih0j' => 
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
        'as' => 'generated::JhsKVIntpYe0ih0j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::18zV2Fmipejo5qkP' => 
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
        'as' => 'generated::18zV2Fmipejo5qkP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yMAaCNvZfgofnA7p' => 
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
        'as' => 'generated::yMAaCNvZfgofnA7p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CuPdZmdX3kxUemQh' => 
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
        'as' => 'generated::CuPdZmdX3kxUemQh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xPBML3vThZFEJX6' => 
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
        'as' => 'generated::9xPBML3vThZFEJX6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTqqipFQp6nNwdzw' => 
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
        'as' => 'generated::BTqqipFQp6nNwdzw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZaTFqkb6vLeU7hEw' => 
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
        'as' => 'generated::ZaTFqkb6vLeU7hEw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PgEi9Pq7e1AHJQpA' => 
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
        'as' => 'generated::PgEi9Pq7e1AHJQpA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j3zJkuL4Euh8CTQh' => 
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
        'as' => 'generated::j3zJkuL4Euh8CTQh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j86fa6R1pjYQPFFV' => 
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
        'as' => 'generated::j86fa6R1pjYQPFFV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y0hzqb121xnqvC9j' => 
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
        'as' => 'generated::Y0hzqb121xnqvC9j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::11bNY6IM9wZsaWiA' => 
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
        'as' => 'generated::11bNY6IM9wZsaWiA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I8eZVbKuyoomikO1' => 
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
        'as' => 'generated::I8eZVbKuyoomikO1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGNFCwOzUtjOliZ5' => 
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
        'as' => 'generated::bGNFCwOzUtjOliZ5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yizihwGSsR9Dch7Z' => 
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
        'as' => 'generated::yizihwGSsR9Dch7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AZmFZaWRwkQlSkIm' => 
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
        'as' => 'generated::AZmFZaWRwkQlSkIm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GWXEByEocVi4eZfb' => 
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
        'as' => 'generated::GWXEByEocVi4eZfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::trptXA26U4m5j1qx' => 
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
        'as' => 'generated::trptXA26U4m5j1qx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AKEXU4KYnwYAVVTi' => 
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
        'as' => 'generated::AKEXU4KYnwYAVVTi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jrJP35TmMhqttFU3' => 
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
        'as' => 'generated::jrJP35TmMhqttFU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XaEpC50dWgPHkdE5' => 
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
        'as' => 'generated::XaEpC50dWgPHkdE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mNICk2ykUscZG35D' => 
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
        'as' => 'generated::mNICk2ykUscZG35D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sVfgvsXmYbV0rzMo' => 
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
        'as' => 'generated::sVfgvsXmYbV0rzMo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EevByglMnKwnr0LZ' => 
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
        'as' => 'generated::EevByglMnKwnr0LZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ft7AQc3AetQ5ZRje' => 
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
        'as' => 'generated::Ft7AQc3AetQ5ZRje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klRHF5FOzk7UmgGi' => 
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
        'as' => 'generated::klRHF5FOzk7UmgGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FgKJAJz6mqG5rdI1' => 
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
        'as' => 'generated::FgKJAJz6mqG5rdI1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xJi8UCjlDy2DaElW' => 
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
        'as' => 'generated::xJi8UCjlDy2DaElW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::85UHS2HXOXF0SXEq' => 
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
        'as' => 'generated::85UHS2HXOXF0SXEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6lsjtutGhv2UyUJc' => 
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
        'as' => 'generated::6lsjtutGhv2UyUJc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JM1MWXrKM8euDprg' => 
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
        'as' => 'generated::JM1MWXrKM8euDprg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u8le3ILMIYdVlYyc' => 
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
        'as' => 'generated::u8le3ILMIYdVlYyc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FvqgTWu8wJPfMBtH' => 
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
        'as' => 'generated::FvqgTWu8wJPfMBtH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cHnXD7J9gtWdy0qo' => 
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
        'as' => 'generated::cHnXD7J9gtWdy0qo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dyNtGTGVyFjRXoO9' => 
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
        'as' => 'generated::dyNtGTGVyFjRXoO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WYA19RlrlPUc1CYw' => 
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
        'as' => 'generated::WYA19RlrlPUc1CYw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F2XhIKRTDsv9UYkZ' => 
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
        'as' => 'generated::F2XhIKRTDsv9UYkZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xT0kui2eAdifhYwa' => 
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
        'as' => 'generated::xT0kui2eAdifhYwa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NOWwVNUpqh4vOdK6' => 
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
        'as' => 'generated::NOWwVNUpqh4vOdK6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0jdRRVeS3cXRtvQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/operator_recharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@operator_recharge',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@operator_recharge',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::o0jdRRVeS3cXRtvQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1gE5NKIUQqEJV5UJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/save_operator_recharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@save_operator_recharge',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@save_operator_recharge',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1gE5NKIUQqEJV5UJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TqUbz7FQkWvVLNrk' => 
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
        'as' => 'generated::TqUbz7FQkWvVLNrk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vmkSfrbNuK3lXtzB' => 
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
        'as' => 'generated::vmkSfrbNuK3lXtzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5AVSqXdDfrpGO13' => 
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
        'as' => 'generated::J5AVSqXdDfrpGO13',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BeQFWqKrBvtmpp6g' => 
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
        'as' => 'generated::BeQFWqKrBvtmpp6g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZr81XPw74Xnhg5h' => 
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
        'as' => 'generated::OZr81XPw74Xnhg5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lzOCDQzbP4bokfa9' => 
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
        'as' => 'generated::lzOCDQzbP4bokfa9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8l2unh5bCfg6YOue' => 
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
        'as' => 'generated::8l2unh5bCfg6YOue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kf769ocvr5aDHNTu' => 
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
        'as' => 'generated::Kf769ocvr5aDHNTu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3kBB0MOSUfKUevdd' => 
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
        'as' => 'generated::3kBB0MOSUfKUevdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xh7STjnOJaUPeuEb' => 
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
        'as' => 'generated::Xh7STjnOJaUPeuEb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e9ZRiN4dwOhkjGIi' => 
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
        'as' => 'generated::e9ZRiN4dwOhkjGIi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::moSSIsgaT96sx5ZY' => 
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
        'as' => 'generated::moSSIsgaT96sx5ZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cNZkAv9AaYsetoOy' => 
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
        'as' => 'generated::cNZkAv9AaYsetoOy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lQ2X9Ie7NufCVSAD' => 
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
        'as' => 'generated::lQ2X9Ie7NufCVSAD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iefWbNeevomzGOqu' => 
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
        'as' => 'generated::iefWbNeevomzGOqu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xuvqEHgoDiX6DYQj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reseller_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@ResellerSMSReport',
        'controller' => 'App\\Http\\Controllers\\AdminController@ResellerSMSReport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xuvqEHgoDiX6DYQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oW3S38OzbDBwJQOf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/financial_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@FinancialReport',
        'controller' => 'App\\Http\\Controllers\\AdminController@FinancialReport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oW3S38OzbDBwJQOf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zSZqZfNECb8aQmlY' => 
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
        'as' => 'generated::zSZqZfNECb8aQmlY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kfefd3kl5aQlZfN2' => 
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
        'as' => 'generated::kfefd3kl5aQlZfN2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7xm4QwEDmi89iIi' => 
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
        'as' => 'generated::h7xm4QwEDmi89iIi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iM3t15OhaJSCPWEL' => 
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
        'as' => 'generated::iM3t15OhaJSCPWEL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5RVobsBH5eqIwNJb' => 
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
        'as' => 'generated::5RVobsBH5eqIwNJb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mfQcrzbXM2C9uLE6' => 
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
        'as' => 'generated::mfQcrzbXM2C9uLE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xS0eNBF6hN62TXrj' => 
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
        'as' => 'generated::xS0eNBF6hN62TXrj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::UkSkJzDlLgaJ4yUB' => 
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
        'as' => 'generated::UkSkJzDlLgaJ4yUB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7HdT5FgCEJpIV6QF' => 
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
        'as' => 'generated::7HdT5FgCEJpIV6QF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ehxiKqaqqwwWnzCi' => 
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
        'as' => 'generated::ehxiKqaqqwwWnzCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z186QQYKhL70C2MG' => 
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
        'as' => 'generated::z186QQYKhL70C2MG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5WR9abzQdvGa25kV' => 
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
        'as' => 'generated::5WR9abzQdvGa25kV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cu2Q8qPU8Q7iRejM' => 
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
        'as' => 'generated::cu2Q8qPU8Q7iRejM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdi5ORrRr8loof2R' => 
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
        'as' => 'generated::jdi5ORrRr8loof2R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fRGk0Ej2dNEKxZPo' => 
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
        'as' => 'generated::fRGk0Ej2dNEKxZPo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JXwADxd0A9Bh07d9' => 
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
        'as' => 'generated::JXwADxd0A9Bh07d9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNIStKMbaxPFH6H3' => 
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
        'as' => 'generated::uNIStKMbaxPFH6H3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SjGS8bp1TsrwRKfr' => 
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
        'as' => 'generated::SjGS8bp1TsrwRKfr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6XzbZrsANCQq4sLM' => 
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
        'as' => 'generated::6XzbZrsANCQq4sLM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XlLtnkw3ZkJrubTD' => 
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
        'as' => 'generated::XlLtnkw3ZkJrubTD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::817P3h3jYx3g6v9Y' => 
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
        'as' => 'generated::817P3h3jYx3g6v9Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Nbr3ThWFCCOLADC' => 
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
        'as' => 'generated::4Nbr3ThWFCCOLADC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vc7bOgZTvdr7kzaw' => 
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
        'as' => 'generated::Vc7bOgZTvdr7kzaw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MSNoxqu3n9wYnROv' => 
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
        'as' => 'generated::MSNoxqu3n9wYnROv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2r8QG6EjVG4GqOS' => 
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
        'as' => 'generated::b2r8QG6EjVG4GqOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j8qOwvHIfFugLaW6' => 
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
        'as' => 'generated::j8qOwvHIfFugLaW6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mScV8Qi4CdZmdaOY' => 
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
        'as' => 'generated::mScV8Qi4CdZmdaOY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z4NirLMeMP5vPoU3' => 
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
        'as' => 'generated::z4NirLMeMP5vPoU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ZyRrtWWGvOXuBhN' => 
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
        'as' => 'generated::1ZyRrtWWGvOXuBhN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tD4X5cqxIenD2jn2' => 
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
        'as' => 'generated::tD4X5cqxIenD2jn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ozChcaJ3gPERwAUP' => 
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
        'as' => 'generated::ozChcaJ3gPERwAUP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::elr9uvoQkiySiM84' => 
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
        'as' => 'generated::elr9uvoQkiySiM84',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yE2n8ZPOftwwmB8U' => 
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
        'as' => 'generated::yE2n8ZPOftwwmB8U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lKQMvhFT4l55T6mI' => 
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
        'as' => 'generated::lKQMvhFT4l55T6mI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0OyOxrMeJG5CfrH' => 
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
        'as' => 'generated::o0OyOxrMeJG5CfrH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gMBBfyUpjsZItVgl' => 
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
        'as' => 'generated::gMBBfyUpjsZItVgl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGLM71pwjcLdMOd3' => 
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
        'as' => 'generated::cGLM71pwjcLdMOd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lgQcZtJJz3SkeQnQ' => 
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
        'as' => 'generated::lgQcZtJJz3SkeQnQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1qSuQngPFgRfuCCS' => 
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
        'as' => 'generated::1qSuQngPFgRfuCCS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ca5DnDSKKqyVvK4S' => 
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
        'as' => 'generated::Ca5DnDSKKqyVvK4S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RvjQggFF1tpMl1cH' => 
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
        'as' => 'generated::RvjQggFF1tpMl1cH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::62F326bWr8NDxLbv' => 
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
        'as' => 'generated::62F326bWr8NDxLbv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWXpsVYIoiqbRsvq' => 
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
        'as' => 'generated::NWXpsVYIoiqbRsvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YL1D7GDtOGrjMKX' => 
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
        'as' => 'generated::5YL1D7GDtOGrjMKX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VBAZFLVVab3nSldq' => 
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
        'as' => 'generated::VBAZFLVVab3nSldq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cT6fCbmmV0Mymmmg' => 
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
        'as' => 'generated::cT6fCbmmV0Mymmmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8TaSVPCHwZhQJsO3' => 
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
        'as' => 'generated::8TaSVPCHwZhQJsO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uiHNJZKy9yJzVP5W' => 
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
        'as' => 'generated::uiHNJZKy9yJzVP5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z7QpBbTMvX5SFTpQ' => 
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
        'as' => 'generated::Z7QpBbTMvX5SFTpQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JlegVQ5vWHjl0e9u' => 
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
        'as' => 'generated::JlegVQ5vWHjl0e9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::48Msg8vutGP80N58' => 
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
        'as' => 'generated::48Msg8vutGP80N58',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IPmEMOGbnBrU9mwX' => 
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
        'as' => 'generated::IPmEMOGbnBrU9mwX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yaNq7Fvb0ecPGa7a' => 
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
        'as' => 'generated::yaNq7Fvb0ecPGa7a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAafdfaOCyVh5qye' => 
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
        'as' => 'generated::dAafdfaOCyVh5qye',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G3J8vjRryVv0EwR5' => 
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
        'as' => 'generated::G3J8vjRryVv0EwR5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wlyvNwYXjJ2EDlo1' => 
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
        'as' => 'generated::wlyvNwYXjJ2EDlo1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T9QbBeOy20bQiysv' => 
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
        'as' => 'generated::T9QbBeOy20bQiysv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o2pZA9THyFWUs6fQ' => 
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
        'as' => 'generated::o2pZA9THyFWUs6fQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4VE69BCxt045a0ya' => 
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
        'as' => 'generated::4VE69BCxt045a0ya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNgQlsY7uYu9quTm' => 
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
        'as' => 'generated::kNgQlsY7uYu9quTm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G6R3AjhAGkAt08SG' => 
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
        'as' => 'generated::G6R3AjhAGkAt08SG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VZQOD6umdPnlgVKi' => 
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
        'as' => 'generated::VZQOD6umdPnlgVKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z3VpCLoFDCwqQvCN' => 
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
        'as' => 'generated::z3VpCLoFDCwqQvCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::zMjq19NTNIJ2bQMK' => 
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
        'as' => 'generated::zMjq19NTNIJ2bQMK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6RXwZwPhN7wI4Pg' => 
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
        'as' => 'generated::U6RXwZwPhN7wI4Pg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MJ5XSAlhghjyfYkI' => 
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
        'as' => 'generated::MJ5XSAlhghjyfYkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ok9liCoStdw0XrfH' => 
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
        'as' => 'generated::Ok9liCoStdw0XrfH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5e95l8fuqoHsG4hd' => 
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
        'as' => 'generated::5e95l8fuqoHsG4hd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6A5Gv1zQXARmuD6M' => 
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
        'as' => 'generated::6A5Gv1zQXARmuD6M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjCm29vFqfldS9KW' => 
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
        'as' => 'generated::JjCm29vFqfldS9KW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hw9iVJfYoGfsMbLU' => 
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
        'as' => 'generated::hw9iVJfYoGfsMbLU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MnFWuQb37HK7ccxG' => 
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
        'as' => 'generated::MnFWuQb37HK7ccxG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q8rKRaS8wwcUW8tr' => 
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
        'as' => 'generated::q8rKRaS8wwcUW8tr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vKrYjvUfSx7h4gY1' => 
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
        'as' => 'generated::vKrYjvUfSx7h4gY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ItRnTnsXGESDkgOe' => 
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
        'as' => 'generated::ItRnTnsXGESDkgOe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LCCcCQp9sKEph2Ua' => 
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
        'as' => 'generated::LCCcCQp9sKEph2Ua',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WRVKYIDVBs0W4rkW' => 
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
        'as' => 'generated::WRVKYIDVBs0W4rkW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Rr3fBGjaTrPbNdN' => 
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
        'as' => 'generated::0Rr3fBGjaTrPbNdN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLIDoQmMlT9AgH6V' => 
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
        'as' => 'generated::mLIDoQmMlT9AgH6V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IFr637IQX95pMg7t' => 
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
        'as' => 'generated::IFr637IQX95pMg7t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x7c7r0CP6sPkcmQK' => 
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
        'as' => 'generated::x7c7r0CP6sPkcmQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JS5Irl4zciKADNEu' => 
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
        'as' => 'generated::JS5Irl4zciKADNEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1XtbadbBkAiTlsus' => 
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
        'as' => 'generated::1XtbadbBkAiTlsus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZaUgKIhnY96k7sOI' => 
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
        'as' => 'generated::ZaUgKIhnY96k7sOI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LTHFamf5viXemt0a' => 
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
        'as' => 'generated::LTHFamf5viXemt0a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m5DyglGGfW0fDVEy' => 
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
        'as' => 'generated::m5DyglGGfW0fDVEy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RLUNH2yIuVjsRvtH' => 
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
        'as' => 'generated::RLUNH2yIuVjsRvtH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rpQBUZ6EYh2XcVGv' => 
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
        'as' => 'generated::rpQBUZ6EYh2XcVGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WxYadYoos1h0Emju' => 
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
        'as' => 'generated::WxYadYoos1h0Emju',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cok9IEj6sBwj1HxS' => 
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
        'as' => 'generated::Cok9IEj6sBwj1HxS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AVrsDsiR8KdK7gbD' => 
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
        'as' => 'generated::AVrsDsiR8KdK7gbD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuubIrhrOimBk617' => 
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
        'as' => 'generated::yuubIrhrOimBk617',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yaOnZotUJXqhGT7X' => 
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
        'as' => 'generated::yaOnZotUJXqhGT7X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uObJMtUEbv9YEOCW' => 
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
        'as' => 'generated::uObJMtUEbv9YEOCW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1JxvebYKdWs1586' => 
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
        'as' => 'generated::i1JxvebYKdWs1586',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YG1YqPKODvhTqTNb' => 
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
        'as' => 'generated::YG1YqPKODvhTqTNb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MmmluGhWOmm1Bbc0' => 
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
        'as' => 'generated::MmmluGhWOmm1Bbc0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R9mYJKAqGzYUEdjv' => 
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
        'as' => 'generated::R9mYJKAqGzYUEdjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7c3js2gex8eNETd' => 
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
        'as' => 'generated::m7c3js2gex8eNETd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1DTLHWD39JfKu2me' => 
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
        'as' => 'generated::1DTLHWD39JfKu2me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oVAQZJJrOWJofGQ8' => 
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
        'as' => 'generated::oVAQZJJrOWJofGQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DaIdJhaqSxjkb8qz' => 
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
        'as' => 'generated::DaIdJhaqSxjkb8qz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rIp02vcj53UkAB6V' => 
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
        'as' => 'generated::rIp02vcj53UkAB6V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9CGbfUIpA50vKz3l' => 
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
        'as' => 'generated::9CGbfUIpA50vKz3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LBr7NKHzM96Uk8ls' => 
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
        'as' => 'generated::LBr7NKHzM96Uk8ls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9rilYYfbvA9aWaYa' => 
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
        'as' => 'generated::9rilYYfbvA9aWaYa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GTlP8B5WktjHBaJv' => 
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
        'as' => 'generated::GTlP8B5WktjHBaJv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::p78VafVY9zujqCAg' => 
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
        'as' => 'generated::p78VafVY9zujqCAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::03xgLrhtjOJqHBWh' => 
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
        'as' => 'generated::03xgLrhtjOJqHBWh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VjtPC65RpDd2QWdH' => 
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
        'as' => 'generated::VjtPC65RpDd2QWdH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ks9asIkrHnXmC8PW' => 
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
        'as' => 'generated::ks9asIkrHnXmC8PW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aCPOWbMZR7CPkO3U' => 
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
        'as' => 'generated::aCPOWbMZR7CPkO3U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::djesQ1t0TsAQBeKA' => 
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
        'as' => 'generated::djesQ1t0TsAQBeKA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p0gbJcxvu7jAE4e3' => 
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
        'as' => 'generated::p0gbJcxvu7jAE4e3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zJS2qw4xqJQDhinE' => 
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
        'as' => 'generated::zJS2qw4xqJQDhinE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::680TZYpUdFhKNeEX' => 
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
        'as' => 'generated::680TZYpUdFhKNeEX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1gSjVSBy1eQxdUq4' => 
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
        'as' => 'generated::1gSjVSBy1eQxdUq4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pnn4cQ7vJWqvnZBL' => 
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
        'as' => 'generated::Pnn4cQ7vJWqvnZBL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iWibGHUazkSMvaW8' => 
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
        'as' => 'generated::iWibGHUazkSMvaW8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cZndFxi0Uc8glCwu' => 
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
        'as' => 'generated::cZndFxi0Uc8glCwu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nyaUiqaKcT63WZ9X' => 
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
        'as' => 'generated::nyaUiqaKcT63WZ9X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0pOXZPSfBn6WrXWK' => 
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
        'as' => 'generated::0pOXZPSfBn6WrXWK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p6fu87RNN73QiGWG' => 
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
        'as' => 'generated::p6fu87RNN73QiGWG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qY80ZUh9ImWWYJHw' => 
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
        'as' => 'generated::qY80ZUh9ImWWYJHw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vSFtzIfvOcUfLIkH' => 
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
        'as' => 'generated::vSFtzIfvOcUfLIkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EvKADaXi97tswSjH' => 
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
        'as' => 'generated::EvKADaXi97tswSjH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oZ4EfWM5PzqPNKxW' => 
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
        'as' => 'generated::oZ4EfWM5PzqPNKxW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HqyTRzXG5fF0X12d' => 
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
        'as' => 'generated::HqyTRzXG5fF0X12d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::45nnoRlaOSza2SWy' => 
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
        'as' => 'generated::45nnoRlaOSza2SWy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y4DjDJ3BeffwEOaF' => 
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
        'as' => 'generated::y4DjDJ3BeffwEOaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dGuvXttbkfiat2Q7' => 
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
        'as' => 'generated::dGuvXttbkfiat2Q7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aPOTc1RlTCoPyLXu' => 
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
        'as' => 'generated::aPOTc1RlTCoPyLXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1zk8bd810SGKojO0' => 
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
        'as' => 'generated::1zk8bd810SGKojO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::5ykKTWTUuzPILxRh' => 
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
        'as' => 'generated::5ykKTWTUuzPILxRh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::maBwVu0WVZejYKnk' => 
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
        'as' => 'generated::maBwVu0WVZejYKnk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xxjIy7zPrDnwjj1Z' => 
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
        'as' => 'generated::xxjIy7zPrDnwjj1Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GVWEI7gwHw2FPY9D' => 
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
        'as' => 'generated::GVWEI7gwHw2FPY9D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zqx8K4ZyI5YBeEnG' => 
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
        'as' => 'generated::zqx8K4ZyI5YBeEnG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ecmp4BYI6zgz9yyG' => 
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
        'as' => 'generated::Ecmp4BYI6zgz9yyG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zFEA5gIMfNVxfudU' => 
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
        'as' => 'generated::zFEA5gIMfNVxfudU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uTYe9U6wd0SJCSK3' => 
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
        'as' => 'generated::uTYe9U6wd0SJCSK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SdpaEbxdSvrkn8NR' => 
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
        'as' => 'generated::SdpaEbxdSvrkn8NR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VXlmBC0R2dFRVHgQ' => 
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
        'as' => 'generated::VXlmBC0R2dFRVHgQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L7SLj9cSErERkn1n' => 
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
        'as' => 'generated::L7SLj9cSErERkn1n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1gCHaq5FwXqlJ3Tz' => 
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
        'as' => 'generated::1gCHaq5FwXqlJ3Tz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mEvX6hEHc1d3VJu2' => 
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
        'as' => 'generated::mEvX6hEHc1d3VJu2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcZ6sXiMQ6bfGWIJ' => 
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
        'as' => 'generated::mcZ6sXiMQ6bfGWIJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8nSCwI8gG1OO3tW2' => 
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
        'as' => 'generated::8nSCwI8gG1OO3tW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3OfkVJ6ukmkB0KGZ' => 
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
        'as' => 'generated::3OfkVJ6ukmkB0KGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DjUTIRJ0VgxkSvIp' => 
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
        'as' => 'generated::DjUTIRJ0VgxkSvIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuYsRhzSiNwkD2wo' => 
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
        'as' => 'generated::yuYsRhzSiNwkD2wo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0g7Mb48gUDyyR3w' => 
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
        'as' => 'generated::o0g7Mb48gUDyyR3w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d7ZKtzbWq1lI1PFN' => 
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
        'as' => 'generated::d7ZKtzbWq1lI1PFN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EIiw2Wor7qDFmPRD' => 
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
        'as' => 'generated::EIiw2Wor7qDFmPRD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTMtuq1bCcXtIBR0' => 
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
        'as' => 'generated::BTMtuq1bCcXtIBR0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VsUuqsa143iKuZM' => 
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
        'as' => 'generated::6VsUuqsa143iKuZM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pDcNVPRNOwP9ROoB' => 
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
        'as' => 'generated::pDcNVPRNOwP9ROoB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::japjMCeYo9ROknXj' => 
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
        'as' => 'generated::japjMCeYo9ROknXj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JM35AgenOuKhOZac' => 
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
        'as' => 'generated::JM35AgenOuKhOZac',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EQhyCnpO7cBOS4Ft' => 
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
        'as' => 'generated::EQhyCnpO7cBOS4Ft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X69gHsauPmoOGXcM' => 
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
        'as' => 'generated::X69gHsauPmoOGXcM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x1bbTHRTirqPU0JW' => 
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
        'as' => 'generated::x1bbTHRTirqPU0JW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OyokQJSqc8W9hUaj' => 
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
        'as' => 'generated::OyokQJSqc8W9hUaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CpyTaThxZ0uP6WPz' => 
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
        'as' => 'generated::CpyTaThxZ0uP6WPz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FpdKgApkHsgwxUje' => 
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
        'as' => 'generated::FpdKgApkHsgwxUje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0seUaaCyYMQETjKp' => 
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
        'as' => 'generated::0seUaaCyYMQETjKp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fm20YtLpneDTGRRw' => 
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
        'as' => 'generated::fm20YtLpneDTGRRw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W922OYHbzZ7VOIfc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:334:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:115:"function () {
    $exitCode = \\Artisan::call(\'cache:clear\');
    return \'<h1>Cache facade value cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007110000000000000000";}";s:4:"hash";s:44:"3ZLeMPqSRJeRnU3aPYs7eJQZtX273cvVUnaHgcYgT3U=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W922OYHbzZ7VOIfc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E6YgaSONKVMSaCje' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:329:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:110:"function () {
    $exitCode = \\Artisan::call(\'optimize\');
    return \'<h1>Reoptimized class loader</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008290000000000000000";}";s:4:"hash";s:44:"5ZfhGGKMVgkdUchwUGArr2g6qFqWCzyZeuw2gOHe+Qo=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E6YgaSONKVMSaCje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pEJJoAJyE8Oo7N2l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:321:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:102:"function () {
    $exitCode = \\Artisan::call(\'route:cache\');
    return \'<h1>Routes cached</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000082b0000000000000000";}";s:4:"hash";s:44:"M0IaBklqS9ex3ky/ZkCQ4x6ar2dLUsQz7V7FRlZ3uZg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pEJJoAJyE8Oo7N2l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZWzAuVVlQC1caEl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:327:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:108:"function () {
    $exitCode = \\Artisan::call(\'route:clear\');
    return \'<h1>Route cache cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000082d0000000000000000";}";s:4:"hash";s:44:"Kc7ztjaZ/30B5aPUAUE5E7ZX0wedIBBnXMX7GSnCg+o=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HZWzAuVVlQC1caEl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::outzokqGghJZRy8T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function () {
    $exitCode = \\Artisan::call(\'view:clear\');
    return \'<h1>View cache cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000082f0000000000000000";}";s:4:"hash";s:44:"s45u6Rb+NfpQlAHfGHy9eSnMIveBnF+Rvu9ZyKydBpg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::outzokqGghJZRy8T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nXqW4ZJdOl9qIvow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'config-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:329:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:110:"function () {
    $exitCode = \\Artisan::call(\'config:cache\');
    return \'<h1>Clear Config cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008310000000000000000";}";s:4:"hash";s:44:"+VC/A9el0fwRROVlKhHCN69Lb2KX4rjXhz7rJFYL3/s=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nXqW4ZJdOl9qIvow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
