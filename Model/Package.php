<?php
/**
 * Package
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
 * Class representing the Package model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Package
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $id;

    /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * Available flavors
     *
     * @var                      string|null
     * @SerializedName("flavor")
     * @Assert\Choice({          "pocketcode", "pocketalice", "pocketgalaxy", "pocketphiro", "phirocode", "luna", "create@school", "embroidery", "arduino" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $flavor;

    /**
     * @var string|null
     * @SerializedName("package")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $package;

    /**
     * @var string|null
     * @SerializedName("category")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $category;

    /**
     * @var string|null
     * @SerializedName("author")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $author;

    /**
     * @var string|null
     * @SerializedName("extension")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $extension;

    /**
     * @var string|null
     * @SerializedName("download_url")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $downloadUrl;

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->flavor = isset($data['flavor']) ? $data['flavor'] : null;
        $this->package = isset($data['package']) ? $data['package'] : null;
        $this->category = isset($data['category']) ? $data['category'] : null;
        $this->author = isset($data['author']) ? $data['author'] : null;
        $this->extension = isset($data['extension']) ? $data['extension'] : null;
        $this->downloadUrl = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets flavor.
     *
     * @return string|null
     */
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * Sets flavor.
     *
     * @param string|null $flavor Available flavors
     *
     * @return $this
     */
    public function setFlavor($flavor = null)
    {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * Gets package.
     *
     * @return string|null
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets package.
     *
     * @param string|null $package
     *
     * @return $this
     */
    public function setPackage($package = null)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Gets category.
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category.
     *
     * @param string|null $category
     *
     * @return $this
     */
    public function setCategory($category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets author.
     *
     * @param string|null $author
     *
     * @return $this
     */
    public function setAuthor($author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Gets extension.
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets extension.
     *
     * @param string|null $extension
     *
     * @return $this
     */
    public function setExtension($extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Gets downloadUrl.
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * Sets downloadUrl.
     *
     * @param string|null $downloadUrl
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl = null)
    {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }
}


