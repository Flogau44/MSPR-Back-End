<?php

namespace App\Controller\Admin;

use App\Entity\Dates;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DatesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dates::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // Champ pour la date
            DateField::new('date'),
            // Champ pour le slug, basé sur la date
            SlugField::new('slug')->setTargetFieldName('date'),
        ];
    }
}
