<?php
/**
 * Brand
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * finAPI Web Form 2.0
 *
 * The following pages give you some general information on how to use our APIs.<br/>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br/><br/>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target='_blank' href='https://docs.finapi.io/?product=access#tag--Authorization'>Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br/>Please also remember that all user management functions should be looked up in <a target='_blank' href='https://docs.finapi.io/?product=access'>Access</a>.<br/><br/>You should also check out the <a target='_blank' href='https://documentation.finapi.io/webform/'>Web Form 2.0 Public Documentation</a> as well as <a target='_blank' href='https://documentation.finapi.io/access/'>Access Public Documentation</a> for more information. If you need any help with the API, contact <a href='mailto:support@finapi.io'>support@finapi.io</a>.<br/><h2 id=\"general-information\">General information</h2><h3 id=\"general-request-ids\"><strong>Request IDs</strong></h3>With any API call, you can pass a request ID via a header with name \"X-Request-Id\". The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error.<br/><br/>If you don't pass a request ID for a call, finAPI will generate a random ID internally.<br/><br/>The request ID is always returned back in the response of a service, as a header with name \"X-Request-Id\".<br/><br/>We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response(especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.<h3 id=\"type-coercion\"><strong>Type Coercion</strong></h3>In order to ease the integration for some languages, which do not natively support high precision number representations, Web Form 2.0 API supports relax type binding for the openAPI type <code>number</code>, which is used for money amount fields. If you use one of those languages, to avoid precision errors that can appear from <code>float</code> values, you can pass the amount as a <code>string</code>.<h3 id=\"general-faq\"><strong>FAQ</strong></h3><strong>Is there a finAPI SDK?</strong><br/>Currently we do not offer a native SDK, but there is the option to generate an SDKfor almost any target language via OpenAPI. Use the 'Download SDK' button on this page for SDK generation.<br/><br/><strong>Why do I need to keep authorizing when calling services on this page?</strong><br/>This page is a \"one-page-app\". Reloading the page resets the OAuth authorization context. There is generally no need to reload the page, so just don't do it and your authorization will persist.
 *
 * The version of the OpenAPI document: 2.683.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Brand Class Doc Comment
 *
 * @category Class
 * @description Customization related to branding
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Brand implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Brand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo' => 'string',
        'favicon' => 'string',
        'icon' => '\OpenAPI\Client\Model\Icon',
        'intro_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo' => null,
        'favicon' => null,
        'icon' => null,
        'intro_text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'logo' => true,
		'favicon' => true,
		'icon' => true,
		'intro_text' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'logo' => 'logo',
        'favicon' => 'favicon',
        'icon' => 'icon',
        'intro_text' => 'introText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo' => 'setLogo',
        'favicon' => 'setFavicon',
        'icon' => 'setIcon',
        'intro_text' => 'setIntroText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo' => 'getLogo',
        'favicon' => 'getFavicon',
        'icon' => 'getIcon',
        'intro_text' => 'getIntroText'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('favicon', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('intro_text', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) > 5000000)) {
            $invalidProperties[] = "invalid value for 'logo', the character length must be smaller than or equal to 5000000.";
        }

        if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) < 0)) {
            $invalidProperties[] = "invalid value for 'logo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['logo']) && !preg_match("/data:image\/(png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/", $this->container['logo'])) {
            $invalidProperties[] = "invalid value for 'logo', must be conform to the pattern /data:image\/(png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/.";
        }

        if (!is_null($this->container['favicon']) && (mb_strlen($this->container['favicon']) > 500000)) {
            $invalidProperties[] = "invalid value for 'favicon', the character length must be smaller than or equal to 500000.";
        }

        if (!is_null($this->container['favicon']) && (mb_strlen($this->container['favicon']) < 0)) {
            $invalidProperties[] = "invalid value for 'favicon', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['favicon']) && !preg_match("/data:image\/(x-icon|png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/", $this->container['favicon'])) {
            $invalidProperties[] = "invalid value for 'favicon', must be conform to the pattern /data:image\/(x-icon|png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/.";
        }

        if (!is_null($this->container['intro_text']) && (mb_strlen($this->container['intro_text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'intro_text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['intro_text']) && (mb_strlen($this->container['intro_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'intro_text', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Logo of minimum height 40px that will be shown in the web form header.Bigger images are also accepted, but will be scaled down.<br/>The image must follow the DATA URI scheme: <code>data:[\\<media type\\>][;base64],\\<data\\></code><br/><br/><strong>NOTE:</strong> For `UNLICENSED` mandators, if no value is provided, then the following value will be applied by default when web form is opened: <br/><code>finAPI GmbH Logo</code>
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, 'logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($logo) && (mb_strlen($logo) > 5000000)) {
            throw new \InvalidArgumentException('invalid length for $logo when calling Brand., must be smaller than or equal to 5000000.');
        }
        if (!is_null($logo) && (mb_strlen($logo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $logo when calling Brand., must be bigger than or equal to 0.');
        }
        if (!is_null($logo) && (!preg_match("/data:image\/(png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/", $logo))) {
            throw new \InvalidArgumentException("invalid value for \$logo when calling Brand., must conform to the pattern /data:image\/(png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/.");
        }

        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets favicon
     *
     * @return string|null
     */
    public function getFavicon()
    {
        return $this->container['favicon'];
    }

    /**
     * Sets favicon
     *
     * @param string|null $favicon Logo of minimum size 32x32px that will be shown in the browser tab favicon.<br/>The image must follow the DATA URI scheme: <code>data:[\\<media type\\>][;base64],\\<data\\></code><br/><br/><strong>NOTE:</strong> For `UNLICENSED` mandators, if no value is provided, then the following value will be applied by default when web form is opened: <br/><code>finAPI GmbH favicon</code>
     *
     * @return self
     */
    public function setFavicon($favicon)
    {
        if (is_null($favicon)) {
            array_push($this->openAPINullablesSetToNull, 'favicon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('favicon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($favicon) && (mb_strlen($favicon) > 500000)) {
            throw new \InvalidArgumentException('invalid length for $favicon when calling Brand., must be smaller than or equal to 500000.');
        }
        if (!is_null($favicon) && (mb_strlen($favicon) < 0)) {
            throw new \InvalidArgumentException('invalid length for $favicon when calling Brand., must be bigger than or equal to 0.');
        }
        if (!is_null($favicon) && (!preg_match("/data:image\/(x-icon|png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/", $favicon))) {
            throw new \InvalidArgumentException("invalid value for \$favicon when calling Brand., must conform to the pattern /data:image\/(x-icon|png|jpg|jpeg|gif|svg\\+xml);base64,(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?/.");
        }

        $this->container['favicon'] = $favicon;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return \OpenAPI\Client\Model\Icon|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param \OpenAPI\Client\Model\Icon|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets intro_text
     *
     * @return string|null
     */
    public function getIntroText()
    {
        return $this->container['intro_text'];
    }

    /**
     * Sets intro_text
     *
     * @param string|null $intro_text An introduction text that will be shown on the first web form view for bank selection.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>null</code>.
     *
     * @return self
     */
    public function setIntroText($intro_text)
    {
        if (is_null($intro_text)) {
            array_push($this->openAPINullablesSetToNull, 'intro_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intro_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($intro_text) && (mb_strlen($intro_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $intro_text when calling Brand., must be smaller than or equal to 1000.');
        }
        if (!is_null($intro_text) && (mb_strlen($intro_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $intro_text when calling Brand., must be bigger than or equal to 0.');
        }

        $this->container['intro_text'] = $intro_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


