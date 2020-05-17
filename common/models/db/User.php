<?php
namespace common\models\db;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
class User extends ActiveRecord implements IdentityInterface
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
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['id','first_name', 'last_name', 'username', 'email', 'password_hash'], 'required'],
//            [['id', 'role_id', 'organization_id', 'failed_login_count', 'allow_login', 'email_verified', 'mobile_verified', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['last_failed_login', 'secret_inf_mod_time', 'created_at', 'updated_at'], 'safe'],
//            [['status'], 'string'],
//            [['salutation'], 'string', 'max' => 10],
//            [['first_name', 'last_name', 'username', 'email'], 'string', 'max' => 150],
//            [['auth_key', 'password_reset_token', 'email_activation_code'], 'string', 'max' => 32],
//            [['password_hash'], 'string', 'max' => 255],
//            [['designation'], 'string', 'max' => 250],
//            [['mobile_number'], 'string', 'max' => 50],
//            [['recovery_email', 'secret_question', 'secret_q_answer'], 'string', 'max' => 160],
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

    const STATUS_ACTIVE = 'Active';

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'email_activation_code' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function generateEmailVerificationToken()
    {
        $this->email_activation_code = Yii::$app->security->generateRandomString();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
