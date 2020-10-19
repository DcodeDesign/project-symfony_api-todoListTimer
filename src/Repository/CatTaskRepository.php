<?php

namespace App\Repository;

use App\Entity\CatTask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CatTask|null find($id, $lockMode = null, $lockVersion = null)
 * @method CatTask|null findOneBy(array $criteria, array $orderBy = null)
 * @method CatTask[]    findAll()
 * @method CatTask[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatTaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatTask::class);
    }

    // /**
    //  * @return CatTask[] Returns an array of CatTask objects
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
    public function findOneBySomeField($value): ?CatTask
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
