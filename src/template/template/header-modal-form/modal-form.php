<div id="modal-calc-header" class="white-popup-block mfp-hide">
  <?php feedback_form_calc( array(
    'form-place' => 'Общая', // Form name
    'title' => 'Рассчитайте стоимость дизайна и ремонта вашей квартиры <span class="text-primary">прямо сейчас:</span>', // Title
    'steps' => array( // Step's
      'step-1' => array( // Step 1
        'label' => 'Укажите площадь помещения:',
        'placeholder' => 'площадь помещения, м²'
      ),
      'step-2' => array( // Step 2
        'label' => 'Укажите тип помещения:',
        'options' => array( 'Новостройка', 'Вторичное жилье', 'Загородный дом' ),
        'radio-label' => 'Нужен ли вам дизайн интерьера?'
      ),
    ),
  )); ?>
</div>
