<?php

namespace App\Repository;

use App\Entity\SessionInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SessionInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionInterface[]    findAll()
 * @method SessionInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionInterfaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionInterface::class);
    }

    // /**
    //  * @return SessionInterface[] Returns an array of SessionInterface objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SessionInterface
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
