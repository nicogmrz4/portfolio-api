<?php

namespace App\Controller;

use App\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SkillImageController extends AbstractController
{
    public function __invoke(Request $request, Skill $skill)
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }

        $skill->setFile($uploadedFile);

        return $skill;
    }
}
