<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\LeadBundle\Event;

use Mautic\LeadBundle\Entity\Lead;
use Symfony\Component\EventDispatcher\Event;

class ContactIdentificationEvent extends Event
{
    /**
     * @var array
     */
    private $clickthrough;

    /**
     * @var Lead
     */
    private $identifiedContact;

    /**
     * ContactIdentificationEvent constructor.
     *
     * @param array $clickthrough
     */
    public function __construct(array $clickthrough)
    {
        $this->clickthrough = $clickthrough;
    }

    /**
     * @return array
     */
    public function getClickthrough()
    {
        return $this->clickthrough;
    }

    /**
     * @param Lead $contact
     */
    public function setIdentifiedContact(Lead $contact)
    {
        $this->identifiedContact = $contact;

        $this->stopPropagation();
    }

    /**
     * @return Lead
     */
    public function getIdentifiedContact()
    {
        return $this->identifiedContact;
    }
}
