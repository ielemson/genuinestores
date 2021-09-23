<?php

namespace App\Controllers\Auth;
use Config\Email;
use Config\Services;
use App\Models\Users;
use App\Controllers\BaseController;

class AuthController extends BaseController
{

    protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;

    public function __construct()
	{
		// start session
		$this->session = Services::session();
	}


    
    // * --------------------------------------------------------------------
    // * LOGIN MODEL STARTS HERE
    // * --------------------------------------------------------------------
    public function getLogin()
    {

            // Check if user is logged in
            if ($this->session->isLoggedIn) {
            return redirect()->to(base_url('dashboard'));
            }

            $data =  [
            'title'         => 'Dashboard Page'
            ];


        return view('common/login');
    }

	/**
	 * Attempts to verify user's credentials through POST request.
	 */
	public function attemptLogin()
	{
		// validate request
		$rules = [
			'email'		=> 'required|valid_email',
			'password' 	=> 'required|min_length[5]',
		];

		if (! $this->validate($rules)) {
			return redirect()->to(base_url('login'))->withInput()->with('errors', $this->validator->getErrors());
		}

		// check credentials
		$users = new Users();
		
		$user = $users->where('email', $this->request->getPost('email'))->first();
		
		if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password_hash']) ) 
		{
			return redirect()->to('login')->withInput()->with('error', lang('Auth.wrongCredentials'));
		}

		// check activation
		// if (!$user['active']) {
		// 	return redirect()->to('login')->withInput()->with('error', lang('Auth.notActivated'));
		// }

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('userData', [
            'id' 			=> $user["id"],
            'firstname' 	=> $user["firstname"],
            'lastname' 		=> $user["lastname"],
            'email' 		=> $user["email"],
            // 'new_email' 	=> $user["new_email"]
        ]);

        // save login info to user login logs for tracking
        // get user agent
        $agent = $this->request->getUserAgent();
        // load logs model
		// $logs = new LogsModel();
		// // logs data
		// $userlog = [
		// 	'date'	=> date("Y-m-d"),
		// 	'time'	=> date("H:i:s"),
		// 	'reference'	=> $user["id"],
		// 	'name'	=> $user["name"],
		// 	'ip'	=> $this->request->getIPAddress(),
		// 	'browser'	=> $agent->getBrowser(),
		// 	'status'	=> 'Success' 
		// ];
		// // logs to database
		// $logs->save($userlog);

        return redirect()->to(base_url(base_url('dashboard')));
	}

    // * --------------------------------------------------------------------
    // * LOGIN MODEL STARTS HERE
    // * --------------------------------------------------------------------







    // * --------------------------------------------------------------------
    // * REGISTRATION MODEL STARTS HERE
    // * --------------------------------------------------------------------
    public function getRegister()
    {

        // Check if user is logged in
        if ($this->session->isLoggedIn) {
        return redirect()->to(base_url('dashboard'));
        }


        $data =  [
        'title'         => 'Dashboard Page'
        ];


        return view('common/register');
    }


    public function attemptRegister()
	{
		helper('text');

		// save new user, validation happens in the model
		$users = new Users();
		$getRule = $users->getRule('registration');
		$users->setValidationRules($getRule);
		
        $user = [
            'firstname'          	=> $this->request->getPost('firstname'),
            'lastname'          	=> $this->request->getPost('lastname'),
            'email'         	=> $this->request->getPost('email'),
            'gender'         	=> $this->request->getPost('gender'),
            'country'         	=> $this->request->getPost('country'),
            'city'         	=> $this->request->getPost('city'),
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            // 'activate_hash' 	=> random_string('alnum', 32)
        ];

        // unset($user['password_confirm']);
        // dd($user);
        if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }

		// send activation email //
		// send email activation is commented no email support //
		
		// helper('auth'); 
        // send_activation_email($user['email'], $user['activate_hash']);

		// success
        return redirect()->to(base_url('login'))->with('success', "Account Registered");
	}

      // * --------------------------------------------------------------------
    // * REGISTRATION MODEL ENDS HERE




    // * --------------------------------------------------------------------
    // * LOGOUT MODEL STARTS HERE
    // * --------------------------------------------------------------------

    public function logout()
	{
		$this->session->remove(['isLoggedIn', 'userData']);

        return redirect()->to(base_url('login'));
	}
      // * --------------------------------------------------------------------
    // * LOGOUT MODEL ENDS HERE
    // * --------------------------------------------------------------------
}
