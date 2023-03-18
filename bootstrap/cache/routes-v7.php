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
            '_route' => 'generated::m9TcvRxSIxAdvwn8',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qPywyf9k2kfJ7OLv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qBzOP6oCiUjAft1M',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ejkj2ds0MckkguEk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::m95xJH0T3T0Lb0I7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6tB58OVF7eGzp0Ql',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FBKWrRYRZdEH2l9d',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jGNJcQFCu175aNd9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5whumilRPcQ0Gqsj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nizem0w9lRcm0q1n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2HDAOYWvVzRcam45',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4Nk6E5ZnRi5PfRHf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::O7n4Ircns9OOZIhl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::svPJbefyP4Lhfyz5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kMQDs4Odg8kzeMaH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vF8Yy8H4lKZgrzlO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::R4IwW4CyQN7wrWnJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XPzvZFdJYLquC9ea',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BqkwLTC8op4x72ws',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rCBc9qpEpKIGVkoI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wlfNuEcvD2lCkDzm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LSwqJibz5guZ7eY1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ciczg4OXAS26xEkC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0ViarDjtzLNSi1yO',
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
            '_route' => 'generated::ht1TlWxeBsjqOar6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/postapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hq7SHxvt8RfHKWva',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::dEBrgk92ZJycSc9e',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ESuTTRKgxCi0lLCo',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fWLWgqAyxDTCjLSu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ONkxIJdJt2TUG1RS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iBlWG1fyhRwNcPxI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rBYDtfStR2RHIoVt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::l9QS1AbmP9zrb9Nb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V6EB6upHHeQFSWpi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HMcoHSFY2caIGi5t',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lsp2NaKa4EvXTY7F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sVPPTR1Us0sryCGf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lny3qPBD5pPDdL3Q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jnYQuracgXIV5jzI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api-sms-sending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LAABbFPCdqq81TPH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::JUQSa8kxpW4CfLVt',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NRbfS0HAoFcZehmY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::26gttD3i15fWW16o',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2ZiD7f8KKQAJgxwG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BehlHLUxd2pK1pJq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YeoP3sr9DD1jzvfh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yb1WMulf6MAJrZgW',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KdnLtaQBGL6syx1n',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zrKf4wozRatWuYkX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::M7iwLsPytUOmvAZf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BzACkKOkPc02Ofrl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yInWoidZSWPqKpQB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::R79CXWnI5njVkvK0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Sw2ghfpF71R6p2QA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cYpzxRRg169cqMix',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qnV4DAvpCfVOfArM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ml1hKqjae9JTm17t',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kJLrS2bNWOVjW6EZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8wwDibcXQOOvIysu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::e52oaNbPsCJNYvku',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Xgb2LLRu4vMYz5DR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YmY3qpH0Gw0ZDwzv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RbyrjVPrFANQscuZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Lpg2U7O6C0TBMElV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::59QVKeSZrUTNDTOz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::QhczmIrWgNZp9QBJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::p2UAkqQ4RpTyc3nX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::z4U9NGg229FXG9rV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4v11vFO6wPXb8W6u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ro66e9A4xa25C0n9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V0gdQbZg8uTk4JIp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P7vQrBPE5mQhNQc4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::j0bXRqzKFKE4Dsvn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5jh7v9snnnC9Dc4T',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IciCZQKIAlJS4Qvu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AkeUXTJKdEdY907c',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0dsx3BahdLtmePMh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vMQdI094PkURhAJN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YGLlQjv4m0xCIjfs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EtmMiPq6iM9Sc5kR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hVBOW89NY59hGf6f',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::w3W4zkezTYHVhWli',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qF52E05cVatoUqYD',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MdVqUKANCIZWF5zP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qI3w5OXYEwenywiw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IhOfn8pwrUFdpuWx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nW0cEmdro71pojk9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8XRto6hjSc7qgG40',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SVHgtbQDKYJUqk4G',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sO404tVRKoknVKK9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::n662oM5noEjnsRn9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h2iVpYntrhy4bedz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7yQ71r3NpXhvWDiK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::H6hzwjTtOvCQfcC8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WS5LKq4Xb4flORrI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mVWfF0QkBC4Macd0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1VSSI7KsGQFaZt8s',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9jKYdvG94H0E465U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JEFDpuWwIUkrVDI9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AIgnESSX0uZ9jHQk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RSSnPCi5TTZz84T2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hBicmz5iDMbUL4L5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pcJVesam80W8Nqed',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::WRhZ5iFC4xDgtBfd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3cMzbLqngseI5xLd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cRmmRveCGHuBPZTO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZFtnlN0E2cfrdqLL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3ACkghzEFhhwf9gR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::c6vP5ebtYMJKZRL7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WVGGfLAFENHXoaZq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/recharge_history_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OawTDVCyIPpKUN7u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::i25ORx937ywy8LGi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TkEdm1osuzBTkp0v',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mILs8SQ376pldL7J',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ekFWYQDn9NorWNjQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::WpXK4MdLwzJBp0St',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YDnalwf4Aha1iX4i',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::vzoIqfx3nIqIgVnm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JkyftF2KpbsEQ3RX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sms_transactions_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mjBcBU440USCCGPl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wzD8h7GgKV5NP2QY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aHR0awoSQqTqRnS8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_sms_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k2ZfxslBwzbIyabF',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DXAu8owbscNq1VhS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reseller_sms_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4L7zUvXZk7FC3fzX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HO138s5FZMh7mXOs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FlfSP2vAGEQA8loJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0PaelngNWQk0GHVM',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::R79VWSE2KazrdAZF',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AdrxJniIqsebpwl6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oOOLJ5VxG66pILej',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::M1dOtcW79NQnoAzL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HVdtjD4XIHTTA22t',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::i34Bh3PadRnLR1yj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oAhgeCqiWrJpzSrg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3lbbu2R440QcFlv9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::SjGcDejqMy70Xz3D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VJzOHB9qie4VszHp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3MVL66zElmUcmQDj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E06hklVz8wzudUJS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5YBtK3uDRRslAkcb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zbfoxr3f9jB6vmHy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dynamic_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LSXLIbZj2crpaPWs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dynamic_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OS5gV0iyyv4NxzrA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dynamic_campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F03NIQ2bDBKPMLfQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/store_dynamic_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XwBE14y5Lnda2weJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dynamicfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CYIbiX9HgaXnQ24F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dynamicsms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yfnmkGwCu4K3UCjH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
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
            '_route' => 'generated::ChPx0wFpYsENB4Nr',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hRlqmaYF3qTzJEKH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s3bnufwppqMetOWs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4kIXxdvYS3iA7uh2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0Ez9FwkqM2WrCaPH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/user_recharge_history_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2F25LPsgsa3wri5N',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::eHufdXFaWA4yeloS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ojg0lYBUwiMuq75R',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K0bvvFwxpZy7tvWH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/balance_history_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::16i3KOdkctUUYlg3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::EYxQ4r0hNcct0ndd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TVEu2lx3ql9FMc4n',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bSOkV2GW6WwgIR1g',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::m3sFMmWaXc73KPZ7',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::tIMc0G6k4GPmj4FQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::QZiIFBnR1xYhdLLc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CPanDFQMG8j75RdB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::b4i0W9eYMKRrS7rc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::35qLhF1YdUfbd1VE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8bPx3NzyYud6sZXo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sqR29w5cteFNdX9h',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2SxnJPUdAg5UZR4r',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::212pauQi1hALGBfW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::obO7aeDVSxGiZnka',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U7fEogUsXGDHvLsQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/My_smsReportExport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MABb3IRyAyJ99xNV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::MmFNbX8JNAYftah0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WIekp01ihjFx2DiD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/userReportExport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y3GlKxnU43uU7h2f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::sf6IvnjxOwKauPsN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::uU4lnSjjm0ZtIBqU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::L2f7lbEilPSoeGS6',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1hy88hsDbRcdYs61',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NyRRuaFqjsU9lyrq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MKZAKWoTtumyBO3u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::r0rjcGMrwyl2zPu8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1DP1Bjv4WmzGmEiO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IzK7Pt5XoyFc54dJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5qU0kAiuYdnwTkV8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LjA0BuX9WgAJpsxk',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aTSOOneCKGglPSPT',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::pBp1low62WRsZM9N',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4UqC7oWKngiN88Gy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::T5JjYLfHH3T4dnUh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nrMayYdTIfscTED7',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8T3aH0Pf9om8244S',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::BRS2bR4b1hBgymdZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UzHjrfJBss9Q9sii',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HffToNtqtXXvq26n',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cVHyuILf5oHk9nyn',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2ZTB2fjKw95Zppcr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bMwCAS50OJgagqYk',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bkkgAfab7pUrxcrk',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::5iqVIkXoMlKs765l',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hJk3FBVSsWIxFcj3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mgKpDPzk88Jz740e',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jR6Hu3gsXLyUrrrv',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ara1XSRYjzAv8jQe',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LrmlqXaM1kJbK6Jm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::RZ2GhFW5bLHFOne1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nh5vG0yrQvLFCm15',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::XovdqbC4KXmtJt42',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o8ul38tT3xs72TqO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fj8qOygthTKHxy8H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VOkCCqKhBTSqiLiI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qKeKZuF3hprahch1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::re7BhLLs1HJ9YEyD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::v2qSSPXl6cpPJnUq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XmE3doYrVmxmdDCA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1tiwdTlFdbcwZEDS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rcyB7a9pR9GduacU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::13SmG3ru8pVuvZyz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gTJCVEvZuuF5lU12',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4MvBxPSuDL91n2aM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::APf6YtiXtBe71B0w',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Tjp1CKCiX5k1qI6c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aEbTWHlX1hOIvHse',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q3FTarxeEKPIThZV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5BFdVMtGLaJg4qx3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kTPHSOF5vDL7f15J',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RD13aAw0tRPvzYOu',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HILajlLndqwI0hV4',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::LfsJOecDdNqYxCKw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::C7QPN9sTg3wceORx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LyfftOFqS0q08lQZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::viTF1fumfxY69ojM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kF5NOnzGfZ7cI1Bd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6fNyazoTlsak6YsX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sbwFXk4CDgaclSBV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8Sss19mXcTUcFOHS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CkBIJVYKgAnvj9ip',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oyxnExjk9710j4fq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ci5JDlJxYjr4a3Hb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mIdQzGxEmAnWbwhw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nAbzIw9PwUlCJ6tq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5i2Du8zeBuyVOLro',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7nQTU5f11MUEezie',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iLkcyjlYRG68ywNN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::49DoEo3iqLMa75X4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FijN0a3v5s2y8Ur3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HHE8hOBiTjFbrWUi',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::AxVTV5CWYzrjg4ya',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::SY2838IRCoDTAMy2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::THN3Arz7iUnBIFlw',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7SM4EK043hz2Um2z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/campaignlist_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tPBkP0yT2biog50Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
            '_route' => 'generated::sCIr15TBpPFmKv1E',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TDPEGco3SI4nLmG6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reseller/dlr/usercampaignlist_export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TciR8ErwYjNLe4JY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yrfwJ8Sh3YP9k4Hl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jQD8PB7a6xJ9v5o2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZIoUNsZ8MsLVnkwJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::k9N21uZX2XpZCmi8',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::dZR4nmsWePc5Cf4u',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kUzrkfCTKrauFFKh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::q4deLGBOwNV7SxDb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kDpWd00Mu1c4N0yp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::F16LwyPWhKMbLcVV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZgOzbj9MOe2l5CHn',
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
            '_route' => 'generated::J2zeOluNUL7AdbQI',
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
            '_route' => 'generated::kQZel4887heSKS48',
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
            '_route' => 'generated::tdoBHRoyLkq8CN0p',
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
            '_route' => 'generated::R7hNzOlNfkqYZbrv',
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
            '_route' => 'generated::bNEKTN0522oXrKCX',
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
            '_route' => 'generated::li4J9turpDh2sRhs',
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
            '_route' => 'generated::Gx9tsDGXpupR7f4b',
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
            '_route' => 'generated::DRW6kScXh3LVzLgz',
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
            '_route' => 'generated::SARRLq5eDTHs0trk',
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
            '_route' => 'generated::WNyFAgEt3LcFXWUs',
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
            '_route' => 'generated::d9U8A02VBqJp5aZO',
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
            '_route' => 'generated::hV56oSJfKunlAQ6j',
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
            '_route' => 'generated::FfIk37PdlT1Now7O',
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
            '_route' => 'generated::rfbtKOPYzmVO1qNY',
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
            '_route' => 'generated::QOPSYp3Ug1Y5Ohst',
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
            '_route' => 'generated::Zq0XwqK87y1sS4ax',
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
            '_route' => 'generated::5nw80wlxhiNKtheB',
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
            '_route' => 'generated::eM8c7zQPQbMYzaBP',
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
            '_route' => 'generated::JrzZyRicXaezoq0h',
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
            '_route' => 'generated::2mO4b7KBD7urBrOp',
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
            '_route' => 'generated::ftLExIkjLKncMDEs',
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
            '_route' => 'generated::FHupCewAMBjA8mbK',
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
            '_route' => 'generated::p50nmqCLeocWa0YD',
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
            '_route' => 'generated::H1dNvTzqUJZbXJjR',
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
            '_route' => 'generated::InRc8NiqXsE3kiLd',
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
            '_route' => 'generated::d0Gk6Fjn8TqIcnHW',
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
            '_route' => 'generated::BVry4A1SWuXcGILX',
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
            '_route' => 'generated::oD9zUeePBfYHFVFh',
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
            '_route' => 'generated::uSSZ1Xc5gCNrQIEe',
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
            '_route' => 'generated::ZBGgKA9pWj2SGo9d',
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
            '_route' => 'generated::Wj0OxcLgVk6XtBlt',
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
            '_route' => 'generated::DxlMQxt5Ab3MkeDi',
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
            '_route' => 'generated::vQpl5CnUHwPapdhp',
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
            '_route' => 'generated::det5Tb5jDI5WDEGS',
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
            '_route' => 'generated::ycfCHlP1dByNVxRQ',
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
            '_route' => 'generated::zU88xVPdc8xiFptC',
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
            '_route' => 'generated::EX9uWVzHzHpv3K4p',
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
            '_route' => 'generated::xZCaTYedVpLAhNYU',
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
            '_route' => 'generated::CV2bXpDC8OPcpY3l',
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
            '_route' => 'generated::IIyRXfVhu6ro4XGq',
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
            '_route' => 'generated::r8B6LRrcNpTgxF7A',
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
            '_route' => 'generated::Y6p3e4upe1lHMZEn',
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
            '_route' => 'generated::AtVdtnspam0Ooqq9',
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
            '_route' => 'generated::6j5nnDXyTlFEDiPf',
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
            '_route' => 'generated::wegVhSP6xoRmvG20',
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
            '_route' => 'generated::lbq70RWqfBUtWc2B',
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
            '_route' => 'generated::obdg8pbnm5DoQ7Qt',
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
            '_route' => 'generated::c69MnIPEy8DPexHp',
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
            '_route' => 'generated::h9RLoXeLnYrJrpGF',
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
            '_route' => 'generated::8iKPU5q2vFqwmNRu',
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
            '_route' => 'generated::TvMBhoodVyawc91O',
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
            '_route' => 'generated::0z8rWEADOyUyGmom',
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
            '_route' => 'generated::OUz2lk2xTTDJg6eX',
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
            '_route' => 'generated::bGtGKaT7a0l6JC7z',
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
            '_route' => 'generated::lhSbWLvOQ8tuSyrD',
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
            '_route' => 'generated::bwn5bKDLir56bZlW',
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
            '_route' => 'generated::Q76IZy7LsmG8jwxc',
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
            '_route' => 'generated::s7b0mLULC0zXei8F',
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
            '_route' => 'generated::5miBDlqkCwHkOpeq',
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
            '_route' => 'generated::L8AnjLvQSOBEKrix',
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
            '_route' => 'generated::OeFEK4h25EjXyzAi',
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
            '_route' => 'generated::FrlTBXFqYc5NaZ91',
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
            '_route' => 'generated::sfi9yejLHdJ3OfBm',
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
            '_route' => 'generated::RicRzlbdYf3sRTjl',
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
            '_route' => 'generated::wWlnUpnm7qDf5Gg2',
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
            '_route' => 'generated::UytFrCvZcJ3EGz7N',
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
            '_route' => 'generated::FB5pVnbxFAMbIYXm',
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
            '_route' => 'generated::2HuAIHq3RvbzzQf4',
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
            '_route' => 'generated::K8jf2JtxQY5QFWEu',
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
            '_route' => 'generated::MEcVSikSeOQ8QoLJ',
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
            '_route' => 'generated::rhWtKY4V6Xp0Tug3',
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
            '_route' => 'generated::cw5LXBweYFE2OjpS',
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
            '_route' => 'generated::svEkc8eP3G5JxPGj',
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
            '_route' => 'generated::N0uZHwb1dhINSpzz',
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
            '_route' => 'generated::20kzOlllrSA3Q8hS',
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
            '_route' => 'generated::00nOW2grHA0BG0JU',
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
            '_route' => 'generated::i1UM1srSNj56lgs9',
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
            '_route' => 'generated::2DhkYsfUGjEjQt6U',
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
            '_route' => 'generated::eYbDQW8T8gHQvOeP',
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
            '_route' => 'generated::W3G4FKrFTddk7luC',
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
            '_route' => 'generated::7QL8vNSrt8jYv8jQ',
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
            '_route' => 'generated::1lPeEztqYLHSURaQ',
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
            '_route' => 'generated::21Wj5emUfdTKpRLj',
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
            '_route' => 'generated::oiyQQI6N5LXeDyvy',
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
            '_route' => 'generated::yh5KuoJb8nCM1uQE',
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
            '_route' => 'generated::HjKVnUYax3JjE3Aq',
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
            '_route' => 'generated::84MSQuprY5dIkxig',
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
            '_route' => 'generated::gdCJzaUA93ZE4QQS',
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
            '_route' => 'generated::gmcwh6J09BAaSISi',
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
            '_route' => 'generated::BPinTk3BbK9ZI68N',
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
            '_route' => 'generated::wIPGZ0gziSixYWC7',
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
            '_route' => 'generated::bIKvqH251bDpelsW',
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
            '_route' => 'generated::jPRnck3UgU4A3mkl',
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
            '_route' => 'generated::I0TaoAQoS7cSbF0Y',
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
            '_route' => 'generated::G9fGKh5PuFu0VAhv',
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
            '_route' => 'generated::6QUbrBTiVf0XxZlH',
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
            '_route' => 'generated::Ef89kPn3dBFG7l5C',
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
            '_route' => 'generated::ZLlIUr8immV6KB8J',
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
            '_route' => 'generated::c5wSBYJJld0LcQUg',
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
            '_route' => 'generated::xWYqEHjzUOJD4HUt',
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
            '_route' => 'generated::S2deZ7g5mTlS5EN1',
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
            '_route' => 'generated::HyHNMAwnB2vbCItS',
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
            '_route' => 'generated::bZBzNWMRBVOBnOLg',
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
            '_route' => 'generated::wnkjxeD6Jp54rwn4',
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
            '_route' => 'generated::FPETytdIlVvixNRk',
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
            '_route' => 'generated::3dmJA7pjpvBIcOPc',
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
            '_route' => 'generated::YD4njk6uj5EAjzUw',
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
            '_route' => 'generated::yXvTQsTqUmZfk1Hp',
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
            '_route' => 'generated::6pWkQ36FiHMqJP9D',
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
    'generated::m9TcvRxSIxAdvwn8' => 
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
        'as' => 'generated::m9TcvRxSIxAdvwn8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qPywyf9k2kfJ7OLv' => 
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
        'as' => 'generated::qPywyf9k2kfJ7OLv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZgOzbj9MOe2l5CHn' => 
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
        'as' => 'generated::ZgOzbj9MOe2l5CHn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J2zeOluNUL7AdbQI' => 
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
        'as' => 'generated::J2zeOluNUL7AdbQI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQZel4887heSKS48' => 
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
        'as' => 'generated::kQZel4887heSKS48',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qBzOP6oCiUjAft1M' => 
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
        'as' => 'generated::qBzOP6oCiUjAft1M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R7hNzOlNfkqYZbrv' => 
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
        'as' => 'generated::R7hNzOlNfkqYZbrv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bNEKTN0522oXrKCX' => 
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
        'as' => 'generated::bNEKTN0522oXrKCX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ejkj2ds0MckkguEk' => 
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
        'as' => 'generated::Ejkj2ds0MckkguEk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m95xJH0T3T0Lb0I7' => 
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
        'as' => 'generated::m95xJH0T3T0Lb0I7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gx9tsDGXpupR7f4b' => 
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
        'as' => 'generated::Gx9tsDGXpupR7f4b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6tB58OVF7eGzp0Ql' => 
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
        'as' => 'generated::6tB58OVF7eGzp0Ql',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DRW6kScXh3LVzLgz' => 
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
        'as' => 'generated::DRW6kScXh3LVzLgz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FBKWrRYRZdEH2l9d' => 
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
        'as' => 'generated::FBKWrRYRZdEH2l9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SARRLq5eDTHs0trk' => 
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
        'as' => 'generated::SARRLq5eDTHs0trk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jGNJcQFCu175aNd9' => 
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
        'as' => 'generated::jGNJcQFCu175aNd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WNyFAgEt3LcFXWUs' => 
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
        'as' => 'generated::WNyFAgEt3LcFXWUs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5whumilRPcQ0Gqsj' => 
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
        'as' => 'generated::5whumilRPcQ0Gqsj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::li4J9turpDh2sRhs' => 
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
        'as' => 'generated::li4J9turpDh2sRhs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nizem0w9lRcm0q1n' => 
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
        'as' => 'generated::nizem0w9lRcm0q1n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d9U8A02VBqJp5aZO' => 
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
        'as' => 'generated::d9U8A02VBqJp5aZO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HDAOYWvVzRcam45' => 
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
        'as' => 'generated::2HDAOYWvVzRcam45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hV56oSJfKunlAQ6j' => 
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
        'as' => 'generated::hV56oSJfKunlAQ6j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Nk6E5ZnRi5PfRHf' => 
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
        'as' => 'generated::4Nk6E5ZnRi5PfRHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QOPSYp3Ug1Y5Ohst' => 
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
        'as' => 'generated::QOPSYp3Ug1Y5Ohst',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O7n4Ircns9OOZIhl' => 
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
        'as' => 'generated::O7n4Ircns9OOZIhl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tdoBHRoyLkq8CN0p' => 
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
        'as' => 'generated::tdoBHRoyLkq8CN0p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::svPJbefyP4Lhfyz5' => 
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
        'as' => 'generated::svPJbefyP4Lhfyz5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zq0XwqK87y1sS4ax' => 
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
        'as' => 'generated::Zq0XwqK87y1sS4ax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kMQDs4Odg8kzeMaH' => 
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
        'as' => 'generated::kMQDs4Odg8kzeMaH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eM8c7zQPQbMYzaBP' => 
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
        'as' => 'generated::eM8c7zQPQbMYzaBP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vF8Yy8H4lKZgrzlO' => 
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
        'as' => 'generated::vF8Yy8H4lKZgrzlO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FfIk37PdlT1Now7O' => 
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
        'as' => 'generated::FfIk37PdlT1Now7O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R4IwW4CyQN7wrWnJ' => 
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
        'as' => 'generated::R4IwW4CyQN7wrWnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JrzZyRicXaezoq0h' => 
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
        'as' => 'generated::JrzZyRicXaezoq0h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XPzvZFdJYLquC9ea' => 
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
        'as' => 'generated::XPzvZFdJYLquC9ea',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5nw80wlxhiNKtheB' => 
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
        'as' => 'generated::5nw80wlxhiNKtheB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BqkwLTC8op4x72ws' => 
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
        'as' => 'generated::BqkwLTC8op4x72ws',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rfbtKOPYzmVO1qNY' => 
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
        'as' => 'generated::rfbtKOPYzmVO1qNY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rCBc9qpEpKIGVkoI' => 
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
        'as' => 'generated::rCBc9qpEpKIGVkoI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wlfNuEcvD2lCkDzm' => 
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
        'as' => 'generated::wlfNuEcvD2lCkDzm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LSwqJibz5guZ7eY1' => 
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
        'as' => 'generated::LSwqJibz5guZ7eY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ciczg4OXAS26xEkC' => 
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
        'as' => 'generated::Ciczg4OXAS26xEkC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ViarDjtzLNSi1yO' => 
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
        'as' => 'generated::0ViarDjtzLNSi1yO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ht1TlWxeBsjqOar6' => 
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
        'as' => 'generated::ht1TlWxeBsjqOar6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hq7SHxvt8RfHKWva' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/postapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@api',
        'controller' => 'App\\Http\\Controllers\\ApiController@api',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hq7SHxvt8RfHKWva',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dEBrgk92ZJycSc9e' => 
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
        'as' => 'generated::dEBrgk92ZJycSc9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ESuTTRKgxCi0lLCo' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {return \\redirect(\'/login\');}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e30000000000000000";}";s:4:"hash";s:44:"y25hBpW0XtwOUQnFaj/X58WtIbsiMpkQnFoAiaeAJ1I=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ESuTTRKgxCi0lLCo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fWLWgqAyxDTCjLSu' => 
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
        'as' => 'generated::fWLWgqAyxDTCjLSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ONkxIJdJt2TUG1RS' => 
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
        'as' => 'generated::ONkxIJdJt2TUG1RS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::rBYDtfStR2RHIoVt' => 
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
        'as' => 'generated::rBYDtfStR2RHIoVt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::l9QS1AbmP9zrb9Nb' => 
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
        'as' => 'generated::l9QS1AbmP9zrb9Nb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iBlWG1fyhRwNcPxI' => 
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
        'as' => 'generated::iBlWG1fyhRwNcPxI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V6EB6upHHeQFSWpi' => 
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
        'as' => 'generated::V6EB6upHHeQFSWpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::HMcoHSFY2caIGi5t' => 
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
        'as' => 'generated::HMcoHSFY2caIGi5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lsp2NaKa4EvXTY7F' => 
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
        'as' => 'generated::Lsp2NaKa4EvXTY7F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sVPPTR1Us0sryCGf' => 
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
        'as' => 'generated::sVPPTR1Us0sryCGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lny3qPBD5pPDdL3Q' => 
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
        'as' => 'generated::lny3qPBD5pPDdL3Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jnYQuracgXIV5jzI' => 
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
        'as' => 'generated::jnYQuracgXIV5jzI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LAABbFPCdqq81TPH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api-sms-sending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@apismsSending',
        'controller' => 'App\\Http\\Controllers\\HomeController@apismsSending',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LAABbFPCdqq81TPH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JUQSa8kxpW4CfLVt' => 
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
        'as' => 'generated::JUQSa8kxpW4CfLVt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NRbfS0HAoFcZehmY' => 
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
        'as' => 'generated::NRbfS0HAoFcZehmY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::26gttD3i15fWW16o' => 
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
        'as' => 'generated::26gttD3i15fWW16o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ZiD7f8KKQAJgxwG' => 
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
        'as' => 'generated::2ZiD7f8KKQAJgxwG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BehlHLUxd2pK1pJq' => 
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
        'as' => 'generated::BehlHLUxd2pK1pJq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YeoP3sr9DD1jzvfh' => 
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
        'as' => 'generated::YeoP3sr9DD1jzvfh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yb1WMulf6MAJrZgW' => 
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
        'as' => 'generated::yb1WMulf6MAJrZgW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KdnLtaQBGL6syx1n' => 
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
        'as' => 'generated::KdnLtaQBGL6syx1n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zrKf4wozRatWuYkX' => 
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
        'as' => 'generated::zrKf4wozRatWuYkX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2mO4b7KBD7urBrOp' => 
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
        'as' => 'generated::2mO4b7KBD7urBrOp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M7iwLsPytUOmvAZf' => 
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
        'as' => 'generated::M7iwLsPytUOmvAZf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BzACkKOkPc02Ofrl' => 
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
        'as' => 'generated::BzACkKOkPc02Ofrl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yInWoidZSWPqKpQB' => 
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
        'as' => 'generated::yInWoidZSWPqKpQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R79CXWnI5njVkvK0' => 
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
        'as' => 'generated::R79CXWnI5njVkvK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sw2ghfpF71R6p2QA' => 
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
        'as' => 'generated::Sw2ghfpF71R6p2QA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cYpzxRRg169cqMix' => 
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
        'as' => 'generated::cYpzxRRg169cqMix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qnV4DAvpCfVOfArM' => 
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
        'as' => 'generated::qnV4DAvpCfVOfArM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ml1hKqjae9JTm17t' => 
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
        'as' => 'generated::ml1hKqjae9JTm17t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kJLrS2bNWOVjW6EZ' => 
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
        'as' => 'generated::kJLrS2bNWOVjW6EZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8wwDibcXQOOvIysu' => 
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
        'as' => 'generated::8wwDibcXQOOvIysu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e52oaNbPsCJNYvku' => 
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
        'as' => 'generated::e52oaNbPsCJNYvku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xgb2LLRu4vMYz5DR' => 
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
        'as' => 'generated::Xgb2LLRu4vMYz5DR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YmY3qpH0Gw0ZDwzv' => 
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
        'as' => 'generated::YmY3qpH0Gw0ZDwzv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::RbyrjVPrFANQscuZ' => 
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
        'as' => 'generated::RbyrjVPrFANQscuZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lpg2U7O6C0TBMElV' => 
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
        'as' => 'generated::Lpg2U7O6C0TBMElV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::59QVKeSZrUTNDTOz' => 
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
        'as' => 'generated::59QVKeSZrUTNDTOz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QhczmIrWgNZp9QBJ' => 
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
        'as' => 'generated::QhczmIrWgNZp9QBJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p2UAkqQ4RpTyc3nX' => 
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
        'as' => 'generated::p2UAkqQ4RpTyc3nX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ftLExIkjLKncMDEs' => 
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
        'as' => 'generated::ftLExIkjLKncMDEs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oD9zUeePBfYHFVFh' => 
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
        'as' => 'generated::oD9zUeePBfYHFVFh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CV2bXpDC8OPcpY3l' => 
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
        'as' => 'generated::CV2bXpDC8OPcpY3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IIyRXfVhu6ro4XGq' => 
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
        'as' => 'generated::IIyRXfVhu6ro4XGq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z4U9NGg229FXG9rV' => 
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
        'as' => 'generated::z4U9NGg229FXG9rV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4v11vFO6wPXb8W6u' => 
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
        'as' => 'generated::4v11vFO6wPXb8W6u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ro66e9A4xa25C0n9' => 
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
        'as' => 'generated::ro66e9A4xa25C0n9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V0gdQbZg8uTk4JIp' => 
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
        'as' => 'generated::V0gdQbZg8uTk4JIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P7vQrBPE5mQhNQc4' => 
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
        'as' => 'generated::P7vQrBPE5mQhNQc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j0bXRqzKFKE4Dsvn' => 
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
        'as' => 'generated::j0bXRqzKFKE4Dsvn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5jh7v9snnnC9Dc4T' => 
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
        'as' => 'generated::5jh7v9snnnC9Dc4T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IciCZQKIAlJS4Qvu' => 
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
        'as' => 'generated::IciCZQKIAlJS4Qvu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y6p3e4upe1lHMZEn' => 
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
        'as' => 'generated::Y6p3e4upe1lHMZEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8iKPU5q2vFqwmNRu' => 
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
        'as' => 'generated::8iKPU5q2vFqwmNRu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZBGgKA9pWj2SGo9d' => 
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
        'as' => 'generated::ZBGgKA9pWj2SGo9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycfCHlP1dByNVxRQ' => 
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
        'as' => 'generated::ycfCHlP1dByNVxRQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5miBDlqkCwHkOpeq' => 
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
        'as' => 'generated::5miBDlqkCwHkOpeq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OeFEK4h25EjXyzAi' => 
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
        'as' => 'generated::OeFEK4h25EjXyzAi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AkeUXTJKdEdY907c' => 
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
        'as' => 'generated::AkeUXTJKdEdY907c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0dsx3BahdLtmePMh' => 
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
        'as' => 'generated::0dsx3BahdLtmePMh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p50nmqCLeocWa0YD' => 
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
        'as' => 'generated::p50nmqCLeocWa0YD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AtVdtnspam0Ooqq9' => 
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
        'as' => 'generated::AtVdtnspam0Ooqq9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvMBhoodVyawc91O' => 
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
        'as' => 'generated::TvMBhoodVyawc91O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wj0OxcLgVk6XtBlt' => 
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
        'as' => 'generated::Wj0OxcLgVk6XtBlt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vMQdI094PkURhAJN' => 
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
        'as' => 'generated::vMQdI094PkURhAJN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YGLlQjv4m0xCIjfs' => 
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
        'as' => 'generated::YGLlQjv4m0xCIjfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EtmMiPq6iM9Sc5kR' => 
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
        'as' => 'generated::EtmMiPq6iM9Sc5kR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hVBOW89NY59hGf6f' => 
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
        'as' => 'generated::hVBOW89NY59hGf6f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w3W4zkezTYHVhWli' => 
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
        'as' => 'generated::w3W4zkezTYHVhWli',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lbq70RWqfBUtWc2B' => 
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
        'as' => 'generated::lbq70RWqfBUtWc2B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lhSbWLvOQ8tuSyrD' => 
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
        'as' => 'generated::lhSbWLvOQ8tuSyrD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::obdg8pbnm5DoQ7Qt' => 
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
        'as' => 'generated::obdg8pbnm5DoQ7Qt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bwn5bKDLir56bZlW' => 
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
        'as' => 'generated::bwn5bKDLir56bZlW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qF52E05cVatoUqYD' => 
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
        'as' => 'generated::qF52E05cVatoUqYD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MdVqUKANCIZWF5zP' => 
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
        'as' => 'generated::MdVqUKANCIZWF5zP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qI3w5OXYEwenywiw' => 
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
        'as' => 'generated::qI3w5OXYEwenywiw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IhOfn8pwrUFdpuWx' => 
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
        'as' => 'generated::IhOfn8pwrUFdpuWx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nW0cEmdro71pojk9' => 
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
        'as' => 'generated::nW0cEmdro71pojk9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8XRto6hjSc7qgG40' => 
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
        'as' => 'generated::8XRto6hjSc7qgG40',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SVHgtbQDKYJUqk4G' => 
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
        'as' => 'generated::SVHgtbQDKYJUqk4G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sO404tVRKoknVKK9' => 
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
        'as' => 'generated::sO404tVRKoknVKK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n662oM5noEjnsRn9' => 
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
        'as' => 'generated::n662oM5noEjnsRn9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RicRzlbdYf3sRTjl' => 
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
        'as' => 'generated::RicRzlbdYf3sRTjl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c69MnIPEy8DPexHp' => 
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
        'as' => 'generated::c69MnIPEy8DPexHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0z8rWEADOyUyGmom' => 
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
        'as' => 'generated::0z8rWEADOyUyGmom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h2iVpYntrhy4bedz' => 
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
        'as' => 'generated::h2iVpYntrhy4bedz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7yQ71r3NpXhvWDiK' => 
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
        'as' => 'generated::7yQ71r3NpXhvWDiK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H6hzwjTtOvCQfcC8' => 
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
        'as' => 'generated::H6hzwjTtOvCQfcC8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H1dNvTzqUJZbXJjR' => 
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
        'as' => 'generated::H1dNvTzqUJZbXJjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6j5nnDXyTlFEDiPf' => 
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
        'as' => 'generated::6j5nnDXyTlFEDiPf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q76IZy7LsmG8jwxc' => 
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
        'as' => 'generated::Q76IZy7LsmG8jwxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OUz2lk2xTTDJg6eX' => 
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
        'as' => 'generated::OUz2lk2xTTDJg6eX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DxlMQxt5Ab3MkeDi' => 
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
        'as' => 'generated::DxlMQxt5Ab3MkeDi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L8AnjLvQSOBEKrix' => 
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
        'as' => 'generated::L8AnjLvQSOBEKrix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FrlTBXFqYc5NaZ91' => 
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
        'as' => 'generated::FrlTBXFqYc5NaZ91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WS5LKq4Xb4flORrI' => 
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
        'as' => 'generated::WS5LKq4Xb4flORrI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mVWfF0QkBC4Macd0' => 
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
        'as' => 'generated::mVWfF0QkBC4Macd0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWlnUpnm7qDf5Gg2' => 
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
        'as' => 'generated::wWlnUpnm7qDf5Gg2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sfi9yejLHdJ3OfBm' => 
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
        'as' => 'generated::sfi9yejLHdJ3OfBm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FB5pVnbxFAMbIYXm' => 
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
        'as' => 'generated::FB5pVnbxFAMbIYXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1VSSI7KsGQFaZt8s' => 
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
        'as' => 'generated::1VSSI7KsGQFaZt8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9jKYdvG94H0E465U' => 
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
        'as' => 'generated::9jKYdvG94H0E465U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::InRc8NiqXsE3kiLd' => 
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
        'as' => 'generated::InRc8NiqXsE3kiLd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vQpl5CnUHwPapdhp' => 
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
        'as' => 'generated::vQpl5CnUHwPapdhp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8jf2JtxQY5QFWEu' => 
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
        'as' => 'generated::K8jf2JtxQY5QFWEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JEFDpuWwIUkrVDI9' => 
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
        'as' => 'generated::JEFDpuWwIUkrVDI9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AIgnESSX0uZ9jHQk' => 
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
        'as' => 'generated::AIgnESSX0uZ9jHQk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FHupCewAMBjA8mbK' => 
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
        'as' => 'generated::FHupCewAMBjA8mbK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uSSZ1Xc5gCNrQIEe' => 
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
        'as' => 'generated::uSSZ1Xc5gCNrQIEe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r8B6LRrcNpTgxF7A' => 
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
        'as' => 'generated::r8B6LRrcNpTgxF7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSSnPCi5TTZz84T2' => 
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
        'as' => 'generated::RSSnPCi5TTZz84T2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hBicmz5iDMbUL4L5' => 
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
        'as' => 'generated::hBicmz5iDMbUL4L5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pcJVesam80W8Nqed' => 
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
        'as' => 'generated::pcJVesam80W8Nqed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d0Gk6Fjn8TqIcnHW' => 
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
        'as' => 'generated::d0Gk6Fjn8TqIcnHW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h9RLoXeLnYrJrpGF' => 
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
        'as' => 'generated::h9RLoXeLnYrJrpGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::det5Tb5jDI5WDEGS' => 
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
        'as' => 'generated::det5Tb5jDI5WDEGS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WRhZ5iFC4xDgtBfd' => 
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
        'as' => 'generated::WRhZ5iFC4xDgtBfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zU88xVPdc8xiFptC' => 
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
        'as' => 'generated::zU88xVPdc8xiFptC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3cMzbLqngseI5xLd' => 
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
        'as' => 'generated::3cMzbLqngseI5xLd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UytFrCvZcJ3EGz7N' => 
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
        'as' => 'generated::UytFrCvZcJ3EGz7N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cRmmRveCGHuBPZTO' => 
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
        'as' => 'generated::cRmmRveCGHuBPZTO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZFtnlN0E2cfrdqLL' => 
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
        'as' => 'generated::ZFtnlN0E2cfrdqLL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ACkghzEFhhwf9gR' => 
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
        'as' => 'generated::3ACkghzEFhhwf9gR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c6vP5ebtYMJKZRL7' => 
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
        'as' => 'generated::c6vP5ebtYMJKZRL7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WVGGfLAFENHXoaZq' => 
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
        'as' => 'generated::WVGGfLAFENHXoaZq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OawTDVCyIPpKUN7u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/recharge_history_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RechargeController@resellerRechargeExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\RechargeController@resellerRechargeExport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OawTDVCyIPpKUN7u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i25ORx937ywy8LGi' => 
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
        'as' => 'generated::i25ORx937ywy8LGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HuAIHq3RvbzzQf4' => 
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
        'as' => 'generated::2HuAIHq3RvbzzQf4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TkEdm1osuzBTkp0v' => 
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
        'as' => 'generated::TkEdm1osuzBTkp0v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mILs8SQ376pldL7J' => 
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
        'as' => 'generated::mILs8SQ376pldL7J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s7b0mLULC0zXei8F' => 
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
        'as' => 'generated::s7b0mLULC0zXei8F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ekFWYQDn9NorWNjQ' => 
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
        'as' => 'generated::ekFWYQDn9NorWNjQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WpXK4MdLwzJBp0St' => 
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
        'as' => 'generated::WpXK4MdLwzJBp0St',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YDnalwf4Aha1iX4i' => 
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
        'as' => 'generated::YDnalwf4Aha1iX4i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vzoIqfx3nIqIgVnm' => 
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
        'as' => 'generated::vzoIqfx3nIqIgVnm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JkyftF2KpbsEQ3RX' => 
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
        'as' => 'generated::JkyftF2KpbsEQ3RX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mjBcBU440USCCGPl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms_transactions_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@SMSTransactionsExport',
        'controller' => 'App\\Http\\Controllers\\AdminController@SMSTransactionsExport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mjBcBU440USCCGPl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wzD8h7GgKV5NP2QY' => 
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
        'as' => 'generated::wzD8h7GgKV5NP2QY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aHR0awoSQqTqRnS8' => 
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
        'as' => 'generated::aHR0awoSQqTqRnS8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k2ZfxslBwzbIyabF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_sms_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@UserSMSReportExport',
        'controller' => 'App\\Http\\Controllers\\AdminController@UserSMSReportExport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::k2ZfxslBwzbIyabF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DXAu8owbscNq1VhS' => 
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
        'as' => 'generated::DXAu8owbscNq1VhS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4L7zUvXZk7FC3fzX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reseller_sms_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@ResellerSMSReportExport',
        'controller' => 'App\\Http\\Controllers\\AdminController@ResellerSMSReportExport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4L7zUvXZk7FC3fzX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HO138s5FZMh7mXOs' => 
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
        'as' => 'generated::HO138s5FZMh7mXOs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FlfSP2vAGEQA8loJ' => 
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
        'as' => 'generated::FlfSP2vAGEQA8loJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0PaelngNWQk0GHVM' => 
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
        'as' => 'generated::0PaelngNWQk0GHVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R79VWSE2KazrdAZF' => 
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
        'as' => 'generated::R79VWSE2KazrdAZF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVry4A1SWuXcGILX' => 
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
        'as' => 'generated::BVry4A1SWuXcGILX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AdrxJniIqsebpwl6' => 
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
        'as' => 'generated::AdrxJniIqsebpwl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wegVhSP6xoRmvG20' => 
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
        'as' => 'generated::wegVhSP6xoRmvG20',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGtGKaT7a0l6JC7z' => 
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
        'as' => 'generated::bGtGKaT7a0l6JC7z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::oOOLJ5VxG66pILej' => 
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
        'as' => 'generated::oOOLJ5VxG66pILej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M1dOtcW79NQnoAzL' => 
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
        'as' => 'generated::M1dOtcW79NQnoAzL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HVdtjD4XIHTTA22t' => 
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
        'as' => 'generated::HVdtjD4XIHTTA22t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i34Bh3PadRnLR1yj' => 
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
        'as' => 'generated::i34Bh3PadRnLR1yj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oAhgeCqiWrJpzSrg' => 
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
        'as' => 'generated::oAhgeCqiWrJpzSrg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3lbbu2R440QcFlv9' => 
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
        'as' => 'generated::3lbbu2R440QcFlv9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SjGcDejqMy70Xz3D' => 
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
        'as' => 'generated::SjGcDejqMy70Xz3D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VJzOHB9qie4VszHp' => 
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
        'as' => 'generated::VJzOHB9qie4VszHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3MVL66zElmUcmQDj' => 
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
        'as' => 'generated::3MVL66zElmUcmQDj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E06hklVz8wzudUJS' => 
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
        'as' => 'generated::E06hklVz8wzudUJS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YBtK3uDRRslAkcb' => 
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
        'as' => 'generated::5YBtK3uDRRslAkcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zbfoxr3f9jB6vmHy' => 
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
        'as' => 'generated::Zbfoxr3f9jB6vmHy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEcVSikSeOQ8QoLJ' => 
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
        'as' => 'generated::MEcVSikSeOQ8QoLJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N0uZHwb1dhINSpzz' => 
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
        'as' => 'generated::N0uZHwb1dhINSpzz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1UM1srSNj56lgs9' => 
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
        'as' => 'generated::i1UM1srSNj56lgs9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LSXLIbZj2crpaPWs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dynamic_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicCampaign',
        'controller' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicCampaign',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::LSXLIbZj2crpaPWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OS5gV0iyyv4NxzrA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dynamic_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicCampaignList',
        'controller' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicCampaignList',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::OS5gV0iyyv4NxzrA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F03NIQ2bDBKPMLfQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/dynamic_campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@CampaignStore',
        'controller' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@CampaignStore',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::F03NIQ2bDBKPMLfQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XwBE14y5Lnda2weJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reseller/store_dynamic_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicStore',
        'controller' => 'App\\Http\\Controllers\\Reseller\\DynamicSmsController@DynamicStore',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::XwBE14y5Lnda2weJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CYIbiX9HgaXnQ24F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dynamicfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@DynamicFile',
        'controller' => 'App\\Http\\Controllers\\HomeController@DynamicFile',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::CYIbiX9HgaXnQ24F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yfnmkGwCu4K3UCjH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dynamicsms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@DynamicSMSTemplate',
        'controller' => 'App\\Http\\Controllers\\HomeController@DynamicSMSTemplate',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::yfnmkGwCu4K3UCjH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ChPx0wFpYsENB4Nr' => 
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
        'as' => 'generated::ChPx0wFpYsENB4Nr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hRlqmaYF3qTzJEKH' => 
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
        'as' => 'generated::hRlqmaYF3qTzJEKH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oiyQQI6N5LXeDyvy' => 
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
        'as' => 'generated::oiyQQI6N5LXeDyvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rhWtKY4V6Xp0Tug3' => 
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
        'as' => 'generated::rhWtKY4V6Xp0Tug3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::20kzOlllrSA3Q8hS' => 
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
        'as' => 'generated::20kzOlllrSA3Q8hS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2DhkYsfUGjEjQt6U' => 
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
        'as' => 'generated::2DhkYsfUGjEjQt6U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s3bnufwppqMetOWs' => 
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
        'as' => 'generated::s3bnufwppqMetOWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4kIXxdvYS3iA7uh2' => 
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
        'as' => 'generated::4kIXxdvYS3iA7uh2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2F25LPsgsa3wri5N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'reseller/user_recharge_history_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@ExportHistory',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@ExportHistory',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::2F25LPsgsa3wri5N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Ez9FwkqM2WrCaPH' => 
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
        'as' => 'generated::0Ez9FwkqM2WrCaPH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eHufdXFaWA4yeloS' => 
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
        'as' => 'generated::eHufdXFaWA4yeloS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ojg0lYBUwiMuq75R' => 
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
        'as' => 'generated::Ojg0lYBUwiMuq75R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K0bvvFwxpZy7tvWH' => 
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
        'as' => 'generated::K0bvvFwxpZy7tvWH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16i3KOdkctUUYlg3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'reseller/balance_history_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Reseller\\RechargeController@balanceHistoryExport',
        'controller' => 'App\\Http\\Controllers\\Reseller\\RechargeController@balanceHistoryExport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::16i3KOdkctUUYlg3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EYxQ4r0hNcct0ndd' => 
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
        'as' => 'generated::EYxQ4r0hNcct0ndd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TVEu2lx3ql9FMc4n' => 
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
        'as' => 'generated::TVEu2lx3ql9FMc4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSOkV2GW6WwgIR1g' => 
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
        'as' => 'generated::bSOkV2GW6WwgIR1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m3sFMmWaXc73KPZ7' => 
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
        'as' => 'generated::m3sFMmWaXc73KPZ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tIMc0G6k4GPmj4FQ' => 
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
        'as' => 'generated::tIMc0G6k4GPmj4FQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yh5KuoJb8nCM1uQE' => 
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
        'as' => 'generated::yh5KuoJb8nCM1uQE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::svEkc8eP3G5JxPGj' => 
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
        'as' => 'generated::svEkc8eP3G5JxPGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W3G4FKrFTddk7luC' => 
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
        'as' => 'generated::W3G4FKrFTddk7luC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QZiIFBnR1xYhdLLc' => 
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
        'as' => 'generated::QZiIFBnR1xYhdLLc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7QL8vNSrt8jYv8jQ' => 
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
        'as' => 'generated::7QL8vNSrt8jYv8jQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CPanDFQMG8j75RdB' => 
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
        'as' => 'generated::CPanDFQMG8j75RdB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::84MSQuprY5dIkxig' => 
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
        'as' => 'generated::84MSQuprY5dIkxig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b4i0W9eYMKRrS7rc' => 
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
        'as' => 'generated::b4i0W9eYMKRrS7rc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::35qLhF1YdUfbd1VE' => 
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
        'as' => 'generated::35qLhF1YdUfbd1VE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8bPx3NzyYud6sZXo' => 
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
        'as' => 'generated::8bPx3NzyYud6sZXo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HjKVnUYax3JjE3Aq' => 
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
        'as' => 'generated::HjKVnUYax3JjE3Aq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cw5LXBweYFE2OjpS' => 
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
        'as' => 'generated::cw5LXBweYFE2OjpS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00nOW2grHA0BG0JU' => 
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
        'as' => 'generated::00nOW2grHA0BG0JU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYbDQW8T8gHQvOeP' => 
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
        'as' => 'generated::eYbDQW8T8gHQvOeP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gdCJzaUA93ZE4QQS' => 
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
        'as' => 'generated::gdCJzaUA93ZE4QQS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sqR29w5cteFNdX9h' => 
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
        'as' => 'generated::sqR29w5cteFNdX9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2SxnJPUdAg5UZR4r' => 
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
        'as' => 'generated::2SxnJPUdAg5UZR4r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::212pauQi1hALGBfW' => 
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
        'as' => 'generated::212pauQi1hALGBfW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::obO7aeDVSxGiZnka' => 
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
        'as' => 'generated::obO7aeDVSxGiZnka',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U7fEogUsXGDHvLsQ' => 
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
        'as' => 'generated::U7fEogUsXGDHvLsQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MABb3IRyAyJ99xNV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'reseller/My_smsReportExport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReportExport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@MydailySMSReportExport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::MABb3IRyAyJ99xNV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MmFNbX8JNAYftah0' => 
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
        'as' => 'generated::MmFNbX8JNAYftah0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WIekp01ihjFx2DiD' => 
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
        'as' => 'generated::WIekp01ihjFx2DiD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y3GlKxnU43uU7h2f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'reseller/userReportExport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'reseller',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ResellerController@UserSMSReportExport',
        'controller' => 'App\\Http\\Controllers\\ResellerController@UserSMSReportExport',
        'namespace' => NULL,
        'prefix' => '/reseller',
        'where' => 
        array (
        ),
        'as' => 'generated::y3GlKxnU43uU7h2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sf6IvnjxOwKauPsN' => 
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
        'as' => 'generated::sf6IvnjxOwKauPsN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uU4lnSjjm0ZtIBqU' => 
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
        'as' => 'generated::uU4lnSjjm0ZtIBqU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::L2f7lbEilPSoeGS6' => 
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
        'as' => 'generated::L2f7lbEilPSoeGS6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1hy88hsDbRcdYs61' => 
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
        'as' => 'generated::1hy88hsDbRcdYs61',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NyRRuaFqjsU9lyrq' => 
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
        'as' => 'generated::NyRRuaFqjsU9lyrq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MKZAKWoTtumyBO3u' => 
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
        'as' => 'generated::MKZAKWoTtumyBO3u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r0rjcGMrwyl2zPu8' => 
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
        'as' => 'generated::r0rjcGMrwyl2zPu8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1DP1Bjv4WmzGmEiO' => 
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
        'as' => 'generated::1DP1Bjv4WmzGmEiO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IzK7Pt5XoyFc54dJ' => 
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
        'as' => 'generated::IzK7Pt5XoyFc54dJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5qU0kAiuYdnwTkV8' => 
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
        'as' => 'generated::5qU0kAiuYdnwTkV8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gmcwh6J09BAaSISi' => 
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
        'as' => 'generated::gmcwh6J09BAaSISi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bIKvqH251bDpelsW' => 
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
        'as' => 'generated::bIKvqH251bDpelsW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0TaoAQoS7cSbF0Y' => 
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
        'as' => 'generated::I0TaoAQoS7cSbF0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xWYqEHjzUOJD4HUt' => 
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
        'as' => 'generated::xWYqEHjzUOJD4HUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjA0BuX9WgAJpsxk' => 
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
        'as' => 'generated::LjA0BuX9WgAJpsxk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aTSOOneCKGglPSPT' => 
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
        'as' => 'generated::aTSOOneCKGglPSPT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pBp1low62WRsZM9N' => 
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
        'as' => 'generated::pBp1low62WRsZM9N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4UqC7oWKngiN88Gy' => 
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
        'as' => 'generated::4UqC7oWKngiN88Gy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T5JjYLfHH3T4dnUh' => 
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
        'as' => 'generated::T5JjYLfHH3T4dnUh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nrMayYdTIfscTED7' => 
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
        'as' => 'generated::nrMayYdTIfscTED7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8T3aH0Pf9om8244S' => 
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
        'as' => 'generated::8T3aH0Pf9om8244S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BRS2bR4b1hBgymdZ' => 
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
        'as' => 'generated::BRS2bR4b1hBgymdZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2deZ7g5mTlS5EN1' => 
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
        'as' => 'generated::S2deZ7g5mTlS5EN1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wIPGZ0gziSixYWC7' => 
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
        'as' => 'generated::wIPGZ0gziSixYWC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6QUbrBTiVf0XxZlH' => 
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
        'as' => 'generated::6QUbrBTiVf0XxZlH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UzHjrfJBss9Q9sii' => 
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
        'as' => 'generated::UzHjrfJBss9Q9sii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ef89kPn3dBFG7l5C' => 
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
        'as' => 'generated::Ef89kPn3dBFG7l5C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HffToNtqtXXvq26n' => 
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
        'as' => 'generated::HffToNtqtXXvq26n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bZBzNWMRBVOBnOLg' => 
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
        'as' => 'generated::bZBzNWMRBVOBnOLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cVHyuILf5oHk9nyn' => 
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
        'as' => 'generated::cVHyuILf5oHk9nyn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ZTB2fjKw95Zppcr' => 
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
        'as' => 'generated::2ZTB2fjKw95Zppcr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bMwCAS50OJgagqYk' => 
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
        'as' => 'generated::bMwCAS50OJgagqYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bkkgAfab7pUrxcrk' => 
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
        'as' => 'generated::bkkgAfab7pUrxcrk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5iqVIkXoMlKs765l' => 
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
        'as' => 'generated::5iqVIkXoMlKs765l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJk3FBVSsWIxFcj3' => 
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
        'as' => 'generated::hJk3FBVSsWIxFcj3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HyHNMAwnB2vbCItS' => 
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
        'as' => 'generated::HyHNMAwnB2vbCItS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BPinTk3BbK9ZI68N' => 
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
        'as' => 'generated::BPinTk3BbK9ZI68N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPRnck3UgU4A3mkl' => 
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
        'as' => 'generated::jPRnck3UgU4A3mkl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G9fGKh5PuFu0VAhv' => 
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
        'as' => 'generated::G9fGKh5PuFu0VAhv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgKpDPzk88Jz740e' => 
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
        'as' => 'generated::mgKpDPzk88Jz740e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jR6Hu3gsXLyUrrrv' => 
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
        'as' => 'generated::jR6Hu3gsXLyUrrrv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ara1XSRYjzAv8jQe' => 
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
        'as' => 'generated::Ara1XSRYjzAv8jQe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LrmlqXaM1kJbK6Jm' => 
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
        'as' => 'generated::LrmlqXaM1kJbK6Jm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RZ2GhFW5bLHFOne1' => 
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
        'as' => 'generated::RZ2GhFW5bLHFOne1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nh5vG0yrQvLFCm15' => 
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
        'as' => 'generated::nh5vG0yrQvLFCm15',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XovdqbC4KXmtJt42' => 
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
        'as' => 'generated::XovdqbC4KXmtJt42',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::o8ul38tT3xs72TqO' => 
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
        'as' => 'generated::o8ul38tT3xs72TqO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fj8qOygthTKHxy8H' => 
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
        'as' => 'generated::fj8qOygthTKHxy8H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VOkCCqKhBTSqiLiI' => 
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
        'as' => 'generated::VOkCCqKhBTSqiLiI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qKeKZuF3hprahch1' => 
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
        'as' => 'generated::qKeKZuF3hprahch1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::re7BhLLs1HJ9YEyD' => 
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
        'as' => 'generated::re7BhLLs1HJ9YEyD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2qSSPXl6cpPJnUq' => 
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
        'as' => 'generated::v2qSSPXl6cpPJnUq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XmE3doYrVmxmdDCA' => 
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
        'as' => 'generated::XmE3doYrVmxmdDCA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1tiwdTlFdbcwZEDS' => 
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
        'as' => 'generated::1tiwdTlFdbcwZEDS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rcyB7a9pR9GduacU' => 
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
        'as' => 'generated::rcyB7a9pR9GduacU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::13SmG3ru8pVuvZyz' => 
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
        'as' => 'generated::13SmG3ru8pVuvZyz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gTJCVEvZuuF5lU12' => 
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
        'as' => 'generated::gTJCVEvZuuF5lU12',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4MvBxPSuDL91n2aM' => 
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
        'as' => 'generated::4MvBxPSuDL91n2aM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::APf6YtiXtBe71B0w' => 
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
        'as' => 'generated::APf6YtiXtBe71B0w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tjp1CKCiX5k1qI6c' => 
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
        'as' => 'generated::Tjp1CKCiX5k1qI6c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wnkjxeD6Jp54rwn4' => 
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
        'as' => 'generated::wnkjxeD6Jp54rwn4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3dmJA7pjpvBIcOPc' => 
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
        'as' => 'generated::3dmJA7pjpvBIcOPc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aEbTWHlX1hOIvHse' => 
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
        'as' => 'generated::aEbTWHlX1hOIvHse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q3FTarxeEKPIThZV' => 
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
        'as' => 'generated::Q3FTarxeEKPIThZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5BFdVMtGLaJg4qx3' => 
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
        'as' => 'generated::5BFdVMtGLaJg4qx3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kTPHSOF5vDL7f15J' => 
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
        'as' => 'generated::kTPHSOF5vDL7f15J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RD13aAw0tRPvzYOu' => 
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
        'as' => 'generated::RD13aAw0tRPvzYOu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HILajlLndqwI0hV4' => 
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
        'as' => 'generated::HILajlLndqwI0hV4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LfsJOecDdNqYxCKw' => 
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
        'as' => 'generated::LfsJOecDdNqYxCKw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C7QPN9sTg3wceORx' => 
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
        'as' => 'generated::C7QPN9sTg3wceORx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FPETytdIlVvixNRk' => 
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
        'as' => 'generated::FPETytdIlVvixNRk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YD4njk6uj5EAjzUw' => 
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
        'as' => 'generated::YD4njk6uj5EAjzUw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::LyfftOFqS0q08lQZ' => 
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
        'as' => 'generated::LyfftOFqS0q08lQZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::viTF1fumfxY69ojM' => 
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
        'as' => 'generated::viTF1fumfxY69ojM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kF5NOnzGfZ7cI1Bd' => 
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
        'as' => 'generated::kF5NOnzGfZ7cI1Bd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6fNyazoTlsak6YsX' => 
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
        'as' => 'generated::6fNyazoTlsak6YsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sbwFXk4CDgaclSBV' => 
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
        'as' => 'generated::sbwFXk4CDgaclSBV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Sss19mXcTUcFOHS' => 
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
        'as' => 'generated::8Sss19mXcTUcFOHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CkBIJVYKgAnvj9ip' => 
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
        'as' => 'generated::CkBIJVYKgAnvj9ip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oyxnExjk9710j4fq' => 
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
        'as' => 'generated::oyxnExjk9710j4fq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ci5JDlJxYjr4a3Hb' => 
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
        'as' => 'generated::Ci5JDlJxYjr4a3Hb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mIdQzGxEmAnWbwhw' => 
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
        'as' => 'generated::mIdQzGxEmAnWbwhw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nAbzIw9PwUlCJ6tq' => 
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
        'as' => 'generated::nAbzIw9PwUlCJ6tq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5i2Du8zeBuyVOLro' => 
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
        'as' => 'generated::5i2Du8zeBuyVOLro',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7nQTU5f11MUEezie' => 
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
        'as' => 'generated::7nQTU5f11MUEezie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iLkcyjlYRG68ywNN' => 
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
        'as' => 'generated::iLkcyjlYRG68ywNN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yXvTQsTqUmZfk1Hp' => 
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
        'as' => 'generated::yXvTQsTqUmZfk1Hp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6pWkQ36FiHMqJP9D' => 
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
        'as' => 'generated::6pWkQ36FiHMqJP9D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::49DoEo3iqLMa75X4' => 
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
        'as' => 'generated::49DoEo3iqLMa75X4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FijN0a3v5s2y8Ur3' => 
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
        'as' => 'generated::FijN0a3v5s2y8Ur3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EX9uWVzHzHpv3K4p' => 
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
        'as' => 'generated::EX9uWVzHzHpv3K4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xZCaTYedVpLAhNYU' => 
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
        'as' => 'generated::xZCaTYedVpLAhNYU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HHE8hOBiTjFbrWUi' => 
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
        'as' => 'generated::HHE8hOBiTjFbrWUi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AxVTV5CWYzrjg4ya' => 
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
        'as' => 'generated::AxVTV5CWYzrjg4ya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SY2838IRCoDTAMy2' => 
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
        'as' => 'generated::SY2838IRCoDTAMy2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::THN3Arz7iUnBIFlw' => 
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
        'as' => 'generated::THN3Arz7iUnBIFlw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1lPeEztqYLHSURaQ' => 
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
        'as' => 'generated::1lPeEztqYLHSURaQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::21Wj5emUfdTKpRLj' => 
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
        'as' => 'generated::21Wj5emUfdTKpRLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7SM4EK043hz2Um2z' => 
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
        'as' => 'generated::7SM4EK043hz2Um2z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tPBkP0yT2biog50Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'reseller/dlr/campaignlist_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr_export',
        'controller' => 'App\\Http\\Controllers\\DLRController@reseller_selfcampaignlist_dlr_export',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::tPBkP0yT2biog50Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sCIr15TBpPFmKv1E' => 
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
        'as' => 'generated::sCIr15TBpPFmKv1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TDPEGco3SI4nLmG6' => 
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
        'as' => 'generated::TDPEGco3SI4nLmG6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TciR8ErwYjNLe4JY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reseller/dlr/usercampaignlist_export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr_export',
        'controller' => 'App\\Http\\Controllers\\DLRController@resellers_usercampaignlist_dlr_export',
        'namespace' => NULL,
        'prefix' => '/reseller/dlr',
        'where' => 
        array (
        ),
        'as' => 'generated::TciR8ErwYjNLe4JY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yrfwJ8Sh3YP9k4Hl' => 
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
        'as' => 'generated::yrfwJ8Sh3YP9k4Hl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZLlIUr8immV6KB8J' => 
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
        'as' => 'generated::ZLlIUr8immV6KB8J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c5wSBYJJld0LcQUg' => 
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
        'as' => 'generated::c5wSBYJJld0LcQUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jQD8PB7a6xJ9v5o2' => 
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
        'as' => 'generated::jQD8PB7a6xJ9v5o2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZIoUNsZ8MsLVnkwJ' => 
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
        'as' => 'generated::ZIoUNsZ8MsLVnkwJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k9N21uZX2XpZCmi8' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000070f0000000000000000";}";s:4:"hash";s:44:"yzhNGmnXGGlCZ7mdhphbST4NaFFgL5izFNJnbDABZXg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k9N21uZX2XpZCmi8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dZR4nmsWePc5Cf4u' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008370000000000000000";}";s:4:"hash";s:44:"f2KYAYg/wDhAwYD1wiMBVbz9tFd7blXHWO3zpQdTjew=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dZR4nmsWePc5Cf4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kUzrkfCTKrauFFKh' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008390000000000000000";}";s:4:"hash";s:44:"12JaY3XEMFDMbOZTY/y23vdxdZUfsuka5Spb5WIZ+js=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kUzrkfCTKrauFFKh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q4deLGBOwNV7SxDb' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000083b0000000000000000";}";s:4:"hash";s:44:"CBv2Uo9BeK/Kh3JYorJgTA+2kMYooLclO/eJJENQ1zI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::q4deLGBOwNV7SxDb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kDpWd00Mu1c4N0yp' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000083d0000000000000000";}";s:4:"hash";s:44:"c2UXYhOL8eMkNJk25KENKTtTxJRXG2w3fgFiYSeqPW0=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kDpWd00Mu1c4N0yp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F16LwyPWhKMbLcVV' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000083f0000000000000000";}";s:4:"hash";s:44:"0597eEjWPVrS4RL4vXxSx9wZTr/+W1E57Wya9TR2iuI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F16LwyPWhKMbLcVV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
