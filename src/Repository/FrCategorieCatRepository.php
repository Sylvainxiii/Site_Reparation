<?php

namespace App\Repository;

use App\Entity\FrCategorieCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrCategorieCat>
 *
 * @method FrCategorieCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrCategorieCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrCategorieCat[]    findAll()
 * @method FrCategorieCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrCategorieCatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrCategorieCat::class);
    }

//    /**
//     * @return FrCategorieCat[] Returns an array of FrCategorieCat objects
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

//    public function findOneBySomeField($value): ?FrCategorieCat
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
