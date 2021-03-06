<?php

/**
 * Created by PhpStorm.
 * User: Y
 * Date: 2015/8/10 0010
 * Time: 16:39
 */
abstract class TrackStarActiveRecord extends CActiveRecord
{
    /**
     * Prepares create_time, create_user_id, update_time and
     * update_user_ id attributes before performing validation.
     */
    protected function beforeValidate() {

        if ($this->isNewRecord) {
            // set the create date, last updated date
            // and the user doing the creating
            //$this->create_time = $this->update_time = new CDbExpression('NOW()');
            $this->create_time=$this->update_time = date( 'Y-m-d H:i:s', time() );
            $this->create_user_id = $this->update_user_id = Yii::app()->user->id;
        } else {
            //not a new record, so just set the last updated time
            //and last updated user id
//            $this->update_time = new CDbExpression('NOW()');
            $this->update_time = date( 'Y-m-d H:i:s', time() );
            $this->update_user_id = Yii::app()->user->id;

        }
        return parent::beforeValidate();
    }
}