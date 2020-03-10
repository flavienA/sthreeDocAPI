<?php

namespace App\Repository;

use App\Entity\CentreInteret;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CentreInteret|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreInteret|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreInteret[]    findAll()
 * @method CentreInteret[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreInteretRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CentreInteret::class);
    }

    // /**
    //  * @return CentreInteret[] Returns an array of CentreInteret objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CentreInteret
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
