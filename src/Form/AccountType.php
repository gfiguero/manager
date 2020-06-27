<?php

namespace App\Form;

use App\Entity\Account;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password')
            ->add('email')
            ->add('createdTime')
            ->add('lastactive')
            ->add('accesslevel')
            ->add('lastip')
            ->add('lastserver')
            ->add('pcip')
            ->add('hop1')
            ->add('hop2')
            ->add('hop3')
            ->add('hop4')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
