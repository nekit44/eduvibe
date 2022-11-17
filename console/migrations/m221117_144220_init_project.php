<?php

use yii\db\Migration;

/**
 * Class m221117_144220_init_project
 */
class m221117_144220_init_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('courses', [
            'id' => $this->primaryKey(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'author_id' => $this->integer()->notNull(),
            'image' => $this->string()->defaultValue('/images/common/no-image.jpg'),
            'video_youtube' => $this->string(),
            'name' => $this->string()->notNull(),
            'crated_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'description' => $this->text(),
            'start_at' => $this->timestamp(),
            'finish_at' => $this->timestamp(),
            'price' => $this->float()->notNull(),
        ]);

        $this->createTable('params', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
        ]);

        $this->createTable('courses_params', [
            'id' => $this->primaryKey(),
            'courses_id' => $this->integer(),
            'params_id' => $this->integer(),
            'crated_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createTable('curriculum_group', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'crated_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createTable('curriculum', [
            'id' => $this->primaryKey(),
            'curriculum_group_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'crated_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createTable('reviews', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'course_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'text' => $this->text(),
            'stars' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221117_144220_init_project cannot be reverted.\n";
        $this->delete('courses');
        $this->delete('params');
        $this->delete('courses_params');
        $this->delete('curriculum_group');
        $this->delete('curriculum');
        $this->delete('reviews');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221117_144220_init_project cannot be reverted.\n";

        return false;
    }
    */
}
