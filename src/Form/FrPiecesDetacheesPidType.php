<?php

namespace App\Form;

use App\Entity\FrPiecesDetacheesPid;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrPiecesDetacheesPidType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pid_reference')
            ->add('pid_marque')
            ->add('pid_description')
            ->add('pid_lien_achat')
            ->add('pid_date_add')
            ->add('pid_date_edit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrPiecesDetacheesPid::class,
        ]);
    }
}
