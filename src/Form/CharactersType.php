<?php

namespace App\Form;

use App\Entity\Characters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharactersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('accountName')
            ->add('charName')
            ->add('level')
            ->add('maxhp')
            ->add('curhp')
            ->add('maxcp')
            ->add('curcp')
            ->add('maxmp')
            ->add('curmp')
            ->add('face')
            ->add('hairstyle')
            ->add('haircolor')
            ->add('sex')
            ->add('heading')
            ->add('x')
            ->add('y')
            ->add('z')
            ->add('exp')
            ->add('expbeforedeath')
            ->add('sp')
            ->add('karma')
            ->add('fame')
            ->add('pvpkills')
            ->add('pkkills')
            ->add('clanid')
            ->add('race')
            ->add('classid')
            ->add('baseClass')
            ->add('transformId')
            ->add('deletetime')
            ->add('cancraft')
            ->add('title')
            ->add('titleColor')
            ->add('accesslevel')
            ->add('online')
            ->add('onlinetime')
            ->add('charSlot')
            ->add('newbie')
            ->add('lastaccess')
            ->add('clanPrivs')
            ->add('wantspeace')
            ->add('isin7sdungeon')
            ->add('powerGrade')
            ->add('nobless')
            ->add('subpledge')
            ->add('lvlJoinedAcademy')
            ->add('apprentice')
            ->add('sponsor')
            ->add('clanJoinExpiryTime')
            ->add('clanCreateExpiryTime')
            ->add('deathPenaltyLevel')
            ->add('bookmarkslot')
            ->add('vitalityPoints')
            ->add('createdate')
            ->add('language')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Characters::class,
        ]);
    }
}
