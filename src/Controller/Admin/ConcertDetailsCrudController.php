<?php

namespace App\Controller\Admin;

use App\Entity\ConcertDetails;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConcertDetailsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConcertDetails::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            BooleanField::new('publish'),
            AssociationField::new('artist'),
            AssociationField::new('date'),
            AssociationField::new('scene'),
            AssociationField::new('schedule'),
            DateField::new('created_at'),
        ];
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('publish')
            ->add('date')
            ->add('scene')
            ->add('schedule');
    }
}
