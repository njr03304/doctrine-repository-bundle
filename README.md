Installation
============

Currently, this project just includes a single trait to use in a Doctrine repository.

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require njr03304/doctrine-repository-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Usage
---------------------------

```php
namespace AppBundle\Repository;

use njr03304\DoctrineRepositoryBundle\Repository\Traits\FindAndCreateTrait;

class TagRepository extends \Doctrine\ORM\EntityRepository
{
    use FindAndCreateTrait;
}
```

```php
$entity = $em->getRepository('AppBundle:Tag')->findByElseCreate(array('name' => 'example'));
```

$entity will now be and instance of AppBundle\Entity\Tag with a name of 'example', either from the DB or a new instance ready to be saved to the DB.

