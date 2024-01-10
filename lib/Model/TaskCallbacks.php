<?php
/**
 * TaskCallbacks
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
 * The version of the OpenAPI document: 2.685.0
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
 * TaskCallbacks Class Doc Comment
 *
 * @category Class
 * @description Callbacks for the task. Find more info in the &lt;a href&#x3D;&#39;https://documentation.finapi.io/webform/For-best-results!.2477654019.html#Forbestresults!-Enhanceyourexperience!&#39; target&#x3D;&#39;_blank&#39;&gt;Web Form 2.0 Public Documentation&lt;/a&gt;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TaskCallbacks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskCallbacks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'finalised' => 'string',
        'web_form_required' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'finalised' => null,
        'web_form_required' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'finalised' => true,
		'web_form_required' => true
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
        'finalised' => 'finalised',
        'web_form_required' => 'webFormRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finalised' => 'setFinalised',
        'web_form_required' => 'setWebFormRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finalised' => 'getFinalised',
        'web_form_required' => 'getWebFormRequired'
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
        $this->setIfExists('finalised', $data ?? [], null);
        $this->setIfExists('web_form_required', $data ?? [], null);
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

        if (!is_null($this->container['finalised']) && (mb_strlen($this->container['finalised']) > 2048)) {
            $invalidProperties[] = "invalid value for 'finalised', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['finalised']) && (mb_strlen($this->container['finalised']) < 0)) {
            $invalidProperties[] = "invalid value for 'finalised', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['finalised']) && !preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $this->container['finalised'])) {
            $invalidProperties[] = "invalid value for 'finalised', must be conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.";
        }

        if (!is_null($this->container['web_form_required']) && (mb_strlen($this->container['web_form_required']) > 2048)) {
            $invalidProperties[] = "invalid value for 'web_form_required', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['web_form_required']) && (mb_strlen($this->container['web_form_required']) < 0)) {
            $invalidProperties[] = "invalid value for 'web_form_required', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['web_form_required']) && !preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $this->container['web_form_required'])) {
            $invalidProperties[] = "invalid value for 'web_form_required', must be conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.";
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
     * Gets finalised
     *
     * @return string|null
     */
    public function getFinalised()
    {
        return $this->container['finalised'];
    }

    /**
     * Sets finalised
     *
     * @param string|null $finalised URL to which finAPI sends the notification message after the task is finalised (either completed successfully or with an error).<br/>finAPI will call this URL with HTTP method POST ignoring the response of the target endpoint. Only HTTPS URLs are allowed.
     *
     * @return self
     */
    public function setFinalised($finalised)
    {
        if (is_null($finalised)) {
            array_push($this->openAPINullablesSetToNull, 'finalised');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('finalised', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($finalised) && (mb_strlen($finalised) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $finalised when calling TaskCallbacks., must be smaller than or equal to 2048.');
        }
        if (!is_null($finalised) && (mb_strlen($finalised) < 0)) {
            throw new \InvalidArgumentException('invalid length for $finalised when calling TaskCallbacks., must be bigger than or equal to 0.');
        }
        if (!is_null($finalised) && (!preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $finalised))) {
            throw new \InvalidArgumentException("invalid value for \$finalised when calling TaskCallbacks., must conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.");
        }

        $this->container['finalised'] = $finalised;

        return $this;
    }

    /**
     * Gets web_form_required
     *
     * @return string|null
     */
    public function getWebFormRequired()
    {
        return $this->container['web_form_required'];
    }

    /**
     * Sets web_form_required
     *
     * @param string|null $web_form_required URL to which finAPI sends the notification message when the update can longer run in the background.<br/>finAPI will call this URL with HTTP method POST ignoring the response of the target endpoint. Only HTTPS URLs are allowed.
     *
     * @return self
     */
    public function setWebFormRequired($web_form_required)
    {
        if (is_null($web_form_required)) {
            array_push($this->openAPINullablesSetToNull, 'web_form_required');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('web_form_required', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($web_form_required) && (mb_strlen($web_form_required) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $web_form_required when calling TaskCallbacks., must be smaller than or equal to 2048.');
        }
        if (!is_null($web_form_required) && (mb_strlen($web_form_required) < 0)) {
            throw new \InvalidArgumentException('invalid length for $web_form_required when calling TaskCallbacks., must be bigger than or equal to 0.');
        }
        if (!is_null($web_form_required) && (!preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $web_form_required))) {
            throw new \InvalidArgumentException("invalid value for \$web_form_required when calling TaskCallbacks., must conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.");
        }

        $this->container['web_form_required'] = $web_form_required;

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


