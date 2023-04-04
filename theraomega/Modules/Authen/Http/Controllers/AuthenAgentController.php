<?php
namespace Modules\Authen\Http\Controllers;
use App\Helpers\SendMail;
use App\Helpers\UserHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Modules\Agent\Entities\AgentModel as MainModel;
use Modules\Agent\Entities\AgentModel;
class AuthenAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $pathViewController     = "authen::pages.agent.";
    private $controllerName         = "auth_agent";
    private $moduleName         = "authen";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        View::share('controllerName', $this->controllerName);
        View::share('moduleName', $this->moduleName);
    }
    public function index(Request $request)
    {
        return view("{$this->pathViewController}index", []);
    }
    public function login(Request $request)
    {
        return view("{$this->pathViewController}login");
    }
    public function register(Request $request)
    {
        return view("{$this->pathViewController}register");
    }
    public function forget(Request $request)
    {
        return view("{$this->pathViewController}forget");
    }
    public function active(Request $request)
    {
        $token = $request->token;
        $item = $this->model->getItem(['token' => $token], ['task' => 'token']);
        if (!$item) {
            return redirect()->route("{$this->controllerName}/login");
        }
        return view("{$this->pathViewController}active", [
            'token' => $token,
        ]);
    }
    public function logout(Request $request)
    {
        $request->session()->forget('agentInfo');
        return redirect()->route("{$this->controllerName}/login");
    }
    public function agentCheckParent(Request $request)
    {
        $params = $request->all();
        $item = $this->model->getItem($params, ['task' => 'code']);
        $id = null;
        $fullname = null;
        $thumbnail = null;
        if (!$item) {
            $msg = "Agent not found";
            $status = 400;
        } else {
            $status = 200;
            $msg = "Oke";
            $id = $item['id'];
            $fullname = UserHelper::getUserInfo($id, 'fullname');
            $thumbnail = UserHelper::getUserInfo($id, 'thumbnail');
        }
        $result = [
            'status' => $status,
            'msg' => $msg,
            'fullname' => $fullname,
            'id' => $id,
            'thumbnail' => $thumbnail,
        ];
        return $result;
    }
    public function postLogin(Request $request)
    {
        $params = $request->all();
        $error = [];
        if (!$params['username']) {
            $error['username'] = "Please Enter Your Username";
        }
        if (!$params['password']) {
            $error['password'] = "Please Enter Your Password";
        }
        if (empty($error)) {
            $status = 200;
            $msg = "Login success";
            $user = $this->model->getItem($params, ['task' => 'login']);
            if (!$user) {
                $status = 400;
                $error['username'] = "Incorrect account login or password";
            } else {
                if ($user['email_verified_at'] == '') {
                    $status = 400;
                    $error['username'] = "Your account has not been activated";
                } elseif ($user['is_suppend'] == '1') {
                    $status = 400;
                    $error['username'] = "Your account is suspended";
                }
                elseif ($user['status'] == 'pending') {
                    $status = 400;
                    $error['username'] = "Your account is pending approval";
                }
            }
            if ($status == 400) {
                $msg = $error;
            } else {
                $request->session()->push('agentInfo', $user);
            }
        } else {
            $status = 400;
            $msg = $error;
        }
        $params['redirect'] = route('dashboard_agent/index');
        $params['status'] = $status;
        $params['msg'] = $msg;
        return $params;
    }
    public function postRegister(Request $request)
    {
        $params = $request->all();
        $error = [];
        $token = null;
        $redirect = null;
        if (!$params['first_name']) {
            $error['first_name'] = "Please Enter Your First Name";
        }
        if (!$params['last_name']) {
            $error['last_name'] = "Please Enter Your Last Name";
        }
        if (!$params['email']) {
            $error['email'] = "Please Enter Your Email";
        } else {
            $checkMail = $this->model->getItem(['email' => $params['email']], ['task' => 'email']);
            if ($checkMail) {
                $error['email'] = "Email already exists";
            }
        }
        if (!$params['mobile']) {
            $error['mobile'] = "Please Enter Your Mobile";
        } else {
            $params['mobile'] = clean($params['mobile']);
            $checkMobile = $this->model->getItem(['mobile' => $params['mobile']], ['task' => 'mobile']);
            if ($checkMobile) {
                $error['mobile'] = "Mobile already exists";
            }
        }
        if (!$params['sponsor_id']) {
            $error['sponsor_id'] = "Please Enter Your Sponsor ID";
        } else {
            $user = $this->model->getItem(['code' => $params['sponsor_id']], ['task' => 'code']);
            if (!$user) {
                $error['sponsor_id'] = "Agent not found";
            } else {
                $params['parent_id'] = $user['id'];
            }
        }
        if (!$params['username']) {
            $error['username'] = "Please Enter Your Username";
        } else {
            $checkUsername = $this->model->getItem(['username' => $params['username']], ['task' => 'username']);
            if ($checkUsername) {
                $error['username'] = "Username already exists";
            }
        }
        if (!$params['password']) {
            $error['password'] = "Please Enter Your Password";
        }
        if (empty($error)) {
            $status = 200;
            $msg = "Signup success";
            $params['status'] = 'pending';
            $params['created_at'] = date('Y-m-d H:i:s');
            $params['password'] = md5($params['password']);
            $params['code'] = random_code();
            $params['verify_code'] = random_verify_code();
            $token = md5($params['email'] . time());
            $params['token'] = $token;
            $redirect = route('auth_agent/active', ['token' => $token]);
            $this->model->saveItem($params, ['task' => 'add-item']);
            SendMail::verify($params);
        } else {
            $status = 400;
            $msg = $error;
        }
        $params['redirect'] = $redirect;
        $params['status'] = $status;
        $params['msg'] = $msg;
        $params['error'] = $error;
        return $params;
    }
    public function postForget(Request $request)
    {
        $params = $request->all();
        $error = [];
        if (!$params['email']) {
            $error['email']  = "Please enter your email";
        }
        if (empty($error)) {
            $status = 200;
            $msg = "Forget password success";
        } else {
            $status = 400;
            $msg = $error;
        }
        $params['redirect'] = route('auth_agent/login');
        $params['status'] = $status;
        $params['msg'] = $msg;
        $params['error'] = $error;
        return $params;
    }
    public function postActive(Request $request)
    {
        $params = $request->all();
        $token = $request->token;
        $error = [];
        $item = [];
        $item = $this->model->getItem(['token' => $token], ['task' => 'token']);
        $id = $item['id'] ?? "";
        $email_verified_at = $item['email_verified_at'] ?? "";
        $verify_code = $item['verify_code'] ?? "";
        if (!$params['verify_code']) {
            $error['verify_code'] = "Please enter your verify code";
        } elseif ($verify_code != $params['verify_code']) {
            $error['verify_code'] = "Your verification code is not correct";
        } else {
            if ($email_verified_at) {
                $error['verify_code'] = "Your account has been verified before.";
            }
        }
        if (empty($error)) {
            $status = 200;
            $msg = "Account activation successful";
            $this->model->saveItem(
                [
                    'id' => $id,
                    'email_verified_at' => date('Y-m-d H:i:s')
                ],
                [
                    'task' => 'edit-item'
                ]
            );
        } else {
            $status = 400;
            $msg = $error;
        }
        $params['redirect'] = route('auth_agent/login');
        $params['status'] = $status;
        $params['msg'] = $msg;
        $params['error'] = $error;
        return $params;
    }
    public function quickLogin(Request $request) {
        $request->session()->forget('agentInfo');
        $token = $request->token;
        $item = $this->model->getItem(['token' => $token],['task' => 'token']);
      
        if($item) {
            $request->session()->push('agentInfo', $item);
            $agentInfo = session('agentInfo');
           
            return redirect()->route('dashboard_agent/index');
        }
        else {
            return redirect()->route('dashboard_staff/index');
        }
        
    }
}
