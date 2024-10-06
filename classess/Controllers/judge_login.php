<?php
class Logger
{

    protected $posted_data = [];
    protected $name;
    protected $password;
    public $finaldata = [];

    protected $fetchedpass;
    protected $fetcheduser;

    public function __construct($posted_data)
    {
        $this->name = htmlspecialchars($posted_data["name"]);
        $this->password = htmlspecialchars($posted_data["password"]);
    }

    public function validator($tablename, $fieldname, $value)
    {
        $tablename = htmlspecialchars($tablename);
        $fieldname = htmlspecialchars($fieldname);

        $check = new Check();
        $check->loginCheck("judges", "name", $this->name, $this->finaldata);

        if(empty($check -> getdata())){
            Login::nojudgefound();
        }else{
            $this->fetchedpass = $check->getdata()["password"];
            $this->fetcheduser = $check->getdata()["name"];
        }
        
        ($this->fetchedpass != "" &&  $this->fetcheduser != " ") ? $this->passwordChecker() : Login::nojudgefound();
    }


    protected function passwordChecker()
    {
        $verify = password_verify($this->password, $this->fetchedpass);
        ($this->name == $this->fetcheduser && $verify == true) ? $this->redirector("../../Views/judge_panel?ind=dash") : Login::needtologin();
    }

    protected function redirector($path)
    {
        header("location: $path");
    }

}
