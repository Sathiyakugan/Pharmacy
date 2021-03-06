<<<<<<< HEAD:UserClasses/Pharmasist.php
<?php

class Pharmasist extends User
{
    private 	$staff_id;
    private $pharmacist_id;
    public function __construct($username){

        parent::__construct($username);
        $this->loadotherProperties();
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName)
    {
        $this->db->connect();
        $this->firstName = $firstName;
        $this->db->update('pharmacist',array('first_name'=>'"'.$firstName.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getLastName()
    {
        return $this->lastName;

    }


    public function setLastName($lastName)
    {
        $this->db->connect();
        $this->lastName = $lastName;
        $this->db->update('pharmacist',array('last_name'=>'"'.$lastName.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getSex()
    {
        return $this->sex;

    }


    public function setSex($sex)
    {
        $this->db->connect();
        $this->sex = $sex;
        $this->db->update('pharmacist',array('sex'=>'"'.$sex.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getDOB()
    {
        return $this->DOB;

    }


    public function setDOB($DOB)
    {
        $this->db->connect();
        $this->DOB = $DOB;
        $this->db->update('pharmacist',array('DOB'=>'"'.$DOB.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->db->connect();
        $this->address = $address;
        $this->db->update('pharmacist',array('address'=>'"'.$address.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->db->connect();
        $this->email = $email;
        $this->db->update('pharmacist',array('email'=>'"'.$email.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getUserImage()
    {
        return $this->user_image;
    }


    public function setUserImage($user_image)
    {
        $this->db->connect();
        $this->user_image = $user_image;
        $this->db->update('pharmacist',array('user_image'=>'"'.$user_image.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }

    /**
     * @return mixed
     */
    public function getStaffId()
    {
        return $this->staff_id;
    }

    /**
     * @param mixed $staff_id
     */
    public function setStaffId($staff_id)
    {
        $this->db->connect();
        $this->user_image = $staff_id;
        $this->db->update('pharmacist',array('staff_id'=>'"'.$staff_id.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    /**
     * @return mixed
     */
    public function getPharmacistId()
    {
        return $this->pharmacist_id;
    }

    /**
     * @param mixed $pharmacist_id
     */
    public function setPharmacistId($pharmacist_id)
    {
        $this->db->connect();
        $this->user_image = $pharmacist_id;
        $this->db->update('pharmacist',array('pharmacist_id'=>'"'.$pharmacist_id.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->db->connect();
        $this->phone = $phone;
        $this->db->update('pharmasist',array('phone'=>'"'.$phone.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions;
    }




    public function SetBulk($firstName,$lastName,$sex,$DOB,$address, $email,$user_image,$phone){
        $this->db->connect();
        $this->user_image = $user_image;
        $this->db->update('pharmacist',array('first_name'=>$firstName,'last_name'=>$lastName,'sex'=>$sex,'DOB'=>$DOB,'address'=>$address,'email'=>$email,'user_image'=>$user_image,'phone'=>$phone),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    Public function loadotherProperties(){
        $quer='username="'.$this->username.'"';
        $this->db->connect();
        $this->db->select('pharmacist','*',NULL,$quer,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $res =$this->db->getResult();
        $this->firstName=$res[0]['first_name'];
        $this->lastName=$res[0]['last_name'];
        $this->sex=$res[0]['sex'];
        $this->DOB=$res[0]['DOB'];
        $this->address=$res[0]['address'];
        $this->email=$res[0]['email'];
        $this->user_image=$res[0]['user_image'];
        $this->staff_id=$res[0]['staff_id'];
        $this->staff_id=$res[0]['pharmacist_id'];
        $this->phone=$res[0]['phone'];

    }
    public function loadBulk($username){
        $quer='username="'.$username.'"';
        $this->db->connect();
        $this->db->select('pharmacist','*',NULL,$quer,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $res =$this->db->getResult();
        return $res;
    }
=======
<?php

class Pharmacist extends User
{
    private 	$staff_id;
    private $pharmacist_id;
    public function __construct($username){

        parent::__construct($username);
        $this->loadotherProperties();
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName)
    {
        $this->db->connect();
        $this->firstName = $firstName;
        $this->db->update('pharmacist',array('first_name'=>'"'.$firstName.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getLastName()
    {
        return $this->lastName;

    }


    public function setLastName($lastName)
    {
        $this->db->connect();
        $this->lastName = $lastName;
        $this->db->update('pharmacist',array('last_name'=>'"'.$lastName.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getSex()
    {
        return $this->sex;

    }


    public function setSex($sex)
    {
        $this->db->connect();
        $this->sex = $sex;
        $this->db->update('pharmacist',array('sex'=>'"'.$sex.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getDOB()
    {
        return $this->DOB;

    }


    public function setDOB($DOB)
    {
        $this->db->connect();
        $this->DOB = $DOB;
        $this->db->update('pharmacist',array('DOB'=>'"'.$DOB.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->db->connect();
        $this->address = $address;
        $this->db->update('pharmacist',array('address'=>'"'.$address.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->db->connect();
        $this->email = $email;
        $this->db->update('pharmacist',array('email'=>'"'.$email.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }


    public function getUserImage()
    {
        return $this->user_image;
    }


    public function setUserImage($user_image)
    {
        $this->db->connect();
        $this->user_image = $user_image;
        $this->db->update('pharmacist',array('user_image'=>'"'.$user_image.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions
    }

    /**
     * @return mixed
     */
    public function getStaffId()
    {
        return $this->staff_id;
    }

    /**
     * @param mixed $staff_id
     */
    public function setStaffId($staff_id)
    {
        $this->db->connect();
        $this->user_image = $staff_id;
        $this->db->update('pharmacist',array('staff_id'=>'"'.$staff_id.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    /**
     * @return mixed
     */
    public function getPharmacistId()
    {
        return $this->pharmacist_id;
    }

    /**
     * @param mixed $pharmacist_id
     */
    public function setPharmacistId($pharmacist_id)
    {
        $this->db->connect();
        $this->user_image = $pharmacist_id;
        $this->db->update('pharmacist',array('pharmacist_id'=>'"'.$pharmacist_id.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->db->connect();
        $this->phone = $phone;
        $this->db->update('pharmacist',array('phone'=>'"'.$phone.'"'),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions;
    }




    public function SetBulk($firstName,$lastName,$sex,$DOB,$address, $email,$user_image,$phone){
        $this->db->connect();
        $this->user_image = $user_image;
        $this->db->update('pharmacist',array('first_name'=>$firstName,'last_name'=>$lastName,'sex'=>$sex,'DOB'=>$DOB,'address'=>$address,'email'=>$email,'user_image'=>$user_image,'phone'=>$phone),'username="'.$this->username.'"'); // Table name, column names and values, WHERE conditions

    }

    Public function loadotherProperties(){
        $quer='username="'.$this->username.'"';
        $this->db->connect();
        $this->db->select('pharmacist','*',NULL,$quer,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $res =$this->db->getResult();
        $this->firstName=$res[0]['first_name'];
        $this->lastName=$res[0]['last_name'];
        $this->sex=$res[0]['sex'];
        $this->DOB=$res[0]['DOB'];
        $this->address=$res[0]['address'];
        $this->email=$res[0]['email'];
        $this->user_image=$res[0]['user_image'];
        $this->staff_id=$res[0]['staff_id'];
        $this->staff_id=$res[0]['pharmacist_id'];
        $this->phone=$res[0]['phone'];

    }
    public function loadBulk($username){
        $quer='username="'.$username.'"';
        $this->db->connect();
        $this->db->select('pharmacist','*',NULL,$quer,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $res =$this->db->getResult();
        return $res;
    }
>>>>>>> 67d08a6c063055685503fcdd53b5b9b9317562ad:UserClasses/Pharmacist.php
}