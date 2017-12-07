# Codigniter-mail-function
    
                        $mail_congig['subject']='From Myneedfinder.com';
                        $mail_congig['message']='<b>Greeting ! </b> <br>Dear Valuable Customer,<br><br><br>Welcome to Myneedfinder! Thank you so much for joining with us. You’re on your way to super productivity and beyond!<br><br>Myneedfinder is a mobile app that helps the customers across Emarat to find you easily and increase your business surprisingly.<br>Our app is one tip to get the most out of Myneedfinder.<br><br><br>Open communication channel www.myneedfinder.com for questions, conversations, and help<br>Have any questions? Just shoot us an email! We’re always here to help.<br>info@myneedfinder.com<br><br><br>Cheerfully yours,<br><b>Myneedfinder.com</b></h4>';
                        $mail_congig['to_email']=$this->input->post('email');
                        $mail=$this->send_mail($mail_congig);
                        if($mail)
                        {
                            exit(json_encode(array('status'=>TRUE)));
                        }
                        else
                        {
                         exit(json_encode(array('status'=>TRUE, 'reason'=>'Something went wrong')));
                        }
