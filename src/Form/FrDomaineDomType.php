<?php

namespace App\Form;

use App\Entity\FrDomaineDom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrDomaineDomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dom_nom')
            ->add('dom_date_add')
            ->add('dom_date_edit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrDomaineDom::class,
        ]);
    }
}
