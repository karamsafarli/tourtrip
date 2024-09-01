<template>
    <div class="faq_item">
        <div class="question" :class="isOrange ? 'question_orange':'question_blue'" @click="toggle">
            <div class="faq_icon" v-if="isOrange">
                <i v-if="isOpen" class="fa-solid fa-minus"></i>
                <i v-else class="fa-solid fa-plus"></i>
            </div>
            <div class="faq_question">{{ question }}</div>
        </div>
        <div class="faq_answer_wrapper" :class="isOpen && 'opened'">
            <div class="answer" v-if="answer">
                {{ answer }}
            </div>
            <div class="answer" v-else>
                <slot></slot>
            </div>
        </div>
       
    </div>
</template>


<style lang="scss" scoped>
.faq_item {
    margin-bottom: 10px;
    width: 100%;

    .question {
        padding: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        user-select: none;

         @media (max-width: 768px) {
            font-size: 12px;
        }
    }


    .faq_answer_wrapper {
        display: grid;
        overflow: hidden;
        grid-template-rows: 0fr;
        transition: .3s ease-in-out;

        .answer {
            transition: .3s ease-in-out;
            min-height: 0;
            padding: 0 20px;

            @media (max-width: 768px) {
                font-size: 12px;
            }
        }
    }

    
    .question_orange {
        background-color: #FB4D00;
        color: #fff;
    }
    .question_blue {
        background-color: #E2DCFF;

        .faq_question {
            color: #222;
        }
    }
}

.opened {
    grid-template-rows: 1fr !important;

    .answer {
        padding: 20px !important;
    }
}
</style>


<script>
export default {
    name: 'FaqItem',
    props: {
        question: String,
        answer: String,
        isOrange: Boolean
    },
    data() {
        return {
            isOpen: false
        }
    },
    methods: {
        toggle() {
            this.isOpen = !this.isOpen
        }
    }
}
</script>