<?php
namespace bunq\Model\Generated;

use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\ChatMessageContent;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Endpoint for retrieving the messages that are part of a conversation.
 *
 * @generated
 */
class ChatMessageUser extends BunqModel
{
    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ChatMessageUser';

    /**
     * The id of the message.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the message was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the message was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The id of the conversation this message belongs to.
     *
     * @var int
     */
    protected $conversationId;

    /**
     * The user who initiated the action that caused this message to appear.
     *
     * @var LabelUser
     */
    protected $creator;

    /**
     * The user displayed as the sender of this message.
     *
     * @var LabelUser
     */
    protected $displayedSender;

    /**
     * The content of this message.
     *
     * @var ChatMessageContent
     */
    protected $content;

    /**
     * The id of the message.
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

    /**
     * The timestamp when the message was created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp when the message was last updated.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The id of the conversation this message belongs to.
     *
     * @return int
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @param int $conversationId
     */
    public function setConversationId($conversationId)
    {
        $this->conversationId = $conversationId;
    }

    /**
     * The user who initiated the action that caused this message to appear.
     *
     * @return LabelUser
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param LabelUser $creator
     */
    public function setCreator(LabelUser $creator)
    {
        $this->creator = $creator;
    }

    /**
     * The user displayed as the sender of this message.
     *
     * @return LabelUser
     */
    public function getDisplayedSender()
    {
        return $this->displayedSender;
    }

    /**
     * @param LabelUser $displayedSender
     */
    public function setDisplayedSender(LabelUser $displayedSender)
    {
        $this->displayedSender = $displayedSender;
    }

    /**
     * The content of this message.
     *
     * @return ChatMessageContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ChatMessageContent $content
     */
    public function setContent(ChatMessageContent $content)
    {
        $this->content = $content;
    }
}
