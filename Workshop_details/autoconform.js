function sendAutoReply(e) {

    // Remember to replace abc@youmail.com with your own email address
    // This will be used to send you a email notification in case of error on form
    // for example if someone entered a wrong email address.

    var myemail = Session.getActiveUser().getEmail();

    //Leave this field blank - it will be auto populated from "Email" field in 
    // your contact form. Make sure you have a "Email" Field in your contact form.
    var email = "";

    // This is going to be the subject of reply email
    // You can change it as per your requirements

    var subject = "Re: ";

    // The variable e holds all the form values in an array.
    // Loop through the array and append values to the body.

    var message = "Thanks for contacting Submiting your Request to Andro Engine Wrokshop .If you have not done the payment yet please click on the following link \n http://www.meraevents.com/previewevent?view=preview&eventId=113927 \n\n-----\n\n";
    var columns, mysheet;

    try {
        mysheet = SpreadsheetApp.getActiveSheet();
        columns = mysheet.getRange(1, 1, 1, mysheet.getLastColumn()).getValues()[0];
        if (e) {
            // This is the submitter's email address
            var em = e.namedValues["Email Id"];
            if(em) {
              email = em.toString();
            } else {
              throw {'message':'Email Field is required. Please add a field called Email in your sheet.'}
            }
            var sub = e.namedValues["Subject"];
            if(sub) {
              subject += sub.toString();
            }
            // Only include form values that are not blank
            for (var keys in columns) {
                var key = columns[keys];
                if (e.namedValues[key]) {
                    message += key + ' :: ' + e.namedValues[key] + "\n\n";
                }
            }

            // We are using JavaScript MailApp util of Google Apps Script
            // that sends the email.

            MailApp.sendEmail(email, subject, message, {
                replyTo: myemail
            });
        } else {
            var err = 'Required Input params are passed only during live form submission. Please try the script by submitting the live form.';
            Logger.log(err);
            throw {
                'message': err
            };
        }

    } catch (e) {
        MailApp.sendEmail(myemail, "Error in Auto replying to contact form submission. No reply was sent.", e.message + ' \n\ncolumns: ' + columns + ' \n\nmessage: ' + message);
    }
}
