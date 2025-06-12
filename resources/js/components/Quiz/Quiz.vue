<template>
   <div class="quiz-container">
    <div v-if="(currentStep <= questions.length) && !showContactForm" class="quiz-content">
      <h2>Вопрос {{ currentStep }} из {{ questions.length }}</h2>

      <div class="question-container">
        <h3>{{ currentQuestion.text }}</h3>

        <div v-if="currentQuestion.type === 'multiple-choice'" class="options-container">
          <div
            v-for="(option, index) in currentQuestion.options"
            :key="index"
            class="option"
            :class="{ 'selected': answers[currentStep - 1]?.answer === option }"
            @click="selectOption(option)"
          >
            {{ option }}
          </div>
        </div>

        <div v-else class="input-container">
          <input
            type="text"
            v-model="answers[currentStep - 1].answer"
            :placeholder="currentQuestion.placeholder || 'Введите ваш ответ'"
          >
        </div>
      </div>

      <div class="reviews_btn_wrapper">
        <a title="Предыдущий вопрос" @click.prevent="prevStep" class="arrow_button arrow_pred" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_left"></use>
            </svg>
        </a>
        <a title="Следующий вопрос" v-show="currentStep < questions.length" @click.prevent="nextStep" class="arrow_button arrow_next" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_right"></use>
            </svg>
        </a>

        <a title="Завершить расчет" v-show="currentStep === questions.length" @click.prevent="showContactForm = true" class="arrow_button arrow_next" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_right"></use>
            </svg>
        </a>
      </div>
    </div>

    <div v-if="showContactForm" class="contact-form">
      <h3>Почти готово!</h3>
      <p>Пожалуйста, оставьте ваши контактные данные, чтобы мы могли связаться с вами.</p>

        <br>

      <div class="form-group">
        <label for="phone">Номер телефона:</label>
        <input
          type="tel"
          id="phone"
          v-mask="{mask: '+N (NNN) NNN-NN-NN', model: 'cpf' }"
          v-model="contactInfo.phone"
          placeholder="Введите ваш номер телефона"
          required
        >
      </div>

        <label class="checbox_label" for="policy_ch">
            <input v-model="policy_ch" type="checkbox" id="policy_ch">
            <span>Я соглашаюсь с <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx"> политикой в области обработки персональных данных</a></span>
        </label>

        <label class="checbox_label" for="accept_ch">
            <input v-model="accept_ch" type="checkbox" id="accept_ch">
            <span>Я даю <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">согласие на обработку моих персональных данных</a></span>
        </label>
        <br>
        <div class="error_list_wrap">
            <div v-for="(item, index) in errorList" :key="index" class="error">{{item}}</div>
        </div>

      <div class="form-actions">
        <button @click="showContactForm = false" class="button">
          Вернуться к опросу
        </button>

        <button @click="submitQuiz" class="button">
          Отправить
        </button>
      </div>
    </div>

    <div v-if="submissionStatus === 'success'" class="success-message">
      <h2>Спасибо!</h2>
      <p>Ваши ответы успешно отправлены.</p>
      <p>Мы свяжемся с вами в ближайшее время.</p>
    </div>

    <div v-if="submissionStatus === 'error'" class="error-message">
      <h2>Произошла ошибка</h2>
      <p>При отправке ваших ответов произошла ошибка. Пожалуйста, попробуйте позже.</p>
      <button @click="resetSubmission" class="try-again-button">
        Попробовать снова
      </button>
    </div>

    <div class="progress-indicator">
      <div
        v-for="(question, index) in questions"
        :key="index"
        class="progress-step"
        :class="{
          'active': currentStep === index + 1,
          'answered': answers[index]?.answer,
          'current-form': showContactForm && currentStep > questions.length
        }"
        @click="goToStep(index + 1)"
      >
        {{ index + 1 }}
      </div>
      <div
        class="progress-step contact-step"
        :class="{
          'active': showContactForm,
          'current-form': submissionStatus
        }"
      >
        <span>✓</span>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import axios from 'axios'

// Конфигурация вопросов
const questions = ref([
  {
    id: 1,
    text: 'Какая у Вас постройка?',
    type: 'multiple-choice',
    options: ['Дом', 'Баня', 'Гараж', 'Пристройка', 'Забор', 'Другое'],
  },
  {
    id: 2,
    text: 'Из какого материала постройка?',
    type: 'multiple-choice',
    options: ['Каркас', 'Брус', 'Кирпич', 'Газобетон', 'Спил', 'Другое'],
  },
  {
    id: 3,
    text: 'Какие габариты постройки? (длинна, ширина)',
    type: 'text-input',
    placeholder: 'Введите ваш ответ...'
  },
  {
    id: 4,
    text: 'Есть ли проблемы с подездом к участку?',
    type: 'text-input',
    placeholder: 'Введите ваш ответ...'
  },
  {
    id: 5,
    text: 'Какой тип грунта на участке?',
    type: 'multiple-choice',
    options: ['Песок', 'Суглинок', 'Торф', 'Земля', 'Другое'],
  },

])

const errorList = ref([]);
const policy_ch = ref(false)
const accept_ch = ref(false)

// Состояние компонента
const currentStep = ref(1)
const showContactForm = ref(false)
const submissionStatus = ref(null) // null, 'success', или 'error'

// Инициализация массива ответов
const answers = ref(questions.value.map(question => ({
  questionId: question.id,
  questionText: question.text,
  answer: ''
})))

const contactInfo = ref({
  phone: '',
})

// Вычисляемые свойства
const currentQuestion = computed(() => {
  return questions.value[currentStep.value - 1]
})

// Методы
const nextStep = () => {
  if (currentStep.value < questions.value.length) {
    currentStep.value++
  }
}

const prevStep = () => {
  if (currentStep.value > 1) {
    currentStep.value--
  }
}

const goToStep = (step) => {
  if (step >= 1 && step <= questions.value.length) {
    currentStep.value = step
    showContactForm.value = false
  }
}

const selectOption = (option) => {
  answers.value[currentStep.value - 1].answer = option
}

const submitQuiz = async () => {

  errorList.value = [];

    if (contactInfo.value.phone === "") {
        errorList.value.push("Поле 'Телефон' не заполнено");
    }

    if (policy_ch.value == false) {
        errorList.value.push("Вы не согласились с политикой");
    }

    if (accept_ch.value == false) {
        errorList.value.push("Вы не согласились на обработку персональных данных");
    }

    if (errorList.value.length !== 0) return;

  const submissionData = {
    answers: answers.value,
    contactInfo: contactInfo.value,
    timestamp: new Date().toISOString()
  }

  try {
    // Замените на ваш реальный API endpoint
    const response = await axios.post(
        '/send_quiz', submissionData)

    if (response.status === 200) {
      submissionStatus.value = 'success'
    } else {
      submissionStatus.value = 'error'
    }

  } catch (error) {
    console.error('Ошибка при отправке опроса:', error)
    submissionStatus.value = 'error'
  }
}

const resetSubmission = () => {
  submissionStatus.value = null
  showContactForm.value = false
  currentStep.value = 1
}
</script>
