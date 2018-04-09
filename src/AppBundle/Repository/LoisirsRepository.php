<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Loisirs repository.
*/

class LoisirsRepository extends EntityRepository {
    /**
     * Find ...
     */
     
    public function findAllLoisirs(){
        $qBuilder = $this
            ->getEntityManager()
            ->createQueryBuilder();
            
        $qBuilder -> select('l');
        $qBuilder -> from ('AppBundle:Loisirs', 'l');
        
        $result = $qBuilder -> getQuery()->getResult();
        
        return $result;
    }
}
    