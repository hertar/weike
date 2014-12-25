<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_space".
 *
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $sec_code
 * @property string $email
 * @property string $user_pic
 * @property integer $group_id
 * @property integer $isvip
 * @property integer $status
 * @property string $user_type
 * @property string $sex
 * @property string $marry
 * @property string $hometown
 * @property string $residency
 * @property string $address
 * @property string $birthday
 * @property string $truename
 * @property string $idcard
 * @property string $idpic
 * @property string $qq
 * @property string $msn
 * @property string $fax
 * @property string $phone
 * @property string $mobile
 * @property integer $indus_id
 * @property integer $indus_pid
 * @property string $skill_ids
 * @property string $summary
 * @property string $experience
 * @property integer $reg_time
 * @property string $reg_ip
 * @property string $domain
 * @property string $credit
 * @property string $balance
 * @property integer $balance_status
 * @property integer $pub_num
 * @property integer $take_num
 * @property integer $nominate_num
 * @property integer $accepted_num
 * @property integer $vip_start_time
 * @property integer $vip_end_time
 * @property string $pay_zfb
 * @property string $pay_cft
 * @property string $pay_bank
 * @property integer $score
 * @property integer $buyer_credit
 * @property integer $buyer_good_num
 * @property string $buyer_level
 * @property integer $buyer_total_num
 * @property integer $seller_credit
 * @property integer $seller_good_num
 * @property string $seller_level
 * @property integer $seller_total_num
 * @property integer $studio_id
 * @property integer $last_login_time
 * @property string $client_status
 * @property integer $recommend
 * @property integer $union
 * @property integer $union_assoc
 * @property integer $union_rid
 * @property string $union_user
 * @property string $company
 */
class WkWitkeySpace extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_space';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'isvip', 'status', 'indus_id', 'indus_pid', 'reg_time', 'balance_status', 'pub_num', 'take_num', 'nominate_num', 'accepted_num', 'vip_start_time', 'vip_end_time', 'score', 'buyer_credit', 'buyer_good_num', 'buyer_total_num', 'seller_credit', 'seller_good_num', 'seller_total_num', 'studio_id', 'last_login_time', 'recommend', 'union', 'union_assoc', 'union_rid'], 'integer'],
            [['birthday'], 'safe'],
            [['summary', 'experience', 'pay_bank', 'buyer_level', 'seller_level'], 'string'],
            [['credit', 'balance'], 'number'],
            [['username', 'password', 'sec_code', 'email', 'user_type', 'msn', 'domain'], 'string', 'max' => 50],
            [['user_pic', 'idpic', 'pay_zfb', 'pay_cft', 'union_user'], 'string', 'max' => 100],
            [['sex', 'marry', 'hometown', 'client_status'], 'string', 'max' => 10],
            [['residency'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 200],
            [['truename', 'idcard', 'qq', 'fax', 'phone', 'mobile', 'reg_ip'], 'string', 'max' => 20],
            [['skill_ids'], 'string', 'max' => 150],
            [['company'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'sec_code' => 'Sec Code',
            'email' => 'Email',
            'user_pic' => 'User Pic',
            'group_id' => 'Group ID',
            'isvip' => 'Isvip',
            'status' => 'Status',
            'user_type' => 'User Type',
            'sex' => 'Sex',
            'marry' => 'Marry',
            'hometown' => 'Hometown',
            'residency' => 'Residency',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'truename' => 'Truename',
            'idcard' => 'Idcard',
            'idpic' => 'Idpic',
            'qq' => 'Qq',
            'msn' => 'Msn',
            'fax' => 'Fax',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'indus_id' => 'Indus ID',
            'indus_pid' => 'Indus Pid',
            'skill_ids' => 'Skill Ids',
            'summary' => 'Summary',
            'experience' => 'Experience',
            'reg_time' => 'Reg Time',
            'reg_ip' => 'Reg Ip',
            'domain' => 'Domain',
            'credit' => 'Credit',
            'balance' => 'Balance',
            'balance_status' => 'Balance Status',
            'pub_num' => 'Pub Num',
            'take_num' => 'Take Num',
            'nominate_num' => 'Nominate Num',
            'accepted_num' => 'Accepted Num',
            'vip_start_time' => 'Vip Start Time',
            'vip_end_time' => 'Vip End Time',
            'pay_zfb' => 'Pay Zfb',
            'pay_cft' => 'Pay Cft',
            'pay_bank' => 'Pay Bank',
            'score' => 'Score',
            'buyer_credit' => 'Buyer Credit',
            'buyer_good_num' => 'Buyer Good Num',
            'buyer_level' => 'Buyer Level',
            'buyer_total_num' => 'Buyer Total Num',
            'seller_credit' => 'Seller Credit',
            'seller_good_num' => 'Seller Good Num',
            'seller_level' => 'Seller Level',
            'seller_total_num' => 'Seller Total Num',
            'studio_id' => 'Studio ID',
            'last_login_time' => 'Last Login Time',
            'client_status' => 'Client Status',
            'recommend' => 'Recommend',
            'union' => 'Union',
            'union_assoc' => 'Union Assoc',
            'union_rid' => 'Union Rid',
            'union_user' => 'Union User',
            'company' => 'Company',
        ];
    }
}
