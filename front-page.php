<?php get_header();?>
    <main class="main">
        <div class="container">
            <div class="main__inner">
                <section class="main__content">
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
                <section class="main__skills">
                    <h1 class="main__skills__title">EXPERIENCE WITH</h1>
                    <div class="main__skills-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/javascript.png" alt="JavaScript">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/nodejs.png" alt="NextJS">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/html.png" alt="HTML">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/css.png" alt="CSS">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/reactjs.png" alt="React">
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer();?>