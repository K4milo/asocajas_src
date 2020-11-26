<?php
  /**
   * Agenda component
   *
   */

$agenda_items = get_field('agenda');

if ($agenda_items): ?>
<section id="forumAgenda" class="agenda">
  <div class="container">
    <header class="agenda__header">
      <h2>Agenda</h2>
    </header>
    <div class="agenda__wrapper">
      <header class="agenda__headline">
        <h3>Centro de convenciones virtuales</h3>
      </header>
      <?php
        while(have_rows('agenda')):the_row();

        $agenda_date = get_sub_field('agenda_schedule');
        $agenda_headline = get_sub_field('agenda_headline');
        $agenda_speakers = get_sub_field('agenda_speakers');
        $hr = get_sub_field('divisor');
      ?>
      <div class="row agenda__row">
        <div class="col-md-5">
          <div class="agenda__date">
          <?php
            if ($agenda_date):?>
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <span><?php echo $agenda_date; ?></span>
          <?php
          endif; ?>
          </div>
        </div>
        <div class="col-md-7">
          <div class="agenda__event">
            <?php
            if ($agenda_headline):?>
              <h4><?php echo $agenda_headline; ?></h4>
            <?php
            endif; ?>

            <?php
            if ($agenda_speakers):?>

              <?php
                while(have_rows('agenda_speakers')):the_row();

                $speaker_name = get_sub_field('agenda_speakers_name');
                $speaker_position = get_sub_field('agenda_speakers_position');
                $speaker_video = get_sub_field('agenda_speakers_video');

              ?>

              <div class="agenda__speaker">
                <?php if ($speaker_name): ?>
                  <div class="agenda__speaker--name"><?php echo $speaker_name; ?></div>
                <?php endif; ?>

                <?php if ($speaker_position): ?>
                  <div class="agenda__speaker--position"><?php echo $speaker_position; ?></div>
                <?php endif; ?>

                <?php if ($speaker_video): ?>
                  <div class="agenda__speaker--video">
                    <a data-fancybox
                      href="https://www.youtube.com/embed/<?php echo $speaker_video; ?>?rel=0&fs=1&autoplay=0">
                      Ver Video
                    </a>
                  </div>
                <?php endif; ?>
              </div>

              <?php
                endwhile;
            endif; ?>
          </div>
          <?php if($hr==1): ?>
          <hr>
        <?php endif; ?>
        </div>
      </div>
      <?php
        endwhile;
      ?>
    </div>
  </div>
</section>
<?php
endif;
