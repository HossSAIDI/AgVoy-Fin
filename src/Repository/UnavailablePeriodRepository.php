<?php

namespace App\Repository;

use App\Entity\UnavailablePeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnavailablePeriod|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnavailablePeriod|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnavailablePeriod[]    findAll()
 * @method UnavailablePeriod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnavailablePeriodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnavailablePeriod::class);
    }

    // /**
    //  * @return UnavailablePeriod[] Returns an array of UnavailablePeriod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnavailablePeriod
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
