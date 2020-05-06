<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $salutation
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property int $role_id
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email_activation_code
 * @property int $organization_id
 * @property string $designation
 * @property string $mobile_number
 * @property string $last_failed_login
 * @property int $failed_login_count
 * @property int $allow_login
 * @property int $email_verified
 * @property int $mobile_verified
 * @property int $is_deleted
 * @property string $status
 * @property string $recovery_email
 * @property string $secret_question
 * @property string $secret_q_answer
 * @property string $secret_inf_mod_time
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'email', 'password_hash'], 'required'],
            [['id', 'role_id', 'organization_id', 'failed_login_count', 'allow_login', 'email_verified', 'mobile_verified', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['last_failed_login', 'secret_inf_mod_time', 'created_at', 'updated_at'], 'safe'],
            [['status'], 'string'],
            [['salutation'], 'string', 'max' => 10],
            [['first_name', 'last_name', 'username', 'email'], 'string', 'max' => 150],
            [['auth_key', 'password_reset_token', 'email_activation_code'], 'string', 'max' => 32],
            [['password_hash'], 'string', 'max' => 255],
            [['designation'], 'string', 'max' => 250],
            [['mobile_number'], 'string', 'max' => 50],
            [['recovery_email', 'secret_question', 'secret_q_answer'], 'string', 'max' => 160],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'salutation' => 'Salutation',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'email' => 'Email',
            'role_id' => 'Role ID',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email_activation_code' => 'Email Activation Code',
            'organization_id' => 'Organization ID',
            'designation' => 'Designation',
            'mobile_number' => 'Mobile Number',
            'last_failed_login' => 'Last Failed Login',
            'failed_login_count' => 'Failed Login Count',
            'allow_login' => 'Allow Login',
            'email_verified' => 'Email Verified',
            'mobile_verified' => 'Mobile Verified',
            'is_deleted' => 'Is Deleted',
            'status' => 'Status',
            'recovery_email' => 'Recovery Email',
            'secret_question' => 'Secret Question',
            'secret_q_answer' => 'Secret Q Answer',
            'secret_inf_mod_time' => 'Secret Inf Mod Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
