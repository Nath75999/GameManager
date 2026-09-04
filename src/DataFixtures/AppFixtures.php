<?php

namespace App\DataFixtures;

use App\Entity\Game;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
    )
    {
        
    }
    public function load(ObjectManager $manager) : void
    {
        $faker = Factory::create('fr_FR');

        $this->addGames($manager, $faker);
        $this->addUsers($manager, $faker);

        $manager->flush();
    }

    public function addGames(ObjectManager $manager, Generator $faker) : void
    {
        for ($i = 0; $i < $faker->numberBetween(5, 25); ++$i){
            $game = new Game;

            $game->setName($faker->name());
            $game->setInfos($faker->paragraph());
            $game->setSlug(strtolower(str_replace(' ', '-', $game->getName())));

            $manager->persist($game);
        }
    }

    public function addUsers(ObjectManager $manager, Generator $faker) : void 
    {
        for ($i = 0; $i < $faker->numberBetween(5, 25); ++$i) {
            $user = new User();

            $user->setEmail($faker->email());
            // $user->setPassword($this->passwordHasher->hashPassword($user, $faker->password())); //with hashed password
            $user->setPassword($faker->password());

            $manager->persist($user);
        }
    }

    public function dropGames(ObjectManager $manager) : void
    {
        $games = $manager->getRepository(Game::class)->findAll();

        foreach($games as $game) {
            $manager->remove($game);
        }

        $manager->flush();
    }

    public function dropUsers(ObjectManager $manager) : void
    {
        $users = $manager->getRepository(User::class)->findAll();

        foreach($users as $user) {
            $manager->remove($user);
        }

        $manager->flush();
    }
}
