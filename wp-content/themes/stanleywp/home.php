<?php
/**
Template Name:  Home Page
**/
?>
<?php get_header(); ?>

    <section style="display: block; position: relative; width: 100%; height: 550px; background-color: #1f1f1f;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; padding-right: 100px; padding-left: 100px;">
                    <div class="aboutme">
                        <h1>Welcome to My Portfolio</h1>
                        <h3>ABOUT ME</h3>
                        <div class="liner"></div>
                        <p>I moved to California about a year and a half ago and I have not looked back since then. Los Angeles has an incredibly progressive tech movement and I am incredibly happy to be in the field working as a front end developer. My previous experience includes managing digital accounts for both Groupon and Discovery Channel. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="height: 700px; background-color: #f0f0f0; padding-top: 70px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 anim-left">
                    <div class="anim-in side-text" style="padding-left: 100px; padding-right: 60px;">
                        <h1 style="font-family: 'Cinzel', serif; font-weight: 600;">Matthew Ahlberg</h1>
                        <h3 style="font-family: 'Cinzel', serif; padding-bottom: 30px;">Junior Developer</h3>
                        <p style="padding-bottom: 15px;">I moved to California about a year and a half ago and I have not looked back since then. Los Angeles has an incredibly progressive tech movement and I am incredibly happy to be in the field working as a front end developer. My previous experience includes managing digital accounts for both Groupon and Discovery Channel. </p>
                    </div>
                    <div class="anim-in side-text social-icons">
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-github"></i>
                        <i class="fa fa-twitter"></i>
                    </div>
                    <button type="button" class="btn btn-default">Download Resume</button>
                </div>
                <div class="col-sm-6 anim-left">
                    <div class="anim-in side-text">
                        <img src="<?php echo get_template_directory_uri();?>/images/profile.JPG" style="width: 400px;" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="display: block; position: relative; width: 100%; height: 550px; background-color: #1f1f1f;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; padding-right: 100px; padding-left: 100px;">
                    <div class="aboutme">
                        <h1>Current Work</h1>
<!--                        <h3>ABOUT ME</h3>-->
                        <div class="liner"></div>
                        <p>I moved to California about a year and a half ago and I have not looked back since then. Los Angeles has an incredibly progressive tech movement and I am incredibly happy to be in the field working as a front end developer. My previous experience includes managing digital accounts for both Groupon and Discovery Channel. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="display: block; position: relative; width: 100%; height: 750px;  background-color: #522E3F;">
        <div class="container-fluid" style="padding: 0;">
            <div class="col-lg-12" style="padding: 0;">
                <div class="col-md-4 col-sm-4 portfolio1" >

                </div>
                <div class="col-md-4 col-sm-4" style="text-align: center; font-size: 25px; background-color: white; height: 300px;">
                    <p style="margin-top: 70px;">Creative Cirlce <br/>
                    & <br/>
                    Hustlecon
                    </p>
                </div>
                <div class="col-md-4 col-sm-4 portfolio3">

                </div>
                <div class="col-md-4 col-sm-4" style="text-align: center; font-size: 25px; background-color: white; height: 300px;">
                    <p style="margin-top: 70px;">Cutesy <br/> Pet <br/> Application
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 0;">
            <div class="col-lg-12" style="padding: 0;">
                <div class="col-md-4 col-sm-4" style="text-align: center; font-size: 25px; background-color: white; height: 300px;">
                    <p style="margin-top: 70px;">Genba <br/> Rental <br/> Application
                    </p>
                </div>
                <div class="col-md-4 col-sm-4 portfolio2">

                </div>
                <div class="col-md-4 col-sm-4" style="text-align: center; font-size: 25px; background-color: white; height: 300px;">
                    <p style="margin-top: 70px;">SXSW <br/> Interactive <br/> Guide
                    </p>
                </div>
                <div class="col-md-4 col-sm-4 portfolio4">

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>