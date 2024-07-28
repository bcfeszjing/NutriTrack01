<?php
/**
 * SubaccountEmailSettings
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://app.elasticemail.com/marketing/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;

use \ArrayAccess;
use \ElasticEmail\ObjectSerializer;

/**
 * SubaccountEmailSettings Class Doc Comment
 *
 * @category Class
 * @description Settings related to sending emails
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubaccountEmailSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubaccountEmailSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'monthly_refill_credits' => 'int',
        'requires_email_credits' => 'bool',
        'email_size_limit' => 'int',
        'daily_send_limit' => 'int',
        'max_contacts' => 'int',
        'enable_private_ip_purchase' => 'bool',
        'pool_name' => 'string',
        'valid_sender_domain_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'monthly_refill_credits' => 'int32',
        'requires_email_credits' => 'boolean',
        'email_size_limit' => 'int32',
        'daily_send_limit' => 'int32',
        'max_contacts' => 'int32',
        'enable_private_ip_purchase' => 'boolean',
        'pool_name' => 'string',
        'valid_sender_domain_only' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'monthly_refill_credits' => false,
        'requires_email_credits' => false,
        'email_size_limit' => false,
        'daily_send_limit' => false,
        'max_contacts' => false,
        'enable_private_ip_purchase' => false,
        'pool_name' => false,
        'valid_sender_domain_only' => true
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
        'monthly_refill_credits' => 'MonthlyRefillCredits',
        'requires_email_credits' => 'RequiresEmailCredits',
        'email_size_limit' => 'EmailSizeLimit',
        'daily_send_limit' => 'DailySendLimit',
        'max_contacts' => 'MaxContacts',
        'enable_private_ip_purchase' => 'EnablePrivateIPPurchase',
        'pool_name' => 'PoolName',
        'valid_sender_domain_only' => 'ValidSenderDomainOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monthly_refill_credits' => 'setMonthlyRefillCredits',
        'requires_email_credits' => 'setRequiresEmailCredits',
        'email_size_limit' => 'setEmailSizeLimit',
        'daily_send_limit' => 'setDailySendLimit',
        'max_contacts' => 'setMaxContacts',
        'enable_private_ip_purchase' => 'setEnablePrivateIpPurchase',
        'pool_name' => 'setPoolName',
        'valid_sender_domain_only' => 'setValidSenderDomainOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monthly_refill_credits' => 'getMonthlyRefillCredits',
        'requires_email_credits' => 'getRequiresEmailCredits',
        'email_size_limit' => 'getEmailSizeLimit',
        'daily_send_limit' => 'getDailySendLimit',
        'max_contacts' => 'getMaxContacts',
        'enable_private_ip_purchase' => 'getEnablePrivateIpPurchase',
        'pool_name' => 'getPoolName',
        'valid_sender_domain_only' => 'getValidSenderDomainOnly'
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
        $this->setIfExists('monthly_refill_credits', $data ?? [], null);
        $this->setIfExists('requires_email_credits', $data ?? [], null);
        $this->setIfExists('email_size_limit', $data ?? [], null);
        $this->setIfExists('daily_send_limit', $data ?? [], null);
        $this->setIfExists('max_contacts', $data ?? [], null);
        $this->setIfExists('enable_private_ip_purchase', $data ?? [], null);
        $this->setIfExists('pool_name', $data ?? [], null);
        $this->setIfExists('valid_sender_domain_only', $data ?? [], null);
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
     * Gets monthly_refill_credits
     *
     * @return int|null
     */
    public function getMonthlyRefillCredits()
    {
        return $this->container['monthly_refill_credits'];
    }

    /**
     * Sets monthly_refill_credits
     *
     * @param int|null $monthly_refill_credits Amount of credits added to Account automatically
     *
     * @return self
     */
    public function setMonthlyRefillCredits($monthly_refill_credits)
    {
        if (is_null($monthly_refill_credits)) {
            throw new \InvalidArgumentException('non-nullable monthly_refill_credits cannot be null');
        }
        $this->container['monthly_refill_credits'] = $monthly_refill_credits;

        return $this;
    }

    /**
     * Gets requires_email_credits
     *
     * @return bool|null
     */
    public function getRequiresEmailCredits()
    {
        return $this->container['requires_email_credits'];
    }

    /**
     * Sets requires_email_credits
     *
     * @param bool|null $requires_email_credits True, if Account needs credits to send emails. Otherwise, false
     *
     * @return self
     */
    public function setRequiresEmailCredits($requires_email_credits)
    {
        if (is_null($requires_email_credits)) {
            throw new \InvalidArgumentException('non-nullable requires_email_credits cannot be null');
        }
        $this->container['requires_email_credits'] = $requires_email_credits;

        return $this;
    }

    /**
     * Gets email_size_limit
     *
     * @return int|null
     */
    public function getEmailSizeLimit()
    {
        return $this->container['email_size_limit'];
    }

    /**
     * Sets email_size_limit
     *
     * @param int|null $email_size_limit Maximum size of email including attachments in MB's
     *
     * @return self
     */
    public function setEmailSizeLimit($email_size_limit)
    {
        if (is_null($email_size_limit)) {
            throw new \InvalidArgumentException('non-nullable email_size_limit cannot be null');
        }
        $this->container['email_size_limit'] = $email_size_limit;

        return $this;
    }

    /**
     * Gets daily_send_limit
     *
     * @return int|null
     */
    public function getDailySendLimit()
    {
        return $this->container['daily_send_limit'];
    }

    /**
     * Sets daily_send_limit
     *
     * @param int|null $daily_send_limit Amount of emails Account can send daily
     *
     * @return self
     */
    public function setDailySendLimit($daily_send_limit)
    {
        if (is_null($daily_send_limit)) {
            throw new \InvalidArgumentException('non-nullable daily_send_limit cannot be null');
        }
        $this->container['daily_send_limit'] = $daily_send_limit;

        return $this;
    }

    /**
     * Gets max_contacts
     *
     * @return int|null
     */
    public function getMaxContacts()
    {
        return $this->container['max_contacts'];
    }

    /**
     * Sets max_contacts
     *
     * @param int|null $max_contacts Maximum number of contacts the Account can have. 0 means that parent account's limit is used.
     *
     * @return self
     */
    public function setMaxContacts($max_contacts)
    {
        if (is_null($max_contacts)) {
            throw new \InvalidArgumentException('non-nullable max_contacts cannot be null');
        }
        $this->container['max_contacts'] = $max_contacts;

        return $this;
    }

    /**
     * Gets enable_private_ip_purchase
     *
     * @return bool|null
     */
    public function getEnablePrivateIpPurchase()
    {
        return $this->container['enable_private_ip_purchase'];
    }

    /**
     * Sets enable_private_ip_purchase
     *
     * @param bool|null $enable_private_ip_purchase Can the SubAccount purchase Private IP for themselves
     *
     * @return self
     */
    public function setEnablePrivateIpPurchase($enable_private_ip_purchase)
    {
        if (is_null($enable_private_ip_purchase)) {
            throw new \InvalidArgumentException('non-nullable enable_private_ip_purchase cannot be null');
        }
        $this->container['enable_private_ip_purchase'] = $enable_private_ip_purchase;

        return $this;
    }

    /**
     * Gets pool_name
     *
     * @return string|null
     */
    public function getPoolName()
    {
        return $this->container['pool_name'];
    }

    /**
     * Sets pool_name
     *
     * @param string|null $pool_name Name of your custom IP Pool to be used in the sending process
     *
     * @return self
     */
    public function setPoolName($pool_name)
    {
        if (is_null($pool_name)) {
            throw new \InvalidArgumentException('non-nullable pool_name cannot be null');
        }
        $this->container['pool_name'] = $pool_name;

        return $this;
    }

    /**
     * Gets valid_sender_domain_only
     *
     * @return bool|null
     */
    public function getValidSenderDomainOnly()
    {
        return $this->container['valid_sender_domain_only'];
    }

    /**
     * Sets valid_sender_domain_only
     *
     * @param bool|null $valid_sender_domain_only valid_sender_domain_only
     *
     * @return self
     */
    public function setValidSenderDomainOnly($valid_sender_domain_only)
    {
        if (is_null($valid_sender_domain_only)) {
            array_push($this->openAPINullablesSetToNull, 'valid_sender_domain_only');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid_sender_domain_only', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid_sender_domain_only'] = $valid_sender_domain_only;

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


