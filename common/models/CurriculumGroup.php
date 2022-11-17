<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "curriculum_group".
 *
 * @property int $id
 * @property string|null $name
 * @property int $status
 * @property string|null $crated_at
 * @property string|null $updated_at
 */
class CurriculumGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'default', 'value' => null],
            [['status'], 'integer'],
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
            'name' => 'Name',
            'status' => 'Status',
            'crated_at' => 'Crated At',
            'updated_at' => 'Updated At',
        ];
    }
}
