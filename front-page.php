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
                <section class="skills" id="skills">
                    <h2 class="skills__title">EXPERIENCE WITH</h2>
                    <div class="skills__list">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skills/html.png" alt="HTML">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skills/css.png" alt="CSS">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skills/javascript.png" alt="JavaScript">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skills/reactjs.png" alt="ReactJS">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skills/nodejs.png" alt="NextJS">
                    </div>
                </section>
                <section class="projects" id="projects">
                    <h2 class="projects__title">Projects</h2>
                    <div class="projects__items">
                        <?php
                            $projects = new WP_Query([
                            'post_type' => 'project',
                            'posts_per_page' => 2
                            ]);

                            if ($projects->have_posts()) :
                            while ($projects->have_posts()) : $projects->the_post(); ?>
                                <div class="projects__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('full'); // або 'full', 'large'
                                        } else {
                                            echo '<div class="item__NotAImage"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/800px-Image_not_available.png" alt="Not Image" ></div>';
                                        } ?>
                                    </a>
                                    <div class="item__content">
                                        <div class="item__content__text">
                                            <a href="<?php the_permalink(); ?>" class="item__content__discription">CLICK HERE TO VISIT</a>
                                            <h3 class="item__content__title"><?php the_title(); ?></h3>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="item__content__link"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/arrow-icon.svg" alt="Link"></a>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                </section>
                <section class="experience" id="experience">
                    <h2 class="experience__title">Experience</h2>
                    <div class="experience__items">
                    <?php
                        $experiences = new WP_Query([
                            'post_type' => 'experience',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ]);

                        if ($experiences->have_posts()):
                            while ($experiences->have_posts()): $experiences->the_post(); 
                            
                            $start_date = get_post_meta(get_the_ID(), 'start_date', true);
                            $end_date = get_post_meta(get_the_ID(), 'end_date', true);?>

                            <div class="experience__item">
                                <div class="experience__item__header">
                                    <h3 class="experience__item__title"> <?php the_title(); ?> </h3>
                                    <span class="experience__data"><?php if ($start_date && $end_date) {
                                            echo $start_date . ' — ' . $end_date ;
                                        } elseif ($end_date) {
                                            echo $end_date;
                                        }?>
                                    </span>
                                </div>
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer();?>