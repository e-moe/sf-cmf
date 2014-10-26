<?php

namespace Acme\DemoBundle\Document;

use Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page;

class Timeslot extends Page
{
    /** @var string */
    private $room;

    /** @var integer */
    private $totalPlaces;

    /**
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param string $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * @return int
     */
    public function getTotalPlaces()
    {
        return $this->totalPlaces;
    }

    /**
     * @param int $totalPlaces
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->totalPlaces = $totalPlaces;
    }

    /**
     * @return Workshop
     */
    public function getWorkshop()
    {
        return $this->getParentDocument();
    }

    /**
     * @param Workshop $event
     */
    public function setWorkshop(Workshop $event)
    {
        $this->setParentDocument($event);
    }
} 