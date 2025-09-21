<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>Thank You - TechStop</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; background-color: #f8fafc; margin: 0; padding: 0; width: 100% !important; min-width: 100%; line-height: 1.6; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); }
        .header { background: linear-gradient(135deg, #334F96 0%, #2a4080 100%); padding: 48px 32px; text-align: center; position: relative; }
        .header::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 20px; background: linear-gradient(135deg, transparent 49%, #ffffff 50%); }
        .logo { max-width: 180px; height: auto; margin-bottom: 16px; }
        .header-subtitle { color: rgba(255,255,255,0.9); font-size: 18px; font-weight: 500; }
        .content { padding: 48px 32px; }
        .greeting { font-size: 28px; font-weight: 700; color: #1a202c; margin-bottom: 16px; line-height: 1.2; }
        .message { font-size: 18px; line-height: 1.7; color: #4a5568; margin-bottom: 32px; }
        .status-badge { display: inline-flex; align-items: center; background: linear-gradient(135deg, #48bb78, #38a169); color: white; padding: 12px 20px; border-radius: 50px; font-weight: 600; font-size: 14px; margin-bottom: 32px; }
        .status-icon { width: 20px; height: 20px; margin-right: 8px; }
        .info-card { background: linear-gradient(135deg, #f7fafc, #edf2f7); border: 1px solid #e2e8f0; border-radius: 16px; padding: 32px; margin: 32px 0; position: relative; overflow: hidden; }
        .info-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #334F96, #2a4080); }
        .info-title { font-size: 20px; font-weight: 700; color: #2d3748; margin-bottom: 24px; display: flex; align-items: center; }
        .info-icon { width: 24px; height: 24px; margin-right: 12px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .info-item { background: #ffffff; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; transition: all 0.3s ease; }
        .info-label { font-size: 12px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; }
        .info-value { font-size: 16px; font-weight: 600; color: #2d3748; }
        .cta-section { background: linear-gradient(135deg, #334F96, #2a4080); border-radius: 16px; padding: 32px; text-align: center; margin: 32px 0; }
        .cta-title { color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 12px; }
        .cta-text { color: rgba(255,255,255,0.9); font-size: 16px; margin-bottom: 24px; }
        .cta-button { display: inline-block; background: #ffffff; color: #334F96; padding: 16px 32px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 16px; transition: all 0.3s ease; }
        .cta-button:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(0,0,0,0.15); }
        .footer { background: #1a202c; padding: 40px 32px; text-align: center; }
        .footer-logo { max-width: 120px; height: auto; margin: 0 auto 16px; }
        .footer-text { color: #a0aec0; font-size: 14px; line-height: 1.6; }
        .footer-link { color: #334F96; text-decoration: none; }
        @media only screen and (max-width: 600px) {
            .container { margin: 0 16px; border-radius: 12px; }
            .header, .content { padding: 32px 24px; }
            .greeting { font-size: 24px; }
            .message { font-size: 16px; }
            .info-grid { grid-template-columns: 1fr; gap: 16px; }
            .cta-section { padding: 24px; }
            .footer { padding: 32px 24px; }
        }
    </style>
</head>
<body>
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <td style="padding: 32px 16px;">
                <div class="container">
                    <div class="header">
                        <img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/mail.png" alt="Company Logo" class="logo" loading="lazy">
                        <div class="header-subtitle">Your message has been received</div>
                    </div>
                    
                    <div class="content">
                        <h1 class="greeting">Thank you, {{ $contact->name }}! </h1>
                        
                        <div class="status-badge">
                            <svg class="status-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Message Received Successfully
                        </div>
                        
                        <p class="message">
                            Your message has been received! Thanks for reaching out. You can expect to hear back from a representative within 24 hours.
                        </p>
                        
                        <div class="info-card">
                            <div class="info-title">
                                <svg class="info-icon" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2h12v8H4V6z" clip-rule="evenodd"></path>
                                </svg>
                                Submission Details
                            </div>
                            
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Reference ID</div>
                                    <div class="info-value">#TS{{ str_pad($contact->id, 6, '0', STR_PAD_LEFT) }}</div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-label">Subject</div>
                                    <div class="info-value">{{ $contact->subject }}</div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-label">Submitted</div>
                                    <div class="info-value">{{ $contact->created_at->format('M j, Y') }}</div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="cta-section">
                            <div class="cta-title">Need Immediate Assistance?</div>
                            <div class="cta-text"></div>
                            <a href="mailto:contact@techstop.pro" class="cta-button">Contact Support</a>
                        </div>
                    </div>
                    <div class="footer">
                        <img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/mail.png" alt="Company Logo" class="footer-logo" loading="lazy">
                        <div class="footer-text">
                            Professional Technology Solutions<br>
                            <a href="https://www.techstop.pro" class="footer-link">Visit our website</a> • <a href="https://www.techstop.pro/contact" class="footer-link">Contact</a><br>
                            <small class="text-amber-50">© 2024 TechStop. All rights reserved.</small>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>