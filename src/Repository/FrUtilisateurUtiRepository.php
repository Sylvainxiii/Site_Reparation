<?php

namespace App\Repository;

use App\Entity\FrUtilisateurUti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrUtilisateurUti>
 *
 * @method FrUtilisateurUti|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrUtilisateurUti|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrUtilisateurUti[]    findAll()
 * @method FrUtilisateurUti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrUtilisateurUtiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrUtilisateurUti::class);
    }

//    /**
//     * @return FrUtilisateurUti[] Returns an array of FrUtilisateurUti objects
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

//    public function findOneBySomeField($value): ?FrUtilisateurUti
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
