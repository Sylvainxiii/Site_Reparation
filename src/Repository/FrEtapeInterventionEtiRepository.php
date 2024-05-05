<?php

namespace App\Repository;

use App\Entity\FrEtapeInterventionEti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrEtapeInterventionEti>
 *
 * @method FrEtapeInterventionEti|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrEtapeInterventionEti|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrEtapeInterventionEti[]    findAll()
 * @method FrEtapeInterventionEti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrEtapeInterventionEtiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrEtapeInterventionEti::class);
    }

//    /**
//     * @return FrEtapeInterventionEti[] Returns an array of FrEtapeInterventionEti objects
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

//    public function findOneBySomeField($value): ?FrEtapeInterventionEti
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
