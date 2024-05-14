<?php

namespace App\Form;

use App\Entity\FrCategorieCat;
use App\Entity\FrDomaineDom;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrCategorieCatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cat_nom')
            ->add('cat_description')
            ->add('cat_date_edit')
            ->add('cat_date_add')
            ->add('fk_dom_id', EntityType::class, [
                'class' => FrDomaineDom::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrCategorieCat::class,
        ]);
    }
}
