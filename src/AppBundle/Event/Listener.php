<?php
namespace AppBundle\Event;

use AppBundle\Entity\Category;
use Doctrine\ORM\Event\LifecycleEventArgs;

/**
 * Class Listener
 * @package AppBundle\EventListener
 */
class Listener
{
    /**
     * @param LifecycleEventArgs $args
     */
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Category) {
            return;
        }

        $entityManager = $args->getEntityManager();
    }
}
