<template>
   <div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <section class="list">
                <input type="text" lazy class="form-control col-md-7 col-xs-12" :name="name" v-model="keywords" placeholder="Digite para pesquisar">
                <input type="hidden" :name="value" v-model="keywordsId">
                <header>Campistas</header>
                <draggable class="drag-area" :list="campers" :options="{animation:200, group:'status'}" :data-id-board="'campers'" :element="'article'" @add="onAdd($event, true)"  @change="update">
                    <article class="card" v-for="(camper, index) in campers" :key="camper.id" :data-id="camper.id">
                        <header>
                            {{ camper.name }}
                        </header>
                    </article>
                </draggable>  
            </section>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <section class="list">
                <header>Time</header>
                <draggable class="drag-area"  :list="members" :options="{animation:200, group:'status'}" :element="'article'" @add="onAdd($event, true)"  @change="update">
                    <article class="card" v-for="(member, index) in members" :key="member.id" :data-id="member.id">
                        <header>
                            {{ member.name }}
                        </header>
                    </article>
                </draggable>
            </section>
        </div>
   </div>
</template>

<script>
    function debounce(fn, delay) {
        var timeoutID = null;
        return function() {
            clearTimeout(timeoutID);
            var args = arguments;
            var that = this;
            timeoutID = setTimeout(function() {
                fn.apply(that, args);
            }, delay);
        };
    };
    import draggable from 'vuedraggable'
    export default {
        components: {
            draggable
        },
        data (){
            return {
                campers: [], 
                members: [],
                keywords: null,
            }
        },
        watch: {
            keywords: debounce(function (newVal) {
                    this.fetch()
            }, 400)
        },
        methods: {
            BuildCamperList(value, index, ar)
            {
                this.campers.push({ id: value['id'], name: value['name'] })
            },
            getPeople()
            {
                this.campers = []
                this.$http.get('/api/pessoas')
                .then((response) => {
                    response.data.forEach(this.BuildCamperList)
                }) 
            },
            onAdd(event, status) {
                let id = event.item.getAttribute('data-id')
                let board = event.
                console.log(board)
                console.log(id)
                /*
                axios.patch('/demos/tasks/' + id, {
                    status: status
                }).then((response) => {
                    console.log(response.data);
                }).catch((error) => {
                    console.log(error);
                })
                */
            },
            fetch() 
            {
                if(this.keywords.length > 0)
                {
                    this.campers = [];
                    this.$http.get('/api/pessoas/pesquisar', { params: { keywords: this.keywords } })
                        .then(response => {
                            response.data.forEach(this.BuildCamperList)
                        })
                    .catch(error => {})
                }
                else
                    this.getPeople()
            }
        },
        created (){
            this.getPeople()
        }
       
    }
</script>

<style scoped>
    .list {
      background-color: #08635b;
      border-radius: 3px;
      margin: 5px 5px;
      padding: 10px;
      width: 100%;
      height: 400px;
      scroll-behavior: auto;
    }
    .list>header {
      font-weight: bold;
      color: rgb(255, 255, 255);
      text-align: center;
      font-size: 20px;
      line-height: 28px;
      cursor: grab;
    }
    .list article {
      border-radius: 3px;
      margin-top: 10px;
    }

    .list .card {
      background-color: #FFF;
      border-bottom: 1px solid #CCC;
      padding: 15px 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bolder;
    }
    .list .card:hover {
      background-color: #F0F0F0;
    }
    .drag-area{
     min-height: 10px;  
     height: 400px;
    }

</style>