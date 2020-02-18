<?php
/**
 * Login
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 1.0.7
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Login model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Login
{
        /**
     * Name of the user
     *
     * @var                        string|null
     * @SerializedName("username")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 180
     * )
     * @Assert\Length(
     *   min = 3
     * )
     */
    protected $username;

    /**
     * A secure password.
     *
     * @var                        string|null
     * @SerializedName("password")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 4096
     * )
     * @Assert\Length(
     *   min = 6
     * )
     */
    protected $password;

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
    }

    /**
     * Gets username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets username.
     *
     * @param string|null $username Name of the user
     *
     * @return $this
     */
    public function setUsername($username = null)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password.
     *
     * @param string|null $password A secure password.
     *
     * @return $this
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }
}


