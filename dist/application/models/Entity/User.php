<?php

namespace Entity;

/**
 * @Entity
 * @table(name="users")
 */
class User {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    protected $id;

    /**
     * @Column(name="username")
     */
    protected $username;

    /**
     * @Column(name="password")
     */
    protected $password;

    /**
     * @Column(name="name")
     */
    protected $name;

    /**
     * @Column(name="email")
     */
    protected $email;

    /**
     * Get the value of id
     * 
     * @return  int
     */ 
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     * 
     * @return  string
     */ 
    public function get_username()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function set_username($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     * 
     * @return  string
     */ 
    public function get_password()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function set_password($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of name
     * 
     * @return  string
     */ 
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function set_name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     * 
     * @return  string
     */ 
    public function get_email()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function set_email($email)
    {
        $this->email = $email;

        return $this;
    }

}
