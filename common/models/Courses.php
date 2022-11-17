<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property int $status
 * @property int $author_id
 * @property string|null $image
 * @property string|null $video_youtube
 * @property string $name
 * @property string|null $crated_at
 * @property string|null $updated_at
 * @property string|null $description
 * @property string|null $start_at
 * @property string|null $finish_at
 * @property float $price
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'author_id'], 'default', 'value' => null],
            [['status', 'author_id'], 'integer'],
            [['author_id', 'name', 'price'], 'required'],
            [['crated_at', 'updated_at', 'start_at', 'finish_at'], 'safe'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['image', 'video_youtube', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'author_id' => 'Author ID',
            'image' => 'Image',
            'video_youtube' => 'Video Youtube',
            'name' => 'Name',
            'crated_at' => 'Crated At',
            'updated_at' => 'Updated At',
            'description' => 'Description',
            'start_at' => 'Start At',
            'finish_at' => 'Finish At',
            'price' => 'Price',
        ];
    }
}
