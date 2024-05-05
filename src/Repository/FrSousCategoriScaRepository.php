<?php

namespace App\Repository;

use App\Entity\FrSousCategoriSca;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrSousCategoriSca>
 *
 * @method FrSousCategoriSca|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrSousCategoriSca|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrSousCategoriSca[]    findAll()
 * @method FrSousCategoriSca[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrSousCategoriScaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrSousCategoriSca::class);
    }

//    /**
//     * @return FrSousCategoriSca[] Returns an array of FrSousCategoriSca objects
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

//    public function findOneBySomeField($value): ?FrSousCategoriSca
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
