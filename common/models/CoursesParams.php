<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses_params".
 *
 * @property int $id
 * @property int|null $courses_id
 * @property int|null $params_id
 * @property string|null $crated_at
 * @property string|null $updated_at
 */
class CoursesParams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses_params';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courses_id', 'params_id'], 'default', 'value' => null],
            [['courses_id', 'params_id'], 'integer'],
            [['crated_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'courses_id' => 'Courses ID',
            'params_id' => 'Params ID',
            'crated_at' => 'Crated At',
            'updated_at' => 'Updated At',
        ];
    }
}
