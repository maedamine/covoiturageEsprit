<?php

namespace PiEsprit\CovoiturageBundle\Repository;
use Doctrine\ORM\EntityRepository;


class AnnonceRepository extends EntityRepository {


    public function getAllAnnonces() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('a')
            ->from('PiEspritCovoiturageBundle:Annonce', 'a');
        $query = $qb->getQuery();
        return $query->getResult();
    }

}
