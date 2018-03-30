<template>
    <div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Anjo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">   
                <input type="text" lazy class="form-control col-md-7 col-xs-12" v-model="keywords">
                    <ul class="left list-group" style="width:100%; max-height:100px; overflow-y:auto;" v-if="results.length > 0">
                        <li v-on:click="pick(result.name)" class="list-group-item" v-for="result in results" :key="result.id" v-text="result.name"></li>
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

export default {
    data() {        
        return {
            keywords: null,
            results: [],
        };
    },

    watch: {
        keywords(after, before) {
            this.fetch();
        },
        keywords: debounce(function (newVal) {
            this.fetch();
        }, 300)
    },

    methods: {
        fetch() 
        {
                this.$http.get('/api/voluntario/pesquisar', { params: { keywords: this.keywords } })
                    .then(response => this.results = response.data)
                    .catch(error => {});
        },
        pick(item)
        {
            this.keywords = item;
            this.results = [];
        }
    }
}
</script>