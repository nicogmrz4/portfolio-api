<?php

namespace App\Repository;

use App\Entity\ProjectTag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjectTag>
 *
 * @method ProjectTag|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectTag|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectTag[]    findAll()
 * @method ProjectTag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectTagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectTag::class);
    }

    //    /**
    //     * @return ProjectTag[] Returns an array of ProjectTag objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ProjectTag
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
