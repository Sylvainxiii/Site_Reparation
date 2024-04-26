<?php

namespace App\Repository;

use App\Entity\FrOutilsOut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrOutilsOut>
 *
 * @method FrOutilsOut|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrOutilsOut|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrOutilsOut[]    findAll()
 * @method FrOutilsOut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrOutilsOutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrOutilsOut::class);
    }

//    /**
//     * @return FrOutilsOut[] Returns an array of FrOutilsOut objects
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

//    public function findOneBySomeField($value): ?FrOutilsOut
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
