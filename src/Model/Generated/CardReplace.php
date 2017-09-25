<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * It is possible to order a card replacement with the bunq
 * API.<br/><br/>You can order up to three free card replacements per year.
 * Additional replacement requests will be billed.<br/><br/>The card
 * replacement will have the same expiry date and the same pricing as the
 * old card, but it will have a new card number. You can change the
 * description and PIN through the card replacement endpoint.
 *
 * @generated
 */
class CardReplace extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_PIN_CODE = 'pin_code';
    const FIELD_SECOND_LINE = 'second_line';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card/%s/replace';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CardReplace';

    /**
     * The id of the new card.
     *
     * @var int
     */
    protected $id;

    /**
     * Request a card replacement.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $cardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $cardId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $apiClient->enableEncryption();
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $cardId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * The id of the new card.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
