<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\EmailBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class LeadListAccess extends Constraint
{
    public $message = 'Either no list was selected or you do not have access to one of the lists that was selected.';

    public function validatedBy()
    {
        return 'leadlist_access';
    }
}