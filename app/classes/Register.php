<?php


namespace App\classes;
class Register
{
    protected $name;
    protected $email;
    protected $mobile;
    protected $result;


    public function __construct($post=null)
    {
        if (isset($post['full_name']))
        {
            $this->name  = $post['full_name'];
            $this->email  = $post['email_address'];
            $this->mobile  = $post['phone_number'];

        }

    }
    public function add()
    {
//        session_start();
        $_SESSION['name'] =$this->name;
        $_SESSION['email'] =$this->email;
        $_SESSION['mobile'] =$this->mobile;
        return 'Data store successfully';
    }

    public function allData()
    {
        $this->result = [
            0 =>[
                'name'      => $_SESSION['name'],
                'email'      => $_SESSION['email'],
                'mobile'      => $_SESSION['mobile'],
            ],
            1 => [
                'name'      => $_SESSION['name'],
                'email'      => $_SESSION['email'],
                'mobile'      => $_SESSION['mobile'],
            ],
        ];
        return $this->result;
    }

}