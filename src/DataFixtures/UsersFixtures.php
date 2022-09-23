<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UsersFixtures extends Fixture
{  
    public const USER_REFERENCE = 'my-user';
    public function load(ObjectManager $manager): void
    {   
        
        $faker = Factory::create('fr_FR');

        for ($i=0; $i <10 ; $i++) { 
            
            $user = new User();
            $user->setEmail($faker->email())
                 ->setPassword($faker->password());
                

             $manager->persist($user);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
        $this->addReference(self::USER_REFERENCE, $user);


        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence());
            $article->setContent($faker->paragraphs(10, true));
            $article->setPublishedAt(New DateTimeImmutable('Y_m_d H_i_s'));
            $article->setSlug($faker->slug());
            $article->setUser($this->getReference(UsersFixtures::USER_REFERENCE));
            $manager->persist($article);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();

    }
}
