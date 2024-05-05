<?php

namespace App\Repository;

use App\Entity\FrObjetObj;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrObjetObj>
 *
 * @method FrObjetObj|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrObjetObj|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrObjetObj[]    findAll()
 * @method FrObjetObj[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrObjetObjRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrObjetObj::class);
    }

//    /**
//     * @return FrObjetObj[] Returns an array of FrObjetObj objects
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

//    public function findOneBySomeField($value): ?FrObjetObj
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
