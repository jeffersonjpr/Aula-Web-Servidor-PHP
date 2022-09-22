<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>
    <div class="rendered-form">
        <div class="formbuilder-text form-group field-dest">
            <label for="dest" class="formbuilder-text-label">Destinatário<span class="formbuilder-required">*</span></label>
            <input type="email" class="form-control" name="dest" access="false" id="dest" required="required" aria-required="true">
        </div>
        <div class="formbuilder-text form-group field-subject">
            <label for="subject" class="formbuilder-text-label">Assunto</label>
            <input type="text" class="form-control" name="subject" access="false" id="subject">
        </div>
        <div class="formbuilder-textarea form-group field-message">
            <label for="message" class="formbuilder-textarea-label">Mensagem</label>
            <textarea type="textarea" class="form-control" name="message" access="false" id="message"></textarea>
        </div>
        <div class="formbuilder-button form-group field-send">
            <button type="submit" class="btn-default btn" name="send" access="false" style="default" id="send">Enviar</button>
        </div>
    </div>
</body>

</html>