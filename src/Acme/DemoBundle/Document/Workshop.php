<?php

namespace Acme\DemoBundle\Document;

use Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page;

class Workshop extends Page
{

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->getParentDocument();
    }

    /**
     * @param Event $event
     */
    public function setEvent(Event $event)
    {
        $this->setParentDocument($event);
    }
} 