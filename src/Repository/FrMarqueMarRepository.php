<?php

namespace App\Repository;

use App\Entity\FrMarqueMar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrMarqueMar>
 *
 * @method FrMarqueMar|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrMarqueMar|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrMarqueMar[]    findAll()
 * @method FrMarqueMar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrMarqueMarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrMarqueMar::class);
    }

//    /**
//     * @return FrMarqueMar[] Returns an array of FrMarqueMar objects
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

//    public function findOneBySomeField($value): ?FrMarqueMar
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
