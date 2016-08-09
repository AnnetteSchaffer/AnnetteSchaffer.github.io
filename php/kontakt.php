$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_subject = $_POST['subject'];
$field_text = $_POST['text'];

$mail_to = 'info@asc-arts.com';
$subject = ' Anfrage zu ' .$field_subject . ' von ' . $field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_text;

// Mail status:
$mail_status = mail($mail_to, $subject, $body_message, $headers);

// Mail versenden erfolgreich....
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		// Rückmeldung:
		alert('Vielen Dank fur Ihre Nachricht. Wir werden Sie umgehend kontaktieren.');
		// Redirect auf eine Unterseite oder eine ganz andere URL ist auch möglich http://template-help.com
		window.location = '/Kontakt.html';
	</script>
<?php
}
// Mail versenden schlägt fehl...
else { ?>
	<script language="javascript" type="text/javascript">
		// Rückmeldung
		alert(' Senden der Nachricht fehlgeschlagen. Bitte senden Sie eine E-mail an info@acs-arts.com');
		// Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
		window.location = 'contact_page.html';
	</script>
<?php
}?>

