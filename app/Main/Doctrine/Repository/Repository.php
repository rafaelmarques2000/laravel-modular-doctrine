<?php


namespace App\Main\Doctrine\Repository;


class Repository extends AbstractRepository
{
    /**
     * @param object $entity
     * @throws \Doctrine\ORM\ORMException
     */
    public function add(object $entity){
         $this->_em->persist($entity);
     }

    /**
     * @param object $entity
     * @throws \Doctrine\ORM\ORMException
     */
    public function update(object $entity){
        $this->_em->merge($entity);
    }

    /**
     * @param object $entity
     * @throws \Doctrine\ORM\ORMException
     */
    public function remove(object $entity){
         $this->_em->remove($entity);
    }

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilder(){
         return $this->_em->createQueryBuilder();
    }

}
