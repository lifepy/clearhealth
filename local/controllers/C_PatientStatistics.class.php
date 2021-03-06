<?php

class C_PatientStatistics extends Controller
{
	function actionView($patient_id = '') {
		$current = $this->trail->current();
		$this->session->set('patient_action', $current->link());
		
		if ($patient_id <= 0) {
			return 'Unable to display';
		}
		
		$patientStats =& Celini::newORDO('PatientStatistics', $patient_id);
		$this->view->assign_by_ref('ordo', $patientStats);
		return $this->view->render('view.html');
	}
}

