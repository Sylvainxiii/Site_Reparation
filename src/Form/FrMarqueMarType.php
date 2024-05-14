<?php

namespace App\Form;

use App\Entity\FrMarqueMar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrMarqueMarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mar_nom')
            ->add('mar_date_add')
            ->add('mar_date_edit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrMarqueMar::class,
        ]);
    }
}
