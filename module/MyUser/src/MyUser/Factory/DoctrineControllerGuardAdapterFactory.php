<?php
namespace MyUser\Factory;

use BjyAuthorize\Exception\InvalidArgumentException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use MyUser\Provider\Rule\DoctrineRuleProvider;    //this one's your own
use BjyAuthorize\Guard\Controller;

class DoctrineControllerGuardAdapterFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //just setting up our config, move along move along...
        $config = $serviceLocator->get('Config');
        $config = $config['bjyauthorize'];

        //making sure we have proper entries in our config... 
        //move along "nothing to see" here....
        if (! isset($config['guards']['MyUser_controller_guard_adapter'])) {
            throw new InvalidArgumentException(
                'Config for "MyUser_controller_guard_adapter" not set'
            );
        }

        //yep all is well we load our own module config here
        $providerConfig = $config['guards']['MyUser_controller_guard_adapter'];

        //more specific checks on config
        if (! isset($providerConfig['rule_entity_class'])) {
            throw new InvalidArgumentException('rule_entity_class not set in the MyUser guards config.');
        }

        if (! isset($providerConfig['object_manager'])) {
            throw new InvalidArgumentException('object_manager not set in the MyUser guards config.');
        }

        /* @var $objectManager \Doctrine\Common\Persistence\ObjectManager */
        $objectManager = $serviceLocator->get($providerConfig['object_manager']);

        //orp -- object repository provider
        //here we get our class that preps the object repository for us
        $orp=new DoctrineRuleProvider($objectManager->getRepository($providerConfig['rule_entity_class']));

        //here we pull the rules out of that object we've created above
        //rules are in the same format BjyAuthorize expects
        $rules=$orp->getRules();

        //here pass our rules to BjyAuthorize's own Guard Controller.  
        //It will not know the difference if we got the rules from Config or from Doctrine or elsewhere,  
        //as long as $rules are in the form it expects.
        return new Controller($rules, $serviceLocator); 
    }
}