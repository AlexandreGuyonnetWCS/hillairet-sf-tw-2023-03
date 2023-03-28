<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'firstname',
                TextType::class,
                [
                    'label' => 'Nom',
                    'attr' => ['placeholder' => 'Votre nom'],
                ]
            )
            ->add(
                'lastname',
                TextType::class,
                [
                    'label' => 'Prénom',
                    'attr' => ['placeholder' => 'Votre prénom'],
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'Email',
                    'attr' => ['placeholder' => 'Votre email'],
                ]
            )
            ->add(
                'phone',
                TextType::class,
                [
                    'label' => 'Téléphone',
                    'attr' => ['placeholder' => 'Votre téléphone'],
                ]
            )
            ->add(
                'subject',
                ChoiceType::class,
                [
                    'label' => 'Sujet',
                    'choices' => [
                        'Demande de renseignements' => 'Demande de renseignements',
                        'Demande de devis' => 'Demande de devis',
                        'Autre' => 'Autre',
                    ],
                ]
            )
            ->add(
                'message',
                TextareaType::class,
                [
                    'label' => 'Message',
                    'attr' => ['placeholder' => 'Votre message'],
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
