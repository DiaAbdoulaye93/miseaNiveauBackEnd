<?php

namespace App\Repository;

use App\Entity\GrpCompetences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GrpCompetences|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrpCompetences|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrpCompetences[]    findAll()
 * @method GrpCompetences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrpCompetencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrpCompetences::class);
    }

    // /**
    //  * @return GrpCompetences[] Returns an array of GrpCompetences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GrpCompetences
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
