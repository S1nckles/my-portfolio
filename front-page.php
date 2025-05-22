<?php get_header();?>
    <main class="main">
        <div class="container">
            <div class="main__inner">
                <section class="main__content" id="home">
                    <div class="main__content__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png" alt="asd"></div>
                    <h1 class="main__content__title">I do code and <br> make content <span>about it!</span></h1>
                    <p class="main__content__text">I am a seasoned full-stack software engineer with over 
                        8 years of professional experience, specializing in backend development. 
                        My expertise lies in crafting robust and scalable SaaS-based 
                        architectures on the Amazon AWS platform.</p>
                    <div class="main__content__action">
                        <button class="btn btn-active"> Get In Touch </button>
                        <button class="btn"> Download CV </button>
                    </div>
                </section>
                <section class="projects" id="projects">
                    <h2 class="projects__title">Projects</h2>
                    <div class="projects__items">
                        <div class="projects__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/projects/01.jpg" alt="Project 1"></a>                            
                            <div class="item__content">
                                <div class="item__content__text">
                                    <a href="#" class="item__content__discription">CLICK HERE TO VISIT</a>
                                    <h3 class="item__content__title">HTML TUTORIAL</h3>
                                </div>
                                <a href="#" class="item__content__link"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/arrow-icon.svg" alt="Link"></a>
                            </div>
                        </div>
                        <div class="projects__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/projects/02.jpg" alt="Project 2"></a>                            
                            <div class="item__content">
                                <div class="item__content__text">
                                    <a href="#" class="item__content__discription">CLICK HERE TO VISIT</a>
                                    <h3 class="item__content__title">CSS TUTORIAL</h3>
                                </div>
                                <a href="#" class="item__content__link"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/arrow-icon.svg" alt="Link"></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="experience" id="experience">
                    <h2 class="experience__title">Experience</h2>
                    <div class="experience__items">
                        <div class="experience__item">
                            <div class="experience__item__header">
                                <h3 class="experience__item__title experience__item__title-google">Lead Software Engineer at Google</h3>
                                <span class="experience__data">Nov 2019 - Present</span>
                            </div>
                            <p class="experience__item__text">As a Senior Software Engineer at Google, I played a pivotal role in developing innovative solutions for Google's core search algorithms. Collaborating with a dynamic team of engineers, I contributed to the enhancement of search accuracy and efficiency, optimizing user experiences for millions of users worldwide.</p>
                        </div>
                        <div class="experience__item">
                            <div class="experience__item__header">
                                <h3 class="experience__item__title experience__item__title-google">Lead Software Engineer at Google</h3>
                                <span class="experience__data">Nov 2019 - Present</span>
                            </div>
                            <p class="experience__item__text">As a Senior Software Engineer at Google, I played a pivotal role in developing innovative solutions for Google's core search algorithms. Collaborating with a dynamic team of engineers, I contributed to the enhancement of search accuracy and efficiency, optimizing user experiences for millions of users worldwide.</p>
                        </div>
                        <div class="experience__item">
                            <div class="experience__item__header">
                                <h3 class="experience__item__title experience__item__title-google">Lead Software Engineer at Google</h3>
                                <span class="experience__data">Nov 2019 - Present</span>
                            </div>
                            <p class="experience__item__text">As a Senior Software Engineer at Google, I played a pivotal role in developing innovative solutions for Google's core search algorithms. Collaborating with a dynamic team of engineers, I contributed to the enhancement of search accuracy and efficiency, optimizing user experiences for millions of users worldwide.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer();?>