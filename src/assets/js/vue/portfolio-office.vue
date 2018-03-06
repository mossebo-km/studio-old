<template>
    <div>
        <div class="page-interior-design-portfolio__title">Портфолио</div>
        <div class="page-interior-design-portfolio__style">
            <a @click="CategoryName = 'Все'">Все</a>
            <a @click="CategoryName = 'Бары'">Бары</a>
            <a @click="CategoryName = 'Гостинницы'">Гостинницы</a>
            <a @click="CategoryName = 'Офисы'">Офисы</a>
            <a @click="CategoryName = 'Рестораны'">Рестораны</a>
            <a @click="CategoryName = 'Салоны красоты'">Салоны красоты</a>
        </div>
    </div>
</template>

<script>
module.exports = {
    data: function () {
        return {
            CategoryName: 'Все'
        }
    }
}
</script>

<style scoped>

</style>
