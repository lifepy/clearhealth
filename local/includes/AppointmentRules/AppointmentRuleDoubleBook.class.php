<?php
$loader->requireOnce('includes/AppointmentRules/AppointmentRuleAbstract.class.php');
$loader->requireOnce('includes/ClearhealthCalendarData.class.php');
class AppointmentRuleDoubleBook extends AppointmentRuleAbstract {

	function isApplicable() {
		return true;
	}

	function isValid() {
		$cd = new ClearhealthCalendarData();
		$appointments = $cd->appointmentsOverlapping($this->appointment->get('start'),$this->appointment->get('end'));

		$valid = true;

		$appId = $this->appointment->get('id');

	/*	// build some counts
		$roomCount = array();
		foreach($appointments as $key => $appointment) {
			if ($appointment['appointment_id'] == $appId) {
				unset($appointments[$key]);
				//continue;

			}
			if (!isset($roomCount[$appointment['room_id']])) {
				$roomCount[$appointment['room_id']] = 0;
			}
			$roomCount[$appointment['room_id']]++;
		}

		//trigger_error(print_r($roomCount,true));

		// check for room double booking - this looks at number of beds/seats in the room
		$messages = array();
		$roomId = $this->appointment->get('room_id');
		$room = '';
		foreach($appointments as $appointment) {
			if ($roomId == $appointment['room_id'] && ($roomCount[$appointment['room_id']] + 1) > $appointment['roomMax']) {
				if ($appointment['appointment_code'] == "CAN") continue;
				$room = $appointment['room'];
				$messages[] = $this->appointmentSummary($appointment);
			}
		}
		if (count($messages) > 0) {
			$this->errorMessage = "<b>Conflicting appointments in Room <i>$room</i>:</b><br>".implode('<br>',$messages);
			$valid = false;
		}
*/

		// check for provider double booking - looks at how many appointments a provider is doing at once
		$messages = array();
		$providerId = $this->appointment->get('provider_id');
		if ($providerId > 0) {
			foreach($appointments as $appointment) {
				if ($appointment['appointment_code'] == "CAN") continue;
				if ($providerId == $appointment['provider_id']) {
					$provider = $appointment['providerName'];
					$messages[] = $this->appointmentSummary($appointment);
				} else {
					// Check if the provider exists in the appointment's breakdown
					$providers = explode(',',$appointment['breakdown_providers']);
					$providernames = explode(',',$appointment['breakdown_providernames']);
					foreach($providers as $id=>$bkdnprovider) {
						if($providerId == $bkdnprovider) {
							$provider = $providernames[$id];
							$messages[] = $this->appointmentSummary($appointment);
						}
					}
				}
			}
		}
		if (count($messages) > 0) {
			$this->errorMessage = "<b>Conflicting appointments for Provider <i>$provider</i>:</b><br>".implode('<br>',$messages);
			$valid = false;
		}


		return $valid;
	}

	function appointmentSummary($data) {
		return "{$data['patientName']}: {$data['startTime']} to {$data['endTime']}"; 
	}
}
?>
