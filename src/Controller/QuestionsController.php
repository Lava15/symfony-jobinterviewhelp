<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/questions', name: 'questions:')]
final class QuestionsController extends AbstractController
{

  public function __construct(
    private readonly QuestionRepository $questionRepository
  ) {}

  #[Route('/', name: 'index')]
  public function index(): Response
  {
    $questions = $this->questionRepository->findAll();
    return $this->render('questions/index.html.twig', [
      'questions' => $questions,
    ]);
  }
}
