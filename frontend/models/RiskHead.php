<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use frontend\models\RiskAddDep;
use frontend\models\RiskClinictype;
use frontend\models\FakthaRiskStatus;
use frontend\models\FakthaRiskSimple;
use frontend\models\ProgramHead;
use frontend\models\ProgramDetail;
/**
 * This is the model class for table "risk_head".
 *
 * @property string $risk_id
 * @property string $risk_date
 * @property string $risk_time
 * @property integer $risk_department
 * @property string $risk_miss
 * @property resource $risk_event
 * @property resource $risk_safety
 * @property string $risk_outcome_pt
 * @property string $risk_outcome_guest
 * @property string $risk_outcome_staff
 * @property double $risk_outcome_price
 * @property resource $risk_solve_begin
 * @property resource $risk_sum_solve
 * @property string $risk_level
 * @property string $risk_head_department
 * @property string $risk_status
 * @property integer $risk_program_head
 * @property integer $risk_program_detail
 * @property string $risk_program_text
 * @property string $login_name
 * @property resource $risk_sum_dep
 * @property integer $risk_simple
 * @property string $date_input
 * @property string $last_update
 * @property string $last_staff
 * @property string $print_url
 * @property string $act_st
 * @property resource $pic
 * @property integer $clinictype
 */
class RiskHead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk_head';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['risk_id', 'risk_date'], 'required'],
            [['risk_date', 'date_input', 'last_update'], 'safe'],
            [['risk_department', 'risk_program_head', 'risk_program_detail', 'risk_simple', 'clinictype'], 'integer'],
            [['risk_event', 'risk_safety', 'risk_solve_begin', 'risk_sum_solve', 'risk_sum_dep', 'pic'], 'string'],
            [['risk_outcome_price'], 'number'],
            [['risk_id'], 'string', 'max' => 7],
            [['risk_time'], 'string', 'max' => 5],
            [['risk_miss', 'risk_level', 'risk_status', 'act_st'], 'string', 'max' => 1],
            [['risk_outcome_pt', 'risk_outcome_guest', 'risk_outcome_staff', 'risk_program_text', 'print_url'], 'string', 'max' => 200],
            [['risk_head_department'], 'string', 'max' => 2],
            [['login_name', 'last_staff'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'risk_id' => 'Risk ID',
            'risk_date' => 'วันที่เกิดเหตุ',
            'risk_time' => 'เวลา',
            'risk_department' => 'แผนกที่รายงาน',
            'risk_miss' => 'Risk Miss',
            'risk_event' => 'บรรยายเหตุการณ์ (แบบสั้นๆ ระบุปัญหา)',
            'risk_safety' => 'การป้องกันปัญหาไม่ให้เกิดขึ้นซ้ำ(มาตรการป้องกัน)
',
            'risk_outcome_pt' => 'ผลลัพธ์ที่เกิดขึ้นกับผู้ป่วย',
            'risk_outcome_guest' => 'ผลลัพธ์ที่เกิดขึ้นกับญาติ',
            'risk_outcome_staff' => 'ผลลัพธ์ที่เกิดขึ้นกับเจ้าหน้าที่',
            'risk_outcome_price' => 'ความเสียหาย(ค่าชดเชย/ค่าซ่อมบำรุง)  ',
            'risk_solve_begin' => 'การแก้ปัญหาเฉพาะหน้า',
            'risk_sum_solve' => 'การทบทวนของหน่วยงาน (มาตรการป้องกัน)',
            'risk_level' => 'ระดับความรุนแรง',
            'risk_head_department' => 'หน่วยงาน/ทีมนำที่เกี่ยวข้อง',
            'risk_status' => 'สถานะรายการ',
            'risk_program_head' => 'โปรแกรม',
            'risk_program_detail' => 'หัวข้ออุบัติการณ์',
            'risk_program_text' => 'อื่นๆ  ระบุ',
            'login_name' => 'Login Name',
            'risk_sum_dep' => 'Risk Sum Dep',
            'risk_simple' => 'Risk Simple',
            'date_input' => 'วันที่ทบทวนอุบัติการณ์',
            'last_update' => 'Last Update',
            'last_staff' => 'Last Staff',
            'print_url' => 'Print Url',
            'act_st' => 'เวทีทบทวน',
            'pic' => 'Pic',
            'clinictype' => 'ประเภทความเสี่ยง',
        ];
    }


