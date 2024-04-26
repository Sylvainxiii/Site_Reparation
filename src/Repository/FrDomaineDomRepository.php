<?php

namespace App\Repository;

use App\Entity\FrDomaineDom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrDomaineDom>
 *
 * @method FrDomaineDom|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrDomaineDom|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrDomaineDom[]    findAll()
 * @method FrDomaineDom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrDomaineDomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrDomaineDom::class);
    }

//    /**
//     * @return FrDomaineDom[] Returns an array of FrDomaineDom objects
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

//    public function findOneBySomeField($value): ?FrDomaineDom
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
