<?php

namespace App\Form;

use App\Entity\Items;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ownerId')
            ->add('itemId')
            ->add('count')
            ->add('enchantLevel')
            ->add('loc')
            ->add('locData')
            ->add('timeOfUse')
            ->add('customType1')
            ->add('customType2')
            ->add('manaLeft')
            ->add('time')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Items::class,
        ]);
    }
}
