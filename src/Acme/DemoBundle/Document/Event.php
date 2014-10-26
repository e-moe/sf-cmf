<?php

namespace Acme\DemoBundle\Document;

use Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page;
use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document()
 */
class Event extends Page
{

}
