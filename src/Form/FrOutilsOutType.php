<?php

namespace App\Form;

use App\Entity\FrOutilsOut;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrOutilsOutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('out_nom')
            ->add('out_reference')
            ->add('out_description')
            ->add('out_photo')
            ->add('out_date_add')
            ->add('out_date_edit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrOutilsOut::class,
        ]);
    }
}
