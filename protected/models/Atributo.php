<?php

/**
 * This is the model class for table "atributo".
 *
 * The followings are the available columns in table 'atributo':
 * @property string $id
 * @property string $tipo_atributo_id
 * @property string $nombre
 * @property string $codigo
 * @property integer $nativo
 * @property integer $usable
 *
 * The followings are the available model relations:
 * @property TipoAtributo $tipoAtributo
 * @property ProyeccionAtributo[] $proyeccionAtributos
 * @property SalaAtributo[] $salaAtributos
 * // DarwinEd Module Relations
 * 	//@property BloqueAtributo[] $bloqueAtributos
 */
class Atributo extends MyActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Atributo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atributo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_atributo_id, nombre', 'required'),
			array('nativo, usable', 'numerical', 'integerOnly'=>true),
			array('tipo_atributo_id', 'length', 'max'=>10),
			array('nombre', 'length', 'max'=>255),
			array('codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_atributo_id, nombre, codigo, nativo, usable', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipoAtributo' => array(self::BELONGS_TO, 'TipoAtributo', 'tipo_atributo_id'),
			'proyeccionAtributos' => array(self::HAS_MANY, 'ProyeccionAtributo', 'atributo_id'),
			'salaAtributos' => array(self::HAS_MANY, 'SalaAtributo', 'atributo_id'),
			//'daBloqueAtributos' => array(self::HAS_MANY, 'DaBloqueAtributo', 'atributo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_atributo_id' => 'Tipo Atributo',
			'nombre' => 'Nombre',
			'codigo' => 'Código',
			'nativo' => 'Nativo',
			'usable' => 'Usable',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tipo_atributo_id',$this->tipo_atributo_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('nativo',$this->nativo);
		$criteria->compare('usable',$this->usable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}