public static function itemAlias($type,$code=NULL) {
        $_items = array(
            'risk_miss' => array(
                '1' => 'miss',
                '2' => 'near miss',
            ),
            'marital' => array(
                '1' => 'โสด',
                '2' => 'สมรส',
                '3' => 'อย่างร้าง',
                '4' => 'แยกกันอยู่',
                '5' => 'หมา้ย',
            ),
            'skill'=>[
                'Objective C'=>'Objective C',
                'Python'=>'Python',
                'Java'=>'Java',
                'JavaScript'=>'JavaScript',
                'PHP'=>'PHP',
                'SQL'=>'SQL',
                'Ruby'=>'Ruby',
                'FoxPro'=>'FoxPro',
                'C++'=>'C++',
                'C'=>'C',
                'ASP'=>'ASP',
                'Assembly'=>'Assembly',
                'Visual Basic'=>'Visual Basic'
            ],
            'social' => [
                'facebook' => 'Facebook',
                'twiter' => 'Twiter',
                'google+' => 'Google+',
                'tumblr' => 'Tumblr'
            ],
        );
        

        if (isset($code)){
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        }
        else{         
            return isset($_items[$type]) ? $_items[$type] : false;    
        }
    }

    public static function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.self::UPLOAD_PATH;
    }

    public static function getUploadUrl(){
        return Url::base(true).'/'.self::UPLOAD_PATH;
    }

    public static function getResumePath(){
        return Yii::getAlias('@webroot').'/'.self::RESUME_PATH;
    }

    public static function getResumeUrl(){
        return Url::base(true).'/'.self::RESUME_PATH;
    }


    // Inverse Relations  & Virtual attribute
    
    public function getRiskAddDep()
    {
      return $this->hasOne(RiskAddDep::className(),['dep_id'=>'riskadddep_id']);
    }

    public function getRiskClinictype()
    {
      return $this->hasOne(RiskClinictype::className(),['id'=>'clinictype_id']);
    }
    
    public function getRiskLevel()
    {
      return $this->hasOne(RiskLevel::className(),['id'=>'risk_level_id']);
    }
    
    public function getFakthaRiskStatus()
    {
      return $this->hasOne(FakthaRiskStatus::className(),['id'=>'risk_status_id']);
    }
    public function getFakthaRiskSimple()
    {
      return $this->hasOne(FakthaRiskSimple::className(),['id'=>'risk_simple_id']);
    }
    
    // Inverse Relations  & Virtual attribute  สร้าง action เพื่อรองรับการค้นข้อมูลและส่งข้อมูลให้กับ dropdownlist
    
    public function getProgramHead(){
        return @$this->hasOne(ProgramHead::className(),['id'=>'risk_program_head']);
    }
    public function getProgramHeadName(){
        return @$this->risk_program_head->name;
    }

    public function getProgramDetail(){
        return @$this->hasOne(ProgramDetail::className(),['id'=>'risk_program_detail']);
    }
    public function getProgramDetailName(){
        return @$this->risk_program_detail->name;
    }

    public function getFullname(){
        return $this->title.$this->name.' '.$this->surname;
    }

    public function getProvinces(){
        return @$this->hasOne(Province::className(),['PROVINCE_ID'=>'province']);
    }
    public function getProvinceName(){
        return @$this->provinces->PROVINCE_NAME;
    }

    public function getAmphurs(){
        return @$this->hasOne(Amphur::className(),['AMPHUR_ID'=>'province']);
    }
    public function getAmphurName(){
        return @$this->amphurs->AMPHUR_NAME;
    }

    public function getDistricts(){
        return @$this->hasOne(District::className(),['DISTRICT_ID'=>'province']);
    }
    public function getDistrictName(){
        return @$this->districts->DISTRICT_NAME;
    }



}