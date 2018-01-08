<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class CommonComponent extends Component
{
    var $controller;

    public function initialize(array $config = [])
    {
        parent::initialize($config);
        $this->controller = $this->_registry->getController();

    }
    
    
    public function getSettingByKey($key){

        $settingTable = TableRegistry::get('Settings');

        $settings = $settingTable->find()->where(['Settings.key_name'=>$key])->first();

        if(!empty($settings['value'])){
            return $settings['value'];
        } else {
            return false;
        }
    }

    public function strToTime($date) {
        $date = str_replace('/', '-', $date);
        return strtotime($date);
    }

    function dateConvert(){
        if( isset($this->controller->request->data['start_date']) ) $this->controller->request->data['start_date'] = $this->strToTime($this->controller->request->data['start_date']);
        if( isset($this->controller->request->data['end_date']) ) $this->controller->request->data['end_date'] = $this->strToTime($this->controller->request->data['end_date']);
        if( isset($this->controller->request->data['conference_date']) ) $this->controller->request->data['conference_date'] = $this->strToTime($this->controller->request->data['conference_date']);
    }

    function __addSlug(){
        $this->controller->request->data['slug'] = Inflector::slug($this->controller->request->data['name'] );
    }
}