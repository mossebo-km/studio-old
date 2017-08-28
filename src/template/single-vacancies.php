<?php
get_header();
?>

<div class="vacancies container-fluid">
    <h1 class="section-title vacancies__section-title"><?php echo the_title(); ?></h1>
    <div class="vacancies-content">
        <div class="col-xl-10 offset-xl-1">
            <div class="row">

                <!-- left col -->
                <div class="col-md-8">
                    <!-- text -->
                    <div class="vacancies__text">
                        <p class="vacancies__text-paragraph"><?php the_field('vacancies__description'); ?></p>
                    </div>

                    <!-- list -->
                    <?php
                    $vacancies_list_block = 'vacancies__list-block';
                    $vacancies_list_title = 'vacancies__list-block-title';

                    $vacancies_list = 'vacancies__list';
                    $vacancies_list_item = 'vacancies__list-item';

                    if (have_rows($vacancies_list_block)) {
                        while (have_rows($vacancies_list_block)) {
                            the_row(); ?>
                            <div class="vacancies__list-block">
                                <!-- tite -->
                                <div
                                    class="vacancies__list-block-title"><?php the_sub_field($vacancies_list_title); ?></div>
                                <!-- list -->
                                <?php if (have_rows($vacancies_list)) { ?>
                                    <ul class="vacancies__list franchise-require__col-list_pr">
                                        <?php while (have_rows($vacancies_list)) {
                                            the_row(); ?>
                                            <li><?php the_sub_field($vacancies_list_item); ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        <?php }
                    } ?>

                </div>

                <!-- right col -->
                <div class="vacancies__sidebar col-md-4">
                    <div class="row">
                        <div class="vacancies__sidebar-col col-12">
                            <div class="vacancies__sidebar-col-title">Уровень зарплаты</div>
                            <div class="vacancies__sidebar-col-info">
                                <?php the_field('vacancies__sidebar-col-info-price'); ?>
                            </div>
                        </div>
                        <div class="vacancies__sidebar-col col-12">
                            <div class="vacancies__sidebar-col-title">Город</div>
                            <div class="vacancies__sidebar-col-info">
                                <?php the_field('vacancies__sidebar-col-info-city'); ?>
                            </div>
                        </div>
                        <div class="vacancies__sidebar-col col-12">
                            <div class="vacancies__sidebar-col-title">Требуемый опыт работы</div>
                            <div class="vacancies__sidebar-col-info">
                                <?php the_field('vacancies__sidebar-col-info-skill'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- feedback-form block -->
    <?php get_template_part('/template/vacancies/vacancies-feedback'); ?>

</div>

<?php get_footer(); ?>
