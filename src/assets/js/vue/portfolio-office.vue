<template>
    <div>
        <div class="portfolio__list">
            <a @click="CategoryName = 'Все'">Все</a>
            <a @click="CategoryName = 'Бары'">Бары</a>
            <a @click="CategoryName = 'Гостинницы'">Гостинницы</a>
            <a @click="CategoryName = 'Офисы'">Офисы</a>
            <a @click="CategoryName = 'Рестораны'">Рестораны</a>
            <a @click="CategoryName = 'Салоны красоты'">Салоны красоты</a>
        </div>
        <div class="row">
            <div
                class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                v-for="item in items"
                :key="item.id"
                v-if="(item.category).includes(CategoryName)"
            >
                {{item.id}}<br>
                {{item.name}}<br>
                {{item.category}}
            </div>
        </div>
    </div>
</template>

<script>

    module.exports = {
        data: function () {
            return {
                CategoryName: 'Все',
            }
        },
        computed: {
            items: function () {
                var Portfolio = [
                    {
                        id: '1',
                        name: 'Портфолио 1',
                        category: ['Все', 'Гостинницы','Рестораны'],
                    },
                    {
                        id: '2',
                        name: 'Портфолио 2',
                        category: ['Все', 'Гостинницы','Офисы'],
                    },
                    {
                        id: '3',
                        name: 'Портфолио 3',
                        category: ['Все', 'Салоны красоты','Рестораны'],
                    },
                    {
                        id: '4',
                        name: 'Портфолио 4',
                        category: ['Все', 'Гостинницы','Офисы'],
                    },
                    {
                        id: '5',
                        name: 'Портфолио 5',
                        category: ['Все', 'Бары','Офисы'],
                    },
                ]
                return Portfolio
            }
        }
    }

</script>

<style scoped lang="scss">

    @import "../../sass/core/variables";

    .portfolio__list {
        padding: 0;
        list-style: none;
        max-width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
        text-align: center;
        a {
            display: inline-block;
            font-size: 18px;
            margin: 5px;
            padding: 5px 10px;
            color: $color_bk;
            border: none;
            cursor: pointer;
            &:hover {
                color: $color_pr;
                background: none;
            }
        }
    }

</style>
