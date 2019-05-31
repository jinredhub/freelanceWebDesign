<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="affordable web design in San Francisco, freelancer web developer in bay area, Jin Redmond, WEBデザイン サンフランシスコ, ウェブ制作　ベイエリア、　フリーランス　ウェブ作成　サンフランシスコ">
        <meta name="description" content="Multifunctional designer/fontend developer based in San Francisco">
        <title>Jin - Web Developer: contact</title>
        <!-- favicon -->
		<link rel="shortcut icon" href="./images/favicon.ico">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		<!-- font awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- normalize -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141238376-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141238376-1');
        </script>

    </head>
    <body>
        
        <!-- nav -->
        <nav>
            <?php include('header_en.php'); ?>
        </nav>

        <!-- title section -->
    	<div class='disp-flex justify-content--center align-items--center flex-dir-col'></div>

        <main>
            <!-- form section -->
            <section>
                    <div class="padding50"></div>
                    <h1 class='text-align-center'>Contact Form</h1>
                    <div class="padding50"></div>

                        <form action="https://formspree.io/jin@nieblo.com" method="POST">
                            <div class="disp-flex">
                                <div class="flex-50 padding-inputEl">
                                    <label for="first_name" class='req'>First name</label>
                                    <input type="text" class='form-cont' name="first_name" required>    
                                </div>
                                <div class="flex-50 padding-inputEl">
                                    <label for="last_name" class='req'>Last name</label>
                                    <input type="text" class='form-cont' name='last_name' required>        
                                </div>
                            </div>
                        
                            <div class="disp-flex">
                                <div class="flex-50 padding-inputEl">
                                    <label for="phone_number">Phone</label>
                                    <input type="text" class='form-cont' name='phone_number'>        
                                </div>
                                <div class="flex-50 padding-inputEl">
                                    <label for="url">URL</label><small> : Your current website url if you have it</small>        
                                    <input type="text" class='form-cont' name='url'>
                                </div>
                            </div>

                            <div class="disp-flex">
                                <div class="flex-50 padding-inputEl">
                                    <label for="_replyto" class='req'>Email</label>
                                    <input type="email" class='form-cont' name="_replyto" required>
                                </div>
                                <div class="flex-50 padding-inputEl">
                                    <label for="email_again" class='req'>Email(again)</label>
                                    <input type="email" class='form-cont' name="email_again" required>    
                                </div>    
                            </div>

                            <div class="disp-flex">
                                <div class="flex-50 padding-inputEl">
                                    <label for="topic" class='req'>Please choose</label>
                                    <div class='padding-left-2'>
                                        <label class="checkBoxContainer" for="request_to_create_new_website">Request to create new website
                                            <input type="checkbox" name="request_to_create_new_website" id="request_to_create_new_website" value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkBoxContainer" for="request_to_create_new_website_and_maintenance">Request to create new website and maintenance
                                            <input type="checkbox" name="request_to_create_new_website_and_maintenance" id="request_to_create_new_website_and_maintenance" value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkBoxContainer" for="other_request">Other
                                            <input type="checkbox" name="other_request" id="other_request" value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="disp-flex flex-dir-col padding-inputEl">
                                <label for="message" class='req'>Message</label>
                                <textarea class='form-cont' name="message" cols="30" rows="10" required></textarea>
                                <p><span class='req'></span> = Required Field</p>
                            </div>
                         
                            <div class="disp-flex justify-content--center padding-inputEl align-items--center">
                                <input type="submit" value="Send" class='btn btn-primary'>
                            </div>
                        </form>
                    <div class="padding50"></div>
                </section>


            
        </main>

		<!-- footer -->
		<footer>
            <?php include('footer.php'); ?>
        </footer>

        <!-- jquery -->
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <!-- lazysizes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js"></script>
        
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
