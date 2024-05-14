<?php

namespace App\Form;

use App\Entity\FrMarqueMar;
use App\Entity\FrObjetObj;
use App\Entity\FrSousCategoriSca;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrObjetObjType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('obj_reference')
            ->add('obj_caracteristiques')
            ->add('obj_manuel')
            ->add('obj_date_add')
            ->add('obj_date_edit')
            ->add('fk_mar_id', EntityType::class, [
                'class' => FrMarqueMar::class,
'choice_label' => 'id',
            ])
            ->add('fk_sca_id', EntityType::class, [
                'class' => FrSousCategoriSca::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrObjetObj::class,
        ]);
    }
}
