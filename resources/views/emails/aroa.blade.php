

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demystifying Email Design</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://www.aroapartners.com/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

<style type="text/css">
    a[x-apple-data-detectors] {
        color: inherit !important;
    }

</style>

</head>

<body style="margin: 0; padding: 0;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
    <td style="padding: 20px 0 30px 0;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
               style="border-collapse: collapse; border: 1px solid #cccccc;">
            <tr>
                <td bgcolor="#70bbd9" style="padding: 20px 0 20px 0;">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-2">
                            <img src="https://www.aroapartners.com/images/logo.png" alt="logo" class="logo"
                                 width="70">
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10" align="center">
                            <h1>Aroapartners</h1>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                           style="border-collapse: collapse;">
                        <tr>
                            <td style="color: #153643; font-family: Arial, sans-serif;">
                                <p>Candidature de M/Mme {{ $name . ' ' . $prenom }}</p>
                                <p>Email: {{$email}}</p>

                                <div>
                                    <p><a href="{{$cv}}">CV</a></p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#ee4c50" style="padding: 30px 30px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                           style="border-collapse: collapse;">
                        <tr>
                            <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
                                <p style="margin: 0;">&reg; Aroapartners, 2021<br />

                                </p>
                            </td>
                            <td align="right">
                                <table border="0" cellpadding="0" cellspacing="0"
                                       style="border-collapse: collapse;">
                                    <tr>
                                        <td>
                                            <a href="https://www.linkedin.com/company/aroa-partners/">
                                                <i class="fab fa-linkedin-in" style="font-size: 2rem;"></i>

                                            </a>
                                        </td>
                                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                        <td>
                                            <a href="https://www.facebook.com/aroapartners" class="fab fa-facebook" style="font-size: 2rem;">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

    </td>
</tr>
</table>
</body>
</html>
