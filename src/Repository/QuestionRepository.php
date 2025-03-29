<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\QuestionEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Question>
 */
class QuestionRepository extends ServiceEntityRepository
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, QuestionEntity::class);
  }

  /**
   * @return QuestionRepository[] Returns an array of Question objects
   */
  public function findAll(): array
  {
    return [];
  }

  // public function findOneBySomeField($value): ?QuestionRepository
  // {
  //   return $this->createQueryBuilder('q')
  //     ->andWhere('q.exampleField = :val')
  //     ->setParameter('val', $value)
  //     ->getQuery()
  //     ->getOneOrNullResult()
  //   ;
  // }
}
