<?php

namespace Entity;

/**
 * @Entity
 * @table(name="users")
 */
class User {

    /**
     * Código de identificação do usuário.
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue
     */
    protected $id;

    /**
     * Nível de permissão do usuário, utilizado para diferenciar
     * usuários comuns dos administradores do sistema.
     * @Column(name="access_level")
     */
    protected $access_level;

    /**
     * Status da conta.
     * 0 = normal
     * 1 = pendente de confirmação
     * 2 = banido
     * @Column(name="state")
     * @since   1.0.0
     */
    protected $state;

    /**
     * Nome do usuário.
     * @Column(name="name")
     * @since   1.0.0
     */
    protected $name;

    /**
     * Endereço de e-mail do usuário.
     * @Column(name="email")
     * @since   1.0.0
     */
    protected $email;

    /**
     * Senha do usuário.
     * @Column(name="password")
     * @since   1.0.0
     */
    protected $password;

    /**
     * Último login realizado pelo usuário.
     * @Column(name="last_login", type="datetime", nullable=TRUE)
     * @since   1.0.0
     */
    protected $last_login;

    /**
     * Último endereço de IP utilizado pelo o usuário
     * para acessar a conta.
     * @Column(name="last_ip", nullable=TRUE)
     * @since   1.0.0
     */
    protected $last_ip;

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
    private function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of access_level
     */ 
    public function get_access_level()
    {
        return $this->access_level;
    }

    /**
     * Set the value of access_level
     *
     * @return  self
     */ 
    public function set_access_level($access_level)
    {
        $this->access_level = $access_level;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function get_state()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function set_state($state)
    {
        $this->state = $state;

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
     * Get the value of last_login
     */ 
    public function get_last_login()
    {
        return $this->last_login;
    }

    /**
     * Set the value of last_login
     *
     * @return  self
     */ 
    public function set_last_login($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Get the value of last_ip
     */ 
    public function get_last_ip()
    {
        return $this->last_ip;
    }

    /**
     * Set the value of last_ip
     *
     * @return  self
     */ 
    public function set_last_ip($last_ip)
    {
        $this->last_ip = $last_ip;

        return $this;
    }

}
