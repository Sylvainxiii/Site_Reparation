<?php

namespace App\Repository;

use App\Entity\FrRemplacementRem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrRemplacementRem>
 *
 * @method FrRemplacementRem|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrRemplacementRem|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrRemplacementRem[]    findAll()
 * @method FrRemplacementRem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrRemplacementRemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrRemplacementRem::class);
    }

//    /**
//     * @return FrRemplacementRem[] Returns an array of FrRemplacementRem objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FrRemplacementRem
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
