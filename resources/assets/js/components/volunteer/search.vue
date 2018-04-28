<template>
    <div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Anjo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" lazy class="form-control col-md-7 col-xs-12" :name="name" v-model="keywords" placeholder="Digite para pesquisar">
                <input type="hidden" :name="value" v-model="keywordsId">
                <ul class="left list-group" style="width:100%; max-height:100px; overflow-y:auto;" v-if="results.length > 0">
                    <li v-on:click="pick(result)" class="list-group-item" v-for="result in results" :key="result.id" v-text="result.name"></li>
                </ul>
            </div>
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
export default 
{
    props:
    [
        'name',
        'value'
    ],
    data() {        
        return {
            keywords: null,
            keywordsId: null,
            results: [],
            picked: false
        };
    },
    watch: {
        keywords: debounce(function (newVal) {
            if(this.picked == false)
                this.fetch()
            else
                this.picked = false
        }, 400)
    },
    methods: {
        fetch() 
        {
            this.$http.get('/api/pessoas/pesquisar', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        },
        pick(item)
        {
            this.keywords = item.name
            this.keywordsId = item.id
            this.results = []
            this.picked = true
        }
    },
    computed: {
    }
}
</script>