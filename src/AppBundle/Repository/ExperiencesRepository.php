<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Experiences repository.
*/
class ExperiencesRepository extends EntityRepository {
    
    /**
     * Find ...
     */
    public function findAllExperiences(){
        $qBuilder = $this->getEntityManager()
            ->createQueryBuilder();
            
        $qBuilder->select('e');
        $qBuilder->from('AppBundle:Experiences', 'e');
        
        $result = $qBuilder->getQuery()->getResult();
        
        return $result;
    }
}
    