<?php
require_once __DIR__ . "/../models/user.php";

/**
 * Controller for managing Users
 * 
 * This controller implements and perfoem all the major functionality required for managing usesrs.
 * This includes Sign Up, Login, account recovery etc.
 */
class UserController
{
    private $user = null;

    /**
     * The neccessary constructor
     */
    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Check if username already exists
     * 
     * @param string $username String for username that is to be check for existance
     * 
     * @returns boolean Return true if user already exists false otherwise (in case of DB error too)
     */
    public function username_exists($username)
    {
        $users = $this->user->select_all();
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($user['username'] == $username) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Check if email is already reistered.
     * 
     * @param string $email Valid email address that is to be checked
     * 
     * @returns boolean Returns true if user already exists false otherwise
     */
    public function email_exists($email)
    {
        $users = $this->user->select_all();
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($user['email'] == $email) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Verify credentials using username
     * 
     * @param string $username String representing an existing username
     * @param string $salted_password represent a salted/digested password
     * 
     * @returns boolean Returns if the credentials matched or not
     * 
     */
    public function verify_login_via_username($username, $salted_password)
    {
        $users = $this->user->select_all();
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($user['username'] == $username && $user['password'] == $salted_password) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Verify credentials using email address
     * 
     * @param string $email String representing an existing email address
     * @param string $salted_password represent a salted/digested password
     * 
     * @returns boolean Returns if the credentials matched or not
     * 
     */
    public function verify_login_via_email($email, $salted_password)
    {
        $users = $this->user->select_all();
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($user['email'] == $email && $user['password'] == $salted_password) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Create new account when validated parameters are given
     * 
     * @param string $email Email address to associate with new account
     * @param string $username username for new users
     * @param string $salted_password salted password string
     * @param string $dob Date of birth of the user
     * @param string $gender Gender of the user
     * 
     * @returns boolean Returns true if creation is successful false otherwise
     */
    public function create_account($email, $username, $salted_password, $dob, $gender)
    {
        return $this->user->insert([
            "email" => $email,
            "username" => $username,
            "password" => $salted_password,
            "dob" => $dob,
            "gender" => $gender
        ]);
    }

    /**
     * Generate recovery code for the user
     * 
     * @param string $email String representating email of the user to be recovered
     * 
     * @returns string|false a string representaing the returened recovery code if successful or false otherwise
     */
    public function generate_recovery_code($email)
    {
        date_default_timezone_set('UTC');
        $uid = $this->user->get_uid_by_email($email);
        $code = $this->guidv4();
        $timestamp = date("Y-m-d H:i:s");
        if ($this->user->update([
            'recovery_code' => $code,
            'recovery_code_created' => $timestamp,
        ], $uid)) {
            return $code;
        } else {
            return false;
        }
    }
    /**
     * GUID generation function for compatibility issues
     * 
     * @returns string Returns a string representing a GUID v4
     */
    private function guidv4()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');

        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}