<?php
namespace Hebotek\HeboFeManager\Controller;

use In2code\Femanager\Controller\EditController as FemanagerEditController;
use Hebotek\HeboFeManager\Domain\Model\User;

class EditController extends FemanagerEditController
{
    /**
     * action update
     *
     * @param Hebotek\HeboFeManager\Domain\Model\User $user
     */
    public function updateAction($user): void
    {
        parent::updateAction($user);
    }
}