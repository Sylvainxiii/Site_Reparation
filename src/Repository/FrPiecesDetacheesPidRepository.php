<?php

namespace App\Repository;

use App\Entity\FrPiecesDetacheesPid;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrPiecesDetacheesPid>
 *
 * @method FrPiecesDetacheesPid|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrPiecesDetacheesPid|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrPiecesDetacheesPid[]    findAll()
 * @method FrPiecesDetacheesPid[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrPiecesDetacheesPidRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrPiecesDetacheesPid::class);
    }

//    /**
//     * @return FrPiecesDetacheesPid[] Returns an array of FrPiecesDetacheesPid objects
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

//    public function findOneBySomeField($value): ?FrPiecesDetacheesPid
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
