<?php


namespace App\classes;
class Home
{
    protected $number;
    protected $i;
    protected $check;

    public function __construct($post = null)
    {
        $this->number = $post['given_number'];
        $this->check ='prime';
    }

    public function index()
    {
        header('Location: action.php?pages=home');
    }

    public function primeNumber()
    {
        if ($this->number ==1 || $this->number ==2)
        {
            return"your Number $this->number is prime";
        }
        else
        {
            for ($this->i =2 ; $this->i <$this->number; $this->i++)
            {
                if ($this->number%$this->i==0)
                {
                    return "your Number $this->number is not prime";
                }
            }
            return "your Number $this->number is prime";
        }

    }
}
