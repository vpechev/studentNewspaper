<?php
class Category {
    private $IT = array(0, 'ИТ');
    private $SCIENTIFIC = array(1, 'Наука');
    private $SPORT = array(2, 'Спорт');
    private $ENTERTAINMENT = array(3, 'Забавление');
    private $FASHION = array(4, 'Мода');
    private $HEALTH = array(5, 'Здраве');
    private $COOKING = array(6, 'Готварство');
    private $TOURISM = array(7, 'Туризъм');
    private $NATURE = array(8, 'Природа');
    private $TECHNOLOGIES = array(9, 'Технологии');

    public function __construct(){}
    
    public function getCategoriesList(){
        $list = array();
        array_push($list, $this->IT, 
                          $this->SCIENTIFIC, 
                          $this->SPORT, 
                          $this->ENTERTAINMENT, 
                          $this->FASHION, 
                          $this->HEALTH, 
                          $this->COOKING, 
                          $this->TOURISM, 
                          $this->NATURE, 
                          $this->TECHNOLOGIES);
        return $list;
    }
    
    public function getEntryByValue($id) {
        foreach($this->getCategoriesList() as $key) {
            if($key[0] == $id)
                return array($key[0], $key[1]);
        }
        return null;
    } 
}
?>