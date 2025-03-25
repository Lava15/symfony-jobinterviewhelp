<?php
declare(strict_types=1);

namespace App\Enums;


enum AnswerType: string
{
  case Text = 'text';
  case Number = 'code';
  case Options = 'options';
}
