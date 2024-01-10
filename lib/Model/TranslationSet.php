<?php
/**
 * TranslationSet
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
 * TranslationSet Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TranslationSet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TranslationSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'cs' => '\OpenAPI\Client\Model\Translation',
        'de' => '\OpenAPI\Client\Model\Translation',
        'en' => '\OpenAPI\Client\Model\Translation',
        'es' => '\OpenAPI\Client\Model\Translation',
        'fr' => '\OpenAPI\Client\Model\Translation',
        'it' => '\OpenAPI\Client\Model\Translation',
        'nl' => '\OpenAPI\Client\Model\Translation',
        'pl' => '\OpenAPI\Client\Model\Translation',
        'ro' => '\OpenAPI\Client\Model\Translation',
        'sk' => '\OpenAPI\Client\Model\Translation',
        'tr' => '\OpenAPI\Client\Model\Translation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'cs' => null,
        'de' => null,
        'en' => null,
        'es' => null,
        'fr' => null,
        'it' => null,
        'nl' => null,
        'pl' => null,
        'ro' => null,
        'sk' => null,
        'tr' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'cs' => true,
		'de' => true,
		'en' => true,
		'es' => true,
		'fr' => true,
		'it' => true,
		'nl' => true,
		'pl' => true,
		'ro' => true,
		'sk' => true,
		'tr' => true
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
        'id' => 'id',
        'created_at' => 'createdAt',
        'cs' => 'cs',
        'de' => 'de',
        'en' => 'en',
        'es' => 'es',
        'fr' => 'fr',
        'it' => 'it',
        'nl' => 'nl',
        'pl' => 'pl',
        'ro' => 'ro',
        'sk' => 'sk',
        'tr' => 'tr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'cs' => 'setCs',
        'de' => 'setDe',
        'en' => 'setEn',
        'es' => 'setEs',
        'fr' => 'setFr',
        'it' => 'setIt',
        'nl' => 'setNl',
        'pl' => 'setPl',
        'ro' => 'setRo',
        'sk' => 'setSk',
        'tr' => 'setTr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'cs' => 'getCs',
        'de' => 'getDe',
        'en' => 'getEn',
        'es' => 'getEs',
        'fr' => 'getFr',
        'it' => 'getIt',
        'nl' => 'getNl',
        'pl' => 'getPl',
        'ro' => 'getRo',
        'sk' => 'getSk',
        'tr' => 'getTr'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('cs', $data ?? [], null);
        $this->setIfExists('de', $data ?? [], null);
        $this->setIfExists('en', $data ?? [], null);
        $this->setIfExists('es', $data ?? [], null);
        $this->setIfExists('fr', $data ?? [], null);
        $this->setIfExists('it', $data ?? [], null);
        $this->setIfExists('nl', $data ?? [], null);
        $this->setIfExists('pl', $data ?? [], null);
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('sk', $data ?? [], null);
        $this->setIfExists('tr', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['id']) < 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Globally unique translation set's identifier
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if ((mb_strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling TranslationSet., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling TranslationSet., must be bigger than or equal to 36.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The timestamp when the translation set was created in the format <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets cs
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getCs()
    {
        return $this->container['cs'];
    }

    /**
     * Sets cs
     *
     * @param \OpenAPI\Client\Model\Translation|null $cs cs
     *
     * @return self
     */
    public function setCs($cs)
    {
        if (is_null($cs)) {
            array_push($this->openAPINullablesSetToNull, 'cs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cs'] = $cs;

        return $this;
    }

    /**
     * Gets de
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getDe()
    {
        return $this->container['de'];
    }

    /**
     * Sets de
     *
     * @param \OpenAPI\Client\Model\Translation|null $de de
     *
     * @return self
     */
    public function setDe($de)
    {
        if (is_null($de)) {
            array_push($this->openAPINullablesSetToNull, 'de');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('de', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['de'] = $de;

        return $this;
    }

    /**
     * Gets en
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     *
     * @param \OpenAPI\Client\Model\Translation|null $en en
     *
     * @return self
     */
    public function setEn($en)
    {
        if (is_null($en)) {
            array_push($this->openAPINullablesSetToNull, 'en');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('en', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets es
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getEs()
    {
        return $this->container['es'];
    }

    /**
     * Sets es
     *
     * @param \OpenAPI\Client\Model\Translation|null $es es
     *
     * @return self
     */
    public function setEs($es)
    {
        if (is_null($es)) {
            array_push($this->openAPINullablesSetToNull, 'es');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('es', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['es'] = $es;

        return $this;
    }

    /**
     * Gets fr
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getFr()
    {
        return $this->container['fr'];
    }

    /**
     * Sets fr
     *
     * @param \OpenAPI\Client\Model\Translation|null $fr fr
     *
     * @return self
     */
    public function setFr($fr)
    {
        if (is_null($fr)) {
            array_push($this->openAPINullablesSetToNull, 'fr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fr'] = $fr;

        return $this;
    }

    /**
     * Gets it
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getIt()
    {
        return $this->container['it'];
    }

    /**
     * Sets it
     *
     * @param \OpenAPI\Client\Model\Translation|null $it it
     *
     * @return self
     */
    public function setIt($it)
    {
        if (is_null($it)) {
            array_push($this->openAPINullablesSetToNull, 'it');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('it', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['it'] = $it;

        return $this;
    }

    /**
     * Gets nl
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getNl()
    {
        return $this->container['nl'];
    }

    /**
     * Sets nl
     *
     * @param \OpenAPI\Client\Model\Translation|null $nl nl
     *
     * @return self
     */
    public function setNl($nl)
    {
        if (is_null($nl)) {
            array_push($this->openAPINullablesSetToNull, 'nl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nl'] = $nl;

        return $this;
    }

    /**
     * Gets pl
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getPl()
    {
        return $this->container['pl'];
    }

    /**
     * Sets pl
     *
     * @param \OpenAPI\Client\Model\Translation|null $pl pl
     *
     * @return self
     */
    public function setPl($pl)
    {
        if (is_null($pl)) {
            array_push($this->openAPINullablesSetToNull, 'pl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pl'] = $pl;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getRo()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param \OpenAPI\Client\Model\Translation|null $ro ro
     *
     * @return self
     */
    public function setRo($ro)
    {
        if (is_null($ro)) {
            array_push($this->openAPINullablesSetToNull, 'ro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets sk
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
     * Sets sk
     *
     * @param \OpenAPI\Client\Model\Translation|null $sk sk
     *
     * @return self
     */
    public function setSk($sk)
    {
        if (is_null($sk)) {
            array_push($this->openAPINullablesSetToNull, 'sk');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sk', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sk'] = $sk;

        return $this;
    }

    /**
     * Gets tr
     *
     * @return \OpenAPI\Client\Model\Translation|null
     */
    public function getTr()
    {
        return $this->container['tr'];
    }

    /**
     * Sets tr
     *
     * @param \OpenAPI\Client\Model\Translation|null $tr tr
     *
     * @return self
     */
    public function setTr($tr)
    {
        if (is_null($tr)) {
            array_push($this->openAPINullablesSetToNull, 'tr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tr'] = $tr;

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


