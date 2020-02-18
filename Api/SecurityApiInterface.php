<?php
/**
 * SecurityApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
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

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\APIValidationResponse;
use OpenAPI\Server\Model\Login;
use OpenAPI\Server\Model\LoginResponseOK;
use OpenAPI\Server\Model\Logout;
use OpenAPI\Server\Model\Register;
use OpenAPI\Server\Model\UsernameObject;

/**
 * SecurityApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SecurityApiInterface
{

    /**
     * Operation checkTokenPost
     *
     * Checking token
     *
     * @param string                              $token           (required)
     * @param OpenAPI\Server\Model\UsernameObject $usernameObject  (required)
     * @param integer                             $responseCode    The HTTP response code to return
     * @param array                               $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function checkTokenPost($token, UsernameObject $usernameObject, &$responseCode, array &$responseHeaders);

    /**
     * Operation loginPost
     *
     * Login a user
     *
     * @param OpenAPI\Server\Model\Login $login           (required)
     * @param integer                    $responseCode    The HTTP response code to return
     * @param array                      $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\LoginResponseOK
     */
    public function loginPost(Login $login, &$responseCode, array &$responseHeaders);

    /**
     * Operation logoutPost
     *
     * Log out a user
     *
     * @param string                      $token           (required)
     * @param OpenAPI\Server\Model\Logout $logout          (required)
     * @param integer                     $responseCode    The HTTP response code to return
     * @param array                       $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function logoutPost($token, Logout $logout, &$responseCode, array &$responseHeaders);

    /**
     * Operation registerUserPost
     *
     * Registering a user
     *
     * @param OpenAPI\Server\Model\Register $register        (required)
     * @param integer                       $responseCode    The HTTP response code to return
     * @param array                         $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function registerUserPost(Register $register, &$responseCode, array &$responseHeaders);

    /**
     * Operation registerValidationPost
     *
     * Validation of user input in the registration process
     *
     * @param OpenAPI\Server\Model\Register $register        (required)
     * @param integer                       $responseCode    The HTTP response code to return
     * @param array                         $responseHeaders Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function registerValidationPost(Register $register, &$responseCode, array &$responseHeaders);
}
