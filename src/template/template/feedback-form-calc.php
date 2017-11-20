<?php

function feedback_form_calc($array)
{

    $form_office_address = geoInit('address');
    $form_city_name_geo = geoInit('city');
    #Рандомные числа для id радиокнопок калькулятора,
    $radio_id = rand();
    $radio_id_2 = rand();
    #Рандомное чилсо для id select
    $select_id = rand();
    ?>
    <form class="feedback-form-calc" data-form-city="<?php echo $form_city_name_geo ?>" data-step="1"
          data-form-place="<?php echo (isset($array['form-place'])) ? $array['form-place'] : ''; ?>" <?php echo (!isset($form_office_address)) ? 'data-form-office="Филиала нет"' : ''; ?>>

        <!-- Title -->
        <h3 class="feedback-form-calc__title"><?php echo (isset($array['title'])) ? $array['title'] : ''; ?></h3>

        <!-- Label -->
        <?php if (isset($array['steps']['step-1'])) ?>
        <div class="feedback-form-calc__label"><?php echo $array['steps']['step-1']['label']; ?></div>

        <div class="feedback-form-calc__wrapper">
            <!-- Input block -->
            <div class="input-inner">
                <!-- step 1 -->
                <?php if (isset($array['steps']['step-1'])): ?>
                    <input class="calc-form-input calc-step-1"
                           type="number"
                           placeholder="<?php echo $array['steps']['step-1']['placeholder'] ?>"
                           data-step-label="<?php echo $array['steps']['step-1']['label'] ?>">
                <?php endif; ?>
                <!-- step 2 -->
                <?php if (isset($array['steps']['step-2'])): ?>
                    <div class="input-select_wrapper" data-step-label="<?php echo $array['steps']['step-2']['label'] ?>"
                         style="display:none;">
                        <label for="<?php echo $select_id; ?>">
                            <select id="<?php echo $select_id; ?>" class="calc-step-2">
                                <?php foreach ($array['steps']['step-2']['options'] as $option): ?>
                                    <option><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                <?php endif; ?>
                <!-- step 3 -->
                <input class="calc-form-input calc-step-3" style="display: none;" type="tel"
                       placeholder="Ваш номер телефона">
            </div>
            <!-- BTN block -->
            <div class="btn-form-inner text-center">
                <button type="submit" class="btn btn_1" disabled>
                    <svg class="btn-submit-load-icon" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
                        <circle cx="50" cy="50" r="40" stroke-dasharray="163.36281798666926 87.9645943005142"
                                stroke="#ffff" fill="none" stroke-width="20">
                            <animateTransform attributeName="transform" type="rotate"
                                              values="0 50 50;180 50 50;360 50 50;" keyTimes="0;0.5;1" dur="1s"
                                              repeatCount="indefinite" begin="0s"></animateTransform>
                        </circle>
                    </svg>
                    Далее
                </button>
            </div>
        </div>

        <!-- Radio block -->
        <div class="form-description-text text-left" style="display: none;">
            <div style="display:none;" class="radio-block-wrapper">
                <?php if (isset($array['steps']['step-2'])) ?><span
                        class="radio-description"><?php echo $array['steps']['step-2']['radio-label']; ?></span>
                <ul class="radio-wraper">
                    <li>
                        <input id="calc-raiod-1-<?php echo $radio_id; ?>"
                               type="radio"
                               name="calc-radio"
                               value="Ремонт + дизайн" checked>
                        <label for="calc-raiod-1-<?php echo $radio_id; ?>">Да</label>
                    </li>
                    <li>
                        <input id="calc-raiod-2-<?php echo $radio_id_2; ?>"
                               type="radio"
                               name="calc-radio"
                               value="Ремонт">
                        <label for="calc-raiod-2-<?php echo $radio_id_2; ?>">Нет</label>
                    </li>
                </ul>
            </div>
            <!-- SMS text -->
            <span style="display:none;" class="sms-text">
        * Стоимость дизайна будет отправлена SMS-сообщением<br/>
        * Нажимая на кнопку, вы даете согласие на обработку своих
                <a id="feedback-form-calc__privacy-policy"
                   target="_blank"
                   href="/polozhenie-o-poryadke-hraneniya-i-zashhityi-personalnyih-dannyih-polzovateley/">персональных данных</a>
            </span>
        </div>

        <!-- Steps form -->
        <div class="calc-steps">шаг <span class="step-number">1</span> из 3</div>
    </form>

<?php } ?>
