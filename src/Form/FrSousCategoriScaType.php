<?php

namespace App\Form;

use App\Entity\FrCategorieCat;
use App\Entity\FrSousCategoriSca;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrSousCategoriScaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('sca_nom')
            ->add('sca_description')
            ->add('sca_date_add')
            ->add('sca_date_edit')
            ->add('fk_cat_id', EntityType::class, [
                'class' => FrCategorieCat::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrSousCategoriSca::class,
        ]);
    }
}
