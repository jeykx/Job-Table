<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jobtitle')
            ->add('companytitle')
            ->add('contact')
            ->add('url')
            ->add('feedback', ChoiceType::class, [
                'choices' => [
                        'Candidature refusée' => 'Refuser',
                        'Candidature envoyée' => 'En cours',
                        'Candidature acceptée' => 'Accepter',
                    ],
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
