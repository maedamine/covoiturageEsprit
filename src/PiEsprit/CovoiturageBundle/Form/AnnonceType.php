<?php

namespace PiEsprit\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $session=new Session();
        $id=$session->get('userid');
        $builder->add('depart')
                ->add('arrivee')
            ->add('heuredepart')
            ->add('date')
            ->add('nbplaces')
            ->add('prix')
            ->add('disponible')
            ->add('bagages')
            ->add('animal')
            ->add('fumer')
            ->add('description')
            ->add('heuredepart')
            ->add('date')
            ->add('nbplaces')
            ->add('prix')
            ->add('disponible')
            ->add('bagages')
            ->add('animal')
            ->add('fumer')
            ->add('description')
            ->add('voitureid')
            ->add('userid', HiddenType::class, array('data' => $id))
//

            ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PiEsprit\CovoiturageBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'piesprit_covoituragebundle_annonce';
    }


}
