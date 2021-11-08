<?php

class statesPHP{
  private static $states = array(
      'AC' => 'Acre',
      'AL' => 'Alagoas',
      'AP' => 'Amapá',
      'AM' => 'Amazonas',
      'BA' => 'Bahia',
      'CE' => 'Ceará',
      'DF' => 'Distrito Federal',
      'ES' => 'Espirito Santo',
      'GO' => 'Goiás',
      'MA' => 'Maranhão',
      'MS' => 'Mato Grosso do Sul',
      'MT' => 'Mato Grosso',
      'MG' => 'Minas Gerais',
      'PA' => 'Pará',
      'PB' => 'Paraíba',
      'PR' => 'Paraná',
      'PE' => 'Pernambuco',
      'PI' => 'Piauí',
      'RJ' => 'Rio de Janeiro',
      'RN' => 'Rio Grande do Norte',
      'RS' => 'Rio Grande do Sul',
      'RO' => 'Rondônia',
      'RR' => 'Roraima',
      'SC' => 'Santa Catarina',
      'SP' => 'São Paulo',
      'SE' => 'Sergipe',
      'TO' => 'Tocantins',
    );
  
  public static function getStates(){
      return self::$states;
  }
  
  public static function getStatesAcronyms(){
    return array_keys(self::$states);
  }

}
