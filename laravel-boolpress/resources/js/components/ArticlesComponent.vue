<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for= "article in articles" > 
                    <div class="card-header">{{ article.title }}</div>

                    <div class="card-body">
                        {{ article.body }}
                    </div>

                    <div class="card-footer">
                        <span> {{ new Date(article.created_at).toLocaleString('it') }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                articles: ""            }
        },

        mounted() {
            console.log('Component mounted.');
            axios.get('api/articles').then(response => {
                console.log(response.data.data);
                this.articles = response.data.data
            }).catch(error=> {
                console.log(error)
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 30px 0px;
    }
</style>