
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem corrupti, magni a provident odio quas illum explicabo dicta velit atque repellat nobis, hic magnam qui numquam sed voluptatem maiores ea!</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Ashulia, Savar, Dhaka</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>0123456789</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>suppose90@gmail.com</p>
                        </div>
                    </div>    
                </div>
                <div class="contactForm">
                <form action="contact" method="POST" >
                    @csrf
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="msg" required="required">
                            <span>Type your message</span>
                        </div>
                        
                        <div class="inputBox">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
<style>
     *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.contact
{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: rgb(58, 128, 194);
    background-size: cover;
}
.contact .content
{
    max-width: 800px;
    text-align: center;
}
.contact .content h2
{
    font-size: 36px;
    font-weight: 500;
    color: #fff;
}
.contact .content p
{
    font-weight: 300;
    color: white;
}
.container
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo
{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box
{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon
{
    min-width: 60px;
    height: 60px;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 20px;
}
.container .contactInfo .box .text
{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: white;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text .h3
{
    font-weight: 500;
    color: #00bcd4;
}
.contactForm
{
    width: 40%;
    padding: 40px;
    background: white;
}
.contactForm h2
{
    font-size: 30px;
    color: #333;
    font-weight: 500;
}
.contactForm .inputBox
{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
    color: #e91e63;
    font-size: 12px;
    transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]
{
    width: 100px;
    background: #00bcd4;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}
@media (max-width: 991px)
{
    .contact
    {
        padding: 50px;
    }
    .container
    {
        flex-direction: column;
    }
    .container .contactInfo
    {
        margin-bottom: 40px;
    }
    .container .contactInfo,
    .contactForm
    {
        width: 100%;
    }
    
}
</style>
