<?php

namespace App\Controllers\Auth;
use Config\Email;
use Config\Services;
use App\Models\Users;
use App\Models\Category;
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
    // * CUSTOMER LOGIN MODEL STARTS HERE
    // * --------------------------------------------------------------------
    public function getLogin()
    {

            // Check if user is logged in
            if ($this->session->isLoggedIn) {
                
            return redirect()->to(base_url('dashboard'));
            }

            $data =  [
            'title' => ':: Login',
            'user' => $this->session->user
            ];

        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('login',$data);
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
		
		if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
		{
			return redirect()->to(base_url('login'))->withInput()->with('error', "invalid user credentials");
		}

          // Stroing session values
          $this->setUserSession($user);

          // Redirecting to dashboard after login
        //   dd($user);

          if($user['role'] == "customer"){

              return redirect()->to(base_url('customer/dashboard'));

          }else{
            return redirect()->to(base_url('logout'));
          }
		   
	}


    //  private function setCustomerSession($user)
    // {
    //     $data = [
    //         'id' => $user['id'],
    //         'firstname' => $user['firstname'],
    //         'lastname' => $user['lastname'],
    //         'email' => $user['email'],
    //         'isLoggedIn' => true,
    //         "role" => $user['role'],
    //     ];

    //     session()->set($data);
    //     return true;
    // }

    // * --------------------------------------------------------------------
    // * CUSTOMER LOGIN MODEL END HERE
    // * --------------------------------------------------------------------




  // * --------------------------------------------------------------------
    // * REGISTRATION MODEL STARTS HERE
    // * --------------------------------------------------------------------
    public function getRegister()
    {

        // Check if user is logged in
        if ($this->session->isLoggedIn) {
        return redirect()->to(base_url('admin/dashboard'));
        }


        $data =  [
        'title'         => ':: Register'
        ];

        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('register',$data);
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
            'address'         	=> $this->request->getPost('address'),
            'role'     		=> 'customer',
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            // 'activate_hash' 	=> random_string('alnum', 32)
        ];

        // unset($user['password_confirm']);
        // dd($user);
        if (! $users->save($user)) {
			// return redirect()->back()->withInput()->with('errors', $users->errors());
            return redirect()->to(base_url('register'))->withInput()->with('errors',  $users->errors());
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



    // * --------------------------------------------------------------------
    // * ADMIN LOGIN MODEL STARTS HERE
    // * --------------------------------------------------------------------

        public function getAdminLogin(){
            return view('admin/auth/login');
        }


        public function attemptAdminLogin()
        {
            $data = [];
    
            if ($this->request->getMethod() == 'post') {
    
                $rules = [
                    'email'		=> 'required|valid_email',
                    'password' 	=> 'required|min_length[5]',
                ];
    
              
                if (! $this->validate($rules)) {
                    return redirect()->to(base_url('admin/login'))->withInput()->with('errors', $this->validator->getErrors());
                } else {

                    $model = new Users();
    
                    $user = $model->where('email', $this->request->getVar('email'))
                        ->first();

                        if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
                        {
                            return redirect()->to(base_url('admin/login'))->withInput()->with('error', "invalid user credentials");
                        }
    
                    
    
                    // Redirecting to dashboard after login
                    if($user['role'] == "admin"){
                        
                        // Stroing session values
                       $this->setUserSession($user);

                        return redirect()->to(base_url('admin/dashboard'));
    
                    }else{

                        return redirect()->to(base_url('logout')); 
                    }
                }
            }
            return view('admin/login');
        }
    
        private function setUserSession($user)
        {
            $data = [
                'id' => $user['id'],
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'isLoggedIn' => true,
                "role" => $user['role'],
            ];
    
            session()->set($data);
            return true;
        }
    

    // * --------------------------------------------------------------------
    // * ADMIN LOGIN MODEL ENDS HERE
    // * --------------------------------------------------------------------




  


    // * --------------------------------------------------------------------
    // * LOGOUT MODEL STARTS HERE
    // * --------------------------------------------------------------------

    public function logout()
	{
	
        session()->destroy();
        // return redirect()->to('login');
        return redirect()->to(base_url('login'));
	}
      // * --------------------------------------------------------------------
    // * LOGOUT MODEL ENDS HERE
    // * --------------------------------------------------------------------
}
