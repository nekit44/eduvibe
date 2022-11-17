<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "curriculum".
 *
 * @property int $id
 * @property int $curriculum_group_id
 * @property string|null $name
 * @property int $status
 * @property string|null $crated_at
 * @property string|null $updated_at
 */
class Curriculum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['curriculum_group_id'], 'required'],
            [['curriculum_group_id', 'status'], 'default', 'value' => null],
            [['curriculum_group_id', 'status'], 'integer'],
            [['crated_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'curriculum_group_id' => 'Curriculum Group ID',
            'name' => 'Name',
            'status' => 'Status',
            'crated_at' => 'Crated At',
            'updated_at' => 'Updated At',
        ];
    }
}
