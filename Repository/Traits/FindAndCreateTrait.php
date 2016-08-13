<?php
namespace njr03304\DoctrineExtensionsBundle\Repository\Traits;

use Doctrine\Common\Util\Inflector;

trait FindAndCreateTrait
{
    public function findByElseCreate(array $criteria, array $orderBy = null)
    {
        $entity = $this->findOneBy($criteria, $orderBy);

        if (!$entity) {
            $class_name = $this->getClassName();
            $entity = new $class_name;
            foreach ($criteria as $key => $value) {
                $setter = 'set' . Inflector::classify($key);
                $entity->$setter($value);
            }
        }
        return $entity;
    }
}
