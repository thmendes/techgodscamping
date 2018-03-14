<template>
    <div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="document">Documento</label>
            <div class="col-md-4 col-sm-6 col-xs-12 left">
                <div class="input-group">
                    <input type="text" name="document" v-model="document" class="form-control">
                    <span class="input-group-btn">
                        <a href="#" @click="getByDocument()"><button type="button" class="btn btn-primary">Verificar</button></a>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name" name="name" v-model="name" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">E-mail</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" v-model="email" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="phone">Telefone</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" id="phone" name="phone" v-model="phone" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="born">Data Nascimento</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="date" id="born" name="born" value="2001-01-01" v-model="born" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="street">Endereço</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="street" name="street" v-model="street" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="city">Cidade</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="city" name="city" v-model="city" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="province">Estado</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="province" name="province" v-model="province" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="parent">Responsável</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="parent" name="parent" v-model="parent" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="parent_phone">Responsável - Telefone</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" id="parent_phone" name="parent_phone" v-model="parent_phone" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="medicine">Medicamentos</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="medicine" name="medicine" v-model="medicine" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="shirt">Camiseta</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <select v-model="shirt" class="form-control" name="shirt">
                    <option value="">Selecione</option>
                    <option value="PP">PP</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                    <option value="XG">XG</option>
                    <option value="XGG">XGG</option>
                </select>
            </div> 
        </div>
    </div>
</template>

<script>
    export default {
        data (){
            return {
                document: '',
                name: '',
                email: '',
                phone: '',
                born: '',
                street: '',
                city: '',
                province: '',
                parent: '',
                parent_phone: '',
                medicine: '',
                shirt: ''
            }
        },

        methods: {
            getByDocument()
            {
                this.$http.get('/api/voluntario/' + this.document).then((response) => {
                    this.document = response.data[0]['document']
                    this.name = response.data[0]['name']
                    this.email = response.data[0]['email']
                    this.phone = response.data[0]['phone']
                    this.born = response.data[0]['born']
                    this.street = response.data[0]['street']
                    this.city = response.data[0]['city']
                    this.province = response.data[0]['province']
                    this.parent = response.data[0]['parent']
                    this.parent_phone = response.data[0]['parent_phone']
                    this.medicine = response.data[0]['medicine']
                    this.shirt = response.data[0]['shirt']
                })
            }
        }
    }
</script>

<style scoped>

</style>