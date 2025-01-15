<?php

namespace Clases;

class Pub_gestdocente extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'wsagrupaciones' => 'Clases\\wsagrupaciones',
  'wsagrupacionesResponse' => 'Clases\\wsagrupacionesResponse',
  'ArrayOfClaseAgrupaciones' => 'Clases\\ArrayOfClaseAgrupaciones',
  'ClaseAgrupaciones' => 'Clases\\ClaseAgrupaciones',
  'wsfechaexamenesasi' => 'Clases\\wsfechaexamenesasi',
  'wsfechaexamenesasiResponse' => 'Clases\\wsfechaexamenesasiResponse',
  'ArrayOfClaseFechaExamenesAsi' => 'Clases\\ArrayOfClaseFechaExamenesAsi',
  'ClaseFechaExamenesAsi' => 'Clases\\ClaseFechaExamenesAsi',
  'wsfechaexamenesasitotal' => 'Clases\\wsfechaexamenesasitotal',
  'wsfechaexamenesasitotalResponse' => 'Clases\\wsfechaexamenesasitotalResponse',
  'ArrayOfClaseFechaExamenesAsiTotal' => 'Clases\\ArrayOfClaseFechaExamenesAsiTotal',
  'ClaseFechaExamenesAsiTotal' => 'Clases\\ClaseFechaExamenesAsiTotal',
  'wsfechaexamenesasinue' => 'Clases\\wsfechaexamenesasinue',
  'wsfechaexamenesasinueResponse' => 'Clases\\wsfechaexamenesasinueResponse',
  'ArrayOfClaseFechaExamenesAsiNue' => 'Clases\\ArrayOfClaseFechaExamenesAsiNue',
  'ClaseFechaExamenesAsiNue' => 'Clases\\ClaseFechaExamenesAsiNue',
  'wsfechaexamenesplan' => 'Clases\\wsfechaexamenesplan',
  'wsfechaexamenesplanResponse' => 'Clases\\wsfechaexamenesplanResponse',
  'ArrayOfClaseFechaExamenesPlan' => 'Clases\\ArrayOfClaseFechaExamenesPlan',
  'ClaseFechaExamenesPlan' => 'Clases\\ClaseFechaExamenesPlan',
  'wsasidepto' => 'Clases\\wsasidepto',
  'wsasideptoResponse' => 'Clases\\wsasideptoResponse',
  'ArrayOfClaseAsiDepto' => 'Clases\\ArrayOfClaseAsiDepto',
  'ClaseAsiDepto' => 'Clases\\ClaseAsiDepto',
  'wsdatosasig' => 'Clases\\wsdatosasig',
  'wsdatosasigResponse' => 'Clases\\wsdatosasigResponse',
  'ArrayOfClaseDatosAsig' => 'Clases\\ArrayOfClaseDatosAsig',
  'ClaseDatosAsig' => 'Clases\\ClaseDatosAsig',
  'wshorarioagrp' => 'Clases\\wshorarioagrp',
  'wshorarioagrpResponse' => 'Clases\\wshorarioagrpResponse',
  'ArrayOfClaseHorarioAgrp' => 'Clases\\ArrayOfClaseHorarioAgrp',
  'ClaseHorarioAgrp' => 'Clases\\ClaseHorarioAgrp',
  'wshorarios' => 'Clases\\wshorarios',
  'wshorariosResponse' => 'Clases\\wshorariosResponse',
  'ArrayOfClaseHorarios' => 'Clases\\ArrayOfClaseHorarios',
  'ClaseHorarios' => 'Clases\\ClaseHorarios',
  'wstitulosuni' => 'Clases\\wstitulosuni',
  'wstitulosuniResponse' => 'Clases\\wstitulosuniResponse',
  'ArrayOfClaseTitulosUni' => 'Clases\\ArrayOfClaseTitulosUni',
  'ClaseTitulosUni' => 'Clases\\ClaseTitulosUni',
  'wsdatosplan' => 'Clases\\wsdatosplan',
  'wsdatosplanResponse' => 'Clases\\wsdatosplanResponse',
  'ArrayOfClaseDatosPlan' => 'Clases\\ArrayOfClaseDatosPlan',
  'ClaseDatosPlan' => 'Clases\\ClaseDatosPlan',
  'wsplanesasig' => 'Clases\\wsplanesasig',
  'wsplanesasigResponse' => 'Clases\\wsplanesasigResponse',
  'ArrayOfClasePlanesAsig' => 'Clases\\ArrayOfClasePlanesAsig',
  'ClasePlanesAsig' => 'Clases\\ClasePlanesAsig',
  'wsplanesdep' => 'Clases\\wsplanesdep',
  'wsplanesdepResponse' => 'Clases\\wsplanesdepResponse',
  'ArrayOfClasePlanesDep' => 'Clases\\ArrayOfClasePlanesDep',
  'ClasePlanesDep' => 'Clases\\ClasePlanesDep',
  'wsdptoasig' => 'Clases\\wsdptoasig',
  'wsdptoasigResponse' => 'Clases\\wsdptoasigResponse',
  'ArrayOfClaseDptoAsig' => 'Clases\\ArrayOfClaseDptoAsig',
  'ClaseDptoAsig' => 'Clases\\ClaseDptoAsig',
  'wsareasdpto' => 'Clases\\wsareasdpto',
  'wsareasdptoResponse' => 'Clases\\wsareasdptoResponse',
  'ArrayOfClaseAreasDpto' => 'Clases\\ArrayOfClaseAreasDpto',
  'ClaseAreasDpto' => 'Clases\\ClaseAreasDpto',
  'wsdptocen' => 'Clases\\wsdptocen',
  'wsdptocenResponse' => 'Clases\\wsdptocenResponse',
  'ArrayOfClaseDptoCen' => 'Clases\\ArrayOfClaseDptoCen',
  'ClaseDptoCen' => 'Clases\\ClaseDptoCen',
  'wsasiplan' => 'Clases\\wsasiplan',
  'wsasiplanResponse' => 'Clases\\wsasiplanResponse',
  'ArrayOfClaseAsiPlan' => 'Clases\\ArrayOfClaseAsiPlan',
  'ClaseAsiPlan' => 'Clases\\ClaseAsiPlan',
  'wscalificaciones' => 'Clases\\wscalificaciones',
  'wscalificacionesResponse' => 'Clases\\wscalificacionesResponse',
  'ArrayOfClaseCalificaciones' => 'Clases\\ArrayOfClaseCalificaciones',
  'ClaseCalificaciones' => 'Clases\\ClaseCalificaciones',
  'wsconvocatorias' => 'Clases\\wsconvocatorias',
  'wsconvocatoriasResponse' => 'Clases\\wsconvocatoriasResponse',
  'ArrayOfClaseConvocatorias' => 'Clases\\ArrayOfClaseConvocatorias',
  'ClaseConvocatorias' => 'Clases\\ClaseConvocatorias',
  'wsgruposasi' => 'Clases\\wsgruposasi',
  'wsgruposasiResponse' => 'Clases\\wsgruposasiResponse',
  'ArrayOfClaseGrupoAsi' => 'Clases\\ArrayOfClaseGrupoAsi',
  'ClaseGrupoAsi' => 'Clases\\ClaseGrupoAsi',
  'wsconvemovilidad' => 'Clases\\wsconvemovilidad',
  'wsconvemovilidadResponse' => 'Clases\\wsconvemovilidadResponse',
  'ArrayOfClaseConveMovilidad' => 'Clases\\ArrayOfClaseConveMovilidad',
  'ClaseConveMovilidad' => 'Clases\\ClaseConveMovilidad',
  'wstitulospropiosuni' => 'Clases\\wstitulospropiosuni',
  'wstitulospropiosuniResponse' => 'Clases\\wstitulospropiosuniResponse',
  'ArrayOfClaseTitulosPropiosUni' => 'Clases\\ArrayOfClaseTitulosPropiosUni',
  'ClaseTitulosPropiosUni' => 'Clases\\ClaseTitulosPropiosUni',
  'wsreqidiomab1plan' => 'Clases\\wsreqidiomab1plan',
  'wsreqidiomab1planResponse' => 'Clases\\wsreqidiomab1planResponse',
  'ClaseReqidiomab1plan' => 'Clases\\ClaseReqidiomab1plan',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'stream_context' => NULL,
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param wsagrupaciones $parameters
     * @return wsagrupacionesResponse
     */
    public function wsagrupaciones(wsagrupaciones $parameters)
    {
      return $this->__soapCall('wsagrupaciones', array($parameters));
    }

    /**
     * @param wsfechaexamenesasi $parameters
     * @return wsfechaexamenesasiResponse
     */
    public function wsfechaexamenesasi(wsfechaexamenesasi $parameters)
    {
      return $this->__soapCall('wsfechaexamenesasi', array($parameters));
    }

    /**
     * @param wsfechaexamenesasitotal $parameters
     * @return wsfechaexamenesasitotalResponse
     */
    public function wsfechaexamenesasitotal(wsfechaexamenesasitotal $parameters)
    {
      return $this->__soapCall('wsfechaexamenesasitotal', array($parameters));
    }

    /**
     * @param wsfechaexamenesasinue $parameters
     * @return wsfechaexamenesasinueResponse
     */
    public function wsfechaexamenesasinue(wsfechaexamenesasinue $parameters)
    {
      return $this->__soapCall('wsfechaexamenesasinue', array($parameters));
    }

    /**
     * @param wsfechaexamenesplan $parameters
     * @return wsfechaexamenesplanResponse
     */
    public function wsfechaexamenesplan(wsfechaexamenesplan $parameters)
    {
      return $this->__soapCall('wsfechaexamenesplan', array($parameters));
    }

    /**
     * @param wsasidepto $parameters
     * @return wsasideptoResponse
     */
    public function wsasidepto(wsasidepto $parameters)
    {
      return $this->__soapCall('wsasidepto', array($parameters));
    }

    /**
     * @param wsdatosasig $parameters
     * @return wsdatosasigResponse
     */
    public function wsdatosasig(wsdatosasig $parameters)
    {
      return $this->__soapCall('wsdatosasig', array($parameters));
    }

    /**
     * @param wshorarioagrp $parameters
     * @return wshorarioagrpResponse
     */
    public function wshorarioagrp(wshorarioagrp $parameters)
    {
      return $this->__soapCall('wshorarioagrp', array($parameters));
    }

    /**
     * @param wshorarios $parameters
     * @return wshorariosResponse
     */
    public function wshorarios(wshorarios $parameters)
    {
      return $this->__soapCall('wshorarios', array($parameters));
    }

    /**
     * @param wstitulosuni $parameters
     * @return wstitulosuniResponse
     */
    public function wstitulosuni(wstitulosuni $parameters)
    {
      return $this->__soapCall('wstitulosuni', array($parameters));
    }

    /**
     * @param wsdatosplan $parameters
     * @return wsdatosplanResponse
     */
    public function wsdatosplan(wsdatosplan $parameters)
    {
      return $this->__soapCall('wsdatosplan', array($parameters));
    }

    /**
     * @param wsplanesasig $parameters
     * @return wsplanesasigResponse
     */
    public function wsplanesasig(wsplanesasig $parameters)
    {
      return $this->__soapCall('wsplanesasig', array($parameters));
    }

    /**
     * @param wsplanesdep $parameters
     * @return wsplanesdepResponse
     */
    public function wsplanesdep(wsplanesdep $parameters)
    {
      return $this->__soapCall('wsplanesdep', array($parameters));
    }

    /**
     * @param wsdptoasig $parameters
     * @return wsdptoasigResponse
     */
    public function wsdptoasig(wsdptoasig $parameters)
    {
      return $this->__soapCall('wsdptoasig', array($parameters));
    }

    /**
     * @param wsareasdpto $parameters
     * @return wsareasdptoResponse
     */
    public function wsareasdpto(wsareasdpto $parameters)
    {
      return $this->__soapCall('wsareasdpto', array($parameters));
    }

    /**
     * @param wsdptocen $parameters
     * @return wsdptocenResponse
     */
    public function wsdptocen(wsdptocen $parameters)
    {
      return $this->__soapCall('wsdptocen', array($parameters));
    }

    /**
     * @param wsasiplan $parameters
     * @return wsasiplanResponse
     */
    public function wsasiplan(wsasiplan $parameters)
    {
      return $this->__soapCall('wsasiplan', array($parameters));
    }

    /**
     * @param wscalificaciones $parameters
     * @return wscalificacionesResponse
     */
    public function wscalificaciones(wscalificaciones $parameters)
    {
      return $this->__soapCall('wscalificaciones', array($parameters));
    }

    /**
     * @param wsconvocatorias $parameters
     * @return wsconvocatoriasResponse
     */
    public function wsconvocatorias(wsconvocatorias $parameters)
    {
      return $this->__soapCall('wsconvocatorias', array($parameters));
    }

    /**
     * @param wsgruposasi $parameters
     * @return wsgruposasiResponse
     */
    public function wsgruposasi(wsgruposasi $parameters)
    {
      return $this->__soapCall('wsgruposasi', array($parameters));
    }

    /**
     * @param wsconvemovilidad $parameters
     * @return wsconvemovilidadResponse
     */
    public function wsconvemovilidad(wsconvemovilidad $parameters)
    {
      return $this->__soapCall('wsconvemovilidad', array($parameters));
    }

    /**
     * @param wstitulospropiosuni $parameters
     * @return wstitulospropiosuniResponse
     */
    public function wstitulospropiosuni(wstitulospropiosuni $parameters)
    {
      return $this->__soapCall('wstitulospropiosuni', array($parameters));
    }

    /**
     * @param wsreqidiomab1plan $parameters
     * @return wsreqidiomab1planResponse
     */
    public function wsreqidiomab1plan(wsreqidiomab1plan $parameters)
    {
      return $this->__soapCall('wsreqidiomab1plan', array($parameters));
    }

}
