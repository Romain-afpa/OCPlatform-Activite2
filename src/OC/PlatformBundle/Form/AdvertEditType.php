<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 09/03/2016
 * Time: 15:17
 */

namespace OC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdvertEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('date');
    }

    public function getName()
    {
        return 'oc_platformbundle_advert_edit';
    }

    public function getParent()
    {
        return new AdvertType();
    }
}