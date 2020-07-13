  
<?php
class Contact_Form{
    private $subject;
    private $email;
    private $file;
    private $content;

    public function __construct($subject,$email,$file,$content){
        $this->subject = $subject;
        $this->email = $email;
        $this->file = $file;
        $this->content = $content;
    }

    public function getSubject(){
        return $this->subject;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFile(){
        return $this->file;
    }
    public function getContent(){
        return $this->content;
    }

    public function setSubject($n){
        $this->subject = $n;
    }
    public function setEmail($n){
        $this->email = $n;
    }
    public function setFile($n){
        $this->file = $n;
    }
    public function setContent($n){
        $this->content = $n;
    }
}
?>