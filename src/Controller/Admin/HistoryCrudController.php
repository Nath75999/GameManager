<?php

namespace App\Controller\Admin;

use App\Entity\History;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return History::class;
    }
}
