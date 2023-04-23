<?php

use yii\db\Migration;

/**
 * Class m230423_150052_seed_user_table
 */
class m230423_150052_seed_users_table extends Migration
{
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeUsers();
    }

    public function insertFakeUsers()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $this->insert(
                'users',
                [
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'email' => $faker->email(),
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230423_150052_seed_user_table cannot be reverted.\n";

        return false;
    }

    
}
