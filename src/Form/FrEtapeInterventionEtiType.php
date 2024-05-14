<?php

namespace App\Form;

use App\Entity\FrEtapeInterventionEti;
use App\Entity\FrInterventionInt;
use App\Entity\FrOutilsOut;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrEtapeInterventionEtiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('eti_titre')
            ->add('eti_description')
            ->add('eti_duree')
            ->add('eti_photo_1')
            ->add('eti_photo_2')
            ->add('eti_photo_3')
            ->add('eti_date_add')
            ->add('eti_date_edit')
            ->add('fk_int_id', EntityType::class, [
                'class' => FrInterventionInt::class,
'choice_label' => 'id',
            ])
            ->add('fk_out_id', EntityType::class, [
                'class' => FrOutilsOut::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrEtapeInterventionEti::class,
        ]);
    }
}
